<?php
$digitPushed = $_POST['Digits'];
switch ($digitPushed){
  case "1":
  header("ETag: '".uniqid()."' ");
  header("Location: https://00be4d51.ngrok.io/twilio/1.mp3");
  break;
}
?>

