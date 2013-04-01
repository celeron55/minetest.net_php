<?php
$title = "Community";
$notify_type = "info";
$msg = "";
$nav_category = "Community";

$main = "
<div id='cont_left'>
<span class='page'>
<!--<h4>Creator:</h4>
<img src='https://secure.gravatar.com/avatar/47b4d7e8e46029b8fb798297fab848aa' class='profile' alt='profile-image' /><a href='https://github.com/celeron55' style='line-height:48px;'>Prettu Ahola (celeron55)</a>
-->
<h4>Core-Developers:</h4>
<img src='https://secure.gravatar.com/avatar/47b4d7e8e46029b8fb798297fab848aa' class='profile' alt='profile-image' /><a href='https://github.com/celeron55' style='line-height:48px;'>Prettu Ahola (celeron55)</a><div id='clear'></div>
<img src='https://i2.wp.com/a248.e.akamai.net/assets.github.com/images/gravatars/gravatar-user-420.png' class='profile' alt='profile-image' /><a href='https://github.com/kwolekr' style='line-height:48px;'>Ryan Kwolek (kwolekr)</a><div id='clear'></div>
<img src='https://secure.gravatar.com/avatar/3d77987fd2b139ab3bf76e655f78dab8' class='profile' alt='profile-image' /><a href='https://github.com/PilzAdam' style='line-height:48px;'>PilzAdam</a><div id='clear'></div>
<img src='https://i2.wp.com/a248.e.akamai.net/assets.github.com/images/gravatars/gravatar-user-420.png' class='profile' alt='profile-image' /><a href='https://github.com/xyzz' style='line-height:48px;'>Ilya Zhuravlev (xyzz)</a><div id='clear'></div>
<img src='https://i2.wp.com/a248.e.akamai.net/assets.github.com/images/gravatars/gravatar-user-420.png' class='profile' alt='profile-image' /><a href='https://github.com/darkrose' style='line-height:48px;'>Lisa Milne (darkrose)</a><div id='clear'></div>
<img src='https://secure.gravatar.com/avatar/a487b839efd672898a07dab33c63fa49' class='profile' alt='profile-image' /><a href='https://github.com/RealBadAngel' style='line-height:48px;'>Maciej Kasatkin (RealBadAngel)</a><div id='clear'></div>
<img src='https://i2.wp.com/a248.e.akamai.net/assets.github.com/images/gravatars/gravatar-user-420.png' class='profile' alt='profile-image' /><a href='https://github.com/proller' style='line-height:48px;'>proller</a><div id='clear'></div>


<h4>Active Contributers:</h4>
<a href='https://github.com/sfan5'>sfan5</a><br />
<a href='https://github.com/sapier'>sapier</a><br />
<a href='https://github.com/VanessaE'>Vanessa Ezekowitz (VanessaE)</a><br />
<a href='https://github.com/doserj'>Jurgen Doser (doserj)</a><br />
<a href='https://github.com/Jeija'>Jeija</a><br />
<a href='https://github.com/MirceaKitsune'>MirceaKitsune</a><br />
<a href='https://github.com/ShadowNinja'>ShadowNinja</a><br />
<a href='https://github.com/dannydark'>dannydark</a><br />
<a href='https://github.com/0gb-us'>0gb.us</a>

<h4>Previous Contributers:</h4>
kahrl<br />
Giuseppe Bilotta (Oblomov)<br />
Jonathan Neuschafer<br />
Nils Dagsson Moskopp (erlehmann)<br />
Constantin Wenger (SpeedProg)<br />
matttpt<br />
JacobF


<h4>Mods-Creators:<span> (mods per User)</span></h4>";


$homepage = file_get_contents("http://pastie.org/pastes/7152632/text");
$homepage = substr($homepage, strpos($homepage, "Top 20 of Mods/User:")+25);
$homepage = str_replace(" ", "(", $homepage);
$homepage = str_replace("((", "(", $homepage);
$array = explode('<br/>', $homepage);

for ($i = 0; $i <= 9; $i++) {
$main .= substr($array[$i],strpos($array[$i], ".")+2, strpos(substr($array[$i],strpos($array[$i], ".")+2), "(")) . " <span class='page_small'>[" . str_replace("(", " ", substr($array[$i], strpos(substr($array[$i],strpos($array[$i], ".")+2), "(")+5)) . "]</span><br />";
}

$main .= "

<h4>Wiki-Contributers:<span> (last 30 days)</span></h4>";
$homepage = file_get_contents("http://wiki.minetest.com/wiki/Special:ActiveUsers");
$homepage = substr($homepage, strpos($homepage, "<legend>Active users list</legend>")+25);
$homepage = substr($homepage, strpos($homepage, "<ul>")+4);
$homepage = substr($homepage, 0, strpos($homepage, "Retrieved from"));

$a = 0;
while(strpos($homepage, "<li>") !== FALSE) {
	$array2[$a] = substr($homepage, strpos($homepage, "<li>")+4, strpos($homepage, "</a>"));
 $homepage = substr($homepage, strpos($homepage, "</li>")+4);
   $a++;
   }

for ($i = 0; $i <= 8; $i++) {
$array2[$i] = substr($array2[$i], strpos($array2[$i], ">")+1);
$main .= str_replace("</a> ", "", $array2[$i]) . "<br />";
}

$main .= "
<h4>Forum:<span> (statistics)</span></h4>";
$homepage = file_get_contents("http://forum.minetest.net/extern.php?action=stats");
$tmp = strpos($homepage, "<a");
$tmp = substr($homepage, $tmp, strpos($homepage, '">')-$tmp+2);
$homepage = str_replace($tmp, "", $homepage);
$homepage = str_replace("</a>", "", $homepage);
$main .= $homepage . "
</span></div>
<div id='cont_right'>
	<span class='page'>
		<h4>You want to join our Community?</h4>
		
		Then your first stop is the <a href='http://forum.minetest.net/'>Forum</a><br />
		Check out our <a href='http://wiki.minetest.com/wiki/'>Wiki</a> and help to improve the articles<br /><br />
		If you prefer to join the development open the <a href='development.php'>Development-Site</a><br />
        </span>
</div>
";

include("./lay/dummy_sub.php")
?>