<?php
$enable_redirect = true;

$do_redirect = $enable_redirect;
if(strpos($_SERVER['REQUEST_URI'], "/minetest2/forum") !== FALSE)
	$page = "http://forum.minetest.net".substr($_SERVER['REQUEST_URI'], 16);
else if(strpos($_SERVER['REQUEST_URI'], "/forum") !== FALSE)
	$page = "http://forum.minetest.net".substr($_SERVER['REQUEST_URI'], 6);
else{
	$page = "http://forum.minetest.net";
	$do_redirect = false;
}

if($do_redirect){
	header("HTTP/1.1 302 Moved Temporarily");
	header("Location: $page");
	exit(0);
}
?>
<html>
<body>
<p>
Page moved to <a href="<?php echo($page);?>"><?php echo($page);?></a>
</p>
</body>
</html>

