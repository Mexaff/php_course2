<?php

namespace Homework4\Task4\Exceptions;


class EmptyStringException extends \Exception
{
    public function __construct($name)
    {
        $message = 'String ' . $name . ' empty!';
        parent::__construct($message);
    }
}