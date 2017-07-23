<?php

/**
 * StompException.
 *
 * Represents an error raised by the stomp extension. See Exceptions for more information about Exceptions in PHP.
 *
 * @see http://php.net/manual/en/class.stompexception.php
 */
class StompException extends Exception
{
    /**
     * getDetails.
     *
     * Get exception details
     *
     * @return string
     *
     * @see http://php.net/manual/en/stomp.getdetails.php
     */
    public function getDetails(): string
    {
    }

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
