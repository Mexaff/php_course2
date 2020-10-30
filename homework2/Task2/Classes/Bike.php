<?php


namespace Homework2\Task2\Classes;


class Bike extends Vehicle
{
    public function __construct($speed = null)
    {
        if($speed < 0 || is_null($speed)) {
            $this->speed = 15;
        } else {
            $this->speed = $speed;
        }
        $this->fire = false;
        $this->wheelsCount = 2;
        $this->doorsCount = null;
        $this->motorType = 'musqle';
        $this->catePillar = null;
    }
}