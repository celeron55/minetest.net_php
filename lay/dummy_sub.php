<?php

include("head.php");
include("top_start.php");
	echo "<div id='logo_box'><img src='./graph/minetest.png' class='logo_sub' /></div>
	<div id='sub_title_box'><h3>$title</h3></div>";
include("top_stop.php");

include("cont_norm_start.php");
	

if ($msg){
include("notify.php");
}

echo $main;

include("cont_norm_stop.php");

include("foot_start.php");
	echo $foot;
include("foot_stop.php")
?>