<?php

// Set title if not set before including this header file
if(!isset($title))
	$title = "";

?>
<!DOCTYPE html>

<html>
<head>
	<meta name="keywords" content="minetest minetest-c55" />
	<meta name="description" content="Minetest (minetest-c55): An open source Infiniminer/Minecraft style game" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="style_v2.css" type="text/css" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="icon" href="/favicon.ico" />
	<title><?php
		if($title != "")
			echo($title." - Minetest");
		else
			echo("Minetest");
	?></title>
	<script type="text/javascript">
		window.onload = function(){
			var e = document.getElementById("logo")
			var h = (new Date()).getHours()
			var b = 109-8*(6-Math.abs(h-12))
			e.style.background = "rgb(97,173,"+b+")"
		}
	</script>
</head>

<body>

<div id="navbar" class="navbar">
	<div class="constrain">
		<div class="inbar_main">
			<ul>
				<li class="navlink_normal"><a href="index.php">About</a></li>
				<li class="navlink_normal"><a href="download.php">Download</a></li>
				<li class="navlink_normal"><a href="extend.php">Extend</a></li>
				<li class="navlink_normal"><a href="contribute.php">Contribute</a></li>
				<li class="navlink_normal"><a href="support.php">Support</a></li>
			</ul>
		</div>
		<div class="inbar_separator">
			|
		</div>
		<div class="inbar_other">
			<ul>
				<li class="navlink_special"><a href="http://c55.me/blog">Blog</a></li>
				<li class="navlink_special"><a href="http://wiki.minetest.com/wiki/">Wiki</a></li>
				<li class="navlink_special"><a href="http://forum.minetest.net/">Forum</a></li>
				<li class="navlink_special"><a href="https://github.com/minetest/minetest">Github</a></li>
				<li class="navlink_special"><a href="http://api.minetest.net/">API</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="navbarbottom1">
</div>

<div id="logo">
	<div class="constrain">
		<img src="images/minetest-icon-120.png" alt="logo" id="logoimage">
		<div class="bigheader">
			<h1>Minetest</h1>
			<h2><?php echo($title); ?></h2>
		</div>
	</div>
</div>

<div id="content">
	<div class="constrain">
		<div style="clear: both;"></div>
<!-- end of header -->
