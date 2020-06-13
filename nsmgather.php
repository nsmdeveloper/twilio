<?php
require_once './vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;

$response = new VoiceResponse();
$gather = $response->gather([
	'action' => '/nsmgather_process.php',
	'numDigits' => 1,
    'method' => 'POST'
]);
$gather->say('Gracias por llamar a natiumsoft, para comunicarse con ventas presione 1, soporte presione 2' , ['voice' => 'woman', 'language' => 'es-ES']);
$response->say('Lo sentimos el tiempo se ha agotado, bye.', ['voice' => 'woman', 'language' => 'es-ES']);

header('Content-Type: text/xml');
echo $response;
