<?php

/**
 * MongoDB\Driver\Exception\WriteException.
 *
 * Base class for exceptions thrown by a failed write operation. The exception encapsulates a MongoDB\Driver\WriteResult object.
 *
 * @property MongoDB\Driver\WriteResult $writeResult
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-exception-writeexception.php
 */

namespace MongoDB\Driver\Exception;

abstract class WriteException extends MongoDB\Driver\Exception\RuntimeException implements MongoDB\Driver\Exception\Exception
{
    protected $writeResult;

    /* Inherited methods */
    //protected $message;
    //protected $code;
    //protected $file;
    //protected $line;

    /**
     * getWriteResult.
     *
     * associated with the failed write operation.
     *
     * @return MongoDB\Driver\WriteResult
     *
     * @see http://php.net/manual/en/class.mongodb-driver-writeresult.php
     */
    final public function getWriteResult(): MongoDB\Driver\WriteResult
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
