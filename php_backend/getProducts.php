<?php

require 'vendor/autoload.php';
use HTL3R\MegaHamster\Rooms\TheRoom;
use HTL3R\MegaHamster\Rooms\ThePit;
use HTL3R\MegaHamster\Rooms\TheFlat;


header('Content-Type: application/json');

//$response = new stdClass();

$room = new TheRoom(80, 90, 100, 110);
$room->setImageLocation('Images/theroom.png');
$flat = new TheFlat(80, 90, 100, 111);
$flat->setImageLocation('Images/theflat.png');
$pit = new ThePit(80, 90);
$pit->setImageLocation('Images/thepit.png');

$rooms = [
    $room->jsonSerialize(),
    $flat->jsonSerialize(),
    $pit->jsonSerialize()
];

echo json_encode($rooms);