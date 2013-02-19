<?php

$ver = 2;
if(isset($_GET["ver"]))
	$ver = $_GET["ver"];

if($ver == 1)
	include("header_v1.php");
if($ver == 2)
	include("header_v2.php");

?>
