<?php
error_reporting(E_ALL);

use Car\Car;
use Person\Person;

spl_autoload_register(function ($className) {
    require_once str_replace('\\', '/', __DIR__) . '/' . str_replace('\\', '/', $className) . '.php';
});

$car1 = new Car('mercedes', 200, 100, 'black', 2);
$car2 = new Car('bmw', 250, 150, 'blue', 3);
echo $car1->getCurrentGear(), $car1->getCurrentSpeed(), $car2->getCurrentGear(), $car2->getCurrentSpeed(), '</br>';

$car1->setCurrentGear(5);
$car1->setCurrentSpeed(199);
echo $car1->getCurrentGear(), $car1->getCurrentSpeed(), $car2->getCurrentGear(), $car2->getCurrentSpeed(), '</br>';

$pesho = new Person('Pesho', '25');
$car1->setOwner($pesho);

echo $car1->getOwner()->getFirstName(), $car1->getOwner()->getAge(), '</br>';

$car1->changeGearUp();

$pesho->buyCar($car1);

echo $pesho->getCar()->getModel();

