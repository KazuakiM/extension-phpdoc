<?php

/**
 * MongoDB\Driver\Cursor.
 * The MongoDB\Driver\Cursor class encapsulates the results of a MongoDB command or query and may be returned by MongoDB\Driver\Manager::executeCommand() or MongoDB\Driver\Manager::executeQuery(), respectively.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-cursor.php
 */

namespace MongoDB\Driver;

class Cursor implements Traversable
{
    /**
     * __construct.
     * Create a new Cursor (not used).
     *
     * @see http://php.net/manual/en/mongodb-driver-cursor.construct.php
     */
    final private function __construct()
    {
    }

    /**
     * getId.
     * Returns the ID for this cursor.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return MongoDB\Driver\CursorId
     *
     * @see http://php.net/manual/en/mongodb-driver-cursor.getid.php
     */
    final public function getId(): MongoDB\Driver\CursorId
    {
    }

    /**
     * getServer.
     * Returns the server associated with this cursor.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return MongoDB\Driver\Server
     *
     * @see http://php.net/manual/en/mongodb-driver-cursor.getserver.php
     */
    final public function getServer(): MongoDB\Driver\Server
    {
    }

    /**
     * isDead.
     * Checks if the cursor is still open on the server.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/mongodb-driver-cursor.isdead.php
     */
    final public function isDead(): bool
    {
    }

    /**
     * setTypeMap.
     * Sets a type map to use for BSON unserialization.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-driver-cursor.settypemap.php
     */
    final public function setTypeMap(array $typemap): void
    {
    }

    /**
     * toArray.
     * Returns an array containing all results for this cursor.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return array
     *
     * @see http://php.net/manual/en/mongodb-driver-cursor.toarray.php
     */
    final public function toArray(): array
    {
    }
}
