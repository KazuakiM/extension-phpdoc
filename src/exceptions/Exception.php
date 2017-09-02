<?php

/**
 * Exception.
 * Exception is the base class for all Exceptions in PHP 5, and the base class for all user exceptions in PHP 7.
 * In PHP 7, Exception implements the Throwable interface.
 *
 * @property string $message
 * @property int $code
 * @property string $file
 * @property int $line
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.exception.php
 */
class Exception
{
    protected $message;
    protected $code;
    protected $file;
    protected $line;

    /**
     * __construct.
     * Construct the exception.
     *
     * @param string    $message  = ""
     * @param int       $code     = 0
     * @param Throwable $previous = null
     *
     * @see http://php.net/manual/en/exception.construct.php
     */
    public function __construct(string $message = '', int $code = 0, Throwable $previous = null)
    {
    }

    /**
     * __toString.
     * String representation of the exception.
     *
     * @return string
     *
     * @see http://php.net/manual/en/exception.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * __clone.
     * Clone the exception.
     *
     * @see http://php.net/manual/en/exception.clone.php
     */
    final private function __clone()
    {
    }

    /**
     * getMessage.
     * Gets the Exception message.
     *
     * @return string
     *
     * @see http://php.net/manual/en/exception.getmessage.php
     */
    final public function getMessage(): string
    {
    }

    /**
     * getPrevious.
     * Returns previous Exception.
     *
     * @return Throwable
     *
     * @see http://php.net/manual/en/exception.getprevious.php
     */
    final public function getPrevious(): Throwable
    {
    }

    /**
     * getCode.
     * Gets the Exception code.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/exception.getcode.php
     */
    final public function getCode(): mixed
    {
    }

    /**
     * getFile.
     * Gets the file in which the exception was created.
     *
     * @return string
     *
     * @see http://php.net/manual/en/exception.getfile.php
     */
    final public function getFile(): string
    {
    }

    /**
     * getLine.
     * Gets the line in which the exception was created.
     *
     * @return int
     *
     * @see http://php.net/manual/en/exception.getline.php
     */
    final public function getLine(): int
    {
    }

    /**
     * getTrace.
     * Gets the stack trace.
     *
     * @return array
     *
     * @see http://php.net/manual/en/exception.gettrace.php
     */
    final public function getTrace(): array
    {
    }

    /**
     * getTraceAsString.
     * Gets the stack trace as a string.
     *
     * @return string
     *
     * @see http://php.net/manual/en/exception.gettraceasstring.php
     */
    final public function getTraceAsString(): string
    {
    }
}
