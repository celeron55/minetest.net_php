<?php

include("head.php");
include("top_start.php");
	echo "<div id='logo_box'><img src='./graph/minetest.png' class='logo' /></div>";
include("top_stop.php");

include("cont_norm_start.php");
	

if ($msg){
include("notify.php");
}

echo $main;

include("cont_norm_stop.php");

include("foot_start.php");
	include("./foot.php");
include("foot_stop.php")
?>