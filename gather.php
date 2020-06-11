<?php
require_once './vendor/autoload.php';
use Twilio\Twiml;

$response = new Twiml();
$gather = $response->gather(['numDigits' => '1', 'action' => '/twilio/process_gather.php',
    'method' => 'GET']);
$gather->play('https://nsmtickets.000webhostapp.com/menu.mp3', array('loop' => 2));
//$gather->say('Gracias por llamar, por favor al escuchar el menu presiona el digito deseado luego de la tecla de numero. Para escuchar la cancion Mi corazon encantado presiona 1, para escuchar la cancion Angeles Fuimos presiona 2',array("voice" => "alice", "language" => "es-ES"));
$response->say('Ningua opcion fue elegida, adios!');

echo $response;