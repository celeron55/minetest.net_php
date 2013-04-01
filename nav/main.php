<?php
$nav_act = " style='font-weight:bold; text-decoration:underline;'";/*background:#EEF8FF*/
echo "
<div id='menu'>
<ul>
<li><a href='./'";if($nav_category=="Home"){echo $nav_act;}echo">Home</a></li>
<li><a href='download.php'";if($nav_category=="Download"){echo $nav_act;}echo">Download</a></li>
<li><a href='http://forum.minetest.net/viewforum.php?id=11'";if($nav_category=="Mods"){echo $nav_act;}echo">Mods</a></li>
<li><a href='http://forum.minetest.net/viewforum.php?id=4'";if($nav_category=="Texture"){echo $nav_act;}echo">Texture Packs</a></li>
<li><a href='#'";if($nav_category=="Community"){echo $nav_act;}echo">Community</a>
	<ul>
	<li><a href='http://forum.minetest.net/' class='sub'>Forum</a></li>
	<li><a href='irc.php' class='sub'>IRC-Channels</a></li>
	</ul>
</li>
<li><a href='http://wiki.minetest.com/wiki/'>Wiki</a></li>
<li><a href='development.php'";if($nav_category=="Development"){echo $nav_act;}echo">Development</a>
	<ul>
	<li><a href='https://github.com/minetest/' class='sub'>Github</a></li>
	<li><a href='http://dev.minetest.net/Main_Page' class='sub'>Developer-Wiki</a></li>
	<li><a href='http://dev.minetest.net/Intro' class='sub'>API</a></li>
	<li><a href='http://c55.me/blog' class='sub'>Blog</a></li>
	</ul>
</li>
<li style='float:right;'><a href='./support.php'";if($nav_category=="Support"){echo $nav_act;}echo">Support us</a></li>
</ul>
</div>
";

?>