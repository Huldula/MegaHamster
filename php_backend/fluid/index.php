<?php

require_once '../vendor/autoload.php';

use HTL3R\MegaHamster\Rooms\TheFlat;
use HTL3R\MegaHamster\Rooms\ThePit;
use HTL3R\MegaHamster\Rooms\TheRoom;

$view = new \TYPO3Fluid\Fluid\View\TemplateView();

$room = new TheRoom(80, 90, 100, 110);
$room->setImageLocation('/api/Images/flat.jpg');
$flat = new TheFlat(80, 90, 100, 111);
$flat->setImageLocation('/api/Images/flat.jpg');
$pit = new ThePit(80, 90);
$pit->setImageLocation('/api/Images/flat.jpg');

$view->assignMultiple([
    'title' => 'MegaHamster',
    'content' => [
        [
            'name' => "The Flat",
            'image' => $flat->getImageLocation(),
            'description' => $flat->basicOutputInfo(),
            'price' => $flat->getPrice()
        ],
        [
            'name' => "The Room",
            'image' => $room->getImageLocation(),
            'description' => $room->basicOutputInfo(),
            'price' => $room->getPrice()
        ],
        [
            'name' => "The Pit",
            'image' => $pit->getImageLocation(),
            'description' => $pit->basicOutputInfo(),
            'price' => $pit->getPrice()
        ]
    ]

]);

$paths = $view->getTemplatePaths();
$paths->setPartialRootPaths([__DIR__ .  '/partials']);

if(isset($_GET['id'])) {
    switch ($_GET['id']) {
        case '1':
            $paths->setTemplatePathAndFilename(__DIR__ . '/html/products.html');
            break;
        case '2':
            $paths->setTemplatePathAndFilename(__DIR__ . '/html/impressum.html');
            break;
        case '3':
            $paths->setTemplatePathAndFilename(__DIR__ . '/html/datenschutz.html');
            break;
    }
} else {
    $paths->setTemplatePathAndFilename(__DIR__ . '/html/products.html');
}

$output = $view->render();

echo $output;
