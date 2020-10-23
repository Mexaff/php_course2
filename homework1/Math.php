<?php


class Math
{
    public function calcFactorial(int $number)
    {
        if($number <= 0) {
            echo 'Incorrect value!<br>';
            die;
        }
        $sum = 0;

        for($counter = $number; $counter > 0; $counter-=1) {
            if($sum == 0) {
                $sum = $counter;
            } else {
                $sum *= $counter;
            }
        }
        echo $sum . '<br>';
    }

    public function calculator(string $expression)
    {
        $result = 0;
        if (strripos($expression, '*')) {
            $temp = explode('*', $expression);
            $result = (double)$temp[0] * (double)$temp[1];
        } else if (strripos($expression, '/')) {
            $temp = explode('/', $expression);
            $result = (double)$temp[0] / (double)$temp[1];
        } else if (strripos($expression, '+')) {
            $temp = explode('+', $expression);
            $result = (double)$temp[0] + (double)$temp[1];
        } else if (strripos($expression, '-')) {
            $temp = explode('-', $expression);
            $result = (double)$temp[0] - (double)$temp[1];
        } else if (strripos($expression, '^')) {
            $temp = explode('^', $expression);
            $result = pow((double)$temp[0], (double)$temp[1]);
        }
        echo $result . '<br>';
    }
}