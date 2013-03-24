<?php
$title = "Support us";
$notify_type = "info";
$msg = "";
$nav_category = "Support";

$main = "
<span class='page'>
<!--You can support the Development of Minetest in following ways:<br /><br />
<h3>Contribute</h3>
-->
<h3>Donations</h3>
Things the money will be used for:
<ol>
	<li>Hosting of Website</li>
	<li>Paying for people to do stuff nobody would otherwise do</li>
	<li>Supporting other (possibly related) projects</li>
	<li>Dunno... advertising? whatever? In case I end up with too much monies, I'm pretty sure we can find use for it. Discussions shall be had on IRC.</li>
</ol>
<p style='text-decoration:underline;'>If you think you would have good use for donation money, make sure I know of it.</p>

<br /><br />

<table style='width:100%;'>
<tr>
<td style='width:43%; vertical-align:top;'>
I've been asked to add some way to donate, so here is a link to Paypal Donate.


    <form action='https://www.paypal.com/cgi-bin/webscr' method='post'>
        <input type='hidden' name='cmd' value='_s-xclick'>
        <input type='hidden' name='encrypted' value='-----BEGIN PKCS7-----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-----END PKCS7-----'>
        <input type='image' src='https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif' name='submit' alt='PayPal - The safer, easier way to pay online!'>
        <img alt='' border='0' src='https://www.paypal.com/en_US/i/scr/pixel.gif' width='1' height='1'>
    </form>


In case you'd prefer an european bank account number, send me an e-mail.
</td>
<td>
<!--If you would prefer another way to support us, then take a look at your souvenier shop:-->
OR buy a shirt, cup or stuff like that at this shop. The profits will be used for 100% for Minetest.
<img src='http://i1.cpcache.com/product/770284705/black_and_yellow_white_tshirt.jpg' />
</td>
</tr>
</table>

";

$foot = "#footer";

include("./lay/dummy_sub.php")
?>