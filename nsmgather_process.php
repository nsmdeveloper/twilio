<?php
require_once './vendor/autoload.php';
use Twilio\TwiML\VoiceResponse;

$response = new VoiceResponse();

switch ($_POST['Digits']) {
    case 1:
        $response->say('You selected sales. Good for you!');
        echo $response;
        break;
    case 2:
        $response->say('You need support. We will help!');
        echo $response;
        break;
    default:
        #$response->say('Sorry, I don\'t understand that choice.');
        #echo $response;
        $response->redirect('/nsmgather.php');
        break;
}
