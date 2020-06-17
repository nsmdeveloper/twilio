<?php
require_once './vendor/autoload.php';
use Twilio\Rest\Client;

$sid    = "AC6190055b23a084c6969f9ebb7f2ea3f1";
$token  = "dbe0938fed6aade59abe4b74174f56b0";
$twilio = new Client($sid, $token);

$from = $_REQUEST['From'];
$body = $_REQUEST['Body'];

$res = file_get_contents("https://covid19.mathdro.id/api/countries/" . $body);

$c = json_decode($res);
$confirmed =  $c->confirmed->value;
$recovered = $c->recovered->value;
$deaths = $c->deaths->value;
$lastUpdate = $c->lastUpdate;

//sleep(3);

$debug = isset($_REQUEST['debug']) ? $_REQUEST['debug'] : 'no' ;



if (count($c) > 0) {

	$message = "Here is the summary of the COVID-19 cases in " . '*'.$body.'*' . " as at " . $lastUpdate . "\n\n";
	$message .= "*Confirmed Cases:* $confirmed \n";
	$message .= "*Recovered Cases:* $recovered \n";
	$message .= "*Deaths Recorded:* $deaths \n";
	$message .= "*lastUpdate:* $lastUpdate \n";

} else {

	$message = "Country *$body* not found or doesn't have any cases";

}

if ($debug == 'no') {

	$m = $twilio->messages
                  ->create($from, // to
                           [
                               "from" => "whatsapp:+14155238886",
                               "body" => $message
                           ]
                  );

} else if ($debug == 'yes') {

	echo $message;

	
}







