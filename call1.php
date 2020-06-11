<?php
require_once './vendor/autoload.php';
use Twilio\Twiml;

$response = new Twiml();

$response->play('https://nsmtickets.000webhostapp.com/menu3.mp3', array('loop' => 2));

echo $response;