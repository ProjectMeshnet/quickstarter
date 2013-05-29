<?
session_start();

if(!isset($_REQUEST['address'])) {
    die(json_encode(array("error"=>"send me your damn address!")));
}

if($_REQUEST['address'] != $_SESSION['address']) {
    die(json_encode(array("error"=>"address mismatch")));
}
