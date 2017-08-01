<?php

/**
 * MongoDB\Driver\WriteConcernError.
 * The MongoDB\Driver\WriteConcernError class encapsulates information about a write concern error and may be returned by MongoDB\Driver\WriteResult::getWriteConcernError().
 *
 * @copyrightCopyright(http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed underCC by 3.0 or later(http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-writeconcernerror.php
 */

namespace MongoDB\Driver;

final class WriteConcernError
{
    /**
     * getCode.
     * Returns the WriteConcernError's error code.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int
     *
     * @see http://php.net/manual/en/mongodb-driver-writeconcernerror.getcode.php
     */
    final public function getCode(): int
    {
    }

    /**
     * getInfo.
     * Returns additional metadata for the WriteConcernError.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/mongodb-driver-writeconcernerror.getinfo.php
     */
    final public function getInfo(): mixed
    {
    }

    /**
     * getMessage.
     * Returns the WriteConcernError's error message.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-driver-writeconcernerror.getmessage.php
     */
    final public function getMessage(): string
    {
    }
}
