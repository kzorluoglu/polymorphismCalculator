<?php

use kzorluoglu\polymorphism\Calculate;
use kzorluoglu\polymorphism\Operators\Addition;
use kzorluoglu\polymorphism\Operators\Multiplication;
use kzorluoglu\polymorphism\Types\Value;

require_once 'vendor/autoload.php';

class Calculator
{
    public function __construct()
    {
        static::calculate();
    }
    static function calculate()
    {
        $calculation = new Addition(new Value(2.5), new Value(2));
        echo "Result: {$calculation->calculate()}\n";
        $calculation = new Multiplication(new Value(22.5), new Value(3));
        echo "Result: {$calculation->calculate()}\n";
    }
}

$index = new Calculator();
