<?php

/**
 * MongoDB\Driver\Exception\ExecutionTimeoutException.
 * Thrown when a query or command fails to complete within a specified time limit (e.g. [maxTimeMS](https://docs.mongodb.com/manual/tutorial/terminate-running-operations/#maxtimems)).
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-exception-executiontimeoutexception.php
 */

namespace MongoDB\Driver\Exception;

class ExecutionTimeoutException extends MongoDB\Driver\Exception\RuntimeException implements MongoDB\Driver\Exception\Exception
{
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
