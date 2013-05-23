<?php

	$json = file_getcontents("http://blockchain.info/address/1LQGG3P73ioV2e9jo8uzyCjnEJYxYpkUMR?format=json");
	$data = json_decode($json, TRUE);

	$backers = 6 + $data[2];

	$btc = $data[3].substring(0)+'.'+$data[3].substring(1);;

	$stripe = 555;
	$goal = 3500;

	$total = ($btc*125)+$stripe;
	$percent = ($total/$goal)*100;

?>
