<?php
        require_once("./lib/Stripe.php");
	require_once("api.php");
        $charges = Stripe_Charge::all();
        $data = $charges->data;
        $stripebackers = 0;
        $stripe = 0;
        foreach($data as $each) {
                $stripe += ($each["amount"]/100);
                $stripebackers++;
        }

        $json = file_get_contents("http://blockchain.info/address/1LQGG3P73ioV2e9jo8uzyCjnEJYxYpkUMR?format=json");
        $data = json_decode($json, TRUE);

        $backers = $data["n_tx"] + $stripebackers;

        $btc = $data["final_balance"];
        $btc_final = $btc/100000000;

        $goal = 3500;

        $ratejson = file_get_contents("http://blockchain.info/ticker");
        $ratedata = json_decode($ratejson, TRUE);

        $rate = $ratedata["USD"]["15m"];

        $total = number_format((float)(($btc_final*$rate)+$stripe), 2, ".", "");
        $percent = ($total/$goal)*100;

        $btc = number_format((float)($btc_final*$rate), 2, ".", "");
        $percent_btc = $btc/($stripe+$btc)*100;
        $percent_str = $stripe/($stripe+$btc)*100;

?>

