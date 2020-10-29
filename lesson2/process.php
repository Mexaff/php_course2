<?php

interface NumericUnit
{
    /**
     * get sum of numbers
     *
     * @return mixed
     */
    public function sum();
}


interface StringUnit
{
    /**
     * get concatenated strings
     *
     * @return string
     */
    public function concatenate():string;
}

class Numbers implements NumericUnit
{
    private $inputNumbers;

    public function __construct(array $inputNumbers)
    {
        $this->inputNumbers = $inputNumbers;
    }

    /**
     * @return float|int
     */
    public function sum()
    {
        return array_sum($this->inputNumbers);
    }
}

class Strings implements StringUnit
{
    private $inputStrings;

    public function __construct($inputStrings)
    {
        $this->inputStrings = $inputStrings;
    }

    public function concatenate(): string
    {
        $string = '';
        foreach ($this->inputStrings as $item) {
            $string .= $item;
        }
        return $string;
    }
}

class UnitProcessor
{
    /**
     * @param NumericUnit|StringUnit $object
     */
    public static function process($object)
    {
        if ($object instanceof StringUnit) {
            return $object->concatenate();
        }

        if ($object instanceof  NumericUnit) {
            return $object->sum();
        }
    }
}

$stringUnit = new Strings( [
    'y' , 'e' , 's'
]);

$numberUnit = new Numbers( [
    1, 2, 3, 4, 5
]);

echo UnitProcessor::process($stringUnit) . '<br>';
echo UnitProcessor::process($numberUnit) . '<br>';