function validateForm()
{
   var x=document.forms["getArtist"]["artist_id"].value;
   if (x==null || x=="")
   {
      alert("Please select an artist");
      return false;
   }
   return setCookie("artist_id",x,1);
}

function getArtistData(artist_id,domain)
{
   var out = "";
   var artisturl = "http://" + domain + ".com/api/artistinfo.php?artist_id=" + artist_id
   var cdurl = "http://" + domain + ".com/api/cdinfo.php?artist_id=" + artist_id
   var artisthttp,cdhttp;

   if (window.XMLHttpRequest)
     {// code for IE7+, Firefox, Chrome, Opera, Safari
        artisthttp=new XMLHttpRequest();
        cdhttp=new XMLHttpRequest();
     }
   else
     {// code for IE6, IE5
        artisthttp=new ActiveXObject("Microsoft.XMLHTTP");
        cdhttp=new ActiveXObject("Microsoft.XMLHTTP");
     }

   artisthttp.onreadystatechange=function()
     {
        if (artisthttp.readyState==4 && artisthttp.status==200)
          {
             var artistArr = JSON.parse(artisthttp.responseText);
             printArtist(artistArr)
             setCookie("artist_id",artist_id,1);
          }
     }
   artisthttp.open("GET",artisturl,true);
   artisthttp.send();
   cdhttp.onreadystatechange=function()
     {
        if (cdhttp.readyState==4 && cdhttp.status==200)
          {
             var cdArr = JSON.parse(cdhttp.responseText);
             printCD(cdArr)
          }
     }
   cdhttp.open("GET",cdurl,true);
   cdhttp.send();

   return false;
}

function getSearchResults(search_results,domain)
{
   var searchurl = "http://" + domain + ".com/api/search.php?q=" + search_results
   var searchhttp;

   if (window.XMLHttpRequest)
     {// code for IE7+, Firefox, Chrome, Opera, Safari
        searchhttp=new XMLHttpRequest();
     }
   else
     {// code for IE6, IE5
        searchhttp=new ActiveXObject("Microsoft.XMLHTTP");
     }

   searchhttp.onreadystatechange=function()
     {
        if (searchhttp.readyState==4 && searchhttp.status==200)
          {
             try {
                var searchArr = JSON.parse(searchhttp.responseText);
             }
             catch(err) {
                document.getElementById("searchDiv").innerHTML = '';
                return false;
             }
             printSearchResults(searchArr, search_results)
          }
     }
   searchhttp.open("GET",searchurl,true);
   searchhttp.send();

   return false;
}


function printArtist(artistData)
{
   var out = ""

   out += '<div class="bandnameheading"><h2 class="bandtitle">' + artistData['artist'] + '</h2></div>';
   if (artistData['comment_file'])
   {
      out += '<div class="artistcomment">';
      out += artistData['comment_file'];
      out += '<hr>';
      out += '</div>';
   }
   document.getElementById("artistDiv").innerHTML = out;
   document.title = 'Ron Corral\'s CD Collection - ' + artistData['artist']
}

function printCD(cdData)
{
   var out = ""
   var i

   for(i = 0; i < cdData.length; i++) {
        out += '<div class="cf cd">'
        out += '<img class="cdcover" src="/images/cdcovers/' + cdData[i].cover.substring(0,1) + '/' + cdData[i].cover + '" height=64 width=64 alt="' + htmlEntitiesEncode(cdData[i].title) + '" title="' + htmlEntitiesEncode(cdData[i].title) + '">'
        out += '<ul class="cdinfo"><li><b>Title:</b> ' + cdData[i].title + '</li>'
        if (cdData[i].label != "") {
           out += '<ul class="cdinfo"><li><b>Label:</b> ' + cdData[i].label + '</li>'
        }
        if (cdData[i].notes != "") {
           out += '<ul class="cdinfo"><li><b>Notes:</b> ' + cdData[i].notes + '</li>'
        }
        out += '</ul>'
        out += '</div>'
        out += '<hr class="hrline">'
    }

   document.getElementById("cdDiv").innerHTML = out;
}

function printSearchResults(searchResults,searchQuery)
{
   var out = ""
   var i

   document.getElementById("searchCount").innerHTML = '';
   if (!searchResults) {
      document.getElementById("searchCount").innerHTML = "<ul>Found 0 matches for '" + htmlEntitiesEncode(searchQuery) + "'.</ul>"
      document.getElementById("searchDiv").innerHTML = '';
      return false
   }

   out += "<ol>"
   for(i = 0; i < searchResults.length; i++) {
        out += '<li><b><a href=' + searchResults[i].path + '>' + searchResults[i].title + '</a></b>'
        out += ' (score: ' + searchResults[i].rank + ')<br>'
        out += searchResults[i].path + '</li>'
   }
   out += "</ol>"

  document.getElementById("searchCount").innerHTML = "<ul>Found " + searchResults.length + " match" + ( searchResults.length != 1 ? "es" : "" ) + " for '" + htmlEntitiesEncode(searchQuery) + "'.</ul>"
;
   document.getElementById("searchDiv").innerHTML = out;
   document.getElementById("searchfield").value = searchQuery;
}

function setCookie(c_name,value,exdays)
{
   var exdate=new Date();
   exdate.setDate(exdate.getDate() + exdays);
   var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
   document.cookie=c_name + "=" + c_value;
}

function htmlEntitiesEncode(mystring) {
   return mystring.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;").replace(/'/g, "&apos;");
}

function toggle_visibility(id) {
   var e = document.getElementById(id);
   if(e.style.display == 'block') {
      e.style.visibility = 'hidden';
      e.style.display = 'none';
   } else {
      e.style.visibility = 'visible';
      e.style.display = 'block';
   }
}

