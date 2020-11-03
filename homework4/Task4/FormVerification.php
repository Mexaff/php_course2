<?php

namespace Homework4\Task4;
include_once __DIR__ . '/../../vendor/autoload.php';

use Homework4\Task4\Exceptions\EmptyStringException;
use Homework4\Task4\Exceptions\InvalidInputTypeException;

class FormVerification
{
    private $temp;
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
        $this->temp = $_POST[$name];
    }

    public function StringVerification()
    {
        if(empty($this->temp)) {
            throw new EmptyStringException($this->name);
        }
    }

    public function InputTypeVerification($type)
    {
        if($type == 'string') {
            if(is_numeric($this->temp)) {
                throw new InvalidInputTypeException($this->name);
            }
        } elseif ($type == 'numeric') {
            if(!is_numeric($this->temp)) {
                throw new InvalidInputTypeException($this->name);
            }
        }
    }
}



try {
    $verification1 = new FormVerification('first_name');
    $verification1->StringVerification();
    $verification1->InputTypeVerification('string');


    echo 'The form has been completed successfully<br>';
} catch (EmptyStringException $e) {
    echo $e->getMessage();
} catch (InvalidInputTypeException $e) {
    echo $e->getMessage();
}

