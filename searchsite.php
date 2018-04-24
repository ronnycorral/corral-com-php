<?PHP
$server =  explode(".",$_SERVER['HTTP_HOST']);
$domain = $server[(count($server)-2)];
if (isset($_POST["q"])){
   $searchResults = $_POST['q'];
} else {
   $searchResults = "";
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Search Results Ron Corral's Site</title>
  <link href="/css/stylesheet.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#ffffff">
  <script type="text/javascript" src="/js/main.js"></script>
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
</head>
<body
<?php
if ($searchResults) {
   echo " onload=\"getSearchResults('".$searchResults."','".$domain."')\"";
} ?>
>

<h1 class="headingcenter">Search Results</h1>
<div class="cdheaderrow cf">
   <div class="menuicons homeicons cf">
      <ul class="iconrowul">
      <li><a href="/"><img height=64 width=64 class="roundcorner" alt="Home" title="Home" src='/images/home.png'></a></li>
      </ul>
   </div>
   <div class="hideoverflow">
      <div class="cdheaderleft">
         <ul class="iconrowul">
         <li><img class="roundcorner" src=/images/search.png height=64 width=64 alt="Search">
         </ul>
      </div>
      <div>
      <p>I'm still working on search. The biggest issue is the official swish-e website doesn't seem to be around anymore so it's probably time to start looking for an alternative. That hasn't been a priority since the only reason I even have a search page is because I want the search box at the top of the home page so it completes the illusion of looking like the screen of my Nexus 7.</p>
      </div>
   </div>
</div>
<br>
<ul>
<div class="smallsearcharea">
<!--
<form action="/searchsite.php" method="post">
-->
<form onsubmit="return getSearchResults(document.getElementById('searchfield').value,'<?PHP echo $domain;?>')">
      <input type="text" name="q" id="searchfield" class="smallsearchbox" placeholder="Search my website..."/>
      <input class="smallsearchimage" type="image" name="submit" src="/images/search.png" height="32" width="32" alt="Search" />
</form>
</div>
</ul>
<br>
<br>
<br>
<div id='searchCount'></div>
<div id='searchDiv'></div>

</body>
</html>
