<?php

include("head.php");
include("top_start.php");
	echo $top;
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