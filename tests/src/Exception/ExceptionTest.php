<?php

namespace OphpTest\Http\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers \Ophp\Http\Exception\BadFunctionCallException
     * @group specification
     * @expectedException Ophp\Http\Exception\BadFunctionCallException
     */
    public function testBadFunctionCallException()
    {
        throw new \Ophp\Http\Exception\BadFunctionCallException(__METHOD__);
    }

    /**
     * @covers \Ophp\Http\Exception\BadMethodCallException
     * @group specification
     * @expectedException Ophp\Http\Exception\BadMethodCallException
     */
    public function testBadMethodCallException()
    {
        throw new \Ophp\Http\Exception\BadMethodCallException(__METHOD__);
    }

    /**
     * @covers \Ophp\Http\Exception\DomainException
     * @group specification
     * @expectedException Ophp\Http\Exception\DomainException
     */
    public function testDomainException()
    {
        throw new \Ophp\Http\Exception\DomainException(__METHOD__);
    }

    /**
     * @covers \Ophp\Http\Exception\InvalidArgumentException
     * @group specification
     * @expectedException Ophp\Http\Exception\InvalidArgumentException
     */
    public function testInvalidArgumentException()
    {
        throw new \Ophp\Http\Exception\InvalidArgumentException(__METHOD__);
    }

    /**
     * @covers \Ophp\Http\Exception\LengthException
     * @group specification
     * @expectedException Ophp\Http\Exception\LengthException
     */
    public function testLengthException()
    {
        throw new \Ophp\Http\Exception\LengthException(__METHOD__);
    }

    /**
     * @covers \Ophp\Http\Exception\OutOfBoundsException
     * @group specification
     * @expectedException Ophp\Http\Exception\OutOfBoundsException
     */
    public function testOutOfBoundsException()
    {
        throw new \Ophp\Http\Exception\OutOfBoundsException(__METHOD__);
    }

    /**
     * @covers \Ophp\Http\Exception\OutOfRangeException
     * @group specification
     * @expectedException Ophp\Http\Exception\OutOfRangeException
     */
    public function testOutOfRangeException()
    {
        throw new \Ophp\Http\Exception\OutOfRangeException(__METHOD__);
    }

    /**
     * @covers \Ophp\Http\Exception\OverflowException
     * @group specification
     * @expectedException Ophp\Http\Exception\OverflowException
     */
    public function testOverflowException()
    {
        throw new \Ophp\Http\Exception\OverflowException(__METHOD__);
    }

    /**
     * @covers \Ophp\Http\Exception\RuntimeException
     * @group specification
     * @expectedException Ophp\Http\Exception\RuntimeException
     */
    public function testRuntimeException()
    {
        throw new \Ophp\Http\Exception\RuntimeException(__METHOD__);
    }

    /**
     * @covers \Ophp\Http\Exception\UnderflowException
     * @group specification
     * @expectedException Ophp\Http\Exception\UnderflowException
     */
    public function testUnderflowException()
    {
        throw new \Ophp\Http\Exception\UnderflowException(__METHOD__);
    }

    /**
     * @covers \Ophp\Http\Exception\UnexpectedValueException
     * @group specification
     * @expectedException Ophp\Http\Exception\UnexpectedValueException
     */
    public function testUnexpectedValueException()
    {
        throw new \Ophp\Http\Exception\UnexpectedValueException(__METHOD__);
    }

}
