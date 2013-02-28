<?php
$title = "About";
include("header.php");
?>

<h2>Minetest</h2>

<div style="float:right;">

<a href="images/screenshot_terrain_2012-12-03.png">
<img style="margin: 0em 0em 3em 3em; width: 400px;" alt="screenshot" src="images/screenshot_terrain_2012-12-03_small.jpg"/>
</a>
<br />

<a href="images/screenshot_terrain_2012-06-03.png">
<img style="margin: 0em 0em 3em 3em; width: 400px;" alt="screenshot" src="images/screenshot_terrain_2012-06-03_small.jpg"/>
</a>
<br />

<!--<a href="images/cisountexturetrees.png">
<img style="margin: 0em 0em 3em 3em; width: 400px;" alt="screenshot" src="images/cisountexturetrees_small.jpg"/>
</a>
<br />-->

<a href="images/screenshot_cave_2012-06-03.png">
<img style="margin: 0em 0em 3em 3em; width: 400px;" alt="screenshot" src="images/screenshot_cave_2012-06-03_small.jpg"/>
</a>
<br />

</div>

<!--
<p>
Minetest-c55 is an InfiniMiner/Minecraft inspired game intended
for me to show my friends how fucking superior I am at programming
compared to them!
</p>
<p>
Uhm... No... Well, whatever.
</p>
-->
<p>
Minetest is an<!--a free and open source--> infinite-world block sandbox game and a game engine, inspired by InfiniMiner, Minecraft and the like. It has been in development and use since October 2010.
</p>
<p>
It is Free and Open Source Software, released under the LGPL, available for Windows and Linux.<!-- This way it is more readily available to Linux users, and random people (you!) can fix bugs and experiment effectively.-->
</p>
<p>
Minetest is developed by <a href="https://www.ohloh.net/p/minetest-c55/contributors?sort=latest_commit">a random group of lunatics</a>.
</p>
<!--<p>
If you like the game or would like to see more games from me, you should consider <a href="donations.php">donating</a>.
</p>-->
<p>
Minetest is technically simple, stable and portable. It is lightweight enough to run on fairly old hardware. It currently runs playably on a laptop with Intel 945GM graphics. Though, as for the CPU, dualcore is recommended.
</p>
<!--<p>
<b>This game is under development</b>, and as of now, the game does not really differ from Minecraft except for having a lot less features. Still, playing is quite fun already, especially for people who have not been able to experience Minecraft.
</p>-->

<!--<h2 style="clear: both;">Features</h2>-->
<h2>Features</h2>
<ul id="features">
<li>
Walk around, dig and build in an infinite voxel world (or boxel, as reddit calls it), and craft stuff from raw materials to help you along the way. We hope to add in some survival elements, but not much really exist ATM.
</li>
<li>
Sinfully easy server-side
<a href="http://minetest.net/forum/viewforum.php?id=11">modding</a>
<a href="http://api.minetest.net/">API</a>.
<a href="https://github.com/minetest/minetest/blob/stable-0.4/doc/lua_api.txt">(short)</a>
</li>
<li>
Multiplayer support for tens of players, via servers hosted by users<br/>
</li>
<li>
Voxel based dynamic lighting (quite similar to Minecraft; light up caves with torches)<br/>
</li>
<li>
Almost infinite world and a fairly good map generator (limited to +-31000 blocks in all directions at the moment)<br />
</li>
<li>
Runs natively on Windows and Linux (C++ and Irrlicht. No Java.)
</li>
</ul>

<h2>Links &amp; other</h2>
<p>
<ul>
<!--<li>
<a href="http://">http://</a>
</li>-->
<li>
IRC Channels:
<ul>
<li>#minetest @ Freenode</li>
<li>#minetest-dev @ Freenode</li>
</ul>
</li>
<li>
Authors:
<ul>
<li>
Core developers: umm... how about <a href="https://www.ohloh.net/p/minetest-c55/contributors?sort=latest_commit">ohloh</a>?
</li>
<li>
Original author: Perttu Ahola, celeron55 @ IRCnet and gmail.com
</li>
</ul>
</li>
</ul>

<?php
include("footer.php");
?>

