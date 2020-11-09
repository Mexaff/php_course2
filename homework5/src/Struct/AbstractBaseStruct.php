<?php


namespace QuizProcessing\Struct;


abstract class AbstractBaseStruct
{
//    protected $items;
//
//    public function __set($key, $value)
//    {
//        $this->items[$key] = $value;
//    }

    /**
     * Get struct name.
     * @return string
     */
    abstract public function getName(): string;

    /**
     * Get struct type.
     *
     * @return string
     */
    abstract public function getType(): string;
}