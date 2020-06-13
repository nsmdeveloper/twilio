<?php
require_once './vendor/autoload.php';
use Twilio\Twiml;

$response = new Twiml();
//$digit = $_REQUEST['Digits'];

switch($_REQUEST['Digits']) {

	//Mi corazon encantado

	#https://16903.live.streamtheworld.com/977_HITSAAC_SC

	#https://live.wostreaming.net/direct/galaxy-wkllhd2mp3-ibc1?source=TuneIn

	case "1":
	$response->play('https://live.wostreaming.net/direct/galaxy-wkllhd2mp3-ibc1?source=TuneIn', array('loop' => 1));

	#$response->play('https://16903.live.streamtheworld.com/977_HITSAAC_SC', array('loop' => 1));
	echo $response;
	break;
	//Angeles Fuimos
	case "2":
	$response->play('https://fast-cove-95462.herokuapp.com/2.mp3', array('loop' => 1));
	echo $response;
	break;
	//El galactico
	case "3":
	$response->play('https://fast-cove-95462.herokuapp.com/3.mp3', array('loop' => 1));
	echo $response;
	break;
	//EL gladiador
	case "4":
	$response->play('https://fast-cove-95462.herokuapp.com/4.mp3', array('loop' => 1));
	echo $response;
	break;
	//El vengador
	case "5":
	$response->play('https://fast-cove-95462.herokuapp.com/5.mp3', array('loop' => 1));
	echo $response;
	break;
	//Por defecto Mi corazon encantado
	default:
	$response->play('https://fast-cove-95462.herokuapp.com/1.mp3', array('loop' => 1));
	echo $response;
	break;

}



?>