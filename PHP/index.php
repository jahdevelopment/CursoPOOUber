<?php

require_once('Car.php');
require_once('UberX.php');
require_once('UberPool.php');
require_once('UberVan.php');
require_once('Account.php');


$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->printDataCar();

$uberPool = new UberPool("TYU567",new Account("Andrea Ferran", "ANDA765"), "Ford", "Focus");
$uberPool->printDataCar();

$uberVan = new UberVan("OJL395", new Account("Raúl Ramírez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->printDataCar();

?>
