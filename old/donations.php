<?php
header("HTTP/1.1 302 Moved Temporarily");
header("Location: http://minetest.net/support.php");
exit(0);
?>
<?php
$title = "Donations";
include("header.php");
?>

<p>
More recent info <a href="support.php">here</a>.
</p>

<h2>Donations</h2>

<table style="border-spacing: 0; margin: 0; padding: 0; border: 0;">
<tr>
<td width="40%" valign="top" style="padding-right: 2em; text-align: justify;">

<p style="text-align: justify;">
I've been asked to add some way to donate, so here is a link to Paypal Donate.
</p>

<p>
<center>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</center>
</p>

<p style="text-align: justify;">
In case you'd prefer an european bank account number, send me an e-mail.
</p>

</td>
<td>

<p style="text-align: justify;">
You can send donations to me, celeron55.
</p>
<p style="text-align: justify;">
Things the money will be used for: 
<ol>
	<li>Hosting of website(s)</li>
	<li>Paying for people to do stuff nobody would otherwise do</li>
	<li>Buying snacks to fuel this coding machine called "celeron55"</li>
	<li>Dunno... advertising? whatever? In case I end up with too much monies, I'm pretty sure we can find use for it. Discussions shall be had on IRC.</li>
</ol>
</p>
<p>
If you think you would have good use for donation money, make sure I know of it.
</p>

<!--<p style="text-align: justify;">
The money goes to me, celeron55. The existence of this website and the ongoing development of Minetest is made possible by me.
</p>

<p style="text-align: justify;">
I fix bugs, set releases, build packages, maintain the website and overally manage the project in addition to adding new stuff. Also I pay the hosting bills.
</p>
<p style="text-align: justify;">
I am an electrical engineering student working on Minetest-c55 as a hobby.
</p>
<p style="text-align: justify;">
I will do anything I want with the money and you will not get it back. However, you are getting back a game that definitely is worth more than $0.
</p>-->

</td>
</tr>
</table>

<!--<p style="color: #888888">
That button reads "Donate" only because that is the default text of the Paypal Donate button. It doesn't ask you to donate, and you don't have to donate. I received many comments from people who somehow got very scared thinking this is illegal fundraising according to the finnish law. It is not. It is not fundraising in the first place. You could see it as a parallel to putting your bank account number on a web page, so that you won't have to always tell it to everybody in person.
</p>-->

<?php
include("footer.php");
?>


