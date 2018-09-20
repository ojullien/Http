<?php
/**
 * This file is a part of the Oseille framework
 *
 * @package Oseille\Http
 * @license MIT <https://github.com/Oseille/Http/blob/master/LICENSE>
 */
namespace Oseille\Http\Exception;

/**
 * Exception thrown to indicate range errors during program execution.
 * Normally this means there was an arithmetic error other than under/overflow.
 * This is the runtime version of DomainException.
 * This represents errors that cannot be detected at compile time.
 */
class RangeException extends \RangeException implements ExceptionInterface
{
}
