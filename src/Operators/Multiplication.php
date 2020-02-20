<?php


namespace kzorluoglu\polymorphism\Operators;


use kzorluoglu\polymorphism\Interfaces\OperatorInterface;
use kzorluoglu\polymorphism\Interfaces\ValueInterface;

class Multiplication implements OperatorInterface
{

    /** @var ValueInterface */
    protected $leftValue;
    /** @var ValueInterface */
    protected $rightValue;
    /**
     * Multiplication constructor.
     * @param ValueInterface $leftValue
     * @param ValueInterface $rightValue
     */
    public function __construct(ValueInterface $leftValue, ValueInterface $rightValue)
    {
        $this->leftValue = $leftValue;
        $this->rightValue = $rightValue;
    }

    /**
     * @return mixed
     */
    public function calculate() : float
    {
        return $this->leftValue->get() * $this->rightValue->get();
    }
}