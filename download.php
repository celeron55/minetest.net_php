<?php
$title = "Download";
$notify_type = "info";
$msg = "";
$nav_category = "Download";

$main = "
<div id='cont_left'>
<h3>Windows<span>(XP/Vista/7/8)</span></h3>
	<span class='page'>
	<img src='./graph/minetest-icon-120.png' class='no' style='width:48px; float:left; margin-right:10px;' alt='' />
			<a href='http://minetest.ru/builds/minetest-0.4.5.zip' style='font-weight:bold; font-size:22px; line-height:48px;'>Minetest 0.4.5</a>
			
	<ul style='margin-top:0;'>
		<li>
			<a href='https://github.com/downloads/minetest/minetest/minetest-0.4.4-win32.zip'>
			Minetest 0.4.4
			</a>
		</li>
		<li>
			<a href='https://github.com/downloads/minetest/minetest/minetest-0.4.3-win32.zip'>
			Minetest 0.4.3
			</a>
		</li>
		<li>
			<a href='https://github.com/downloads/minetest/minetest/minetest-0.4.1-win32.zip'>
			Minetest 0.4.1
			</a>
		</li>
		<li>
			<a href='https://github.com/downloads/minetest/minetest/minetest-0.3.1-win32.zip'>
			Minetest 0.3.1
			</a>
		</li>
	</ul>
        </span>
</div>
<div id='cont_right' style='padding-top:15px; padding-bottom:50px;'>
	<span class='page'>
		<h4>Note:</h4>
		Extract the zip package somewhere. Run the executable found in the bin/ folder. Also see the Getting started page in the wiki.
		<br />
		If you have problems, see this forum thread.
        </span>
</div>


<div id='cont_left'>
<h3>Linux<span></span></h3>
	<span class='page'>
			<h4>Stable</h4>
	<ul>
		<li><a href='http://packages.debian.org/sid/minetest'>Minetest 0.3.1 (Debian: Found in Apt.)</a></li>
		<li><a href='https://community.dev.fedoraproject.org/packages/minetest'>Fedora: Found in Yum.</a></li>
		<li><a href='http://aur.archlinux.org/packages.php?ID=51142'>Minetest 0.4.5 (Arch Linux)</a></li>
		<li><a href='https://code.launchpad.net/~minetestdevs/+archive/stable/+packages'>Minetest 0.4.4 (Ubuntu/Mint)</a></li>
		<li><a href='http://koti.mbnet.fi/juhani4/minetest.php'>Minetest 0.4.3 (Puppy Linux)</a></li>
		<li><a href='http://www.foresightlinux.se/wiki-en/index.php?title=Minetest'>Minetest 0.4.5? (Foresight Linux)</a></li>
	</ul>
	<h4>Daily/unstable</h4>
	<ul>
		<li>
			<a href='http://aur.archlinux.org/packages.php?ID=45253'>
			Arch Linux</a>
		</li>
		<li>
			<!--<a href='https://code.launchpad.net/~minetestdevs/+archive/daily-builds'>-->
			<a href='https://code.launchpad.net/~minetestdevs/+archive/daily-builds/+packages'>
			Ubuntu/Mint</a>
		</li>
	</ul>
        </span>
</div>
<div id='cont_right' style='padding-top:15px; padding-bottom:50px;'>
	<span class='page'>
		<h4>Note:</h4>
		These packages have not necessarily been created by any of the developers of Minetest. Contact the authors of the packages in case of problems (at first).
		<br /><br />
		NOTE: If you use daily/unstable versions on servers or persistent worlds, make sure to back them up periodically.
		<br /><br />
		If your distribution is not listed here, you can get the source code and compile Minetest yourself.
		<br /><br />
		If you have packaged Minetest for some other distribution, contact me so I can link to it.
        </span>
</div>



<div id='cont_left'>
<h3>OS X<span>(Mac)</span></h3>
	<span class='page'>
	<img src='./graph/minetest-icon-120.png' class='no' style='width:48px; float:left; margin-right:10px;' alt='' />
			<a href='https://github.com/qwook/minetest' style='font-weight:bold; font-size:22px; line-height:48px;'>Minetest 0.4.5</a>
			
	<ul style='margin-top:0;'>
		<li>
			<a href='https://github.com/downloads/toabi/minetest-mac/Minetest%20c55%20(0.4.dev-20120122-1-18-g993821a).app.zip'>
			Minetest 0.4-dev
			</a>
		</li>
		<li>
			<a href='https://github.com/downloads/toabi/minetest-mac/Minetest%20c55%20(0.3.1).app.zip'>
			Minetest 0.3.1
			</a>
		</li>
	</ul>
        </span>
</div>
<div id='cont_right' style='padding-top:15px; padding-bottom:50px;'>
	<span class='page'>
		<h4>Note:</h4>
		<br /><br /><br /><br />
        </span>
</div>



<div id='cont_left'>
<h3>Other<span>(FreeBSD)</span></h3>
	<span class='page'>
	<img src='./graph/minetest-icon-120.png' class='no' style='width:48px; float:left; margin-right:10px;' alt='' />
			<a href='http://www.freshports.org/games/minetest/' style='font-weight:bold; font-size:22px; line-height:48px;'>Minetest 0.4.4</a>
        </span>
</div>
<div id='cont_right' style='padding-top:15px; padding-bottom:50px;'>
	<span class='page'>
		<h4>Note:</h4>
		It is known to compile relatively easily on OpenBSD at least. It should work quite fine on all platforms on which Irrlicht works.
        </span>
</div>



<div id='cont_left'>
<h3>Source code<span>(unstable)</span></h3>
	<span class='page'>
	<ul style='margin-top:0;'>
		<li>
			<a href='https://github.com/minetest/minetest'>
			minetest
			</a>
		</li>
		<li>
			<a href='https://github.com/minetest/minetest_game'>
			minetest_game
			</a>
		</li>
	</ul>
        </span>
</div>
<div id='cont_right' style='padding-top:15px; padding-bottom:50px;'>
	<span class='page'>
		<h4>Note:</h4>
		You need 'minetest' and 'minetest_game'.<br />
		Note: minetest_game goes in the games/ directory of minetest. Rename it as minetest_game (instead of the long name in the package).
        </span>
</div>
";
include("./lay/dummy_sub.php")
?>