<?php
$title = "News";
include("header.php");
?>

<div id="2012-12-06">
<h2>2012-12-06: Minetest 0.4.4 released</h2>
<p>
After all the hard work of the past autumn months, we present the Minetest 0.4.4 release.
</p>
<p>
Ubuntu packages should be ready in Launchpad in a moment, as well as Archlinux AUR packages. Others will probably take more or less time.
</p>
<p>
-celeron55
</p>
<h3>Download</h3>
<ul style="font-weight: bold;">
<li><a href="http://github.com/downloads/celeron55/minetest/minetest-0.4.4-win32.zip">Windows: minetest-0.4.4-win32.zip</a></li>
<li><a href="/download.php">Others</a></li>
</ul>
<h3>Related</h3>
<ul style="font-weight: bold;">
<li><a href="http://minetest.net/forum/viewtopic.php?id=3973">Forum thread</a></li>
</ul>
<h3>Changelog</h3>
<p>
0.4.3 -&gt; 0.4.4 (by Calinou and PilzAdam)
<pre>
New features:
* Added animated 3D player and a new default skin, the default model also supports Minecraft skins (Taoki, skin by Jordach)
* Added shaders support (can be disabled in Settings menu), makes water a bit smaller than a full block, makes lighting look prettier (kahrl and celeron55)
* New default doors mod: doors have a 3D look, ability to create "double doors" added, added locked steel doors (only the owner of the door can open/close it) (PilzAdam)
* Improve map generation speed a lot (hmmmm)
* Day-night transitions are now smoother (celeron55)
* Water textures are now animated (RealBadAngel (textures) and PilzAdam)
* Added on-demand item previews (reduces load time/RAM usage), disabled by default (celeron55)
* Added 3D anaglyph support (red-cyan glasses) (xyz)
* Fire is now animated and causes damage to players (PilzAdam, Muadtralk (textures))
* Tweaked some textures: apple, nyan cat, bricks, papyrus, steel sword (Calinou, VanessaE)
* Tweaked digging animation (no more mining with the tip of your pickaxe!) (jordan4ibanez)
* Changed apple, sapling and papyrus selection box size to be smaller (VanessaE)
* Players who do not move no longer send their positions to save bandwidth (Taoki)
* Make steel block and brick drop themselves when dug and make them craftable back into their materials (PilzAdam)
* Glass now makes a sound when broken (PilzAdam)
* Dead players are now visible (Taoki)
* Changed default server tick to 0.1 second, decreasing server CPU usage (celeron55)
* Clients now send their position every 0.1 second too, making other player movement look smoother (celeron55)
* Use of /grant and /revoke commands is now logged (dannydark)
* Added ability for server to tweak amount of bandwidth used to upload mods to clients (celeron55)

Bugfixes:
* Fixed falling sand and gravel sometimes incorrectly landing (PilzAdam)
* Fixed empty bucket being named "emtpy bucket" (khonkhortisan and PilzAdam)
* Fixed slab to full block transformation (PilzAdam)
* Fixed smooth lighting between MapBlocks (celeron55)
* Prevent some blocks (leaves, falling sand and gravel) from giving air when dug when they disappear as you mine them (PilzAdam)
* Fixed papyruses and cacti growing inside trees (PilzAdam)
* Fixed flowing liquid animation direction calculation (celeron55)
* Fixed wielditem entity drawtype brightness control (celeron55)
* Fixed ObjectRef:punch() (celeron55)
* Fixed a rare bug in leaf decay (PilzAdam)
* Fixed trees growing into any type of node (xyz)
* Fixed server crashing when "/clearpassword" is typed without an argument (Uberi)
* Head no longer shifts downwards when you are inside transparent blocks such as glass or nodeboxes (Calinou)
* Directories beginning with a "." are now ignored when searching for mods on Windows (matttpt)
* Fixed the automagic render distance tuner (celeron55)

Modding-related changes:
* Added 3D model support for entities (Taoki)
* Added attachment support (so that entities can "ride" other entities) (Taoki)
* Backgrounds and images can now be used in formspecs (RealBadAngel)
* Liquids can now be made non-renewable (xyz)
* Added nodedef.on_blast() to lua_api.txt in order to support chained explosions of any explosives (celeron55)
* Allow transparent image buttons (khonkhortisan)
* Added shutdown hook interface to Lua API (matttpt)
* Added "attached_node" group to make nodes which are not attached to any other walkable node drop (PilzAdam)
</pre>
</p>
</div>

<?php
include("footer.php");
?>

