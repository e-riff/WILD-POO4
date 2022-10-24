<?php

require_once './Car.php';



$car = new Car('green', 4, 'electric');
//$test = $car->start();

try {
    echo $car->start();
} catch (Exception $e) {
    // code to manage exceptions
    echo 'Exception received  : ' . $e->getMessage() . "<br>";
    $car->setParkBrake = false;
} finally {
    echo "Ma voiture roule comme un donuts !";
}
