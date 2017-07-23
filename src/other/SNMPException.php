<?php

/**
 * SNMPException.
 *
 * Represents an error raised by SNMP. You should not throw a SNMPException from your own code. See Exceptions for more information about Exceptions in PHP.
 *
 * @property string $code
 *
 * @see http://php.net/manual/en/class.snmpexception.php
 */
class SNMPException extends RuntimeException
{
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
