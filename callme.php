<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
use Twilio\Twiml;


$response = new Twiml();
$response->say(
    "Rhina, Natanael te dedica esta cancion", 
    array("voice" => "alice", "language" => "es-ES")
);
$response->play('https://nsmtickets.000webhostapp.com/1.mp3', array('loop' => 10));

echo $response;
