<?php

/**
 * Yaf_Exception.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-exception.php
 */
class Yaf_Exception extends Exception
{
    /* Inherited methods */
    //protected  $message;
    //protected  $code;
    //protected  $file;
    //protected  $line;

    /**
     * __construct.
     * The __construct purpose.
     *
     * @see http://php.net/manual/en/yaf-exception.construct.php
     */
    public function __construct()
    {
    }

    /**
     * getPrevious.
     * The getPrevious purpose.
     *
     * @see http://php.net/manual/en/yaf-exception.getprevious.php
     */
    public function getPrevious(): void
    {
    }

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
