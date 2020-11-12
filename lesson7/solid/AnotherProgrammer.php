<?php

//Hint - Open Closed Principle

abstract class Profession
{
    abstract public function text();
}

class AnotherProgrammer extends Profession
{
    public function text()
    {
        return 'coding';
    }
}
class Tester extends Profession
{
    public function text()
    {
        return 'testing';
    }
}

/** Что если добавить еще класс Designer с методом draw() **/

class ProjectManagement
{
    public function process(Profession $member)
    {
        return $member->text();
    }
}

$pm = new ProjectManagement();
echo $pm->process(new AnotherProgrammer());
echo $pm->process(new Tester());
