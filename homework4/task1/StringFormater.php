<?php


class StringFormater
{
    public $strArray = [];

    public function __set($key, $value)
    {
        $this->strArray[$key] = $value;
    }

    public function __get($key)
    {
        return strtoupper($this->strArray[$key]);
    }


}

$stringFormater = new StringFormater();
$stringFormater->name = 'uSeRnaMe';
echo $stringFormater->name;