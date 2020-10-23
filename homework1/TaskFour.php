<?php


class TaskFour
{
    private $array = [];

    public function getArray()
    {
        return $this->array;
    }

    public function setArray(array $array = [])
    {
        $this->array = $array;
    }

    public function sort()
    {
        sort($this->array, SORT_NUMERIC);
    }


}