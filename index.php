<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MegaHamster</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


<?php

require 'vendor/autoload.php';

if (!isset($_GET['id']))
    $id = 1;
else
    $id = $_GET['id'];

switch($id) {
    case 1:
        include('products.php');
        break;
    case 2:
        include('impressum.php');
        break;
    case 3:
        include('datenschutz.php');
        break;
}

echo "<br><br>";
// print_r(gd_info());
?>

</body>
</html>