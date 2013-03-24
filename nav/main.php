<?php
$nav_act = " style='font-weight:bold; text-decoration:underline;'";/*background:#EEF8FF*/
echo "
<div id='menu'>
<ul>
<li><a href='./'";if($nav_category=="Home"){echo $nav_act;}echo">Home</a></li>
<li><a href='#'";if($nav_category=="Download"){echo $nav_act;}echo">Download</a></li>
<li><a href='#'";if($nav_category=="Mods"){echo $nav_act;}echo">Mods</a></li>
<li><a href='#'";if($nav_category=="Texture"){echo $nav_act;}echo">Texture Packs</a></li>
<li><a href='#'";if($nav_category=="Community"){echo $nav_act;}echo">Community</a>
	<ul>
	<li><a href='http://forum.minetest.net/' class='sub'>Forum</a></li>
	<li><a href='#' class='sub'>Contribute</a></li>
	</ul>
</li>
<li><a href='http://wiki.minetest.com/wiki/'>Wiki</a></li>
<li><a href='#'>Development</a>
	<ul>
	<li><a href='https://github.com/minetest/minetest' class='sub'>Github</a></li>
	<li><a href='http://api.minetest.net/' class='sub'>Api</a></li>
	<li><a href='http://c55.me/blog' class='sub'>Blog</a></li>
	</ul>
</li>
<li style='float:right;'><a href='./support.php'";if($nav_category=="Support"){echo $nav_act;}echo">Support us</a></li>
</ul>
</div>
";

?>