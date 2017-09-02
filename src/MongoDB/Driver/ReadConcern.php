<?php

/**
 * MongoDB\Driver\ReadConcern.
 * MongoDB\Driver\ReadConcern controls the level of isolation for read operations for replica sets and replica set shards. This option requires the WiredTiger storage engine and MongoDB 3.2 or later.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-readconcern.php
 */

namespace MongoDB\Driver;

final class ReadConcern implements MongoDB\BSON\Serializable
{
    const LINEARIZABLE = 'linearizable';
    const LOCAL = 'local';
    const MAJORITY = 'majority';

    /**
     * __construct.
     * Construct immutable ReadConcern.
     *
     * @param string $level (optional)
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-driver-readconcern.construct.php
     */
    final public function __construct(string $level)
    {
    }

    /**
     * bsonSerialize.
     * Returns an object for BSON serialization.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return object
     *
     * @see http://php.net/manual/en/mongodb-driver-readconcern.bsonserialize.php
     */
    final public function bsonSerialize(): object
    {
    }

    /**
     * getLevel.
     * Returns the ReadConcern's "level" option.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string|null
     *
     * @see http://php.net/manual/en/mongodb-driver-readconcern.getlevel.php
     */
    final public function getLevel(): mixed
    {
    }
}
