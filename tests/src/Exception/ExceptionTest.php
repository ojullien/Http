<?php

namespace OseilleTest\Http\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers \Oseille\Http\Exception\BadFunctionCallException
     * @group specification
     * @expectedException Oseille\Http\Exception\BadFunctionCallException
     */
    public function testBadFunctionCallException()
    {
        throw new \Oseille\Http\Exception\BadFunctionCallException(__METHOD__);
    }

    /**
     * @covers \Oseille\Http\Exception\BadMethodCallException
     * @group specification
     * @expectedException Oseille\Http\Exception\BadMethodCallException
     */
    public function testBadMethodCallException()
    {
        throw new \Oseille\Http\Exception\BadMethodCallException(__METHOD__);
    }

    /**
     * @covers \Oseille\Http\Exception\DomainException
     * @group specification
     * @expectedException Oseille\Http\Exception\DomainException
     */
    public function testDomainException()
    {
        throw new \Oseille\Http\Exception\DomainException(__METHOD__);
    }

    /**
     * @covers \Oseille\Http\Exception\InvalidArgumentException
     * @group specification
     * @expectedException Oseille\Http\Exception\InvalidArgumentException
     */
    public function testInvalidArgumentException()
    {
        throw new \Oseille\Http\Exception\InvalidArgumentException(__METHOD__);
    }

    /**
     * @covers \Oseille\Http\Exception\LengthException
     * @group specification
     * @expectedException Oseille\Http\Exception\LengthException
     */
    public function testLengthException()
    {
        throw new \Oseille\Http\Exception\LengthException(__METHOD__);
    }

    /**
     * @covers \Oseille\Http\Exception\OutOfBoundsException
     * @group specification
     * @expectedException Oseille\Http\Exception\OutOfBoundsException
     */
    public function testOutOfBoundsException()
    {
        throw new \Oseille\Http\Exception\OutOfBoundsException(__METHOD__);
    }

    /**
     * @covers \Oseille\Http\Exception\OutOfRangeException
     * @group specification
     * @expectedException Oseille\Http\Exception\OutOfRangeException
     */
    public function testOutOfRangeException()
    {
        throw new \Oseille\Http\Exception\OutOfRangeException(__METHOD__);
    }

    /**
     * @covers \Oseille\Http\Exception\OverflowException
     * @group specification
     * @expectedException Oseille\Http\Exception\OverflowException
     */
    public function testOverflowException()
    {
        throw new \Oseille\Http\Exception\OverflowException(__METHOD__);
    }

    /**
     * @covers \Oseille\Http\Exception\RuntimeException
     * @group specification
     * @expectedException Oseille\Http\Exception\RuntimeException
     */
    public function testRuntimeException()
    {
        throw new \Oseille\Http\Exception\RuntimeException(__METHOD__);
    }

    /**
     * @covers \Oseille\Http\Exception\UnderflowException
     * @group specification
     * @expectedException Oseille\Http\Exception\UnderflowException
     */
    public function testUnderflowException()
    {
        throw new \Oseille\Http\Exception\UnderflowException(__METHOD__);
    }

    /**
     * @covers \Oseille\Http\Exception\UnexpectedValueException
     * @group specification
     * @expectedException Oseille\Http\Exception\UnexpectedValueException
     */
    public function testUnexpectedValueException()
    {
        throw new \Oseille\Http\Exception\UnexpectedValueException(__METHOD__);
    }
}
