<?php
$artist_id = $_GET['artist_id'];

if (preg_match('/\D/', $artist_id)) {
   header('HTTP/1.1 404 Not Found');
   include 'errcdrequest.php';
   exit;
}

$server =  explode(".",$_SERVER['HTTP_HOST']);
$domain = $server[(count($server)-2)];
require_once ('/var/www/' . $domain . '/include/functions.php');

# just a precaution, should have been dealt with earlier
$artist_id = preg_replace("/[\D]/", "", $artist_id);

$memcache = new Memcache;
$memcache->connect('localhost', 11211);

$titlememcacheinfo=$memcache->get("title_".$artist_id);
$bandmemcacheinfo=$memcache->get("band_".$artist_id);

# if data isn't in cache, get it from DB and put it in cache

# i'm being lazy and assuming if artist info isn't in cache the
# titles by that artist aren't there either.
if(($bandmemcacheinfo === false) or ($titlememcacheinfo === false)){
#   echo "not found in memcache";
   $dbc = mysqli_connect('localhost', ini_get("mysqli.default_user"), ini_get("mysqli.default_pw"), ini_get("mysqli.default_host"))
      or die('error connecting');

   $artist_query = "SELECT * FROM cdartist WHERE artist_id = \"". $artist_id . "\"";
   $artist_result = mysqli_query($dbc, $artist_query);
   if (!mysqli_num_rows($artist_result)) {
      header('HTTP/1.1 404 Not Found');
      include 'errcdnoartist.php';
      exit;
   }
   $bandmemcacheinfo = mysqli_fetch_array($artist_result);
   $memcache->set("band_".$artist_id,$bandmemcacheinfo,0,600);

   $title_query = "SELECT * FROM cdtitle WHERE artist_id = ". $artist_id . " ORDER BY title";
   $title_result = mysqli_query($dbc, $title_query);
   while($title_row = mysqli_fetch_array($title_result)) {
      $titlememcacheinfo[] = $title_row;
   }
   $memcache->set("title_".$artist_id,$titlememcacheinfo,0,600);
   mysqli_close($dbc);
}
   #var_dump($bandmemcacheinfo);
   $artist = $bandmemcacheinfo['artist'];
   $count_url = $bandmemcacheinfo['count_url'];
   $logo_file = $bandmemcacheinfo['logo_file'];
   $logo_height = $bandmemcacheinfo['logo_height'];
   $logo_width = $bandmemcacheinfo['logo_width'];
   $title_url = $bandmemcacheinfo['title_url'];
   $comment_file = $bandmemcacheinfo['comment_file'];
   $name_action = $bandmemcacheinfo['name_action'];

   $title_count = count($titlememcacheinfo);

   $printable_name = modifyArtistName($artist,$name_action);


$cdcount = 0;

#while($title_row = mysqli_fetch_array($title_result)) {
foreach($titlememcacheinfo as $i => $row) {
   $title = $row['title'];
   $label = $row['label'];
   $notes = $row['notes'];
   $cover = $row['cover_file'];
   $alt_cover = $row['alt_cover_file'];

   $cd_info[$cdcount] = array(
      "title"=>$title,
      "label"=>$label,
      "notes"=>$notes,
      "cover"=>$cover,
      "alt_cover"=>$alt_cover
   );
   $cdcount += 1;

}

header('Content-Type: application/json');
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
echo json_encode($cd_info);

?>
