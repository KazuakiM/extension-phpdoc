<?php

/**
 * Error.
 * Error is the base class for all internal PHP errors.
 *
 * @property string $message
 * @property int $code
 * @property string $file
 * @property int $line
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.error.php
 */
class Error implements Throwable
{
    protected $message;
    protected $code;
    protected $file;
    protected $line;

    /**
     * __construct.
     * Construct the error object.
     *
     * @param string    $message  = ""
     * @param int       $code     = 0
     * @param Throwable $previous = NULL
     *
     * @see http://php.net/manual/en/error.construct.php
     */
    public function __construct(string $message = '', int $code = 0, Throwable $previous = null)
    {
    }

    /**
     * __toString.
     * String representation of the error.
     *
     * @return string
     *
     * @see http://php.net/manual/en/error.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * __clone.
     * Clone the error.
     *
     * @see http://php.net/manual/en/error.clone.php
     */
    final private function __clone()
    {
    }

    /**
     * getMessage.
     * Gets the error message.
     *
     * @return string
     *
     * @see http://php.net/manual/en/error.getmessage.php
     */
    final public function getMessage(): string
    {
    }

    /**
     * getPrevious.
     * Returns previous Throwable.
     *
     * @return Throwable
     *
     * @see http://php.net/manual/en/error.getprevious.php
     */
    final public function getPrevious(): Throwable
    {
    }

    /**
     * getCode.
     * Gets the error code.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/error.getcode.php
     */
    final public function getCode(): mixed
    {
    }

    /**
     * getFile.
     * Gets the file in which the error occurred.
     *
     * @return string
     *
     * @see http://php.net/manual/en/error.getfile.php
     */
    final public function getFile(): string
    {
    }

    /**
     * getLine.
     * Gets the line in which the error occurred.
     *
     * @return int
     *
     * @see http://php.net/manual/en/error.getline.php
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
     * @see http://php.net/manual/en/error.gettrace.php
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
     * @see http://php.net/manual/en/error.gettraceasstring.php
     */
    final public function getTraceAsString(): string
    {
    }
}
