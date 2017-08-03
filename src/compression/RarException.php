<?php

/**
 * RarException.
 * This class serves two purposes: it is the type of the exceptions thrown by the RAR extension functions and methods and it allows, through static methods to query and define the error behaviour of the extension, i.e., whether exceptions are thrown or only warnings are emitted.
 * The following error codes are used:
 *   -1 - error outside UnRAR library
 *   11 - insufficient memory
 *   12 - bad data
 *   13 - bad archive
 *   14 - unknown format
 *   15 - file open error
 *   16 - file create error
 *   17 - file close error
 *   18 - read error
 *   19 - write error
 *   20 - buffer too small
 *   21 - unkown RAR error
 *   22 - password required but not given.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.rarexception.php
 */
final class RarException extends Exception
{
    /**
     * isUsingExceptions.
     * Check whether error handling with exceptions is in use.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/rarexception.isusingexceptions.php
     */
    public static function isUsingExceptions(): bool
    {
    }

    /**
     * setUsingExceptions.
     * Activate and deactivate error handling with exceptions.
     *
     * @param bool $using_exceptions
     *
     * @see http://php.net/manual/en/rarexception.setusingexceptions.php
     */
    public static function setUsingExceptions(bool $using_exceptions): void
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
