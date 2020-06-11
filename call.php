<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
use Twilio\Twiml;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC2a67fe8dd6ae1bc06173b92ef2519543';
$auth_token = 'dbc41ec111b494dbb9ebc626ef741f20';

// Start our TwiML response
$response = new Twiml;

// Read a message aloud to the caller
$response->say(
    "Gracias por llamar a Jeshua Internet!. Para comunicarse con ventas presione 1, Soprte presione 2, ser atendido por un representante marque 0 y espere en linea.", 
    array("voice" => "alice", "language" => "es-ES")
);
// Render the response as XML in reply to the webhook request
header('Content-Type: text/xml');
echo $response;
