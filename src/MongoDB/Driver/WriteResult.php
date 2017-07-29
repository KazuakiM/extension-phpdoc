<?php

/**
 * MongoDB\Driver\WriteResult.
 *
 * The MongoDB\Driver\WriteResult class encapsulates information about an executed MongoDB\Driver\BulkWrite and may be returned by MongoDB\Driver\Manager::executeBulkWrite().
 *
 * @copyrightCopyright(http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed underCC by 3.0 or later(http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-writeresult.php
 */

namespace MongoDB\Driver;

final class WriteResult
{
    /**
     * getDeletedCount.
     *
     * Returns the number of documents deleted
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int|null
     *
     * @see http://php.net/manual/en/mongodb-driver-writeresult.getdeletedcount.php
     */
    final public function getDeletedCount(): mixed
    {
    }

    /**
     * getInsertedCount.
     *
     * Returns the number of documents inserted (excluding upserts)
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int|null
     *
     * @see http://php.net/manual/en/mongodb-driver-writeresult.getinsertedcount.php
     */
    final public function getInsertedCount(): mixed
    {
    }

    /**
     * getMatchedCount.
     *
     * Returns the number of documents selected for update
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int|null
     *
     * @see http://php.net/manual/en/mongodb-driver-writeresult.getmatchedcount.php
     */
    final public function getMatchedCount(): mixed
    {
    }

    /**
     * getModifiedCount.
     *
     * Returns the number of existing documents updated
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int|null
     *
     * @see http://php.net/manual/en/mongodb-driver-writeresult.getmodifiedcount.php
     */
    final public function getModifiedCount(): mixed
    {
    }

    /**
     * getServer.
     *
     * Returns the server associated with this write result
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return MongoDB\Driver\Server
     *
     * @see http://php.net/manual/en/mongodb-driver-writeresult.getserver.php
     */
    final public function getServer(): MongoDB\Driver\Server
    {
    }

    /**
     * getUpsertedCount.
     *
     * Returns the number of documents inserted by an upsert
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int|null
     *
     * @see http://php.net/manual/en/mongodb-driver-writeresult.getupsertedcount.php
     */
    final public function getUpsertedCount(): mixed
    {
    }

    /**
     * getUpsertedIds.
     *
     * Returns an array of identifiers for upserted documents
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return array
     *
     * @see http://php.net/manual/en/mongodb-driver-writeresult.getupsertedids.php
     */
    final public function getUpsertedIds(): array
    {
    }

    /**
     * getWriteConcernError.
     *
     * Returns any write concern error that occurred
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return MongoDB\Driver\WriteConcernError|null
     *
     * @see http://php.net/manual/en/mongodb-driver-writeresult.getwriteconcernerror.php
     */
    final public function getWriteConcernError(): mixed
    {
    }

    /**
     * getWriteErrors.
     *
     * Returns any write errors that occurred
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return array
     *
     * @see http://php.net/manual/en/mongodb-driver-writeresult.getwriteerrors.php
     */
    final public function getWriteErrors(): array
    {
    }

    /**
     * isAcknowledged.
     *
     * Returns whether the write was acknowledged
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/mongodb-driver-writeresult.isacknowledged.php
     */
    final public function isAcknowledged(): bool
    {
    }
}
