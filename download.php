<?php
$title = "Download";
include("header.php");
?>

<?php

function githubdownload($repo, $text, $tag, $ball){
	echo("<a href=\"https://github.com/minetest/$repo/".$ball.
			"/".$tag."\">".$text."</a>\n");
}

function githubtarzip($repo, $tag){
	githubdownload($repo, "tar", $tag, "tarball");
	githubdownload($repo, "zip", $tag, "zipball");
}

$dls = array(
array("text" => "minetest-0.4.x", "tag" => "stable-0.4"),
array("text" => "minetest_game-0.4.x", "tag" => "stable-0.4", "repo" => "minetest_game"),
array("text" => "minetest-0.4.5", "tag" => "0.4.5"),
array("text" => "minetest_game-0.4.5", "tag" => "0.4.5", "repo" => "minetest_game"),
array("text" => "minetest-0.4.4", "tag" => "0.4.4"),
array("text" => "minetest_game-0.4.4", "tag" => "0.4.4", "repo" => "minetest_game"),
array("text" => "minetest-0.4.3", "tag" => "0.4.3"),
array("text" => "minetest_game-0.4.3", "tag" => "0.4.3", "repo" => "minetest_game"),
array("text" => "minetest-0.4.2-rc1", "tag" => "0.4.2"),
array("text" => "minetest_game-0.4.2-rc1", "tag" => "0.4.2", "repo" => "minetest_game"),
array("text" => "minetest-0.4.1", "tag" => "0.4.1"),
array("text" => "minetest_game-0.4.1", "tag" => "0.4.1", "repo" => "minetest_game"),
array("text" => "minetest-0.4.0", "tag" => "0.4.0"),
array("text" => "minetest_game-0.4.0", "tag" => "0.4.0", "repo" => "minetest_game"),
array("text" => "0.3.x", "tag" => "stable-0.3"),
array("text" => "0.3.1", "tag" => "0.3.1"),
array("text" => "0.3.0", "tag" => "0.3.0"),
array("text" => "0.2.20110922_3", "tag" => "0.2.20110922_3"),
);

?>

<h2>Download</h2>

<!-- Windows -->

<div class="osdownload">
<h3>Windows (XP/Vista/7)</h3>

<table style="border-spacing: 0; margin: 0; padding: 0; border: 0;">
<tr>
<th style="text-align: left; padding-top: 1.5em;">Official builds</th>
<th style="text-align: left; padding-top: 1.5em;">Community builds</th>
<th style="text-align: left; padding-top: 1.5em;">???</th>
</tr>
<tr>
<td style="width:30%;vertical-align:top;padding-right: 1em;">
	<ul>
		<li>
			<a href="http://minetest.ru/builds/minetest-0.4.5.zip">
			<span class="bigdownload">
			Minetest 0.4.5 (zip)
			</span>
			</a>
		</li>
		<li>
			<a href="https://github.com/downloads/minetest/minetest/minetest-0.4.4-win32.zip">
			Minetest 0.4.4 (zip)
			</a>
		</li>
		<li>
			<a href="https://github.com/downloads/minetest/minetest/minetest-0.4.3-win32.zip">
			Minetest 0.4.3 (zip)
			</a>
		</li>
		<li>
			<a href="https://github.com/downloads/minetest/minetest/minetest-0.4.1-win32.zip">
			Minetest 0.4.1 (zip)
			</a>
		</li>
		<li>
			<a href="https://github.com/downloads/minetest/minetest/minetest-0.3.1-win32.zip">
			Minetest 0.3.1 (zip)
			</a>
		</li>
	</ul>
	<ul>
		<!--
		<li style="font-weight: bold;">
			Check <a href="/blog">blog</a> for latest in-development versions.
		</li>
		-->
		<!--<li>
			Check <a href="http://c55.me/blog">blog</a> for latest in-development versions.
		</li>-->
		<!--<li>
			<a href="http://minetest.net/packages/nightly/?C=M;O=A">Semi-automatic dev builds</a>
		</li>-->
		<!--<li>
			<a href="http://minetest.net/packages/win32">
			Other versions
			</a>
		</li>-->
		<li>
			<a href="http://c55.me/minetest/oldsite/packages/win32">
			Very old versions
			</a>
		</li>
	</ul>
</td>
<td style="width:30%;vertical-align:top;padding-right: 1em;">
<pre>
<a href="http://forum.minetest.net/viewtopic.php?id=4240">* xyz       [msvc2010]  [forum]</a>
<a href="http://forum.minetest.net/viewtopic.php?id=4547">* PilzAdam  [mingw   ]  [forum]</a>
<a href="http://forum.minetest.net/viewtopic.php?id=1523">* sfan5     [mingw?  ]  [forum]</a>
</pre>
</td>
<td style="vertical-align:top;">
	<p>
	Extract the zip package somewhere. Run the executable found in the bin/ folder.
	Also see the
	<!--<a href="wiki/doku.php?id=getting_started">Getting started</a>-->
	<a href="http://wiki.minetest.com/wiki/Getting_Started">Getting started</a>
	page in the wiki.
	</p>
	<p>
	<span class="warning">
	If you have problems, see <a href="http://forum.minetest.net/viewtopic.php?id=3829">this forum thread</a>.
	</span>
	</p>
</td>
</tr>
</table>

</div> <!-- osdownload -->

<!-- Linux -->

<div class="osdownload">
<h3>Linux</h3>

<table style="border-spacing: 0; margin: 0; padding: 0; border: 0;">
<tr>
<td style="width:50%;vertical-align:top;">
	<h5>Stable</h5>
	<ul>
		<li>Debian: Found in Apt.</li>
		<li><a href="https://community.dev.fedoraproject.org/packages/minetest">Fedora: Found in Yum.</a></li>
		<li><a href="http://aur.archlinux.org/packages.php?ID=51142">Arch Linux</a></li>
		<li><a href="https://code.launchpad.net/~minetestdevs/+archive/stable/+packages">Ubuntu/Mint</a></li>
		<li><a href="http://koti.mbnet.fi/juhani4/minetest.php">Puppy Linux</a></li>
		<!--<li><a href="https://github.com/RussianFedora/minetest">Fedora</a> (see README at the bottom of that page)</li>-->
		<li><a href="http://www.foresightlinux.se/wiki-en/index.php?title=Minetest">Foresight Linux</a></li>
	</ul>
	<h5>Daily/unstable</h5>
	<ul>
		<li>
			<a href="http://aur.archlinux.org/packages.php?ID=45253">
			Arch Linux</a>
		</li>
		<li>
			<!--<a href="https://code.launchpad.net/~minetestdevs/+archive/daily-builds">-->
			<a href="https://code.launchpad.net/~minetestdevs/+archive/daily-builds/+packages">
			Ubuntu/Mint</a>
		</li>
	</ul>
	<!--<h4>Other instructions</h4>
	<ul>-->
		<!--<li>
		<a href="http://linuxhtpcguide.blogspot.com/2011/06/howto-install-minetest-c55-on-fedora.html">Fedora</a>
		</li>-->
	<!--</ul>-->
</td>
<td style="vertical-align:top;">
	<p>
	These packages have not necessarily been created by any of the developers of Minetest. Contact the authors of the packages in case of problems (at first).
	</p>
	<p class="warning">
	NOTE: If you use daily/unstable versions on servers or persistent worlds, make sure to back them up periodically.
	</p>
	<p>
	If your distribution is not listed here, you can get the <a href="#source">source code</a> and compile Minetest-c55 yourself.
	</p>
	<p>
	If you have packaged Minetest-c55 for some other distribution, contact me so I can link to it.
	</p>
</td>
</tr>
</table>

</div>

<!-- OS X -->

<div class="osdownload">
<h3>OS X</h3>

<table style="border-spacing: 0; margin: 0; padding: 0; border: 0;">
<tr>
<td style="width:50%;vertical-align:top;padding-right: 2em;">
	<ul>
		<li>
			<a href="https://github.com/toabi/minetest-mac/downloads">Toabi's old github downloads</a>
		</li>
		<li>
			<a href="http://forum.minetest.net/viewtopic.php?pid=55239">Forum topic</a>
		</li>
	</ul>
</td>
<td>
	<p>(May be more or less outdated.)</p>
</td>
</table>
</div>

<!-- Others -->

<div class="osdownload">
<h3>Others</h3>
<p>There exists a <a href="http://www.freshports.org/games/minetest/">FreeBSD port</a>.</p>
<p>It is known to compile relatively easily on OpenBSD at least. It should work quite fine on all platforms on which Irrlicht works.</p>
</div>

<!-- Source -->

<div class="osdownload">

	<h3 id="source">Source code</h3>

	<table style="border-spacing: 0; margin: 0; padding: 0; border: 0;">
	<tr>
	<td style="width:50%;vertical-align:top;padding-right: 1em;">

	<h4>Unstable (0.4) <a href="https://github.com/minetest/minetest">github</a></h4>

	<!--<table style="margin: 1em; margin-left: 3em;">-->
	<table class="sourcetable">
		<tr>
		<td>minetest</td>
		<td>
			<a href="https://github.com/minetest/minetest/tarball/master">tar.gz</a>
			<a href="https://github.com/minetest/minetest/zipball/master">zip</a>
			<a href="https://github.com/minetest/minetest">github</a>
		</td>
		</tr>
		<tr>
		<td>minetest_game</td>
		<td>
			<a href="https://github.com/minetest/minetest_game/tarball/master">tar.gz</a>
			<a href="https://github.com/minetest/minetest_game/zipball/master">zip</a>
			<a href="https://github.com/minetest/minetest_game">github</a>
		</td>
		</tr>
	</table>

	<h4>Stable (0.4, 0.3, 0.2)</h4>
	<!--<table style="margin: 1em; margin-left: 3em;">-->
	<table class="sourcetable">
	<?php

	foreach($dls as $dl){
		$tag = $dl["tag"];
		if(isset($dl["text"]))
			$text = $dl["text"];
		else
			$text = $tag;
		if(isset($dl["repo"]))
			$repo = $dl["repo"];
		else
			$repo = "minetest";
		echo("<tr><td>");
		echo($text."\n");
		echo("</td><td>");
		githubtarzip($repo, $tag);
		echo("</td></tr>");
	}

	?>
	</table>

	</td>
	<td style="vertical-align:top;">

	<h4>Using source of 0.4</h4>
	<p>
	You need 'minetest' and 'minetest_game'.
	</p>
	<p>Note: minetest_game goes in the games/ directory of minetest. Rename it as minetest_game (instead of the long name in the package).
	</p>
	<p>
	<a href="https://github.com/minetest/minetest/blob/master/README.txt">README.txt</a> of 0.4.
	</p>

	<h4>Using source of 0.3</h4>
	<p>
	Just build it. <a href="https://github.com/minetest/minetest/blob/stable-0.3/README.txt">README.txt</a> of 0.3.
	</p>

	</td>
	</tr>
	</table>
</div> <!-- osdownload -->

<h2>Other information</h2>
<p>
<a href="http://c55.me/random/2010-10/">
Miscellaneous stuff and very old versions</a>
</p>

<?php
include("footer.php");
?>


