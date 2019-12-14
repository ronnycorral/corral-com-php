<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>The Hamilton Lottery Results</title>
        <link href="css/stylesheet.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffc40d">
        <meta name="theme-color" content="#ffffff">
        <meta name=viewport content="width=device-width, initial-scale=1">
<!--
        <meta name=viewport content="width=device-width, initial-scale=1">
-->
        <script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript">
artistscdcount= [
'Ron','Claudia'
];
cdcount= [
{y: 4,url: '/cdcoll.php?artist_id=84'},{y: 1,url: '/cdcoll.php?artist_id=46'}
];
            sqlattempts= [
               ['Ron',4],
               ['Claudia',1]
            ];
         </script>
</head>
<body>

<h1 class="headingcenter">Find Out Who Is Better At The Hamilton Lottery</h1>

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
      <p>My wife and I both play the Hamilton lottery but one of us is way better at it than the other. Find out who by clicking on the images below.</p>
      </div>
   </div>
</div>

<div class="cdheaderrow cf">
 <div class="menuicons homeicons  cf">
      <ul class="iconrowul">
      <li><img class="roundcorner imagepointer" src='/images/bars.png' height=64 width=64 alt="How Many Times We Won" title="How Many Times We Won" onclick="drawBarChartUrls('sitecharts', artistscdcount,cdcount,'How Many Times We Won','How Many Times We Won')"></li>
      <li><img class="roundcorner imagepointer" src='/images/pie.png' height=64 width=64 alt="Percentage of Times Each of Us Has Won" title="Percentage of Times Each of Us Has Won" onclick="drawPieChart('sitecharts', sqlattempts,'Percentage of Times Each of Us Has Won','Winning Percentage')"></li>
      <li><img class="roundcorner imagepointer" src='/images/lines.png' height=64 width=64 alt="When we won" title="When we won" onclick="drawHamilton('sitecharts')"></li>
      </ul>
   </div>
</div>


<div class="sitecharts"></div>
<script src="/js/highcharts-hamilton.js"></script>
<script src="/js/hamilton.js"></script>
</body>
</html>
