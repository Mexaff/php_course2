<?php

include_once __DIR__ . '/../../vendor/autoload.php';

use Homework2\Task2\Classes\Car;
use Homework2\Task2\Classes\Bike;
use Homework2\Task2\Classes\Tank;

$car = new Car();

echo $car->getWheelCount() . '<br>';
echo $car->getDoorsCount() . '<br>';
echo $car->getMotorType() . '<br>';
echo $car->getSpeed() . '<br>';
$car->accelerate(10);
$car->decelerate(5);
echo $car->getSpeed() . '<br>';

$bike = new Bike();
echo $bike->getWheelCount(). '<br>'; //вернет количество колес
echo $bike->getMotorType(). '<br>'; // вернет тип двигателя: мотор или мускулы
$bike->accelerate(10); // установить скорость 10 км/ч
$bike->decelerate(5);
echo $bike->getSpeed(). '<br>';
echo '<br>';


$tank = new Tank();
echo $tank->getCatepillar(). '<br>'; //вернет количество траков гусеницы
echo $tank->getMotorType(). '<br>'; // вернет тип двигателя: мотор или мускулы
$tank->accelerate(10); // установить скорость 10 км/ч
$tank->decelerate(5); // уменьшить скорость до 5 км/ч
echo $car->getSpeed() . '<br>';
echo $tank->fire(). '<br>'; // сделать выстрел, "Бах"