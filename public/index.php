<?php
require '../vendor/autoload.php';
//recherche class dans App virtuel, puis Wcs réel

$talkToMe = new App\Wcs\Hello();
echo $talkToMe->talk();