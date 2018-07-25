<?php
/**
 * This file is a part of the Ophp framework
 *
 * @category Ophp-Http
 * @package   Exception
 * @license MIT <https://github.com/ojullien/Ophp-Http/blob/master/LICENSE>
 */
namespace Ophp\Http\Exception;

/**
 * Exception thrown if an error which can only be found on runtime occurs.
 */
class RuntimeException extends \RuntimeException implements ExceptionInterface
{
}
