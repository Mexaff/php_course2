<?php


class Filter
{
    private $array = [];

    private function arrayNumbers()
    {
        $numbers = $this->array;
        foreach($this->array as $key => $value)
        {
            if(!is_numeric($value)) {
                unset($numbers[$key]);
            }
        }
        return $numbers;
    }

    private function arrayStrings()
    {
        $strings = $this->array;
        foreach($this->array as $key => $value)
        {
            if(is_numeric($value)) {
                unset($strings[$key]);
            }
        }
        return $strings;
    }

    public function __construct(array $arr)
    {
        $this->array = $arr;
    }

    public function __call($methodName, $arguments)
    {
        if($methodName == 'getNumbers') {
            return $this->arrayNumbers();
        }
        if($methodName == 'getStrings') {
            return $this->arrayStrings();
        }
        return null;
    }

}

$filter = new Filter(['f', 2, 't', 7, 2, 'k']);

var_dump($filter->getNumbers()); //[2,7,2]
var_dump($filter->getStrings()); // ['f', 't', 'k']