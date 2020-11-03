<?php

namespace Homework4\Task4\Exceptions;

class InvalidInputTypeException extends \Exception
{
    public function __construct($name)
    {
        $message = 'Incorrect data in ' . $name;
        parent::__construct($message);
    }
}