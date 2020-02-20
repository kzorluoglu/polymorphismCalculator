<?php


namespace kzorluoglu\polymorphism\Types;


use kzorluoglu\polymorphism\Exceptions\ValueNotExistsException;
use kzorluoglu\polymorphism\Interfaces\ValueInterface;

class Value implements ValueInterface
{
    private $value;

    public function __construct($value)
    {
        if(empty($value)){
            throw new ValueNotExistsException();
        }

        $this->value = (float)$value;
    }

    public function get() : float
    {
        return $this->value;
    }
}