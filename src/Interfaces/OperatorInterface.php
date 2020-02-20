<?php


namespace kzorluoglu\polymorphism\Interfaces;


interface OperatorInterface
{
    /**
     * @param ValueInterface $leftValue
     * @param ValueInterface $rightValue
     * @return mixed
     */
    public function __construct(ValueInterface $leftValue, ValueInterface $rightValue);
    public function calculate() : float;
}