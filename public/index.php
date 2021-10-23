<?php
require '../src/Vehicle.php';
require '../src/Bicycle.php';
require '../src/Car.php';
require '../src/Skateborad.php';
require '../src/HighWay.php';
require '../src/MotorWay.php';
require '../src/PedestrianWay.php';
require '../src/ResidentialWay.php';


$motorway = new MotorWay(4, 130);
$pedestrian = new PedestrianWay(1, 10);
$residential = new ResidentialWay(2, 50);

$car =  new Car('rouge', 5, 'fuel');
$bike = new Bicycle('blue', 5);
$skate = new Skateborad('red', 1);




try {
    $car->forward();
} catch (Exception $e) {
    echo $e->getMessage();
    $car->setParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un donut';
}


