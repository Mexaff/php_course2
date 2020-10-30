<?php


namespace Homework2\Task2\Classes;


class Tank extends Vehicle
{
    public function __construct($speed = null)
    {
        if($speed < 0 || is_null($speed)) {
            $this->speed = 60;
        } else {
            $this->speed = $speed;
        }
        $this->fire = true;
        $this->wheelsCount = false;
        $this->motorType = 'motor';
        $this->catePillar = 100;
        $this->doorsCount = 1;
    }
}