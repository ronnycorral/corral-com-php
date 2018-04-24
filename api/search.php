<?php
header('Content-Type: application/json');
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

$searchrequest = $_GET['q'];
$server =  explode(".",$_SERVER['HTTP_HOST']);
$domain = $server[(count($server)-2)];

if (isset($_GET['q'])) {
    try {
      // create object
      $swish = new Swish('/var/www/swish/' . $domain . '/index.swish-e');

      // get and run query from command-line
      $queryStr = htmlentities($_GET['q']);
      $result = $swish->query($queryStr);
    } catch (Exception $e) {
      die('ERROR: ' . $e->getMessage());
    }
} else {
   echo "No search requests entered";
   exit;
}

$resultscount = 0;
while($r = $result->nextResult()) {

   $searchresults[$resultscount] = array(
      "path"=>$r->swishdocpath,
      "title"=>$r->swishtitle,
      "rank"=>$r->swishrank
   );
   $resultscount++;
}

echo json_encode($searchresults);
?>
