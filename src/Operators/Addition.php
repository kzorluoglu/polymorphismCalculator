<?php


namespace kzorluoglu\polymorphism\Operators;


use kzorluoglu\polymorphism\Exceptions\ValueNotExistsException;
use kzorluoglu\polymorphism\Interfaces\OperatorInterface;
use kzorluoglu\polymorphism\Interfaces\ValueInterface;

class Addition implements OperatorInterface
{
    /** @var ValueInterface */
    private $leftValue;
    /** @var ValueInterface */
    private $rightValue;

    /**
     * @param ValueInterface $leftValue
     * @param ValueInterface $rightValue
     * @return mixed
     * @throws ValueNotExistsException
     */
    public function __construct(ValueInterface $leftValue, ValueInterface $rightValue)
    {
        $this->leftValue = $leftValue;
        $this->rightValue = $rightValue;
    }

    /**
     * @param ValueInterface $leftValue
     * @param ValueInterface $rightValue
     * @return mixed
     */
    public function calculate() : float
    {
        return $this->leftValue->get() + $this->rightValue->get();
    }
}