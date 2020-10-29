<?php


namespace Homework2\Task1;


class Viewer extends User
{
    public function getRole()
    {
        $temp = explode('\\', __CLASS__);
        $temp = array_pop($temp);
        return mb_strtolower($temp);
    }
}