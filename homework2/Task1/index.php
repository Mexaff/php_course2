<?php

include_once __DIR__ . '/../../vendor/autoload.php';

use Homework2\Task1\Admin;

$admin = new Admin();
echo $admin->getRole() . '<br>';
$admin->setInformation('Name: Denys');
echo $admin->getInformation();