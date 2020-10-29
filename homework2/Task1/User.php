<?php

namespace Homework2\Task1;

abstract class User
{
    abstract function getRole();

    protected $information;

    public function setInformation(string $information)
    {
        $this->information = $information;
    }

    public function getInformation()
    {
        return $this->information;
    }

}