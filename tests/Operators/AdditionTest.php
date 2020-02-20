<?php


namespace kzorluoglu\polymorphism\tests\Operators;

use kzorluoglu\polymorphism\Exceptions\ValueNotExistsException;
use kzorluoglu\polymorphism\Operators\Addition;
use kzorluoglu\polymorphism\Types\Value;
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    /** @test */
    public function checkSumFloat()
    {
        $addition = new Addition(new Value(1), new Value(2));
        $this->assertSame(3.0, $addition->calculate());
    }

    /** @test */
    public function checkSumWithoutFloat()
    {
        $addition = new Addition(new Value(1), new Value(2));
        $this->assertNotSame(3, $addition->calculate());
    }

    /** @test */
    public function checkSumString()
    {
        $addition = new Addition(new Value('1'), new Value('2'));
        $this->assertSame(3.0, $addition->calculate());
    }

}