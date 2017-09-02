<?php

/**
 * MongoDB\Driver\BulkWrite.
 * The MongoDB\Driver\BulkWrite collects one or more write operations that should be sent to the server. After adding any number of insert, update, and delete operations, the collection may be executed via MongoDB\Driver\Manager::executeBulkWrite().
 * Write operations may either be ordered (default) or unordered. Ordered write operations are sent to the server, in the order provided, for serial execution. If a write fails, any remaining operations will be aborted. Unordered operations are sent to the server in an arbitrary order where they may be executed in parallel. Any errors that occur are reported after all operations have been attempted.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-bulkwrite.php
 */

namespace MongoDB\Driver;

final class BulkWrite implements Countable
{
    /**
     * __construct.
     * Create a new BulkWrite.
     *
     * @param array $options (optional)
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-driver-bulkwrite.construct.php
     */
    public function __construct(array $options)
    {
    }

    /**
     * count.
     * Count number of write operations in the bulk.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int
     *
     * @see http://php.net/manual/en/mongodb-driver-bulkwrite.count.php
     */
    public function count(): int
    {
    }

    /**
     * delete.
     * Add a delete operation to the bulk.
     *
     * @param array|object $filter
     * @param array        $deleteOptions (optional)
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-driver-bulkwrite.delete.php
     */
    public function delete(mixed $filter, array $deleteOptions): void
    {
    }

    /**
     * insert.
     * Add an insert operation to the bulk.
     *
     * @param array|object $document
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/mongodb-driver-bulkwrite.insert.php
     */
    public function insert(mixed $document): mixed
    {
    }

    /**
     * update.
     * Add an update operation to the bulk.
     *
     * @param array|object $filter
     * @param array|object $newObj
     * @param array        $updateOptions (optional)
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-driver-bulkwrite.update.php
     */
    public function update(mixed $filter, mixed $newObj, array $updateOptions): void
    {
    }
}
