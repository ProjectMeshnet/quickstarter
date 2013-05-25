<?

require "../api.php";

session_start();

$blockchain = json_decode(file_get_contents("https://blockchain.info/api/receive?method=create&format=plain&address=".$CONFIG['BTC']['ADDR']."&shared=false&callback=".urlencode($CONFIG['BTC']['CB'])));

$_SESSION['address'] = $blockchain->input_address;

echo json_encode(array("error" => "none", "address" => $blockchain->input_address));
