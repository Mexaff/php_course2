<?php


namespace Homework2\Task2\Classes;
use Homework2\Task2\Interfaces\Catepillar;
use Homework2\Task2\Interfaces\Doors;
use Homework2\Task2\Interfaces\Fire;
use Homework2\Task2\Interfaces\Motor;
use Homework2\Task2\Interfaces\Speed;
use Homework2\Task2\Interfaces\Wheels;

class Vehicle implements Catepillar, Doors, Fire, Motor, Speed, Wheels
{
    protected $doorsCount;
    protected $speed;
    protected $motorType;
    protected $catePillar;
    protected $wheelsCount;
    protected $fire;

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
        if(is_null($this->doorsCount)) {
            return 'This vehicle haven`t door`s';
        }
        return $this->doorsCount;
    }

    public function getMotorType()
    {
        return $this->motorType;
    }


    public function getWheelCount()
    {
        if(is_null($this->wheelsCount)) {
            return 'This vehicle haven`t wheels';
        }
        return $this->wheelsCount;
    }

    public function fire()
    {
        if(is_null($this->fire)) {
            return false;
        }
        return 'FIRE! FIRE!<br>';
    }

    public function getCatepillar()
    {
        if(is_null($this->catePillar)) {
            return 'This vehicle haven`t catepillar';
        }
        return $this->catePillar;
    }

}