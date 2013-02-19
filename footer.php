<?php

$ver = 2;
if(isset($_GET["ver"]))
	$ver = $_GET["ver"];

if($ver == 1)
	include("footer_v1.php");
if($ver == 2)
	include("footer_v2.php");

?>
<?php

$hitspath = "hits.log";

/*if(!isset($_SERVER['HTTP_REFERER']) || (
    strpos($_SERVER['HTTP_REFERER'], "/~celeron55/minetest") === false
 && strpos($_SERVER['HTTP_REFERER'], "celeron.55.lt/minetest") === false
 && strpos($_SERVER['HTTP_REFERER'], "c55.me/minetest") === false
 && strpos($_SERVER['HTTP_REFERER'], "test.mine") === false
 && strpos($_SERVER['HTTP_REFERER'], "%7Eceleron55/minetest") === false
 && strpos($_SERVER['HTTP_REFERER'], "http://minetest.net") === false
))*/
if(0)
{
	$referer = "";
	if(isset($_SERVER['HTTP_REFERER']))
		$referer = $_SERVER['HTTP_REFERER'];
	$hitsline = date("ymd-His")
		. "\t" . $_SERVER['REMOTE_ADDR']
		. "\t" . $_SERVER['REQUEST_URI']
		. "\t" . $referer
		. "\n";

	$fp = fopen($hitspath, "a");
	fwrite($fp, $hitsline);
	fclose($fp);
}

?>
