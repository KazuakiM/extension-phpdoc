<?php

/**
 * MongoDB\Driver\Exception\ConnectionTimeoutException.
 *
 * Thrown when the driver fails to establish a database connection within a specified time limit (e.g. [connectTimeoutMS](https://docs.mongodb.com/manual/reference/connection-string/#uri.connectTimeoutMS)).
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-exception-connectiontimeoutexception.php
 */

namespace MongoDB\Driver\Exception;

class ConnectionTimeoutException extends MongoDB\Driver\Exception\ConnectionException implements MongoDB\Driver\Exception\Exception
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
