<?php
require_once './vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;

$response = new VoiceResponse();

switch ($_POST['Digits']) {
    case 1:
        $response->say('Haz seleccionado ventas, como le podemos ayudar.');
        echo $response;
        break;
    case 2:
        $response->say('Haz seleccionado soporte, como le podemos ayudar.');
        echo $response;
        break;
    default:
        #$response->say('Sorry, I don\'t understand that choice.');
        #echo $response;
        $response->redirect('/nsmgather.php');
        echo $response;
        break;
}
