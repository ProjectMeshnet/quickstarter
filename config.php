<?php

        $json = file_get_contents("http://blockchain.info/address/1LQGG3P73ioV2e9jo8uzyCjnEJYxYpkUMR?format=json");
        $data = json_decode($json, TRUE);

        $stripebackers = 8;
        $backers = $data["n_tx"] + $stripebackers;

        $btc = $data["final_balance"];
        $btc_final = $btc/100000000;

        $stripe = 805;
        $goal = 3500;

        $ratejson = file_get_contents("http://blockchain.info/ticker");
        $ratedata = json_decode($ratejson, TRUE);

        $rate = $ratedata["USD"]["15m"];

        $total = number_format((float)($btc_final*$rate), 2, ".", "")+$stripe;
        $percent = ($total/$goal)*100;

?>
