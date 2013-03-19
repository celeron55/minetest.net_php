<?php
$title = "Minetest";
$notify_type = "info";
$msg = "";


$top = "

<div id='menu'>
<ul>
<li><a href='#'>Home</a></li>
<li><a href='#'>Download</a></li>
<li><a href='#'>Mods</a></li>
<li><a href='#'>Texture Packs</a></li>
<li><a href='#'>Community</a>
	<ul>
	<li><a href='#' class='sub'>Forum</a></li>
	<li><a href='#' class='sub'>Contribute</a></li>
	</ul>
</li>
<li><a href='#'>Wiki</a></li>
<li><a href='#'>Development</a>
	<ul>
	<li><a href='#' class='sub'>Github</a></li>
	<li><a href='#' class='sub'>Api</a></li>
	<li><a href='#' class='sub'>Blog</a></li>
	</ul>
</li>
<li style='float:right;'><a href='#'>Support us</a></li>
</ul>

</div>


<div style='position:absolute; top:41px; z-index:99; padding-left:8px;'><img src='./graph/minetest.png' class='no' style='z-index:99;' /></div>";

$main = "
<!--<h2>Caption</h2>-->
<div style='float:left; width:576px;'> <!--the left part-->
	<span class='page'>
		<img src='./images/screen1.png' class='no' style='box-shadow: #000000 0px 0px 3px, #000000 1px 1px 2px; margin-bottom:32px;' />
		<span>Minetest</span> is an infinite-world block sandbox game and a game engine, inspired by InfiniMiner, Minecraft and the like. It has been in development and use since October 2010.
		<br /><br />
		It is Free and Open Source Software, released under the LGPL, available for Windows and Linux.<!-- This way it is more readily available to Linux users, and random people (you!) can fix bugs and experiment effectively.-->
		<br /><br />
		Minetest is developed by a random group of lunatics</a>.
		<br /><br />
		Minetest is technically simple, stable and portable. It is lightweight enough to run on fairly old hardware. It currently runs playably on a laptop with Intel 945GM graphics. Though, as for the CPU, dualcore is recommended.
        </span>

</div>

<div style='float:left; width:305px;'> <!--the right box-->
	<img src='./graph/minetest-icon-120.png' class='no' style='width:80px; float:left;' />
	<div style='float:left; padding-left:10px;'>
		<h3><b>Download</b></h3>
		<a href=''>0.4.5 for Windows</a><br />
		<a href=''>0.4.5 for Linux</a><br />
		<a href='' class='sub'>for other Distributions</a>


		<h3 style='padding-top:32px;'>Mods</h3>
		<a href=''>Most popular</a><br />
		<a href=''>Newest</a><br />
		<a href='' class='sub'>browse all Mods</a>


		<h3 style='padding-top:32px;'>Texture Packs</h3>
		<a href=''>Most popular</a><br />
		<a href=''>Newest</a><br />
		<a href='' class='sub'>browse all Texture Packs</a>
	</div>
</div>

";

$foot = "#footer";


include("./lay/dummy.php")
?>