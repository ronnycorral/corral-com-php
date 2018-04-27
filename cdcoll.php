<?php
$server =  explode(".",$_SERVER['HTTP_HOST']);
$domain = $server[(count($server)-2)];

if (isset($_GET["artist_id"])){
   $artist_id = $_GET['artist_id'];
} else {
   $artist_id = "";
}

if (preg_match('/\D/', $artist_id)) {
   header('HTTP/1.1 404 Not Found');
   include 'errcdrequest.php';
   exit;
}

// this is here because swish doesn't do AJAX so I need to populate page with PHP for index building
$artist_div_info = "";
$cd_div_info = "";

if (isset($_GET["artist_id"])){
   $url = "http://" . $domain . ".com/api/artistinfo.php?artist_id=" . $artist_id;
   $response = file_get_contents($url);
   $artist_info = json_decode($response, true);
   if ($artist_info['artist'] == "") {
      header('HTTP/1.1 404 Not Found');
      include 'errcdnoartist.php';
      exit;
   }

   $artist_div_info .= '<div class="bandnameheading"><h2 class="bandtitle">' . htmlspecialchars($artist_info['artist']) . '</h2></div>';
   if ($artist_info['comment_file'])
   {
      $artist_div_info .= '<div class="artistcomment">';
      $artist_div_info .= $artist_info['comment_file'];
      $artist_div_info .= '<hr>';
      $artist_div_info .= '</div>';
   }

   $url = "http://" . $domain . ".com/api/cdinfo.php?artist_id=" . $artist_id;
   $response = file_get_contents($url);
   $cd_info = json_decode($response, true);

   for($i = 0; $i < count($cd_info); $i++) {
        $cd_div_info .= '<div class="cf cd">';
        $cd_div_info .= '<img class="cdcover" src="/images/covers/' . substr($cd_info[$i]['cover'],0,1) . '/' . $cd_info[$i]['cover'] . '" height=64 width=64 alt="' . htmlspecialchars($cd_info[$i]['title']) . '" title="' . htmlspecialchars($cd_info[$i]['title']) . '">';
        $cd_div_info .= '<ul class="cdinfo"><li><b>Title:</b> ' . htmlspecialchars($cd_info[$i]['title']) . '</li>';
        if ($cd_info[$i]['label'] != "") {
           $cd_div_info .= '<ul class="cdinfo"><li><b>Label:</b> ' . htmlspecialchars($cd_info[$i]['label']) . '</li>';
        }
        if ($cd_info[$i]['notes'] != "") {
           $cd_div_info .= '<ul class="cdinfo"><li><b>Notes:</b> ' . htmlspecialchars($cd_info[$i]['notes']) . '</li>';
        }
        $cd_div_info .= '</ul>';
        $cd_div_info .= '</div>';
        $cd_div_info .= '<hr class="hrline">';
   }


}

$artist_title = isset($artist_info['artist']) ? " - " . htmlentities($artist_info['artist']) : "" ;


?>
<!doctype html>
<html class="overflow" lang="en">
<head>
  <title>Ron Corral's CD Collection<?php echo $artist_title ?></title>
  <link href="/css/jquery-ui.min.css" rel="stylesheet">
  <link href="/css/stylesheet.css" rel="stylesheet">
  <script type="text/javascript" src="/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffc40d">
  <meta name="theme-color" content="#ffffff">
  <meta charset="UTF-8">
  <meta name=viewport content="width=device-width, initial-scale=1">
<script>
$(function(){
    $('select').combobox();
});

/* 
    Combobox widget 
    - taken from http://jqueryui.com/autocomplete/#combobox
    - added support for
      - default option
      - combo uses width of original select
      - autoFocus
    - removed
      - tooltips
      - setting value to "" if invalid (instead sets to default)
*/
(function ($) {
        $.widget("ui.combobox", {
            _create: function () {
                var input,
                  that = this,
                  wasOpen = false,
                  select = this.element.hide(),
                  selected = select.children(":selected"),
                  defaultValue = selected.text() || "",
                  wrapper = this.wrapper = $("<span>")
                    .addClass("ui-combobox")
                    .insertAfter(select);

                function removeIfInvalid(element) {
                    var value = $(element).val(),
                      matcher = new RegExp("^" + $.ui.autocomplete.escapeRegex(value) + "$", "i"),
                      valid = false;
                    select.children("option").each(function () {
                        if ($(this).text().match(matcher)) {
                            this.selected = valid = true;
                            return false;
                        }
                    });

                    if (!valid) {
                        // remove invalid value, as it didn't match anything
                        $(element).val(defaultValue);
                        select.val(defaultValue);
                        input.data("ui-autocomplete").term = "";
                    }
                }

                input = $("<input>")
                  .appendTo(wrapper)
                  .val(defaultValue)
                  .attr("title", "")
                  .addClass("ui-state-default ui-combobox-input")
                  .width(select.width())
                  .autocomplete({
                      delay: 0,
                      minLength: 0,
                      autoFocus: true,
                      source: function (request, response) {
                          var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), "i");
                          response(select.children("option").map(function () {
                              var text = $(this).text();
                              if (this.value && (!request.term || matcher.test(text)))
                                  return {
                                      label: text.replace(
                                        new RegExp(
                                          "(?![^&;]+;)(?!<[^<>]*)(" +
                                          $.ui.autocomplete.escapeRegex(request.term) +
                                          ")(?![^<>]*>)(?![^&;]+;)", "gi"
                                        ), "<strong>$1<\/strong>"),
                                      value: text,
                                      option: this
                                  };
                          }));
                      },
                      select: function (event, ui) {
                          ui.item.option.selected = true;
                          that._trigger("selected", event, {
                              item: ui.item.option
                          });
                      },
                      change: function (event, ui) {
                          if (!ui.item) {
                              removeIfInvalid(this);
                          }
                      }
                  })
                  .addClass("ui-widget ui-widget-content ui-corner-left");

                input.data("ui-autocomplete")._renderItem = function (ul, item) {
                    return $("<li>")
                      .append("<a>" + item.label + "<\/a>")
                      .appendTo(ul);
                };

                $("<a>")
                  .attr("tabIndex", -1)
                  .appendTo(wrapper)
                  .button({
                      icons: {
                          primary: "ui-icon-triangle-1-s"
                      },
                      text: false
                  })
                  .removeClass("ui-corner-all")
                  .addClass("ui-corner-right ui-combobox-toggle")
                  .mousedown(function () {
                      wasOpen = input.autocomplete("widget").is(":visible");
                  })
                  .click(function () {
                      input.focus();

                      // close if already visible
                      if (wasOpen) {
                          return;
                      }

                      // pass empty string as value to search for, displaying all results
                      input.autocomplete("search", "");
                  });
            },

            _destroy: function () {
                this.wrapper.remove();
                this.element.show();
            }
        });
    })(jQuery);
</script>
</head>
<body<?php //if ($artist_id) { //echo " onload=\"getArtistData(".$artist_id.",'".$domain."')\""; //} ?>>
<h1 class="headingcenter">My CD Collection</h1>

<div class="cdheaderrow cf">

<div class="cdheaderleft">
<h3>Browse through my CD collection</h3>

<div class="cdheaderleft rightpadding">
<img src="/images/covers/favcovers.gif" alt="Favorite CD covers" width=64 height=64 class="roundcorner">
</div>
<div class="cdheaderright">
Select an artist to view or just start typing:
<form name=getArtist method=get id="myform" onsubmit="return getArtistData(artist_id.value,'<?php echo $domain ?>')">
<SELECT NAME="artist_id" SIZE=1>
<!-- SwishCommand noindex -->
<?php

$memcache = new Memcache;
$memcache->connect('localhost', 11211);

$artlistmemcacheinfo = $memcache->get("mainartistlist");

if($artlistmemcacheinfo === false){
#   echo "<option>not found in cache";
   $dbc = mysqli_connect('localhost', ini_get("mysqli.default_user"), ini_get("mysqli.default_pw"), ini_get("mysqli.default_host"))
      or die('error connecting');

   $query = "SELECT artist,artist_id FROM cdartist ORDER BY artist";
   $result = mysqli_query($dbc, $query);
   while($row = mysqli_fetch_array($result)) {
      $artlistmemcacheinfo[] = $row;
   }
   mysqli_close($dbc);
   $memcache->set("mainartistlist",$artlistmemcacheinfo,0,600);
}

foreach($artlistmemcacheinfo as $i => $row) {

   if (strcmp($row['artist_id'],$artist_id) == 0) {
      $selected = " selected";
   } elseif (isset($_COOKIE['artist_id']) && $artist_id == "" && $row['artist_id'] == $_COOKIE["artist_id"]) {
      $selected = " selected";
   } else {
      $selected = "";
   }

   echo "<option VALUE=".$row['artist_id'].$selected.">" . htmlentities($row['artist']) ."\n";
}

?>
<!-- SwishCommand index -->
</SELECT>
<input type="image" alt="Submit" src="/images/playcd.png" class="playbutton" width=30 height=30>

</form>
</div>
</div>

<div class="menuicons homeicons cf">
<!-- SwishCommand noindex -->
<h3>Here's what's new</h3>
<ul class="iconrowul">
<?php
   $comment_data = file_get_contents("/var/www/cdfiles/". $domain. "/whatsnewcd.txt", true);
   echo $comment_data;
?>
<li><a href="/"><img class="roundcorner" alt="Home" title="Home" height="64" width="64" src='/images/home.png'></a></li>
</ul>
<!-- SwishCommand index -->
</div>
</div>

<div id="artistDiv"><?php echo $artist_div_info; ?></div>
<div id="cdDiv"><?php echo $cd_div_info; ?></div>
</body></html>
