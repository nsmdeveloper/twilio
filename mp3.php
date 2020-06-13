<?php

$mp3path = "https://playerservices.streamtheworld.com/api/livestream-redirect/977_HITSAAC_SC";

$file = 'https://playerservices.streamtheworld.com/api/livestream-redirect/977_HITSAAC_SC';

header("Content-Type: audio/mpeg");
echo file_get_contents($file)
//header("Content-Transfer-Encoding: binary");
//header("Content-Disposition: attachment; filename=".$file);
//header("Content-Length: ".filesize($file));

//readfile(file_get_contents($file));