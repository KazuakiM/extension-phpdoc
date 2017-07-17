<?php


/**
 * Throwable.
 *
 * Throwable is the base interface for any object that can be thrown via a throw statement in PHP 7, including Error and Exception.
 *
 * @see http://php.net/manual/en/class.throwable.php
 */
interface Throwable
{
    /**
     * __toString.
     *
     * Gets a string representation of the thrown object
     *
     * @return string
     *
     * @see http://php.net/manual/en/throwable.tostring.php
     */
    abstract public function __toString(): string
    {
    }

    /**
     * getMessage.
     *
     * Gets the message
     *
     * @return string
     *
     * @see http://php.net/manual/en/throwable.getmessage.php
     */
    abstract public function getMessage(): string
    {
    }

    /**
     * getCode.
     *
     * Gets the exception code
     *
     * @return int
     *
     * @see http://php.net/manual/en/throwable.getcode.php
     */
    abstract public function getCode(): int
    {
    }

    /**
     * getFile.
     *
     * Gets the file in which the exception was created
     *
     * @return string
     *
     * @see http://php.net/manual/en/throwable.getfile.php
     */
    abstract public function getFile(): string
    {
    }

    /**
     * getLine.
     *
     * Gets the line on which the object was instantiated
     *
     * @return int
     *
     * @see http://php.net/manual/en/throwable.getline.php
     */
    abstract public function getLine(): int
    {
    }

    /**
     * getTrace.
     *
     * Gets the stack trace
     *
     * @return array
     *
     * @see http://php.net/manual/en/throwable.gettrace.php
     */
    abstract public function getTrace(): array
    {
    }

    /**
     * getTraceAsString.
     *
     * Gets the stack trace as a string
     *
     * @return string
     *
     * @see http://php.net/manual/en/throwable.gettraceasstring.php
     */
    abstract public function getTraceAsString(): string
    {
    }

    /**
     * getPrevious.
     *
     * Returns the previous Throwable
     *
     * @return Throwable
     *
     * @see http://php.net/manual/en/throwable.getprevious.php
     */
    abstract public function getPrevious(): Throwable
    {
    }
}
