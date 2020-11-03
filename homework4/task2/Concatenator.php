<?php


class Concatenator
{
    public static function prepareString($str)
    {
        $temp =  str_replace(' ', '+', $str);
        return strtolower($temp);
    }
}

$concatenated = Concatenator::prepareString('I am concatenated');
echo $concatenated;