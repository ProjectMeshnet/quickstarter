<?php
	Stripe::setApiKey("secretkey");
	$CONFIG = array();
	$CONFIG['BTC'] = array();
	$CONFIG['BTC']['ADDR'] = "";
	$CONFIG['BTC']['CB'] = "https://".$_SERVER['HTTP_HOST']."/blockchain/callback.php";
