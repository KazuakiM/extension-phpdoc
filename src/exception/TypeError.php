<?php

/**
 * TypeError.
 *
 * There are three scenarios where a TypeError may be thrown. The first is where the argument type being passed to a function does not match its corresponding declared parameter type. The second is where a value being returned from a function does not match the declared function return type. The third is where an invalid number of arguments are passed to a built-in PHP function (strict mode only).
 *
 * @see http://php.net/manual/en/class.typeerror.php
 */
class TypeError extends Error
{
    /* Inherited methods */
    //final public function getMessage(): string
    //final public function getPrevious(): Throwable
    //final public function getCode(): mixed
    //final public function getFile(): string
    //final public function getLine(): int
    //final public function getTrace(): array
    //final public function getTraceAsString(): string
    //public function __toString(): string
    //final private function __clone(): void
}
