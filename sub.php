<?php
$title = "Mods";
$notify_type = "info";
$msg = "";
$nav_category = "Mods";

$main = "
<div style='float:left; width:576px;'> <!--the left part-->
	<div style='box-shadow: #000000 0px 0px 3px, #000000 1px 1px 2px; margin-bottom:32px;'>#pic-boxes</div>
	<span class='page'>
		<span>Mods</span> (or modifications) are changing the game content from what it originally was. 
		Mostly they add new features to gameplay, but can also change or remove existing content.
		<br /><br />
		To learn how Mods can be added or removed to Minetest <a href=''>read this Description</a>.	
		<br /><br />
        </span>

</div>

<div style='float:left; width:255px; text-align:right; padding-left:50px;'> <!--the right box-->
<h3 style='opacity:0.5;text-align:left;'>Navigation</h3>
#subnav
</div>
";

$foot = "#footer";

include("./lay/dummy_sub.php")
?>