<?php

/**
 * DOMException.
 *
 * @property  int $code
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.domexception.php
 */
class DOMException extends Exception
{
    public $code;

    /* Inherited methods */
    //final public function Exception::getMessage(): string
    //final public function Exception::getPrevious(): Throwable
    //final public function Exception::getCode(): mixed
    //final public function Exception::getFile(): string
    //final public function Exception::getLine(): int
    //final public function Exception::getTrace(): array
    //final public function Exception::getTraceAsString(): string
    //public function Exception::__toString(): string
    //final private function Exception::__clone(): void
}
