<?php
require_once './vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;

$response = new VoiceResponse();
$gather = $response->gather([
	'action' => '/nsmgather_process.php',
	'numDigits' => 1,
    'method' => 'GET'
]);
$gather->say('For sales, press 1. For support, press 2.');
$response->say('We didn\'t receive any input. Goodbye!');

header('Content-Type: text/xml');
echo $response;
