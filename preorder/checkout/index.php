<?
    session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Expand Meshnet</title>
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="shortcut icon" href="../../img/favicon.png">
    <script type="text/javascript" src="../../js/jquery.js"></script>
    <script type="text/javascript" src="../../js/jquery.qrcode.min.js"></script>
    <script type="text/javascript" src="../../js/common.js"></script>
</head>
<body>
	<div class="header"></div>
    <div class="main">
    	<h1>Checkout</h1>
        <p>
        	There are two ways to donate to the project.
            <br/>Upon donating with Bitcoin, please email us at <a 
href="mailto:support@meshwith.me">support@meshwith.me</a>.
            <a href="https://donate.meshwith.me" class="blue_button pay">
            	Credit card
            </a>
            <a href="#" class="blue_button pay" id="btc">
            	Bitcoin
            </a>
            <div id="paywithbtc" class="blue_button pay">
                <center>
                    <div id="qr"></div>
                    <span id="address"><i>Loading address...</i></span>
                    <button id="showqr"><i class="icon-qr">QR</i></button>
                </center>
                <div id="userinfo">
                    <table>
                        <tr>
                            <td colspan="2"><i>All fields are optional, please provide
                            at least one contact method if you wish to receive anything</i></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" id="name" placeholder="Handle, alias, real name, whatever" size="40"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="contact" id="contact" placeholder="or /u/redditusername, or @twitterhandle" size="40" /></td>
                        </tr>
                        <tr>
                            <td>Public Key</td>
                            <td><textarea name="key" id="key"></textarea></td>
                        </tr>
                        <tr>
                            <input type="hidden" name="address" value="not yet loaded" id="addressfield" />
                            <td colspan="2"><center><button id="submitinfo">Submit</button></center></td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </p>
    </div>
    <div class="footerpay">
    	&copy; 2013 Project Meshnet <span class="x">&nbsp;</span>
    </div>
</body>
</html>

