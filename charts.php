<?php
$server =  explode(".",$_SERVER['HTTP_HOST']);
$domain = $server[(count($server)-2)];
include ('/var/www/' . $domain . '/include/functions.php');

$dbc = mysqli_connect('localhost', ini_get("mysqli.default_user"), ini_get("mysqli.default_pw"), ini_get("mysqli.default_host"))
      or die('error connecting');
$loopcount = 0;
$countrycodearray = "countrycodecount= [";
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Statistics for Ron Corral's Websites</title>
        <link href="css/stylesheet.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#ffc40d">
        <meta name="theme-color" content="#ffffff">
        <meta name=viewport content="width=device-width, initial-scale=1">
<!--
        <meta name=viewport content="width=device-width, initial-scale=1">
-->
        <script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript">
<?php
$query = "select countryCode, count(*) as codecount from logdata   group by countryCode";
   $result = mysqli_query($dbc, $query);
   while($row = mysqli_fetch_array($result)) {
      $countrycodearray .= ($loopcount > 0 ? "," : "") . "{";
      $countrycodearray .= "\"hc-key\": \"" . strtolower($row['countryCode']) . "\"," ;
      $countrycodearray .= "\"value\": " . $row['codecount'] ;
      $countrycodearray .= "}";
      $loopcount += 1;
   }
$countrycodearray .= "];\n";
echo $countrycodearray;

$loopcount = 0;
$artistcdarray = "artistscdcount= [\n";
$cdcountarray = "cdcount= [\n";

$query = "select cdartist.artist, count(*) as cdcount, cdartist.artist_id as myartist, cdartist.name_action from cdartist inner join cdtitle on cdartist.artist_id = cdtitle.artist_id where cdartist.artist != 'Compilations' group by cdtitle.artist_id, cdartist.artist order by cdcount desc limit 15";
$result = mysqli_query($dbc, $query);
while($row = mysqli_fetch_array($result)) {
   $cdcountarray .= ($loopcount > 0 ? "," : "") . "{y: " . $row['cdcount'] . ",url: '/cdcoll.php?artist_id=" . $row['myartist'] . "'}";
   $artistcdarray .= ($loopcount  > 0 ? "," : "") . "'" . modifyArtistName($row['artist'], $row['name_action']) . "'";
   $loopcount += 1;
}

$artistcdarray .= "\n];\n";
$cdcountarray .= "\n];\n";

echo $artistcdarray;
echo $cdcountarray;

$loopcount = 0;

$artistvisitarray = "artistsvisitcount= [\n";
$visitcountarray = "visitcount= [\n";

$query = "select count(*) as requestcount, cdartist.artist_id , cdartist.artist, cdartist.name_action from logdata inner join cdartist where  request like '/cdcoll.php?artist_id=%' and substr(request,instr(request,'=') +1)  = cdartist.artist_id or request like '/api/cdinfo.php?artist_id=%' and substr(request,instr(request,'=') +1)  = cdartist.artist_id group by artist order by requestcount desc limit 15;";
$result = mysqli_query($dbc, $query);
while($row = mysqli_fetch_array($result)) {
   $visitcountarray .= ($loopcount > 0 ? "," : "") . "{y: " . $row['requestcount'] . ",url: '/cdcoll.php?artist_id=" . $row['artist_id'] . "'}";
   $artistvisitarray .= ($loopcount  > 0 ? "," : "") . "'" . modifyArtistName($row['artist'], $row['name_action']) . "'";
   $loopcount += 1;
}

$artistvisitarray .= "\n];\n";
$visitcountarray .= "\n];\n";

echo $artistvisitarray;
echo $visitcountarray;

$query = "select count(*) as count from logdata where (request rlike '/cdcoll.php\\\?artist_id=[0-9]+$')";
$result = mysqli_query($dbc, $query);
while($row = mysqli_fetch_array($result)) {
   $validattempts = $row['count'];
}

$query = "select count(*) as count from logdata where (request rlike '/cdcoll.php[?]artist_id=')";
$result = mysqli_query($dbc, $query);
while($row = mysqli_fetch_array($result)) {
   $totalrequests = $row['count'];
}
$injectionattempts = $totalrequests - $validattempts;
mysqli_close($dbc);
?>
            sqlattempts= [
               ['Valid Requests',<?php print $validattempts; ?>],
               ['SQL Injection Attempts',<?php print $injectionattempts; ?>]
            ];
         </script>
</head>
<body>

<h1 class="headingcenter">Statistics For The Site</h1>

<div class="cdheaderrow cf">

   <div class="menuicons homeicons cf">
      <ul class="iconrowul">
      <li><a href="/"><img class="roundcorner" onclick="eraseChart('sitecharts');" alt="Home" title="Home" height=64 width=64 src='/images/home.png'></a></li>
      </ul>
   </div>

   <div class="hideoverflow">
      <div class="cdheaderleft">
         <ul class="iconrowul">
         <li><img class="roundcorner" src=/images/artistcount.png height=64 width=64 alt="">
         </ul>
      </div>
      <div>
      <p>Click one of the graphs to see charts for some stats for the site. My favorite is the pie chart comparing the number of valid requests to the CD collection page versus apparent SQL injection attempts. The number used to be much higher but that was before I discovered a bug in my Apache log parsing script. Indentation is everything in Python you know.</p>
      </div>
   </div>
</div>

<div class="cdheaderrow cf">
 <div class="menuicons homeicons  cf">
      <ul class="iconrowul">
      <li><img class="roundcorner imagepointer" src='/images/visitormap.png' height=64 width=64 alt="Where my visitors come from" title="Where my visitors come from" onclick="drawVisitorMap('sitecharts', countrycodecount)"></li>
      <li><img class="roundcorner imagepointer" src='/images/artistcount.png' height=64 width=64 alt="Top artists by CD count" title="Top artists by CD count" onclick="drawBarChartUrls('sitecharts', artistscdcount,cdcount,'Top 15 Artists by CD Count','Number of CDs')"></li>
      <li><img class="roundcorner imagepointer" src='/images/artistcount.png' height=64 width=64 alt="Most visited artists" title="Most visited artists" onclick="drawBarChartUrls('sitecharts', artistsvisitcount,visitcount,'Top 15 Artists by Visit Count','Number of Visits')"></li>
      <li><img class="roundcorner imagepointer" src='/images/piechart.png' height=64 width=64 alt="Percentage of SQL injection attempts" title="Percentage of SQL injection attempts" onclick="drawPieChart('sitecharts', sqlattempts,'Valid SQL Calls vs. SQL Injection Attempts','SQL calls made')"></li>
<!--
      <li><a href="/"><img class="roundcorner" onclick="eraseChart('sitecharts');" alt="Home" title="Home" height=64 width=64 src='/images/home.png'></a></li>
-->
      </ul>
   </div>
</div>


<div class="sitecharts"></div>
<script src="/js/highcharts.js"></script>
<script src="/js/modules/map.js"></script>
<script src="/js/maps/world.js"></script>
<script src="/js/charts.js"></script>
</body>
</html>
