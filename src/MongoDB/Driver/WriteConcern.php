<?php

/**
 * MongoDB\Driver\WriteConcern.
 *
 * MongoDB\Driver\WriteConcern describes the level of acknowledgement requested from MongoDB for write operations to a standalone mongod or to replica sets or to sharded clusters. In sharded clusters, mongos instances will pass the write concern on to the shards.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-writeconcern.php
 */

namespace MongoDB\Driver;

final class WriteConcern implements MongoDB\BSON\Serializable
{
    const MAJORITY = 'majority';

    /**
     * __construct.
     *
     * Construct immutable WriteConcern
     *
     * @param string|int $w
     * @param int        $wtimeout (optional)
     * @param bool       $journal  (optional)
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-driver-writeconcern.construct.php
     */
    final public function __construct(mixed $w, int $wtimeout, bool $journal)
    {
    }

    /**
     * bsonSerialize.
     *
     * Returns an object for BSON serialization
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return object
     *
     * @see http://php.net/manual/en/mongodb-driver-writeconcern.bsonserialize.php
     */
    final public function bsonSerialize(): object
    {
    }

    /**
     * getJournal.
     *
     * Returns the WriteConcern's "journal" option
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return bool|null
     *
     * @see http://php.net/manual/en/mongodb-driver-writeconcern.getjournal.php
     */
    final public function getJournal(): mixed
    {
    }

    /**
     * getW.
     *
     * Returns the WriteConcern's "w" option
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string|int|null
     *
     * @see http://php.net/manual/en/mongodb-driver-writeconcern.getw.php
     */
    final public function getW(): mixed
    {
    }

    /**
     * getWtimeout.
     *
     * Returns the WriteConcern's "wtimeout" option
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int
     *
     * @see http://php.net/manual/en/mongodb-driver-writeconcern.getwtimeout.php
     */
    final public function getWtimeout(): int
    {
    }
}
