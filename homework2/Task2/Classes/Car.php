<?php


namespace Homework2\Task2\Classes;


class Car extends Vehicle
{
    public function __construct($speed = null, $doorCount = null)
    {
        if(is_null($doorCount) || $doorCount <0) {
            $this->doorsCount = 4;
        } else {
            $this->doorsCount = $doorCount;
        }
        if($speed < 0 || is_null($speed)) {
            $this->speed = 60;
        } else {
            $this->speed = $speed;
        }
        $this->fire = false;
        $this->wheelsCount = 4;
        $this->motorType = 'motor';
        $this->catePillar = null;
    }
}