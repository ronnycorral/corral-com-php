<?php
$server =  explode(".",$_SERVER['HTTP_HOST']);
$domain = $server[(count($server)-2)];
?>
<!doctype html>
<html lang="en">
<head>
   <title>Ron Corral's List of Star Trek Books to Read</title>
   <link href="css/stylesheet.css" rel="stylesheet">
   <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
   <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
   <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
   <link rel="manifest" href="/manifest.json">
   <meta name="msapplication-TileColor" content="#ffc40d">
   <meta name="theme-color" content="#ffffff">
   <meta charset="UTF-8">
   <meta name=viewport content="width=device-width, initial-scale=1">
   <meta property="og:type" content="website">
   <meta property="og:site_name" content="Ron Corral">
   <meta property="og:title" content="Ron Corral's Star Trek Book List">
   <meta property="og:image" content="http://<?php echo $domain; ?>.com/images/stpage.png">
   <meta property="og:description" content="I've been reading Star Trek books for a long time. All obsessive Star Trek fans have lists. Here's mine.">
   <meta property="og:url" content="https://<?php echo $domain; ?>.com/">
   <meta name="twitter:site" content="@corral">
   <meta name="twitter:card" content="summary">
   <meta name="twitter:title" content="Ron Corral's Star Trek Book List">
   <meta name="twitter:description" content="I've been reading Star Trek books for a long time. All obsessive Star Trek fans have lists. Here's mine.">
   <meta name="twitter:image" content="http://<?php echo $domain; ?>.com/images/stpage.png">
<style>

li>div { display: none; }
li:hover>div { display: inline; }

.bookcover {
   height: 100px;
   width: 61px;
   float: right;
/*
   position: absolute;
   margin-top: -75px;
*/
   margin-right: 25%;
}

.booktriptych {
   height: 100px;
   width: 180px;
   float: right;
   margin-right: 25%;
}

.bookduo {
   height: 100px;
   width: 133px;
   float: right;
   margin-right: 25%;
}

.booksquare {
   height: 100px;
   width: 100px;
   float: right;
   margin-right: 25%;
}

.up {
   margin-top: -100px;
}
</style>
</head>
<body>

<h1 class="headingcenter">Ron Corral's Massive Star Trek Readathon</h1>

<!--  http://jsfiddle.net/gajbhiye/ZX97K/ -->

<div class="cdheaderrow cf">
   <div class="menuicons homeicons cf">
      <ul class="iconrowul">
      <li><a href=https://www.goodreads.com/user/show/12973438-ronny><img height=64 width=64 alt="Goodreads" title="It's not all Star Trek. See what else I read." src=/images/goodreads.png></a>
      <li><a href="/"><img class="roundcorner" height=64 width=64 alt="Home" title="Home" src='/images/home.png'></a></li>
      </ul>
   </div>
   <div class="hideoverflow">
      <div class="cdheaderleft">
         <ul class="iconrowul">
         <li><img class="roundcorner" src=/images/stshelf.jpg height=64 width=64 alt="Star Trek Book Reading Status">
         </ul>
      </div>
      <div>
      <p>I've been reading Star Trek books for a long time. All obsessive Star Trek fans have lists. Here's mine. Click on a series title to see my reading progress. If a book is crossed out, I've read it.</p>
      </div>
   </div>
</div>

<div class="bookarea">

<ul class="booklist">
<li><h2 class="stseries" onclick="toggle_visibility('seriesTOS');">The Original Series</h2></li>

<ul id="seriesTOS" class="booklist readall">
<li><cite>Enterprise: The First Adventure</cite> &middot; Vonda N. McIntyre</li>
<li><cite>Strangers From the Sky</cite> &middot; Margaret Wander Bonanno</li>
<li><cite>Final Frontier</cite> &middot; Diane Carey</li>
<li><cite>Spock's World</cite> &middot; Diane Duane</li>
<li><cite>The Lost Years</cite> &middot; J.M. Dillard</li>
<li><cite>Prime Directive</cite> &middot; Judith and Garfield Reeves-Stevens</li>
<li><cite>Probe</cite> &middot; Margaret Wander Bonanno</li>
<li><cite>Best Destiny</cite> &middot; Diane Carey</li>
<li><cite>Shadows on the Sun</cite> &middot; Michael Jan Friedman</li>
<li><cite>Sarek</cite> &middot; A.C. Crispin</li>
<li><cite>Federation</cite> &middot; Judith and Garfield Reeves-Stevens</li>
<li><cite>Vulcan's Forge</cite> &middot; Josepha Sherman &amp; Susan Shwartz</li>
<li><cite>Vulcan's Heart</cite> &middot; Josepha Sherman &amp; Susan Shwartz</li>
<li><cite>The Eugenics Wars: The Rise and Fall of Khan Noonien Singh, Books One</cite> &middot; Greg Cox</li>
<li><cite>To Reign in Hell: The Exile of Khan Noonien Singh</cite> &middot; Greg Cox</li>
<li><cite>Mission to Horatius</cite> &middot; Mack Reynolds</li>
<li><cite>Ex Machina</cite> &middot; Christopher L. Bennett</li>
<li><cite>Errand of Fury</cite> &middot; Kevin Ryan</li>
<div class="booksubgroup">
   <li><cite>Book 1: Seeds of Rage</cite></li>
   <li><cite>Book 2: Demands of Honor</cite></li>
   <li><cite>Book 3: Sacrifices of War</cite></li>
</div>
<li><cite>The Janus Gate</cite> &middot; L.A. Graf</li>
   <div class="booksubgroup">
   <li>#1 &middot; <cite>Present Tense</cite></li>
   <li>#2 &middot; <cite>Future Imperfect</cite></li>
   <li>#3 &middot; <cite>Past Prologue</cite></li>
   </div>
<li><cite>Errand of Vengeance</cite> &middot; Kevin Ryan</li>
   <div class="booksubgroup">
   <li>#1 &middot; <cite>The Edge of the Sword</cite></li>
   <li>#2 &middot; <cite>Killing Blow</cite></li>
   <li>#3 &middot; <cite>River of Blood</cite></li>
   </div>
<li><cite>Engines of Destiny</cite> &middot; Gene DeWeese</li>
<li><cite>Burning Dreams</cite> &middot; Margaret Wander Bonanno</li>
<li><cite>Vulcan's Soul</cite> &middot; Josepha Sherman &amp; Susan Shwartz</li>
   <div class="booksubgroup">
   <li>#1 &middot; <cite>Exodus</cite></li>
   <li>#2 &middot; <cite>Exhiles</cite></li>
   <li>#3 &middot; <cite>Epiphany</cite></li>
   </div>
<li><cite>Crucible</cite> &middot; David R. George III</li>
   <div class="booksubgroup">
   <li><cite>Book One: McCoy: Provennace of Shadows</cite></li>
   <li><cite>Book Two: Spock: The Fire and the Rose</cite></li>
   <li><cite>Book Three: Kirk: The Star to Every Wandering</cite></li>
   </div>
<li><cite>Rihannsu</cite> #5: <cite>The Empty Chair</cite> &middot; Diane Duane</li>
<li><cite>Constellations</cite> &middot; Marco Palmieri, ed.</li>
<li><cite>Mere Anarchy</cite></li>
   <div class="booksubgroup">
   <li>#1 &middot; <cite>Things Fall Apart</cite> &middot; Dayton Ward and Kevin Dilmore</li>
   <li>#2 &middot; <cite>The Centre Cannot Hold</cite> &middot; Mike W. Barr</li>
   <li>#3 &middot; <cite>Shadows of the Indignant</cite> &middot; Dave Galanter</li>
   <li>#4 &middot; <cite>The Darkness Drops Again</cite> &middot; Christopher L. Bennett</li>
   <li>#5 &middot; <cite>The Blood-Dimmed Tide</cite> &middot; Howard Weinstein</li>
   <li>#6 &middot; <cite>Its Hour Come Round</cite> &middot; Margaret Wander Bonanno</li>
   </div>
<li><cite>Excelsior: Forged in Fire</cite> &middot; Michael A. Martin &amp; Andy Mangels</li>
<li><cite>Troublesome Minds</cite> &middot; Dave Galanter</li>
<li><cite>Inception</cite> &middot; S.D. Perry &amp; Britta Dennison</li>
<li><cite>Unspoken Truth</cite> &middot; Margaret Wander Bonanno</li>
<li><cite>The Children of Kings</cite> &middot; Dave Stern</li>
<li><cite>Cast No Shadow</cite> &middot; James Swallow</li>
<li><cite>A Choice of Catastrophes</cite> &middot; Steve Mollmann &amp; Michael Schuster</li>
<li><cite>The Rings of Time</cite> &middot; Greg Cox</li>
<li><cite>That Which Divides</cite> &middot; Dayton Ward &amp;  Kevin Dilmore</li>
<li><cite>Allegiance in Exile</cite> &middot; David R. George III</li>
<li><cite>Devil's Bargain</cite> &middot; Tony Daniel</li>
<li><cite>The Weight of Worlds</cite> &middot; Greg Cox</li>
<li><cite>The Folded World</cite> &middot; Jeff Mariotte</li>
<li><cite>The Shocks of Adversity</cite> &middot; William Leisner</li>
<li><cite>From History's Shadow</cite> &middot; Dayton Ward</li>
<li><cite>No Time Like the Past</cite> &middot; Greg Cox</li>
<li><cite>Seasons of Light and Darkness</cite> &middot; Michael A. Martin</li>
<li><cite>Serpents in the Garden</cite> &middot; Jeff Mariotte</li>
<li><cite>The More Things Change</cite> &middot; Scott Pearson</li>
<li><cite>Foul Deeds Will Rise</cite> &middot; Greg Cox</li>
<li><cite>Shadow of the Machine</cite> &middot; Scott Harrison</li>
<li><cite>Savage Trade</cite> &middot; Tony Daniel</li>
<li><cite>Crisis of Consciousness</cite> &middot; Dave Galanter</li>
<li><cite>The Autobiography of James T. Kirk</cite> &middot; David A. Goodman</li>
<li><cite>Child of Two Worlds</cite> &middot; Greg Cox</li>
<li><cite>Miasma</cite> &middot; Greg Cox</li>
<li><cite>The Latter Fire</cite> &middot; James Swallow</li>
<li><cite>Elusive Salvation</cite> &middot; Dayton Ward</li>
<li><cite>Legacies</cite></li>
   <div class="booksubgroup">
   <li>#1 &middot; <cite>Captain to Captain</cite> &middot; Greg Cox</li>
   <li>#2 &middot; <cite>Best Defense</cite> &middot; David Mack</li>
   <li>#3 &middot; <cite>Purgatory's Key</cite> &middot; Dayton Ward and Kevin Dilmore</li>
   </div>
<li><cite>The Face of the Unknown</cite> &middot; Christopher L. Bennett</li>
<li class="unread"><cite>The Captain's Oath</cite> &middot; Christopher L. Bennett</li>
<li class="unread"><cite>The Antares Maelstrom</cite> &middot; Greg Cox</li>
<li class="bookcatagory">Novelizations</li>
   <div class="booksubgroup">
   <li><cite>Star Trek IV: The Voyage Home</cite> &middot; Vonda N. McIntyre</li>
   <li><cite>Star Trek V: The Final Frontier</cite> &middot; J.M. Dillard</li>
   <li><cite>Star Trek VI: The Undiscovered Country</cite> &middot; J.M. Dillard</li>
   <li><cite>Starfleet Academy</cite> &middot; Diane Carey</li>
   <li><cite>Star Trek XI</cite> &middot; Alan Dean Foster</li>
   <li><cite>Star Trek Into Darkness</cite> &middot; Alan Dean Foster</li>
   </div>
<li class="bookcatagory">Star Trek books by William Shatner with Judith and Garfield Reeves-Stevens</li>
   <div class="booksubgroup">
   <li><cite>Odyssey Trilogy</cite></li>
   <div class="booksubgroup">
   <li><cite>The Ashes of Eden</cite></li>
   <li><cite>The Return</cite></li>
   <li><cite>Avenger</cite></li>
   </div>
   <li><cite>Mirror Universe Trilogy</cite></li>
   <div class="booksubgroup">
   <li><cite>Spectre</cite></li>
   <li><cite>Dark Victory</cite></li>
   <li><cite>Preserver</cite></li>
   </div>
   <li><cite>Totality Trilogy</cite></li>
   <div class="booksubgroup">
   <li><cite>Captain's Peril</cite></li>
   <li><cite>Captain's Blood</cite></li>
   <li><cite>Captain's Glory</cite></li>
   </div>
   <li><cite>Academy: Collision Course</cite></li>
   </div>
<li>#1 &middot; <cite>Star Trek: The Motion Picture</cite> &middot; Gene Roddenberry</li>
<li>#2 &middot; <cite>The Entropy Effect</cite> &middot; Vonda N. McIntyre</li>
<li>#3 &middot; <cite>The Klingon Gambit</cite> &middot; Robert E. Vardeman</li>
<li>#4 &middot; <cite>The Covenant of the Crown</cite> &middot; Howard Weinstein</li>
<li>#5 &middot; <cite>The Prometheus Design</cite> &middot; Sondra Marshak &amp; Myrna Culbreath</li>
<li>#6 &middot; <cite>The Abode of Life</cite> &middot; Lee Correy</li>
<li>#7 &middot; <cite>Star Trek II: The Wrath of Khan</cite> &middot; Vonda N. McIntyre</li>
<li>#8 &middot; <cite>Black Fire</cite> &middot; Sonni Cooper</li>
<li>#9 &middot; <cite>Triangle</cite> &middot; Sondra Marshak &amp; Myrna Culbreath</li>
<li>#10 &middot; <cite>Web of the Romulans</cite> &middot; M.S. Murdock</li>
<li>#11 &middot; <cite>Yesterday's Son</cite> &middot; A.C. Crispin</li>
<li>#12 &middot; <cite>Mutiny on the Enterprise</cite> &middot; Robert E. Vardeman</li>
<li>#13 &middot; <cite>The Wounded Sky</cite> &middot; Diane Duane</li>
<li>#14 &middot; <cite>The Trellisane Confrontation</cite> &middot; David Dvorkin</li>
<li>#15 &middot; <cite>Corona</cite> &middot; Greg Bear</li>
<li>#16 &middot; <cite>The Final Reflection</cite> &middot; John M. Ford</li>
<li>#17 &middot; <cite>Star Trek III: The Search For Spock</cite> &middot; Vonda N. McIntyre</li>
<li>#18 &middot; <cite>My Enemy, My Ally</cite> &middot; Diane Duane</li>
<li>#19 &middot; <cite>The Tears of the Singers</cite> &middot; Melinda Snodgrass</li>
<li>#20 &middot; <cite>The Vulcan Academy Murders</cite> &middot; Jean Lorrah</li>
<li>#21 &middot; <cite>Uhura's Song</cite> &middot; Janet Kagan</li>
<li>#22 &middot; <cite>Shadow Lord</cite> &middot; Laurence Yep</li>
<li>#23 &middot; <cite>Ishmael</cite> &middot; Barbara Hambly</li>
<li>#24 &middot; <cite>Killing Time</cite> &middot; Della Van Hise</li>
<li>#25 &middot; <cite>Dwellers in the Crucible</cite> &middot; Margaret Wander Bonanno</li>
<li>#26 &middot; <cite>Pawns and Symbols</cite> &middot; Majliss Larson</li>
<li>#27 &middot; <cite>Mindshadow</cite> &middot; J.M. Dillard</li>
<li>#28 &middot; <cite>Crisis on Centaurus</cite> &middot; Brad Ferguson</li>
<li>#29 &middot; <cite>Dreadnought!</cite> &middot; Diane Carey</li>
<li>#30 &middot; <cite>Demons</cite> &middot; J.M. Dillard</li>
<li>#31 &middot; <cite>Battlestations!</cite> &middot; Diane Carey</li>
<li>#32 &middot; <cite>Chain of Attack</cite> &middot; Gene DeWeese</li>
<li>#33 &middot; <cite>Deep Domain</cite> &middot; Howard Weinstein</li>
<li>#34 &middot; <cite>Dreams of the Raven</cite> &middot; Carmen Carter</li>
<li>#35 &middot; <cite>The Romulan Way</cite> &middot; Diane Duane &amp; Peter Morwood</li>
<li>#36 &middot; <cite>How Much For Just the Planet?</cite> &middot; John M. Ford</li>
<li>#37 &middot; <cite>Bloodthirst</cite> &middot; J.M. Dillard</li>
<li>#38 &middot; <cite>The IDIC Epidemic</cite> &middot; Jean Lorrah</li>
<li>#39 &middot; <cite>Time For Yesterday</cite> &middot; A.C. Crispin</li>
<li>#40 &middot; <cite>Timetrap</cite> &middot; David Dvorkin</li>
<li>#41 &middot; <cite>The Three-Minute Universe</cite> &middot; Barbara Paul</li>
<li>#42 &middot; <cite>Memory Prime</cite> &middot; Gar and Judith Reeves-Stevens</li>
<li>#43 &middot; <cite>The Final Nexus</cite> &middot; Gene DeWeese</li>
<li>#44 &middot; <cite>Vulcan's Glory</cite> &middot; D.C. Fontana</li>
<li>#45 &middot; <cite>Double, Double</cite> &middot; Michael Jan Friedman</li>
<li>#46 &middot; <cite>The Cry of the Onlies</cite> &middot; Judy Klass</li>
<li>#47 &middot; <cite>The Kobayashi Maru</cite> &middot; Julia Ecklar</li>
<li>#48 &middot; <cite>Rules of Engagement</cite> &middot; Peter Morwood</li>
<li>#49 &middot; <cite>The Pandora Principle</cite> &middot; Carolyn Clowes</li>
<li>#50 &middot; <cite>Doctor's Orders</cite> &middot; Diane Duane</li>
<li>#51 &middot; <cite>Enemy Unseen</cite> &middot; V.E. Mitchell</li>
<li class="unread">#52 &middot; <cite>Home is the Hunter</cite> &middot; Dana Kramer-Rolls</li>
<li>#53 &middot; <cite>Ghost-Walker</cite> &middot; Barbara Hambly</li>
<li>#54 &middot; <cite>A Flag Full of Stars</cite> &middot; Brad Ferguson</li>
<li class="unread">#55 &middot; <cite>Renegade</cite> &middot; Gene DeWeese</li>
<li>#56 &middot; <cite>Legacy</cite> &middot; Michael Jan Friedman</li>
<li>#57 &middot; <cite>The Rift</cite> &middot; Peter David</li>
<li class="unread">#58 &middot; <cite>Faces of Fire</cite> &middot; Michael Jan Friedman</li>
<li class="unread">#59 &middot; <cite>The Disinherited</cite> &middot; Peter David, Michael Jan Friedman, Robert Greenberger</li>
<li>#60 &middot; <cite>Ice Trap</cite> &middot; L.A. Graf</li>
<li class="unread">#61 &middot; <cite>Sanctuary</cite> &middot; John Vornholt</li>
<li class="unread">#62 &middot; <cite>Death Count</cite> &middot; L.A. Graf</li>
<li>#63 &middot; <cite>Shell Game</cite> &middot; Melissa Crandall</li>
<li class="unread">#64 &middot; <cite>The Starship Trap</cite> &middot; Mel Gilden</li>
<li class="unread">#65 &middot; <cite>Windows on a Lost World</cite> &middot; V.E. Mitchell</li>
<li class="unread">#66 &middot; <cite>From the Depths</cite> &middot; Victor Milan</li>
<li class="unread">#67 &middot; <cite>The Great Starship Race</cite> &middot; Diane Carey</li>
<li class="unread">#68 &middot; <cite>Firestorm</cite> &middot; L.A. Graf</li>
<li class="unread">#69 &middot; <cite>The Patrian Transgression</cite> &middot; Simon Hawke</li>
<li>#70 &middot; <cite>Traitor Winds</cite> &middot; L.A. Graf</li>
<li class="unread">#71 &middot; <cite>Crossroad</cite> &middot; Barbara Hambly</li>
<li class="unread">#72 &middot; <cite>The Better Man</cite> &middot; Howard Weinstein</li>
<li>#73 &middot; <cite>Recovery</cite> &middot; J.M. Dillard</li>
<li class="unread">#74 &middot; <cite>The Fearful Summons</cite> &middot; Denny Martin Flynn</li>
<li class="unread">#75 &middot; <cite>First Frontier</cite> &middot; Diane Carey &amp; Dr. James I. Kirkland</li>
<li>#76 &middot; <cite>The Captain's Daughter</cite> &middot; Peter David</li>
<li>#77 &middot; <cite>Twilight's End</cite> &middot; Jerry Oltion</li>
<li>#78 &middot; <cite>The Rings of Tautee</cite> &middot; Dean Wesley Smith &amp; Kristine Kathryn Rusch</li>
<li>#79 &middot; <cite>Invasion!</cite> #1: <cite>First Strike</cite> &middot; Diane Carey</li>
<li class="unread">#80 &middot; <cite>The Joy Machine</cite> &middot; James Gunn</li>
<li class="unread">#81 &middot; <cite>Mudd in Your Eye</cite> &middot; Jerry Oltion</li>
<li>#82 &middot; <cite>Mind Meld</cite> &middot; John Vornholt</li>
<li>#83 &middot; <cite>Heart of the Sun</cite> &middot; Pamela Sargent &amp; George Zebrowski</li>
<li>#84 &middot; <cite>Assignment: Eternity</cite> &middot; Greg Cox</li>
<li>#85-87 &middot; <cite>My Brother's Keeper</cite> &middot; Michael Jan Friedman</li>
<div class="booksubgroup">
<li>#85 &middot; <cite>Republic</cite></li>
<li>#86 &middot; <cite>Constitution</cite></li>
<li>#87 &middot; <cite>Enterprise</cite></li>
</div>
<li>#88 &middot; <cite>Across the Universe</cite> &middot; Pamela Sargent &amp; George Zebrowski</li>
<li>#89-94 &middot; <cite>New Earth</cite></li>
<div class="booksubgroup">
<li>#89 &middot; <cite>Wagon Train to the Stars</cite> &middot; Diane Carey</li>
<li>#90 &middot; <cite>Belle Terre</cite> &middot; Dean Wesley Smith with Diane Carey</li>
<li>#91 &middot; <cite>Rough Trails</cite> &middot; L.A. Graf</li>
<li>#92 &middot; <cite>The Flaming Arrow</cite> &middot; Kathy Oltion &amp; Jerry Oltion</li>
<li>#93 &middot; <cite>Thin Air</cite> &middot; Kristine Kathryn Rusch &amp; Dean Wesley Smith</li>
<li>#94 &middot; <cite>Challenger</cite> &middot; Diane Carey</li>
</div>
<li>#95-96 &middot; <cite>Rihannsu</cite> &middot; Diane Duane</li>
<div class="booksubgroup">
<li>#95 &middot; <cite>Swordhunt</cite></li>
<li>#96 &middot; <cite>Honor Blade</cite></li>
</div>
<li>#97 &middot; <cite>In the Name of Honor</cite> &middot; Dayton Ward</li>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesTNG');">The Next Generation</h2></li>

<ul id="seriesTNG" class="booklist readall">
<li><cite>Metamorphosis</cite> &middot; Jean Lorrah</li>
<li><cite>Vendetta</cite> &middot; Peter David</li>
<li><cite>Reunion</cite> &middot; Michael Jan Friedman</li>
<li><cite>Imzadi</cite> &middot; Peter David</li>
<li><cite>The Devil's Heart</cite> &middot; Carmen Carter</li>
<li><cite>Dark Mirror</cite> &middot; Diane Duane</li>
<li><cite>Q-Squared</cite> &middot; Peter David</li>
<li><cite>Crossover</cite> &middot; Michael Jan Friedman</li>
<li><cite>Kahless</cite> &middot; Michael Jan Friedman</li>
<li><cite>Ship of the Line</cite> &middot; Diane Carey</li>
<li><cite>The Best and the Brightest</cite> &middot; Susan Wright</li>
<li><cite>Planet X</cite> &middot; Michael Jan Friedman</li>
<li><cite>Imzadi II: Triangle</cite> &middot; Peter David</li>
<li><cite>I, Q</cite> &middot; Peter David &amp; John de Lancie</li>
<li><cite>The Valiant</cite> &middot; Michael Jan Friedman</li>
<li><cite>The Genesis Wave, Books One</cite>, <cite>Two</cite>, and <cite>Three</cite> &middot; John Vornholt</li>
<li><cite>Immortal Coil</cite> &middot; Jeffrey Lang</li>
<li><cite>A Hard Rain</cite> &middot; Dean Wesley Smith</li>
<li><cite>The Battle of Betazed</cite> &middot; Charlotte Douglas &amp; Susan Kearney</li>
<li><cite>Genesis Force</cite> &middot; John Vornholt</li>
<li><cite>Do Comets Dream?</cite> &middot; S.P. Somtow</li>
<li><cite>Slings and Arrows</cite></li>
   <div class="booksubgroup">
   <li>#1 &middot; <cite>A Sea of Troubles</cite> &middot; J. Steven York &amp; Christina F. York</li>
   <li>#2 &middot; <cite>The Oppressor's Wrong</cite> &middot; Phaedra M. Weldon</li>
   <li>#3 &middot; <cite>The Insolence of Office</cite> &middot; William Leisner</li>
   <li>#4 &middot; <cite>That Sleep of Death</cite> &middot; Terri Osborne</li>
   <li>#5 &middot; <cite>A Weary Life</cite> &middot; Robert Greenberger</li>
   <li>#6 &middot; <cite>Enterprises of Great Pitch and Moment</cite> &middot; Keith R.A. DeCandido</li>
   </div>
<li><cite>A Time to Be Born</cite> &middot; John Vornholt</li>
<li><cite>A Time to Die</cite> &middot; John Vornholt</li>
<li><cite>A Time to Sow</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
<li><cite>A Time to Harvest</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
<li><cite>A Time to Love</cite> &middot; Robert Greenberger</li>
<li><cite>A Time to Hate</cite> &middot; Robert Greenberger</li>
<li><cite>A Time to Kill</cite> &middot; David Mack</li>
<li><cite>A Time to Heal</cite> &middot; David Mack</li>
<li><cite>A Time for War, A Time for Peace</cite> &middot; Keith R.A. DeCandido</li>
<li><cite>Death in Winter</cite> &middot; Michael Jan Friedman</li>
<li><cite>The Buried Age</cite> &middot; Christopher L. Bennett</li>
<li><cite>Resistance</cite> &middot; J.M. Dillard</li>
<li><cite>The Sky's the Limit</cite> &middot; Marco Palmieri, ed.</li>
<li><cite>Q&amp;A</cite> &middot; Keith R.A. DeCandido</li>
<li><cite>Before Dishonor</cite> &middot; Peter David</li>
<li><cite>Greater Than the Sum</cite> &middot; Christopher L. Bennett</li>
<li><cite>Losing the Peace</cite> &middot; William Leisner</li>
<li><cite>Indistinguishable From Magic</cite> &middot; David McIntee</li>
<li><cite>Cold Equations</cite> &middot; David Mack</li>
<div class="booksubgroup">
<li><cite>The Persistence of Memory</cite></li>
<li><cite>Silent Weapons</cite></li>
<li><cite>The Body Electric</cite></li>
</div>
<li><cite>The Stuff of Dreams</cite> &middot; James Swallow</li>
<li><cite>The Light Fantastic</cite> &middot; Jeffrey Lang</li>
<li><cite>Q Are Cordially Uninvited</cite> &middot; Rudy Josephs</li>
<li><cite>Takedown</cite> &middot; John Jackson Miller</li>
<li><cite>Armageddon's Arrow</cite> &middot; Dayton Ward</li>
<li><cite>Headlong Flight</cite> &middot; Dayton Ward</li>
<li><cite>Hearts and Minds</cite> &middot; Dayton Ward</li>
<li><cite>The Autobiography of Jean-Luc Picard</cite> &middot; David A. Goodman</li>
<li class="unread"><cite>Available Light</cite> &middot; Dayton Ward</li>
<li class="unread"><cite>Collateral Damage</cite> &middot; David Mack</li>
<li>Stargazer</li>
<div class="booksubgroup">
<li><cite>The Valiant</cite> &middot; Michael Jan Friedman</li>
<li><cite>Double Helix</cite> #6: <cite>The First Virtue</cite> &middot; Michael Jan Friedman &amp; Christie Golden</li>
<li><cite>Gauntlet</cite> &middot; Michael Jan Friedman</li>
<li><cite>Progenitor</cite> &middot; Michael Jan Friedman</li>
<li><cite>Three</cite> &middot; Michael Jan Friedman</li>
<li><cite>Oblivion</cite> &middot; Michael Jan Friedman</li>
<li><cite>Enigma</cite> &middot; Michael Jan Friedman</li>
<li><cite>Maker</cite> &middot; Michael Jan Friedman</li>
</div>
<li class="bookcatagory">Novelizations</li>
<div class="booksubgroup">
<li><cite>Encounter at Farpoint</cite> &middot; David Gerrold</li>
<li><cite>Unification</cite> &middot; Jeri Taylor</li>
<li><cite>Relics</cite> &middot; Michael Jan Friedman</li>
<li><cite>Descent</cite> &middot; Diane Carey</li>
<li><cite>All Good Things...</cite> &middot; Michael Jan Friedman</li>
<li><cite>Star Trek Generations</cite> &middot; J.M. Dillard</li>
<li><cite>Star Trek: First Contact</cite> &middot; J.M. Dillard</li>
<li><cite>Star Trek: Insurrection</cite> &middot; J.M. Dillard</li>
<li><cite>Star Trek Nemesis</cite> &middot; J.M. Dillard</li>
</div>
<li>#1 &middot; <cite>Ghost Ship</cite> &middot; Diane Carey</li>
<li>#2 &middot; <cite>The Peacekeepers</cite> &middot; Gene DeWeese</li>
<li>#3 &middot; <cite>The Children of Hamlin</cite> &middot; Carmen Carter</li>
<li>#4 &middot; <cite>Survivors</cite> &middot; Jean Lorrah</li>
<li>#5 &middot; <cite>Strike Zone</cite> &middot; Peter David</li>
<li>#6 &middot; <cite>Power Hungry</cite> &middot; Howard Weinstein</li>
<li>#7 &middot; <cite>Masks</cite> &middot; John Vornholt</li>
<li>#8 &middot; <cite>The Captain's Honor</cite> &middot; David and Daniel Dvorkin</li>
<li>#9 &middot; <cite>A Call to Darkness</cite> &middot; Michael Jan Friedman</li>
<li>#10 &middot; <cite>A Rock and a Hard Place</cite> &middot; Peter David</li>
<li>#11 &middot; <cite>Gulliver's Fugitives</cite> &middot; Keith Sharee</li>
<li>#12 &middot; <cite>Doomsday World</cite> &middot; David, Carter, Friedman &amp; Greenberger</li>
<li>#13 &middot; <cite>The Eyes of the Beholders</cite> &middot; A.C. Crispin</li>
<li>#14 &middot; <cite>Exiles</cite> &middot; Howard Weinstein</li>
<li>#15 &middot; <cite>Fortune's Light</cite> &middot; Michael Jan Friedman</li>
<li>#16 &middot; <cite>Contamination</cite> &middot; John Vornholt</li>
<li>#17 &middot; <cite>Boogeymen</cite> &middot; Mel Gilden</li>
<li>#18 &middot; <cite>Q-In-Law</cite> &middot; Peter David</li>
<li>#19 &middot; <cite>Perchance to Dream</cite> &middot; Howard Weinstein</li>
<li>#20 &middot; <cite>Spartacus</cite> &middot; T.L. Mancour</li>
<li>#21 &middot; <cite>Chains of Command</cite> &middot; W.A. McCay &amp; E.L. Flood</li>
<li>#22 &middot; <cite>Imbalance</cite> &middot; V.E. Mitchell</li>
<li>#23 &middot; <cite>War Drums</cite> &middot; John Vornholt</li>
<li>#24 &middot; <cite>Nightshade</cite> &middot; Laurell K. Hamilton</li>
<li>#25 &middot; <cite>Grounded</cite> &middot; David Bischoff</li>
<li>#26 &middot; <cite>The Romulan Prize</cite> &middot; Simon Hawke</li>
<li>#27 &middot; <cite>Guises of the Mind</cite> &middot; Rebecca Neason</li>
<li>#28 &middot; <cite>Here There Be Dragons</cite> &middot; John Peel</li>
<li>#29 &middot; <cite>Sins of Commission</cite> &middot; Susan Wright</li>
<li>#30 &middot; <cite>Debtors' Planet</cite> &middot; W.R. Thompson</li>
<li>#31 &middot; <cite>Foreign Foes</cite> &middot; Dave Galanter &amp; Greg Brodeur</li>
<li>#32 &middot; <cite>Requiem</cite> &middot; Michael Jan Friedman &amp; Kevin Ryan</li>
<li>#33 &middot; <cite>Balance of Power</cite> &middot; Dafydd ab Hugh</li>
<li>#34 &middot; <cite>Blaze of Glory</cite> &middot; Simon Hawke</li>
<li>#35 &middot; <cite>The Romulan Stratagem</cite> &middot; Robert Greenberger</li>
<li>#36 &middot; <cite>Into the Nebula</cite> &middot; Gene DeWeese</li>
<li>#37 &middot; <cite>The Last Stand</cite> &middot; Brad Ferguson</li>
<li>#38 &middot; <cite>Dragon's Honor</cite> &middot; Kij Johnson &amp; Greg Cox</li>
<li>#39 &middot; <cite>Rogue Saucer</cite> &middot; John Vornholt</li>
<li>#40 &middot; <cite>Possession</cite> &middot; J.M. Dillard &amp; Kathleen O'Malley</li>
<li>#41 &middot; <cite>Invasion!</cite> #2: <cite>The Soldiers of Fear</cite> &middot; Dean Wesley Smith &amp; Kristine Kathryn Rusch</li>
<li>#42 &middot; <cite>Infiltrator</cite> &middot; W.R. Thompson</li>
<li>#43 &middot; <cite>A Fury Scorned</cite> &middot; Pamela Sargent &amp; George Zebrowski</li>
<li>#44 &middot; <cite>The Death of Princes</cite> &middot; John Peel</li>
<li>#45 &middot; <cite>Intellivore</cite> &middot; Diane Duane</li>
<li>#46 &middot; <cite>To Storm Heaven</cite> &middot; Esther Friesner</li>
<li>#47-49 &middot; <cite>The Q Continuum</cite> &middot; Greg Cox</li>
<div class="booksubgroup">
<li>#47 &middot; <cite>Q-Space</cite></li>
<li>#48 &middot; <cite>Q-Zone</cite></li>
<li>#49 &middot; <cite>Q-Strike</cite></li>
</div>
<li>#50 &middot; <cite>Dyson Sphere</cite> &middot; Charles Pellegrino &amp; George Zebrowski</li>
<li>#51-56 &middot; <cite>Double Helix</cite></li>
<div class="booksubgroup">
<li>#51 &middot; <cite>Infection</cite> &middot; John Gregory Betancourt</li>
<li>#52 &middot; <cite>Vectors</cite> &middot; Dean Wesley Smith &amp; Kristine Kathryn Rusch</li>
<li>#53 &middot; <cite>Red Sector</cite> &middot; Diane Carey</li>
<li>#54 &middot; <cite>Quarantine</cite> &middot; John Vornholt</li>
<li>#55 &middot; <cite>Double or Nothing</cite> &middot; Peter David</li>
<li>#56 &middot; <cite>The First Virtue</cite> &middot; Michael Jan Friedman &amp; Christie Golden</li>
</div>
<li>#57 &middot; <cite>The Forgotten War</cite> &middot; William R. Forstchen</li>
<li>#58 &middot; <cite>Gemworld #1</cite> &middot; John Vornholt</li>
<li>#59 &middot; <cite>Gemworld #2</cite> &middot; John Vornholt</li>
<li>#60 &middot; <cite>Tooth and Claw</cite> &middot; Doranna Durgin</li>
<li>#61 &middot; <cite>Diplomatic Implausibility</cite> &middot; Keith R.A. DeCandido</li>
<li>#62-63 &middot; <cite>Maximum Warp</cite> &middot; Dave Galanter &amp; Greg Brodeur</li>
<div class="booksubgroup">
<li>#62 &middot; <cite>Dead Zone</cite></li>
<li>#63 &middot; <cite>Forever Dark</cite></li>
</div>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesDS9');">Deep Space Nine</h2></li>

<ul id="seriesDS9" class="booklist readall">
   <li><cite>Warped</cite> &middot; K.W. Jeter</li>
   <li><cite>Legends of the Ferengi</cite> &middot; Ira Steven Behr &amp; Robert Hewitt Wolfe</li>
   <li><cite>Prophecy and Change</cite> &middot; Marco Palmieri, ed.</li>
   <li><cite>Hollow Men</cite> &middot; Una McCormack</li>
   <li><cite>Terok Nor</cite></li>
   <div class="booksubgroup">
      <li><cite>Day of the Vipers</cite> &middot; James Swallow</li>
      <li><cite>Night of the Wolves</cite> &middot; S.D. Perry &amp; Britta Dennison</li>
      <li><cite>Dawn of the Eagles</cite> &middot; S.D. Perry &amp; Britta Dennison</li>
   </div>
   <li><cite>The Never-Ending Sacrifice</cite> &middot; Una McCormack</li>
   <li><cite>The Dominion War</cite></li>
   <div class="booksubgroup">
      <li>#1 &middot; <cite>Behind Enemy Lines</cite> &middot; John Vornholt</li>
      <li>#2 &middot; <cite>Call to Arms...</cite> &middot; Diane Carey</li>
      <li>#3 &middot; <cite>Tunnel Through the Stars</cite> &middot; John Vornholt</li>
      <li>#4 &middot; <cite>...Sacrifice of Angels</cite> &middot; Diane Carey</li>
      <li><cite>Tales of the Dominion War</cite> &middot; Keith R.A. DeCandido, ed.</li>
   </div>
   <li class="bookcatagory readall">Novelizations</li>
   <div class="booksubgroup">
      <li><cite>The Search</cite> &middot; Diane Carey</li>
      <li><cite>The Way of the Warrior</cite> &middot; Diane Carey</li>
      <li><cite>Star Trek: Klingon</cite> &middot; Dean Wesley Smith &amp; Kristine Kathryn Rusch</li>
      <li><cite>Trials and Tribble-ations</cite> &middot; Diane Carey</li>
      <li><cite>Far Beyond the Stars</cite> &middot; Steve Barnes</li>
      <li><cite>What You Leave Behind</cite> &middot; Diane Carey</li>
      </div>
   <li>#1 &middot; <cite>Emissary</cite> &middot; J.M. Dillard</li>
   <li>#2 &middot; <cite>The Siege</cite> &middot; Peter David</li>
   <li>#3 &middot; <cite>Bloodletter</cite> &middot; K.W. Jeter</li>
   <li>#4 &middot; <cite>The Big Game</cite> &middot; Sandy Schofield</li>
   <li>#5 &middot; <cite>Fallen Heroes</cite> &middot; Dafydd ab Hugh</li>
   <li>#6 &middot; <cite>Betrayal</cite> &middot; Lois Tilton</li>
   <li>#7 &middot; <cite>Warchild</cite> &middot; Esther Friesner</li>
   <li>#8 &middot; <cite>Antimatter</cite> &middot; John Vornholt</li>
   <li>#9 &middot; <cite>Proud Helios</cite> &middot; Melissa Scott</li>
   <li>#10 &middot; <cite>Valhalla</cite> &middot; Nathan Archer</li>
   <li>#11 &middot; <cite>Devil in the Sky</cite> &middot; Greg Cox &amp; John Gregory Betancourt</li>
   <li>#12 &middot; <cite>The Laertian Gamble</cite> &middot; Robert Sheckley</li>
   <li>#13 &middot; <cite>Station Rage</cite> &middot; Diane Carey</li>
   <li>#14 &middot; <cite>The Long Night</cite> &middot; Dean Wesley Smith &amp; Kristine Kathryn Rusch</li>
   <li>#15 &middot; <cite>Objective: Bajor</cite> &middot; John Peel</li>
   <li>#16 &middot; <cite>Invasion!</cite> #3: <cite>Time's Enemy</cite> &middot; L.A. Graf</li>
   <li>#17 &middot; <cite>The Heart of the Warrior</cite> &middot; John Gregory Betancourt</li>
   <li>#18 &middot; <cite>Saratoga</cite> &middot; Michael Jan Friedman</li>
   <li>#19 &middot; <cite>The Tempest</cite> &middot; Susan Wright</li>
   <li>#20 &middot; <cite>Wrath of the Prophets</cite> &middot; David, Friedman &amp; Greenberger</li>
   <li>#21 &middot; <cite>Trial by Error</cite> &middot; Mark Garland</li>
   <li>#22 &middot; <cite>Vengeance</cite> &middot; Dafydd ab Hugh</li>
   <li>#23 &middot; <cite>The 34th Rule</cite> &middot; Armin Shimerman &amp; David R. George III</li>
   <li>#24-26 &middot; Rebels &middot; Dafydd ab Hugh</li>
   <div class="booksubgroup">
      <li>#24 &middot; <cite>The Conquered</cite></li>
      <li>#25 &middot; <cite>The Courageous</cite></li>
      <li>#26 &middot; <cite>The Liberated</cite></li>
   </div>
   <li class="bookcatagory readall">Books set after the series</li>
      <div class="booksubgroup">
         <li><cite>The Lives of Dax</cite> &middot; Marco Palmieri, ed.</li>
         <li><cite>Millennium</cite> &middot; Judith and Garfield Reeves-Stevens</li>
         <div class="booksubgroup">
            <li>#1 &middot; <cite>The Fall of Terok Nor</cite></li>
            <li>#2 &middot; <cite>The War of the Prophets</cite></li>
            <li>#3 &middot; <cite>Inferno</cite></li>
         </div>
      <li><cite>A Stitch in Time</cite> &middot; Andrew J. Robinson</li>
      <li><cite>Avatar, Books </cite><cite>One</cite> &middot; S.D. Perry</li>
      <li><cite>Section 31: Abyss</cite> &middot; David Weddle &amp; Jeffrey Lang</li>
      <li><cite>Gateways</cite> #4: <cite>Demons of Air and Darkness</cite> &middot; Keith R.A. DeCandido</li>
      <li><cite>Gateways</cite> #7: <cite>What Lay Beyond</cite>: "Horn and Ivory" &middot; Keith R.A. DeCandido</li>
      <li><cite>Mission: Gamma</cite> #1 &middot; <cite>Twilight</cite> &middot; David R. George III</li>
      <li><cite>Mission: Gamma</cite> #2 &middot; <cite>This Gray Spirit</cite> &middot; Heather Jarman</li>
      <li><cite>Mission: Gamma</cite> #3 &middot; <cite>Cathedral</cite> &middot; Michael A. Martin &amp; Andy Mangels</li>
      <li><cite>Mission: Gamma</cite> #4 &middot; <cite>Lesser Evil</cite> &middot; Robert Simpson</li>
      <li><cite>Rising Son</cite> &middot; S.D. Perry</li>
      <li><cite>The Left Hand of Destiny, Books </cite><cite>One</cite> &middot; J.G. Hertzler and Jeffrey Lang</li>
      <li><cite>Unity</cite> &middot; S.D. Perry</li>
      <li><cite>Worlds of Star Trek: Deep Space Nine</cite></li>
      <div class="booksubgroup">
         <li>#1 &middot; <cite>Cardassia and Andor</cite> &middot; Una McCormack and Heather Jarman</li>
         <li>#2 &middot; <cite>Trill and Bajor</cite> &middot; Michael A. Martin &amp; Andy Mangels and J. Noah Kym</li>
         <li>#3 &middot; <cite>The Dominion and Ferenginar</cite> &middot; David R. George III and Keith R.A. DeCandido</li>
      </div>
      <li><cite>Warpath</cite> &middot; David Mack</li>
   <li><cite>Fearful Symmetry</cite> &middot; Olivia Woods</li>
   <li><cite>The Soul Key</cite> &middot; Olivia Woods</li>
   <li><cite>Lust's Latinum Lost (and Found)</cite> &middot; Paula M. Block &amp; Terry J. Erdmann</li>
   <li><cite>The Missing</cite> &middot; Una McCormack</li>
   <li><cite>Sacraments of Fire</cite> &middot; David R. George III</li>
   <li><cite>Ascendance</cite> &middot; David R. George III</li>
   <li><cite>Force and Motion</cite> &middot; Jeffrey Lang</li>
   <li><cite>Rules of Accusation</cite> &middot; Paula M. Block &amp; Terry J. Erdmann</li>
   <li><cite>The Long Mirage</cite> &middot; David R. George III</li>
   <li><cite>Enigma Tales</cite> &middot; Una McCormack</li>
   <li><cite>Original Sin</cite> &middot; David R. George III</li>
   <li><cite>I, The Constable</cite> &middot; Paula M. Block &amp; Terry J. Erdmann</li>
   </div>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesVOY');">Voyager</h2></li>

<ul id="seriesVOY" class="booklist readall">
<li><cite>Mosaic</cite> &middot; Jeri Taylor</li>
<li><cite>Pathways</cite> &middot; Jeri Taylor</li>
<li><cite>Captain Proton: Defender of the Earth</cite> &middot; D.W. "Prof" Smith</li>
<li><cite>The Nanotech War</cite> &middot; Steve Piziks</li>
<li><cite>String Theory</cite></li>
<div class="booksubgroup">
<li>#1 &middot; <cite>Cohesion</cite> &middot; Jeffrey Lang</li>
<li>#2 &middot; <cite>Fusion</cite> &middot; Kirsten Beyer</li>
<li>#3 &middot; <cite>Evolution</cite> &middot; Heather Jarman</li>
</div>
<li><cite>Distant Shores</cite> &middot; Marco Palmieri, ed.</li>
<li class="bookcatagory">Novelizations</li>
<div class="booksubgroup">
<li><cite>Flashback</cite> &middot; Diane Carey</li>
<li><cite>Day of Honor</cite> &middot; Michael Jan Friedman</li>
<li><cite>Equinox</cite> &middot; Diane Carey</li>
<li><cite>Endgame</cite> &middot; Diane Carey &amp; Christie Golden</li>
</div>
<li>#1 &middot; <cite>Caretaker</cite> &middot; L.A. Graf</li>
<li>#2 &middot; <cite>The Escape</cite> &middot; Dean Wesley Smith &amp; Kristine Kathryn Rusch</li>
<li>#3 &middot; <cite>Ragnarok</cite> &middot; Nathan Archer</li>
<li>#4 &middot; <cite>Violations</cite> &middot; Susan Wright</li>
<li>#5 &middot; <cite>Incident at Arbuk</cite> &middot; John Gregory Betancourt</li>
<li>#6 &middot; <cite>The Murdered Sun</cite> &middot; Christie Golden</li>
<li>#7 &middot; <cite>Ghost of a Chance</cite> &middot; Mark A. Garland &amp; Charles G. McGraw</li>
<li>#8 &middot; <cite>Cybersong</cite> &middot; S.N. Lewitt</li>
<li>#9 &middot; <cite>Invasion!</cite> #4: <cite>The Final Fury</cite> &middot; Dafydd ab Hugh</li>
<li>#10 &middot; <cite>Bless the Beasts</cite> &middot; Karen Haber</li>
<li>#11 &middot; <cite>The Garden</cite> &middot; Melissa Scott</li>
<li>#12 &middot; <cite>Chrysalis</cite> &middot; David Niall Wilson</li>
<li>#13 &middot; <cite>The Black Shore</cite> &middot; Greg Cox</li>
<li>#14 &middot; <cite>Marooned</cite> &middot; Christie Golden</li>
<li>#15 &middot; <cite>Echoes</cite> &middot; Dean Wesley Smith, Kristine Kathryn Rusch &amp; Nina Kiriki Hoffman</li>
<li>#16 &middot; <cite>Seven of Nine</cite> &middot; Christie Golden</li>
<li>#17 &middot; <cite>Death of a Neutron Star</cite> &middot; Eric Kotani</li>
<li>#18 &middot; <cite>Battle Lines</cite> &middot; Dave Galanter &amp; Greg Brodeur</li>
<li>#19-21 &middot; Dark Matters &middot; Christie Golden</li>
<div class="booksubgroup">
<li>#19 &middot;  <cite>Cloak and Dagger</cite></li>
<li>#20 &middot;  <cite>Ghost Dance</cite></li>
<li>#21 &middot;  <cite>Shadow of Heaven</cite></li>
</div>
<li class="bookcatagory">Books set after the series</li>
<div class="booksubgroup">
<li><cite>Homecoming &middot; Christie Golden</cite></li>
<div class="booksubgroup">
   <li>#1 &middot; <cite>Homecoming</cite></li>
   <li>#2 &middot; <cite>The Farther Shore</cite></li>
</div>
<li><cite>Spirit Walk &middot; Christie Golden</cite></li>
<div class="booksubgroup">
   <li>#1 &middot; <cite>Old Wounds</cite></li>
   <li>#2 &middot; <cite>Enemy of My Enemy</cite></li>
</div>
<li><cite>Full Circle</cite> &middot; Kirsten Beyer</li>
<li><cite>Unworthy</cite> &middot; Kirsten Beyer</li>
<li><cite>Children of the Storm</cite> &middot; Kirsten Beyer</li>
<li><cite>The Eternal Tide</cite> &middot; Kirsten Beyer</li>
<li><cite>Protectors</cite> &middot; Kirsten Beyer</li>
<li><cite>Acts of Contrition</cite> &middot; Kirsten Beyer</li>
<li><cite>Atonement</cite> &middot; Kirsten Beyer</li>
<li><cite>A Pocket Full of Lies</cite> &middot; Kirsten Beyer</li>
<li><cite>Architects of Infinity</cite> &middot; Kirsten Beyer</li>
</div>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesENT');">Enterprise</h2></li>

<ul id="seriesENT" class="booklist readall">
  <li><cite>By the Book</cite> &middot; Dean Wesley Smith &amp; Kristine Kathryn Rusch</li>
  <li><cite>What Price Honor?</cite> &middot; Dave Stern</li>
  <li><cite>Surak's Soul</cite> &middot; J.M. Dillard</li>
  <li><cite>Daedalus, Book One</cite> &middot; Dave Stern</li>
  <li><cite>Daedalus's Children, Book Two</cite> &middot; Dave Stern</li>
  <li><cite>Rosetta</cite> &middot; Dave Stern</li>
  <li class="bookcatagory">Novelizations</li>
<div class="booksubgroup">
    <li><cite>Broken Bow</cite> &middot; Diane Carey</li>
    <li><cite>Shockwave</cite> &middot; Paul Ruditis</li>
    <li><cite>The Expanse</cite> &middot; J.M. Dillard</li>
</div>
  <li class="bookcatagory">Books set after the series</li>
<div class="booksubgroup">
    <li><cite>Last Full Measure</cite> &middot; Andy Mangels &amp; Michael A. Martin</li>
    <li><cite>The Good That Men Do</cite> &middot; Andy Mangels &amp; Michael A. Martin</li>
    <li><cite>Kobayashi Maru</cite> &middot; Andy Mangels &amp; Michael A. Martin</li>
    <li><cite>The Romulan War: Beneath the Raptor's Wing</cite> &middot; Michael A. Martin</li>
    <li><cite>The Romulan War: To Brave the Storm</cite> &middot; Michael A. Martin</li>
    <li><cite>Rise of the Federation: A Choice of Futures</cite> &middot; Christopher L. Bennett</li>
    <li><cite>Rise of the Federation: Tower of Babel</cite> &middot; Christopher L. Bennett</li>
    <li><cite>Rise of the Federation: Uncertain Logic</cite> &middot; Christopher L. Bennett</li>
    <li><cite>Rise of the Federation: Live by the Code</cite> &middot; Christopher L. Bennett</li>
    <li><cite>Rise of the Federation: Patterns of Interference</cite> &middot; Christopher L. Bennett</li>
</div>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesDIS');">Discovery</h2></li>

<ul id="seriesDIS" class="booklist readall">
   <li class="unread"><cite>Desperate Hours</cite> &middot; David Mack</li>
   <li class="unread"><cite>Drastic Measures</cite> &middot; Dayton Ward</li>
   <li class="unread"><cite>Fear Itself</cite> &middot; James Swallow</li>
   <li class="unread"><cite>The Way To The Stars</cite> &middot; Una McCormack</li>
   <li class="unread"><cite>The Enterprise War</cite> &middot; John Jackson Miller</li>
   <li class="unread"><cite>Dead Endless</cite> &middot; Dave Galanter</li>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesNF');">New Frontier</h2></li>

<ul id="seriesNF" class="booklist readall">
<li><cite>No Limits</cite> &middot; Peter David, ed.</li>
<li><cite>New Frontier</cite></li>
<div class="booksubgroup">
   <li>#1 &middot; <cite>House of Cards</cite> &middot; Peter David</li>
   <li>#2 &middot; <cite>Into the Void</cite> &middot; Peter David</li>
   <li>#3 &middot; <cite>The Two-Front War</cite> &middot; Peter David</li>
   <li>#4 &middot; <cite>End Game</cite> &middot; Peter David</li>
</div>
<li>#5 &middot; <cite>Martyr</cite> &middot; Peter David</li>
<li>#6 &middot; <cite>Fire on High</cite> &middot; Peter David</li>
<li><cite>The Captain's Table</cite> #5 &middot; <cite>Once Burned</cite> &middot; Peter David</li>
<li><cite>Double Helix</cite> #5 &middot; <cite>Double or Nothing</cite> &middot; Peter David</li>
<li><cite>Double Time - Comic</cite>	 &middot; Peter David</li>
<li>#7 &middot; <cite>The Quiet Place</cite> &middot; Peter David</li>
<li>#8 &middot; <cite>Dark Allies</cite> &middot; Peter David</li>
<li>#9-11 &middot; Excalibur &middot; Peter David</li>
<div class="booksubgroup">
<li>#9 &middot;  <cite>Requiem</cite></li>
<li>#10 &middot; <cite>Renaissance</cite></li>
<li>#11 &middot; <cite>Restoration</cite></li>
</div>
<li><cite>Gateways</cite> #6: <cite>Cold Wars</cite> &middot; Peter David</li>
<li><cite>Gateways</cite> #7: <cite>What Lay Beyond</cite>: "Death After Life" &middot; Peter David</li>
<li>#12 &middot; <cite>Being Human</cite> &middot; Peter David</li>
<li>#13 &middot; <cite>Gods Above</cite> &middot; Peter David</li>
<li>#14 &middot; <cite>Stone and Anvil</cite> &middot; Peter David</li>
<li>#15 &middot; <cite>After the Fall</cite> &middot; Peter David</li>
<li>#16 &middot; <cite>Missing in Action</cite> &middot; Peter David</li>
<li><cite>Turnaround</cite> - Comic &middot; Peter David</li>
<li>#17 &middot; <cite>Treason</cite> &middot; Peter David</li>
<li>#18 &middot; <cite>Blind Man's Bluff</cite> &middot; Peter David</li>
<li>#19 &middot; <cite>The Returned</cite> &middot; Peter David</li>
<div class="booksubgroup">
<li><cite>Part One</cite></li>
<li><cite>Part Two</cite></li>
<li><cite>Part Three</cite></li>
</div>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesGORK');">I.K.S. Gorkon</h2></li>

<ul id="seriesGORK" class="booklist readall">
<li><cite>Diplomatic Implausibility</cite> &middot; Keith R.A. DeCandido</li>
<li><cite>The Brave and the Bold, Book Two</cite>: "The Final Artifact" &middot; Keith R.A. DeCandido</li>
<li>#1 &middot; <cite>A Good Day to Die</cite> &middot; Keith R.A. DeCandido</li>
<li>#2 &middot; <cite>Honor Bound</cite> &middot; Keith R.A. DeCandido</li>
<li>#3 &middot; <cite>Enemy Territory</cite> &middot; Keith R.A. DeCandido</li>
<li><cite>Klingon Empire: A Burning House</cite> &middot; Keith R.A. DeCandido</li>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesTTN');">Titan</h2></li>

<ul id="seriesTTN" class="booklist readall">
<li><cite>Taking Wing</cite> &middot; Michael A. Martin &amp; Andy Mangels</li>
<li><cite>The Red King</cite> &middot; Andy Mangels &amp; Michael A. Martin</li>
<li><cite>Orion's Hounds</cite> &middot; Christopher L. Bennett</li>
<li><cite>Sword of Damocles</cite> &middot; Geoffrey Thorne</li>
<li><cite>Over a Torrent Sea</cite> &middot; Christopher L. Bennett</li>
<li><cite>Synthesis</cite> &middot; James Swallow</li>
<li><cite>Fallen Gods</cite> &middot; Michael A. Martin</li>
<li><cite>Absent Enemies</cite> &middot; John Jackson Miller</li>
<li><cite>Sight Unseen</cite> &middot; James Swallow</li>
<li><cite>Fortune of War</cite> &middot; David Mack</li>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesVAN');">Vanguard &amp; Seekers</h2></li>

<ul id="seriesVAN" class="booklist readall">
<li class="bookcatagory">Vanguard</li>
   <div class="booksubgroup">
<li><cite>Harbinger</cite> &middot; David Mack</li>
<li><cite>Summon the Thunder</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
<li><cite>Reap the Whirlwind</cite> &middot; David Mack</li>
<li><cite>Open Secrets</cite> &middot; Dayton Ward</li>
<li><cite>Precipice</cite> &middot; David Mack</li>
<li><cite>Declassified</cite> &middot; David Mack, Marco Palmieri, Dayton Ward &amp; Kevin Dilmore</li>
<li><cite>What Judgments Come</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
<li><cite>Storming Heaven</cite> &middot; David Mack</li>
<li><cite>In Tempest's Wake</cite> &middot; Dayton Ward</li>
</div>
<li class="bookcatagory">Seekers</li>
   <div class="booksubgroup">
<li><cite>Second Nature</cite> &middot; David Mack</li>
<li><cite>Point of Divergence</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
<li><cite>Long Shot</cite> &middot; David Mack</li>
<li><cite>All That's Left</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
</div>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesSCE');">Starfleet Corps of Engineers</h2></li>

<ul id="seriesSCE" class="booklist readall">
  <li><cite>Have Tech, Will Travel</cite></li>
  <div class="booksubgroup">
    <li>#1 &middot; <cite>Belly of the Beast</cite> &middot; Dean Wesley Smith</li>
    <li>#2 &middot; <cite>Fatal Error</cite> &middot; Keith R.A. DeCandido</li>
    <li>#3 &middot; <cite>Hard Crash</cite> &middot; Christie Golden</li>
    <li>#4 &middot; <cite>Interphase, Book One</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
  </div>

  <li><cite>Miracle Workers</cite></li>
  <div class="booksubgroup">
  <li>#5 &middot; <cite>Interphase, Book Two</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
  <li>#6 &middot; <cite>Cold Fusion</cite> &middot; Keith R.A. DeCandido</li>
  <li>#7 &middot; <cite>Invincible, Part One of Two</cite> &middot; David Mack &amp; Keith R.A. DeCandido</li>
  <li>#8 &middot; <cite>Invincible, Part Two of Two</cite> &middot; David Mack &amp; Keith R.A. DeCandido</li>
  </div>

<li><cite>Some Assembly Required</cite></li>
<div class="booksubgroup">
<li>#9 &middot; <cite>The Riddled Post</cite> &middot; Aaron Rosenberg</li>
<li>#10 &middot; <cite>Gateways Epilogue: Here There Be Monsters</cite> &middot; Keith R.A. DeCandido</li>
<li>#11 &middot; <cite>Ambush</cite> &middot; Dave Galanter &amp; Greg Brodeur</li>
<li>#12 &middot; <cite>Some Assembly Required</cite> &middot; Scott Ciencin &amp; Dan Jolley</li>
</div>

<li><cite>No Surrender</cite></li>
<div class="booksubgroup">
<li>#13 &middot; <cite>No Surrender</cite> &middot; Jeff Mariotte</li>
<li>#14 &middot; <cite>Caveat Emptor</cite> &middot; Ian Edginton &amp; Mike Collins</li>
<li>#15 &middot; <cite>Past Life</cite> &middot; Robert Greenberger</li>
<li>#16 &middot; <cite>Oaths</cite> &middot; Glenn Hauman</li>
</div>

<li><cite>Foundations</cite> &middot; Dayton Ward and Kevin Dilmore</li>
<div class="booksubgroup">
<li>#17 &middot; <cite>Foundations, Book One</cite></li>
<li>#18 &middot; <cite>Foundations, Book Two</cite></li>
<li>#19 &middot; <cite>Foundations, Book Three</cite></li>
</div>

<li><cite>Wildfire</cite></li>
<div class="booksubgroup">
<li>#20 &middot; <cite>Enigma Ship</cite> &middot; J. Steven York &amp; Christina F. York</li>
<li>#21 &middot; <cite>War Stories, Book One</cite> &middot; Keith R.A. DeCandido</li>
<li>#22 &middot; <cite>War Stories, Book Two</cite> &middot; Keith R.A. DeCandido</li>
<li>#23 &middot; <cite>Wildfire, Book One</cite> &middot; David Mack</li>
<li>#24 &middot; <cite>Wildfire, Book Two</cite> &middot; David Mack</li>
</div>

<li><cite>Breakdowns</cite></li>
<div class="booksubgroup">
<li>#25 &middot; <cite>Home Fires</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
<li>#26 &middot; <cite>Age of Unreason</cite> &middot; Scott Ciencin</li>
<li>#27 &middot; <cite>Balance of Nature</cite> &middot; Heather Jarman</li>
<li>#28 &middot; <cite>Breakdowns</cite> &middot; Keith R.A. DeCandido</li>
</div>

<li><cite>Aftermath</cite></li>
<div class="booksubgroup">
<li>#29 &middot; <cite>Aftermath</cite> &middot; Christopher L. Bennett</li>
<li>#30 &middot; <cite>Ishtar Rising, Book One</cite> &middot; Michael A. Martin &amp; Andy Mangels</li>
<li>#31 &middot; <cite>Ishtar Rising, Book Two</cite> &middot; Michael A. Martin &amp; Andy Mangels</li>
<li>#32 &middot; <cite>Buying Time</cite> &middot; Robert Greenberger</li>
<li>#33 &middot; <cite>Collective Hindsight, Book One</cite> &middot; Aaron Rosenberg</li>
<li>#34 &middot; <cite>Collective Hindsight, Book Two</cite> &middot; Aaron Rosenberg</li>
<li>#35 &middot; <cite>The Demon, Book One</cite> &middot; Loren L. Coleman &amp; Randall N. Bills</li>
<li>#36 &middot; <cite>The Demon, Book Two</cite> &middot; Loren L. Coleman &amp; Randall N. Bills</li>
</div>

<li><cite>Grand Designs</cite></li>
<div class="booksubgroup">
<li>#37 &middot; <cite>Ring Around the Sky</cite> &middot; Allyn Gibson</li>
<li>#38 &middot; <cite>Orphans</cite> &middot; Kevin Killiany</li>
<li>#39 &middot; <cite>Grand Designs</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
<li>#40 &middot; <cite>Failsafe</cite> &middot; David Mack</li>
<li>#41 &middot; <cite>Bitter Medicine</cite> &middot; Dave Galanter</li>
<li>#42 &middot; <cite>Sargasso Sector</cite> &middot; Paul Kupperberg</li>
</div>

<li><cite>Creative Couplings</cite></li>
<div class="booksubgroup">
<li>#43 &middot; <cite>Paradise Interrupted</cite> &middot; John S. Drew</li>
<li>#44 &middot; <cite>Where Time Stands Still</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
<li>#45 &middot; <cite>The Art of the Deal</cite> &middot; Glenn Greenberg</li>
<li>#46 &middot; <cite>Spin</cite> &middot; J. Steven York &amp; Christina F. York</li>
<li>#47 &middot; <cite>Creative Couplings, Book One</cite> &middot; Glenn Hauman &amp; Aaron Rosenberg</li>
<li>#48 &middot; <cite>Creative Couplings, Book Two</cite> &middot; Glenn Hauman &amp; Aaron Rosenberg</li>
<li>#49 &middot; <cite>Small World</cite> &middot; David Mack</li>
</div>

<li><cite>Wounds</cite></li>
<div class="booksubgroup">
<li>#50 &middot; <cite>Malefictorum</cite> &middot; Terri Osborne</li>
<li>#51 &middot; <cite>Lost Time</cite> &middot; Ilsa J. Bick</li>
<li>#52 &middot; <cite>Identity Crisis</cite> &middot; John J. Ordover</li>
<li>#53 &middot; <cite>Fables of the Prime Directive</cite> &middot; Cory Rushton</li>
<li>#54 &middot; <cite>Security</cite> &middot; Keith R.A. DeCandido</li>
<li>#55 &middot; <cite>Wounds, Book One</cite> &middot; Ilsa J. Bick</li>
<li>#56 &middot; <cite>Wounds, Book Two</cite> &middot; Ilsa J. Bick</li>
</div>

<li><cite>Out of the Cocoon</cite></li>
<div class="booksubgroup">
<li>#57 &middot; <cite>Out of the Cocoon</cite> &middot; William Leisner</li>
<li>#58 &middot; <cite>Honor</cite> &middot; Kevin Killiany</li>
<li>#59 &middot; <cite>Blackout</cite> &middot; Phaedra M. Weldon</li>
<li>#60 &middot; <cite>The Cleanup</cite> &middot; Robert T. Jeschonek</li>
</div>

<li><cite>What's Past</cite></li>
<div class="booksubgroup">
<li>#61 &middot; <cite>Progress</cite> &middot; Terri Osborne</li>
<li>#62 &middot; <cite>The Future Begins</cite> &middot; Steve Mollmann &amp; Michael Schuster</li>
<li>#63 &middot; <cite>Echoes of Coventry</cite> &middot; Richard C. White</li>
<li>#64 &middot; <cite>Distant Early Warning</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
<li>#65 &middot; <cite>10 is Better Than 01</cite> &middot; Heather Jarman</li>
<li>#66 &middot; <cite>Many Splendors</cite> &middot; Keith R.A. DeCandido</li>
</div>

<li>Corps of Engineers</li>
<div class="booksubgroup">
<li><cite>Turn the Page</cite> &middot; Dayton Ward &amp; Kevin Dilmore</li>
<li><cite>Troubleshooting</cite> &middot; Robert Greenberger</li>
<li><cite>The Light</cite> &middot; Jeff D. Jacques</li>
<li><cite>The Art of the Comeback</cite> &middot; Glenn Greenberg</li>
<li><cite>Signs from Heaven</cite> &middot; Phaedra M. Weldon</li>
<li><cite>Ghost</cite> &middot; Ilsa J. Bick</li>
<li><cite>Remembrance of Things Past, Book 1</cite> &middot; Terri Osborne</li>
<li><cite>Remembrance of Things Past, Book 2</cite> &middot; Terri Osborne</li>
</div>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesTP');">Typhon Pact</h2></li>

<ul id="seriesTP" class="booklist readall">
<li><cite>Zero Sum Game</cite> &middot; David Mack</li>
<li><cite>Seize the Fire</cite> &middot; Michael A. Martin</li>
<li><cite>Rough Beasts of Empire</cite> &middot; David R. George III</li>
<li><cite>Paths of Disharmony</cite> &middot; Dayton Ward</li>
<li><cite>The Struggle Within</cite> &middot; Christopher L. Bennett</li>
<li><cite>Plagues of Night</cite> &middot; David R. George III</li>
<li><cite>Raise the Dawn</cite> &middot; David R. George III</li>
<li><cite>Brinkmanship</cite> &middot; Una McCormack</li>
<li><cite>The Fall</cite></li>
   <div class="booksubgroup">
   <li><cite>Revelation and Dust</cite> &middot; David R. George III</li>
   <li><cite>The Crimson Shadow</cite> &middot; Una McCormack</li>
   <li><cite>A Ceremony of Losses</cite> &middot; David Mack</li>
   <li><cite>The Poisoned Chalice</cite> &middot; James Swallow</li>
   <li><cite>Peaceable Kingdoms</cite> &middot; Dayton Ward</li>
   </div>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesCROSS');">Crossover Series</h2></li>

<ul id="seriesCROSS" class="booklist readall">
<li><cite>The Badlands</cite>, Books One &middot; Susan Wright</li>
<li><cite>The Brave and the Bold</cite>, Books One &middot; Keith R.A. DeCandido</li>
<li><cite>Day Of Honor</cite></li>
   <div class="booksubgroup">
   <li>#1 &middot; <cite>Ancient Blood</cite> &middot; Diane Carey</li>
   <li>#2 &middot; <cite>Armageddon Sky</cite> &middot; L.A. Graf</li>
   <li>#3 &middot; <cite>Her Klingon Soul</cite> &middot; Michael Jan Friedman</li>
   <li>#4 &middot; <cite>Treaty's Law</cite> &middot; Dean Wesley Smith &amp; Kristine Kathryn Rusch</li>
   </div>
<li><cite>Invasion</cite></li>
   <div class="booksubgroup">
   <li>TOS #79 &middot; <cite>Invasion!</cite> #1: <cite>First Strike</cite> &middot; Diane Carey</li>
   <li>TNG #41 &middot; <cite>Invasion!</cite> #2: <cite>The Soldiers of Fear</cite> &middot; Dean Wesley Smith &amp; Kristine Kathryn Rusch</li>
   <li>DS9 #16 &middot; <cite>Invasion!</cite> #3: <cite>Time's Enemy</cite> &middot; L.A. Graf</li>
   <li>VOY #9 &middot; <cite>Invasion!</cite> #4: <cite>The Final Fury</cite> &middot; Dafydd ab Hugh</li>
   </div>
<li><cite>Gateways</cite></li>
   <div class="booksubgroup">
   <li>#1 &middot; <cite>One Small Step</cite> &middot; Susan Wright</li>
   <li>#2 &middot; <cite>Chainmail</cite> &middot; Diane Carey</li>
   <li>#3 &middot; <cite>Doors Into Chaos</cite> &middot; Robert Greenberger</li>
   <li>#4 &middot; <cite>Demons of Air and Darkness</cite> &middot; Keith R.A. DeCandido</li>
   <li>#5 &middot; <cite>No Man's Land</cite> &middot; Christie Golden</li>
   <li>#6 &middot; <cite>Cold Wars</cite> &middot; Peter David</li>
   <li>#7 &middot; <cite>What Lay Beyond</cite> &middot; various</li>
   <li><cite>Epilogue: Here There Be Monsters</cite> &middot; Keith R.A. DeCandido</li>
   </div>
<li><cite>The Captain's Table</cite></li>
   <div class="booksubgroup">
   <li>#1 &middot; <cite>War Dragons</cite> &middot; L.A. Graf</li>
   <li>#2 &middot; <cite>Dujonian's Hoard</cite> &middot; Michael Jan Friedman</li>
   <li>#3 &middot; <cite>The Mist</cite> &middot; Dean Wesley Smith &amp; Kristine Kathryn Rusch</li>
   <li>#4 &middot; <cite>Fire Ship</cite> &middot; Diane Carey</li>
   <li>#5 &middot; <cite>Once Burned</cite> &middot; Peter David</li>
   <li>#6 &middot; <cite>Where Sea Meets Sky</cite> &middot; Jerry Oltion</li>
   <li><cite>Tales from the Captain's Table</cite> &middot; Keith R.A. DeCandido, ed.</li>
   </div>
<li><cite>Destiny</cite></li>
   <div class="booksubgroup">
   <li><cite>Destiny: Gods of Night</cite> &middot; David Mack</li>
   <li><cite>Destiny: Mere Mortals</cite> &middot; David Mack</li>
   <li><cite>Destiny: Lost Souls</cite> &middot; David Mack</li>
   <li><cite>A Singular Destiny</cite> &middot; Keith R.A. DeCandido</li>
   </div>
<li><cite>Section 31</cite></li>
   <div class="booksubgroup">
   <li><cite>Rogue</cite> &middot; Andy Mangels &amp; Michael A. Martin</li>
   <li><cite>Shadow</cite> &middot; Dean Wesley Smith &amp; Kristine Kathryn Rusch</li>
   <li><cite>Cloak</cite> &middot; S.D. Perry</li>
   <li><cite>Abyss</cite> &middot; David Weddle &amp; Jeffrey Lang</li>
   <li><cite>Disavowed</cite> &middot; David Mack</li>
   <li><cite>Control</cite> &middot; David Mack</li>
   </div>
<li><cite>Prey</cite></li>
   <div class="booksubgroup">
   <li><cite>Hell's Heart</cite> &middot; John Jackson Miller</li>
   <li><cite>The Jackel's Trick</cite> &middot; John Jackson Miller</li>
   <li><cite>The Hall of Heroes</cite> &middot; John Jackson Miller</li>
   </div>
<li><cite>Prometheus</cite></li>
   <div class="booksubgroup">
   <li><cite>Fire with Fire</cite> &middot; Bernd Perplies &amp; Christian Humberg</li>
   <li><cite>The Root of All Rage</cite> &middot; Bernd Perplies &amp; Christian Humberg</li>
   <li><cite>In the Heart of Chaos</cite> &middot; Bernd Perplies &amp; Christian Humberg</li>
   </div>

</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesLOST');">The Lost Era</h2></li>

<ul id="seriesLOST" class="booklist readall">
  <li><cite>The Sundered</cite> &middot; Andy Mangels &amp; Michael A. Martin</li>
  <li><cite>Serpents Among the Ruins</cite> &middot; David R. George III</li>
  <li><cite>The Art of the Impossible</cite> &middot; Keith R.A. DeCandido</li>
  <li><cite>Well of Souls</cite> &middot; Ilsa J. Bick</li>
  <li><cite>Deny Thy Father</cite> &middot; Jeff Mariotte</li>
  <li><cite>Catalyst of Sorrows</cite> &middot; Margaret Wander Bonanno</li>
  <li><cite>The Buried Age</cite> &middot; Christopher L. Bennett</li>
  <li><cite>Terok Nor</cite></li>
  <div class="booksubgroup">
    <li><cite>Day of the Vipers</cite> &middot; James Swallow</li>
    <li><cite>Night of the Wolves</cite> &middot; S.D. Perry &amp; Britta Dennison</li>
    <li><cite>Dawn of the Eagles</cite> &middot; S.D. Perry &amp; Britta Dennison</li>
  </div>
  <li><cite>One Constant Star</cite> &middot; David R. George III</li>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesMU');">Mirror Universe &amp; Myriad Universes</h2></li>

<ul id="seriesMU" class="booklist readall">
  <li><cite>Dark Passions</cite>, Books One &middot; Susan Wright</li>
  <li><cite>Dark Passions</cite>, Books Two &middot; Susan Wright</li>
  <li><cite>Mirror Universe: Glass Empires</cite> &middot; Mike Sussman, Dayton Ward, Kevin Dilmore, David Mack and Greg Cox</li>
  <li><cite>Mirror Universe: Obsidian Alliances</cite> &middot; Peter David, Keith R.A. DeCandido and Sarah Shaw</li>
  <li><cite>Infinity's Prism</cite> &middot; Christopher L. Bennett, William Leisner, and James Swallow</li>
  <li><cite>Echoes and Refractions</cite> &middot; Keith R.A. DeCandido, Chris Roberson, and Geoff Trowbridge</li>
  <li><cite>Shattered Light</cite> &middot; David R. George III, Scott Pearson, Steve Mollmann &amp; Michael Schuster</li>
  <li><cite>Shards and Shadows</cite> &middot; various</li>
  <li><cite>The Sorrows of Empire</cite> &middot; David Mack</li>
  <li><cite>Rise Like Lions</cite> &middot; David Mack</li>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesDTI');">Department of Temporal Investigations</h2></li>

<ul id="seriesDTI" class="booklist readall">
  <li><cite>Watching the Clock</cite> &middot; Christopher L. Bennett</li>
  <li><cite>Forgotten History</cite> &middot; Christopher L. Bennett</li>
  <li><cite>The Collectors</cite> &middot; Christopher L. Bennett</li>
  <li><cite>Time Lock</cite> &middot; Christopher L. Bennett</li>
  <li><cite>Shields of the Gods</cite> &middot; Christopher L. Bennett</li>
</ul>

<li><h2 class="stseries" onclick="toggle_visibility('seriesOTHER');window.scrollTo(0,document.body.scrollHeight);">Anthologies and Other Star Trek Fiction</h2></li>

<ul id="seriesOTHER" class="booklist readall">
<li><i>Strange New Worlds</i>, vol.
I,
II,
III,
IV,
V,
VI,
VII,
08,
09, 
and
10
&middot; Dean Wesley Smith, ed.</li>
<li><cite>Strange New Worlds 2016</cite> &middot; various</li>
<li><cite>Enterprise Logs</cite> &middot; Carol Greenburg, ed.</li>
<li><cite>The Amazing Stories</cite> &middot; various</li>
<li><cite>Seven Deadly Sins</cite> &middot; various</li>
<li><cite>Starfleet: Year One</cite> &middot; Michael Jan Friedman</li>
<li><cite>New Worlds, New Civilizations</cite> &middot; Michael Jan Friedman</li>
<li><cite>Articles of the Federation</cite> &middot; Keith R.A. DeCandido</li>
<li><cite>Star Trek Online: The Needs of the Many</cite> &middot; Michael A. Martin</li>
<li><cite>Star Trek Federation: The First 150 Years</cite> &middot; David A. Goodman</li>
<li><cite>The Klingon Art of War</cite> &middot; Keith R.A. DeCandido</li>
<li><cite>Hidden Universe Travel Guide: Vulcan</cite> &middot; Dayton Ward</li>
<li><cite>Hidden Universe Travel Guide: Klingon</cite> &middot; Dayton Ward</li>
</ul>

</div>

<script type="text/javascript" src="/js/main.js"></script>
</body>
</html>
