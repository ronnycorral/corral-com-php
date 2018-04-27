<?php
$server =  explode(".",$_SERVER['HTTP_HOST']);
$domain = $server[(count($server)-2)];
?>
<!doctype html>
<html lang="en">
<head>
  <title>Ron Corral - <?php echo $domain; ?>.com</title>
  <link href="/css/stylesheet.css" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffc40d">
  <meta name="theme-color" content="#ffffff">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
</head>
<body>

<div class="searcharea cf">
   <form action="/searchsite.php" method="post">
      <input type="text" name="q" class="searchbox" placeholder="Search my website..."/>
      <input class="searchimage" type="image" name="submit" src="/images/search.png" height="32" width="32" alt="Search" />
   </form>
</div>
<div class="homeicons">
<ul class="iconrowul">
   <li><img class="roundcorner" src=/images/ronicon.png height=64 width=64><p>Ron Corral</p>
</ul>
</div>

<div class="icongroup">
   <div class="homeicons cf">
      <ul class="iconrowul">
         <?php
            $comment_data = file_get_contents("/var/www/cdfiles/". $domain. "/randcd.txt", true);
            echo $comment_data;
         ?>
      </ul>
   </div>

   <hr class="hrline">

   <div class="homeicons">
      <ul class="iconrowul">
            <li><a href="https://twitter.com/ronny_corral"><img class="roundcorner" height="64" width="64" alt="Twitter" title="Twitter" src="/images/twitter.png"></a>
            <li><a href=https://www.goodreads.com/user/show/12973438-ronny><img height=64 width=64 alt="Goodreads" title="Goodreads" src=/images/goodreads.png></a>
            <li><a href=/cdcoll.php><img class="roundcorner" src=/images/cdshelf.jpg height=64 width=64 alt="CD Collection" title="CD Collection"></a>
            <li><a href=/stbooks.php><img class="roundcorner" src=/images/stshelf.jpg height=64 width=64 alt="Star Trek Book Reading Status" title="Star Trek Book Reading Status"></a>
            <li><a href=/charts.php><img class="roundcorner" src=/images/artistcount.png height=64 width=64 alt="Statistics for the site" title="Statistics for the site"></a>
            <li><a href=/colophon.php><img class="roundcorner" src=/images/colophon.jpg height=64 width=64 alt="Colophon - What's going on in the background" title="Colophon - What's going on in the background"></a>
      </ul>
   </div>
</div>
</body></html>
