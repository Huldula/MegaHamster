<?php

require 'vendor/autoload.php';
use HTL3R\MegaHamster\Rooms\TheRoom;
use HTL3R\MegaHamster\Rooms\ThePit;
use HTL3R\MegaHamster\Rooms\TheFlat;


header('Content-Type: application/json');

$response = new stdClass();

$room = new TheRoom(80, 90, 100, 110);
$room->setImageLocation('Images/flat.jpg');
$flat = new TheFlat(80, 90, 100, 111);
$flat->setImageLocation('Images/flat.jpg');
$pit = new ThePit(80, 90);
$pit->setImageLocation('Images/flat.jpg');

$response->flat = $flat->jsonSerialize();
$response->room = $room->jsonSerialize();
$response->pit = $pit->jsonSerialize();

echo json_encode($response);