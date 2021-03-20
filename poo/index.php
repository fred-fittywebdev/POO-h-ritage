<?php
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';


//insatnces of bike
$bike = new Bicycle('red', 2);

// new instance ofa bike to test the code
$bike2 = new Bicycle('black', 1);

// instances of car
$flash = new Car('blue', 2, 'fuel');
$martin = new Car('green', 4, 'electric');

//bike
echo '<strong>Vélo numéro 1 </strong><br>';
echo $bike->forward();
echo '<br> Le vélo va à ' . $bike->getCurrentSpeed() . 'km/h.' . '<br>';
echo $bike->brake();
echo '<br> Le vélo va à ' . $bike->getCurrentSpeed() . 'km/h.' . '<br><br>';
echo '<strong>Vélo numéro 2 </strong><br>';
echo $bike2->forward();
echo '<br> Le vélo va à ' . $bike2->getCurrentSpeed() . 'km/h.' . '<br>';
echo $bike2->brake();
echo '<br> Le vélo va à ' . $bike2->getCurrentSpeed() . 'km/h.' . '<br><br>';

echo '<strong>Voiture 1 </strong><br>';
// car
echo $flash->start();
echo '<br> La voiture va à ' . $flash->getCurrentSpeed() . 'km/h.' . '<br>';
echo $flash->forward();
echo '<br> La voiture va à ' . $flash->getCurrentSpeed() . 'km/h.' . '<br>';
echo $flash->brake();
echo '<br> La voiture va à ' . $flash->getCurrentSpeed() . 'km/h.' . '<br><br>';

echo '<strong>Voiture 2 </strong><br>';
echo $martin->start();
echo '<br> La voiture va à ' . $martin->getCurrentSpeed() . 'km/h.' . '<br>';
echo $martin->forward();
echo '<br> La voiture va à ' . $martin->getCurrentSpeed() . 'km/h.' . '<br>';
echo $martin->brake();
echo '<br> La voiture va à ' . $martin->getCurrentSpeed() . 'km/h.' . '<br><br>';

// Truck
echo '<strong>Camion </strong><br>';
$truck = new Truck('black', 2, 'electric', 10);

echo $truck->start();
echo '<br> Le camion va à ' . $truck->getCurrentSpeed() . 'km/h.' . '<br>';
echo $truck->forward();
echo '<br> Le camionva à ' . $truck->getCurrentSpeed() . 'km/h.' . '<br>';
echo Truck::is_full($truck);
echo "</br>";
$truck->setLoading(15);
echo Truck::is_full($truck) . '<br>';
echo $truck->brake();
echo '<br> Le camion va à ' . $martin->getCurrentSpeed() . 'km/h.' . '<br><br>';
var_dump($truck);