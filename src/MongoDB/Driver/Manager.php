<?php

/**
 * MongoDB\Driver\Manager.
 * The MongoDB\Driver\Manager is the main entry point to the extension. It is responsible for maintaining connections to MongoDB (be it standalone server, replica set, or sharded cluster).
 * No connection to MongoDB is made upon instantiating the Manager. This means the MongoDB\Driver\Manager can always be constructed, even though one or more MongoDB servers are down.
 * Any write or query can throw connection exceptions as connections are created lazily. A MongoDB server may also become unavailable during the life time of the script. It is therefore important that all actions on the Manager to be wrapped in try/catch statements.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-manager.php
 */

namespace MongoDB\Driver;

final class Manager
{
    /**
     * __construct.
     * Create new MongoDB Manager.
     *
     * @param string $uri           = 'mongodb://127.0.0.1/'
     * @param array  $uriOptions    = []
     * @param array  $driverOptions = []
     *
     * @see http://php.net/manual/en/mongodb-driver-manager.construct.php
     */
    final public function __construct(string $uri = 'mongodb://127.0.0.1/', array $uriOptions = [], array $driverOptions = [])
    {
    }

    /**
     * executeBulkWrite.
     * Execute one or more write operations.
     *
     * @param string                      $namespace
     * @param MongoDB\Driver\BulkWrite    $bulk
     * @param MongoDB\Driver\WriteConcern $writeConcern (optional)
     *
     * @throws MongoDB\Driver\Exception\BulkWriteException
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     * @throws MongoDB\Driver\Exception\ConnectionException
     * @throws MongoDB\Driver\Exception\AuthenticationException
     * @throws MongoDB\Driver\Exception\RuntimeException
     *
     * @return MongoDB\Driver\WriteResult
     *
     * @see http://php.net/manual/en/mongodb-driver-manager.executebulkwrite.php
     */
    final public function executeBulkWrite(string $namespace, MongoDB\Driver\BulkWrite $bulk, MongoDB\Driver\WriteConcern $writeConcern): MongoDB\Driver\WriteResult
    {
    }

    /**
     * executeCommand.
     * Execute a database command.
     *
     * @param string                        $db
     * @param MongoDB\Driver\Command        $command
     * @param MongoDB\Driver\ReadPreference $readPreference (optional)
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     * @throws MongoDB\Driver\Exception\ConnectionException
     * @throws MongoDB\Driver\Exception\AuthenticationException
     * @throws MongoDB\Driver\Exception\RuntimeException
     *
     * @return MongoDB\Driver\Cursor
     *
     * @see http://php.net/manual/en/mongodb-driver-manager.executecommand.php
     */
    final public function executeCommand(string $db, MongoDB\Driver\Command $command, MongoDB\Driver\ReadPreference $readPreference): MongoDB\Driver\Cursor
    {
    }

    /**
     * executeQuery.
     * Execute a database query.
     *
     * @param string                        $namespace
     * @param MongoDB\Driver\Query          $query
     * @param MongoDB\Driver\ReadPreference $readPreference (optional)
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     * @throws MongoDB\Driver\Exception\ConnectionException
     * @throws MongoDB\Driver\Exception\AuthenticationException
     * @throws MongoDB\Driver\Exception\RuntimeException
     *
     * @return MongoDB\Driver\Cursor
     *
     * @see http://php.net/manual/en/mongodb-driver-manager.executequery.php
     */
    final public function executeQuery(string $namespace, MongoDB\Driver\Query $query, MongoDB\Driver\ReadPreference $readPreference): MongoDB\Driver\Cursor
    {
    }

    /**
     * getReadConcern.
     * Return the ReadConcern for the Manager.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return MongoDB\Driver\ReadConcern
     *
     * @see http://php.net/manual/en/mongodb-driver-manager.getreadconcern.php
     */
    final public function getReadConcern(): MongoDB\Driver\ReadConcern
    {
    }

    /**
     * getReadPreference.
     * Return the ReadPreference for the Manager.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return MongoDB\Driver\ReadPreference
     *
     * @see http://php.net/manual/en/mongodb-driver-manager.getreadpreference.php
     */
    final public function getReadPreference(): MongoDB\Driver\ReadPreference
    {
    }

    /**
     * getServers.
     * Return the servers to which this manager is connected.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return array
     *
     * @see http://php.net/manual/en/mongodb-driver-manager.getservers.php
     */
    final public function getServers(): array
    {
    }

    /**
     * getWriteConcern.
     * Return the WriteConcern for the Manager.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return MongoDB\Driver\WriteConcern
     *
     * @see http://php.net/manual/en/mongodb-driver-manager.getwriteconcern.php
     */
    final public function getWriteConcern(): MongoDB\Driver\WriteConcern
    {
    }

    /**
     * selectServer.
     * Select a server matching a read preference.
     *
     * @param MongoDB\Driver\ReadPreference $readPreference
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     * @throws MongoDB\Driver\Exception\ConnectionException
     * @throws MongoDB\Driver\Exception\AuthenticationException
     * @throws MongoDB\Driver\Exception\RuntimeException
     *
     * @return MongoDB\Driver\Server
     *
     * @see http://php.net/manual/en/mongodb-driver-manager.selectserver.php
     */
    final public function selectServer(MongoDB\Driver\ReadPreference $readPreference): MongoDB\Driver\Server
    {
    }
}
