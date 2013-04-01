<?php
$title = "Development";
$notify_type = "info";
$msg = "";
$nav_category = "Development";

$main = "
<span class='page'>
Minetest ist still under development and everyone is welcome to join the development.<br />
To start you should take a look at the Developer-Wiki:<a href='http://dev.minetest.net/Main_Page'>http://dev.minetest.net/Main_Page</a>
<h4>Mods</h4>
The Minetest-engine allows to create content independently via mods. Read this description to get started.
<ul>
<li><a href='https://github.com/minetest/minetest/blob/stable-0.4/doc/lua_api.txt'>doc/lua_api.txt: Short reference</a></li>
<li><a href='http://forum.minetest.net/viewforum.php?id=9'>Forum / Modding General</a></li>
<li><a href='http://forum.minetest.net/viewforum.php?id=11'>Forum / Mod Releases</a></li>
<li><a href='http://dev.minetest.net/'>The developer wiki</a></li>
<li><a href='irc.php'>IRC-Channels</a></li>
</ul>

<h4>Core-Development</h4>
Minetest is written in C++. You can join the development, but read this first!
<ul>
<li><a href='http://forum.minetest.net/viewforum.php?id=7'>Forum / Unofficial Engine Development</a></li>
<li><a href='http://dev.minetest.net/'>The developer wiki</a></li>
</ul>
</span>
";

include("./lay/dummy_sub.php")
?>