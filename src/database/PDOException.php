<?php

/**
 * PDOException.
 *
 * Represents an error raised by PDO. You should not throw a PDOException from your own code. See Exceptions for more information about Exceptions in PHP.
 *
 * @property array $errorInfo
 * @property string $code
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.pdoexception.php
 */
class PDOException extends RuntimeException
{
    public $errorInfo;
    protected $code;

    /* Inherited methods */
    //protected $message;
    //protected $code;
    //protected $file;
    //protected $line;

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
