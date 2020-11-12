<?php

//Hint - Interface Segregation Principle
interface CodeInterface
{
    public function canCode();
    public function code();
}

interface TestInterface
{
    public function test();
}

class Programmer implements CodeInterface, TestInterface
{
    public function canCode()
    {
        return true;
    }
    public function code()
    {
        return 'coding';
    }
    public function test()
    {
        return 'testing in localhost';
    }
}

class Tester implements TestInterface
{
    public function test()
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(CodeInterface $member)
    {
        if ($member->canCode()) {
            $member->code();
        }
    }
}
