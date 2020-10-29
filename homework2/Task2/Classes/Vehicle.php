<?php


namespace Homework2\Task2\Classes;
use Homework2\Task2\Interfaces\Catepillar;
use Homework2\Task2\Interfaces\Doors;
use Homework2\Task2\Interfaces\Fire;
use Homework2\Task2\Interfaces\Motor;
use Homework2\Task2\Interfaces\Speed;
use Homework2\Task2\Interfaces\Wheels;

class Vehicle
{
    protected $doorsCount;
    protected $speed;
    protected $motorType;
    protected $catePillar;
    protected $wheelsCount;

    public function accelerate($speed)
    {
        if($this->speed < $speed) {
            $this->speed = $speed;
        }
    }

    public function decelerate($speed)
    {
        if($this->speed > $speed) {
            $this->speed = $speed;
        }
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getDoorsCount()
    {
        return $this->doorsCount;
    }

    public function getMotorType()
    {
        return $this->motorType;
    }


    public function getWheelCount()
    {
        return $this->wheelsCount;
    }

    public function fire()
    {
        return 'FIRE! FIRE!<br>';
    }

}