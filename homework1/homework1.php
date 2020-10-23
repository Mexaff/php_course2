<?php
include 'Into.php';
include 'Math.php';
include 'TaskFour.php';
include 'Accounting.php';

$task1 = new Into();
$task1->getClassName();

$task2 = new Math();
$task2->calcFactorial(4);

$task3 = new Math();
$task3->calculator('2^10');

$task4 = new TaskFour();
$task4->setArray([3, 5, 8, 4, 1, 7, 2, 9, 6, 0]);
$task4->sort();
var_dump($task4->getArray());
echo '<br>';

$task5 = new Accounting();
$task5->addUser(
    [
        'name' => 'Anton',
        'surname' => 'Ivanov',
        'accNumber' => '13214',
        'salary' => '12000',
        'taxes' => '3000',
    ]
);
var_dump($task5->users['13214']);
echo '<br>';
$task5->editUser('13214',
    [
        'name' => 'Vasya',
        'salary' => '15000',
        'taxes' => '3750',
    ]);
echo '<br>';
$task5->taxes();
