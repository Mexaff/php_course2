<?php

//Hint - use Single Responsibility Principle Violation
class Report
{
    private $formatter;

    public function __construct(Formatter $temp)
    {
        $this->formatter = $temp;
    }

    public function getTitle()
    {
        return 'Report Title';
    }

    public function getDate()
    {
        return '2016-04-21';
    }

    public function getContents()
    {
        return $this->formatter->encode([
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ]);
    }

}

interface Formatter
{
    public function encode(array $array);
}

class FormatJson implements Formatter
{
    public function encode(array $content)
    {
        return json_encode($content);
    }
}

