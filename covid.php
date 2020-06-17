<?php

$debug = true;

if ($debug) {

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

}

$res = file_get_contents("https://covid19.mathdro.id/api/countries/" . $_REQUEST['country']);

//header("Content-Type: application/json");

$c = json_decode($res);

$body = $_REQUEST['country'];
$confirmed =  $c->confirmed->value;
$recovered = $c->recovered->value;
$deaths = $c->deaths->value;
$lastUpdate = $c->lastUpdate;

$message = "Here is the summary of the COVID-19 cases in " . '*'.$body.'*' . " as at " . $lastUpdate . "\n\n";
$message .= "*Confirmed Cases:* $confirmed \n";
$message .= "*Recovered Cases:* $recovered \n";
$message .= "*Deaths Recorded:* $deaths \n";
$message .= "*lastUpdate:* $lastUpdate \n";

echo  $message;
