<?php

/**
 * MongoDB\Driver\WriteError.
 *
 * The MongoDB\Driver\WriteError class encapsulates information about a write error and may be returned as an array element from MongoDB\Driver\WriteResult::getWriteErrors().
 *
 * @copyrightCopyright(http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed underCC by 3.0 or later(http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-writeerror.php
 */

namespace MongoDB\Driver;

final class WriteError
{
    /**
     * getCode.
     *
     * Returns the WriteError's error code
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int
     *
     * @see http://php.net/manual/en/mongodb-driver-writeerror.getcode.php
     */
    final public function getCode(): int
    {
    }

    /**
     * getIndex.
     *
     * Returns the index of the write operation corresponding to this WriteError
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int
     *
     * @see http://php.net/manual/en/mongodb-driver-writeerror.getindex.php
     */
    final public function getIndex(): int
    {
    }

    /**
     * getInfo.
     *
     * Returns additional metadata for the WriteError
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/mongodb-driver-writeerror.getinfo.php
     */
    final public function getInfo(): mixed
    {
    }

    /**
     * getMessage.
     *
     * Returns the WriteError's error message
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-driver-writeerror.getmessage.php
     */
    final public function getMessage(): string
    {
    }
}
