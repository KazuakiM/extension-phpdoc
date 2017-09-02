<?php

/**
 * Throwable.
 * Throwable is the base interface for any object that can be thrown via a throw statement in PHP 7, including Error and Exception.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.throwable.php
 */
interface Throwable
{
    /**
     * __toString.
     * Gets a string representation of the thrown object.
     *
     * @return string
     *
     * @see http://php.net/manual/en/throwable.tostring.php
     */
    public function __toString(): string;

    /**
     * getMessage.
     * Gets the message.
     *
     * @return string
     *
     * @see http://php.net/manual/en/throwable.getmessage.php
     */
    public function getMessage(): string;

    /**
     * getCode.
     * Gets the exception code.
     *
     * @return int
     *
     * @see http://php.net/manual/en/throwable.getcode.php
     */
    public function getCode(): int;

    /**
     * getFile.
     * Gets the file in which the exception was created.
     *
     * @return string
     *
     * @see http://php.net/manual/en/throwable.getfile.php
     */
    public function getFile(): string;

    /**
     * getLine.
     * Gets the line on which the object was instantiated.
     *
     * @return int
     *
     * @see http://php.net/manual/en/throwable.getline.php
     */
    public function getLine(): int;

    /**
     * getTrace.
     * Gets the stack trace.
     *
     * @return array
     *
     * @see http://php.net/manual/en/throwable.gettrace.php
     */
    public function getTrace(): array;

    /**
     * getTraceAsString.
     * Gets the stack trace as a string.
     *
     * @return string
     *
     * @see http://php.net/manual/en/throwable.gettraceasstring.php
     */
    public function getTraceAsString(): string;

    /**
     * getPrevious.
     * Returns the previous Throwable.
     *
     * @return Throwable
     *
     * @see http://php.net/manual/en/throwable.getprevious.php
     */
    public function getPrevious(): Throwable;
}
