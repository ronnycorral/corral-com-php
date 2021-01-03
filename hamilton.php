<?php
$server =  explode(".",$_SERVER['HTTP_HOST']);
$domain = $server[(count($server)-2)];
?>
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
   <meta property="og:type" content="website">
   <meta property="og:site_name" content="Ron Corral">
   <meta property="og:title" content="Ron Corral's Hamilton Lottery Results">
   <meta property="og:image" content="http://<?php echo $domain; ?>.com/images/hamiltonpage.png">
   <meta property="og:description" content="My wife and I both play the Hamilton Lottery and one of us is way better than the other. Find out which one.">
   <meta property="og:url" content="https://<?php echo $domain; ?>.com/">
   <meta name="twitter:site" content="@corral">
   <meta name="twitter:card" content="summary">
   <meta name="twitter:title" content="Ron Corral's Hamilton Lottery Results">
   <meta name="twitter:description" content="My wife and I both play the Hamilton Lottery and one of us is way better than the other. Find out which one.">
   <meta name="twitter:image" content="http://<?php echo $domain; ?>.com/images/hamiltonpage.png">
   <script type="text/javascript">
thewinners= [
'Ron','Claudia'
];
ticketdates = [[ [Date.UTC(2019, 8, 3), 3], [Date.UTC(2019, 8, 15), 3], [Date.UTC(2019, 11, 4), 3], [Date.UTC(2019, 11, 10), 3] ], [[Date.UTC(2019, 6, 28), 2 ], [Date.UTC(2020, 2, 3), 2] ] ]

winningcount= [
{y: 4,url: ''},{y: 2,url: ''}
];
            percentagewins= [
               ['Ron',4],
               ['Claudia',2]
            ];
         </script>
</head>
<body onload="drawPieChart('sitecharts', percentagewins,'Percentage of Times Each of Us Has Won','Winning Percentage');">

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
      <li><img class="roundcorner imagepointer" src='/images/bars.png' height=64 width=64 alt="How Many Times We Won" title="How Many Times We Won" onclick="drawBarChartUrls('sitecharts', thewinners,winningcount,'How Many Times We Won','How Many Times Each Of Us Has Won')"></li>
      <li><img class="roundcorner imagepointer" src='/images/pie.png' height=64 width=64 alt="Percentage of Times Each of Us Has Won" title="Percentage of Times Each of Us Has Won" onclick="drawPieChart('sitecharts', percentagewins,'Percentage of Times Each of Us Has Won','Winning Percentage')"></li>
      <li><img class="roundcorner imagepointer" src='/images/lines.png' height=64 width=64 alt="When we won" title="When we won" onclick="drawLineOverLine('sitecharts','When We Won the Hamilton Lottery',thewinners,ticketdates)"></li>
      </ul>
   </div>
</div>

<div id="sitecharts" class="sitecharts"></div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/maps/modules/map.js"></script>
<script src="https://code.highcharts.com/mapdata/custom/world.js"></script>
<script src="/js/charts.js"></script>
</body>
</html>
