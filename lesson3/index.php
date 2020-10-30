<?php

include_once __DIR__ . '/../vendor/autoload.php';

class Product
{
    private $collection;

    public function __get($key)
    {
        if (!isset($this->collection[$key])) {
            return null;
        }
        return $this->collection[$key];
    }

    public function __set($propertyName, $value)
    {
        $this->collection[$propertyName] = $value;
    }
}

$product = new Product();
//$product->name = 'T-Shirt';
$product->description = 'Some discription';
echo $product->name = 'T-Shirt'. '<br>';
//echo $product->name . '<br>';
var_dump($product);