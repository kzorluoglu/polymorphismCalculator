<?php

namespace kzorluoglu\polymorphism\tests\Types;

use kzorluoglu\polymorphism\Exceptions\ValueNotExistsException;
use kzorluoglu\polymorphism\Types\Value;
use PHPUnit\Framework\TestCase;

class ValueTest extends TestCase
{
    /** @test */
    public function setIntAndCheckValue()
    {
        $value = new Value(3);
        $this->assertSame(3.0, $value->get());
    }

    /** @test */
    public function setFloatAndCheckValue()
    {
        $value = new Value(3.0);
        $this->assertSame(3.0, $value->get());
    }

    /** @test */
    public function setStringFloatAndCheckValue()
    {
        $value = new Value('3.0');
        $this->assertSame(3.0, $value->get());
    }

    /** @test */
    public function setStringAndCheckValue()
    {
        $value = new Value('3');
        $this->assertSame(3.0, $value->get());
    }

    /** @test */
    public function setEmptyAndCheckValue()
    {
        $this->expectException(ValueNotExistsException::class);
        new Value('');
    }

    /** @test */
    public function setNullAndCheckValue()
    {
        $this->expectException(ValueNotExistsException::class);
        new Value(NULL);
    }
}
