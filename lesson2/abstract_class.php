<?php


abstract class Figure
{
    protected $dimentions;

    abstract function getSquare();
}

class Circle extends Figure
{
    public function __construct($radius)
    {
        $this->dimentions['radius'] = $radius;
    }

    public function getSquare()
    {
        return M_PI * pow($this->dimentions['radius'], 2);
    }

}

class Triangle extends Figure
{
    public function __construct($dimentions)
    {
        $this->dimentions = $dimentions;
    }
    public function getSquare()
    {
        return $this->dimentions['height'];
    }
}
$circle = new Circle(5);
echo $circle->getSquare() . '<br>';

$triangle = new Triangle(['height' => 65]);
echo $triangle->getSquare() . '<br>';