<?php

function modifyArtistName($artist,$name_action) {

# alters artist name for display purposes based on code in database
# yeah, this needs to be a function like on the perl side. someday...
#
# default is if there is a comma swith the two words around the comma.
# (Burroughs, William / Kurt Cobain) -> (William Burroughs /  Kurt Cobain)
# the 2nd default is no comma and no name_action set do nothing
# now we start looking at what to do based on name action.
# 1 - There is a comma but ignore it.  (Not Drowning, Waving) is left alone.
# 2 - Switch everything after the comma with the name before it.
#     (Bach, Johann Sebastion) -> (Johann Sebastion Bach)
# 4 - A "The" is appended to the beginning of the file.
   switch($name_action) {
      case 4:
         $printable_name = "The " . $artist;
         break;
      case 0:
         if (strpos($artist,',')) {
            $switch_this = explode(', ', $artist);
            if (strpos($switch_this[1],' ')) {
               $last_part = explode(' ', $switch_this[1]);
               $first_name = $last_part[0];
               $last_part[0] = '';
               $imploded_last = implode(' ', $last_part);
               $printable_name = $first_name . " " . $switch_this[0] . " " . $imploded_last;
            } else {
               $printable_name = $switch_this[1] . " " . $switch_this[0];
            }
         } else {
             $printable_name = $artist;
         }
         break;
      case 2:
         $switch_this = explode(', ', $artist);
         $printable_name = $switch_this[1] . " " . $switch_this[0];
         break;
      default:
         $printable_name = $artist;
   }
   return $printable_name;
}

?>
