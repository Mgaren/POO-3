<?php

require_once 'cars.php';
require_once 'motorway.php';
require_once 'pedestrianway.php';
require_once 'residentialway.php';
require_once 'bicycle.php';

$renault = new Car('bleu', 5, 'electric');

echo $renault->forward();
echo '<br> vitesse de la voiture : ' . $renault->getCurrentSpeed() . ' Km/h' . '<br>';
echo $renault->brake();


$bike = new Bicycle('bleu', 1);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' Km/h' . '<br>';
echo $bike->brake();



require_once 'truck.php';

$truck = new Truck('black', 3, 'fuel', 50);
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' Km/h' . '<br>';
echo $truck->brake();

echo '<br>';
$truck->setLoad(20);
echo $truck->capacityVerification() . '<br>';

$truck->setLoad(50);
echo $truck->capacityVerification() . '<br>';



$voie4 = new MotorWay();

$voie4->addVehicle($renault);
$voie4->addVehicle($truck);
$voie4->addVehicle($bike);

$voie4->addVehicle(new Car('red', 3, 'electric'));
var_dump($voie4->getCurrentVehicles());


$voie1 = new PedestrianWay();

$voie1->addVehicle($renault);
$voie1->addVehicle($truck);
$voie1->addVehicle($bike);

var_dump($voie1->getCurrentVehicles());


$voie2 = new ResidentialWay();

$voie2->addVehicle($renault);
$voie2->addVehicle($truck);
$voie2->addVehicle($bike);

var_dump($voie2->getCurrentVehicles());