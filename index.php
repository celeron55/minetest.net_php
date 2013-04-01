<?php
$title = "";
$notify_type = "info";
$msg = "";
$nav_category = "Home";

$main = "
<div id='cont_left'>
	<span class='page'>
		<img src='./images/screen1.png' class='no' style='box-shadow: #000000 0px 0px 3px, #000000 1px 1px 2px; margin-bottom:32px;' />
		<span>Minetest</span> is an infinite-world block sandbox game and a game engine, inspired by InfiniMiner, Minecraft and the like. It has been in development and use since October 2010.
		<br /><br />
		It is Free and Open Source Software, released under the LGPL, available for Windows and Linux.<!-- This way it is more readily available to Linux users, and random people (you!) can fix bugs and experiment effectively.-->
		<br /><br />
		Created in year 2010 by Perttu Ahlola (celeron55) it is now developed by a random group of lunatics</a>.
		<br /><br />
		Minetest is technically simple, stable and portable. It is lightweight enough to run on fairly old hardware. It currently runs playably on a laptop with Intel 945GM graphics. Though, as for the CPU, dualcore is recommended.

		<br /><br /><br />
		The gameplay is very similar to Minecraft's, so players can create and destroy various types of blocks in a three-dimensional open world. This allows forming structures in every possible creation, on multiplayer servers or as singleplayer. An increasing number of mods and texturepacks allow players to personalize the game in different ways.
        </span>

</div>

<div id='cont_right'>
	<img src='./graph/minetest-icon-120.png' class='no' style='width:80px; float:left;' alt='Logo' />
	<div style='float:left; padding-left:10px;'>
		<h3><b>Download</b></h3>
		<a href='http://minetest.ru/builds/minetest-0.4.5.zip'>0.4.5 for Windows</a><br />
		<a href=''>0.4.5 for Linux</a><br />
		<a href='https://github.com/qwook/minetest'>0.4.5 for Mac</a><br />
		<a href='./download.php' class='sub'>for other Distributions</a>


		<!--<h3 style='padding-top:32px;'>Mods</h3>
		<a href=''>Most popular</a><br />
		<a href=''>Newest</a><br />
		<a href='' class='sub'>browse all Mods</a>


		<h3 style='padding-top:32px;'>Texture Packs</h3>
		<a href=''>Most popular</a><br />
		<a href=''>Newest</a><br />
		<a href='' class='sub'>browse all Texture Packs</a>-->
	</div>
</div>
";

include("./lay/dummy.php")
?>