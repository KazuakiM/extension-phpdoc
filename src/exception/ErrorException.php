<?php

/**
 * ErrorException.
 *
 * An Error Exception.
 *
 * @property int $severity
 * @property string $message
 * @property int $code
 * @property string $file
 * @property int $line
 *
 * @see http://php.net/manual/en/class.errorexception.php
 */
class ErrorException extends Exception
{
    protected $severity;

    /* Inherited properties */
    protected $message;
    protected $code;
    protected $file;
    protected $line;

    /**
     * __construct.
     *
     * Constructs the exception
     *
     * @param string    $message  = ""
     * @param int       $code     = 0
     * @param int       $severity = E_ERROR
     * @param string    $filename = __FILE__
     * @param int       $lineno   = __LINE__
     * @param Exception $previous = NULL
     *
     * @see http://php.net/manual/en/errorexception.construct.php
     */
    public function __construct(string $message = '', int $code = 0, int $severity = E_ERROR, string $filename = __FILE__, int $lineno = __LINE__, Exception $previous = null)
    {
    }

    /**
     * getSeverity.
     *
     * Gets the exception severity
     *
     * @return int
     *
     * @see http://php.net/manual/en/errorexception.getseverity.php
     */
    final public function getSeverity(): int
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
