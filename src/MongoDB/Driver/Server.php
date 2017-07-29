<?php

/**
 * MongoDB\Driver\Server.
 *
 *
 *
 * @copyrightCopyright(http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed underCC by 3.0 or later(http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-server.php
 */

namespace MongoDB\Driver;

final class Server
{
    const TYPE_UNKNOWN = 0;
    const TYPE_STANDALONE = 1;
    const TYPE_MONGOS = 2;
    const TYPE_POSSIBLE_PRIMARY = 3;
    const TYPE_RS_PRIMARY = 4;
    const TYPE_RS_SECONDARY = 5;
    const TYPE_RS_ARBITER = 6;
    const TYPE_RS_OTHER = 7;
    const TYPE_RS_GHOST = 8;

    /**
     * __construct.
     *
     * Create a new Server (not used)
     *
     * @see http://php.net/manual/en/mongodb-driver-server.construct.php
     */
    final private function __construct()
    {
    }

    /**
     * executeBulkWrite.
     *
     * Execute one or more write operations on this server
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
     * @see http://php.net/manual/en/mongodb-driver-server.executebulkwrite.php
     */
    final public function executeBulkWrite(string $namespace, MongoDB\Driver\BulkWrite $bulk, MongoDB\Driver\WriteConcern $writeConcern): MongoDB\Driver\WriteResult
    {
    }

    /**
     * executeCommand.
     *
     * Execute a database command on this server
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
     * @see http://php.net/manual/en/mongodb-driver-server.executecommand.php
     */
    final public function executeCommand(string $db, MongoDB\Driver\Command $command, MongoDB\Driver\ReadPreference $readPreference): MongoDB\Driver\Cursor
    {
    }

    /**
     * executeQuery.
     *
     * Execute a database query on this server
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
     * @see http://php.net/manual/en/mongodb-driver-server.executequery.php
     */
    final public function executeQuery(string $namespace, MongoDB\Driver\Query $query, MongoDB\Driver\ReadPreference $readPreference): MongoDB\Driver\Cursor
    {
    }

    /**
     * getHost.
     *
     * Returns the hostname of this server
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-driver-server.gethost.php
     */
    final public function getHost(): string
    {
    }

    /**
     * getInfo.
     *
     * Returns an array of information about this server
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return array
     *
     * @see http://php.net/manual/en/mongodb-driver-server.getinfo.php
     */
    final public function getInfo(): array
    {
    }

    /**
     * getLatency.
     *
     * Returns the latency of this server
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-driver-server.getlatency.php
     */
    final public function getLatency(): string
    {
    }

    /**
     * getPort.
     *
     * Returns the port on which this server is listening
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int
     *
     * @see http://php.net/manual/en/mongodb-driver-server.getport.php
     */
    final public function getPort(): int
    {
    }

    /**
     * getTags.
     *
     * Returns an array of tags describing this server in a replica set
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return array
     *
     * @see http://php.net/manual/en/mongodb-driver-server.gettags.php
     */
    final public function getTags(): array
    {
    }

    /**
     * getType.
     *
     * Returns an integer denoting the type of this server
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int
     *
     * @see http://php.net/manual/en/mongodb-driver-server.gettype.php
     */
    final public function getType(): int
    {
    }

    /**
     * isArbiter.
     *
     * Checks if this server is an arbiter member of a replica set
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/mongodb-driver-server.isarbiter.php
     */
    final public function isArbiter(): bool
    {
    }

    /**
     * isHidden.
     *
     * Checks if this server is a hidden member of a replica set
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/mongodb-driver-server.ishidden.php
     */
    final public function isHidden(): bool
    {
    }

    /**
     * isPassive.
     *
     * Checks if this server is a passive member of a replica set
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/mongodb-driver-server.ispassive.php
     */
    final public function isPassive(): bool
    {
    }

    /**
     * isPrimary.
     *
     * Checks if this server is a primary member of a replica set
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/mongodb-driver-server.isprimary.php
     */
    final public function isPrimary(): bool
    {
    }

    /**
     * isSecondary.
     *
     * Checks if this server is a secondary member of a replica set
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/mongodb-driver-server.issecondary.php
     */
    final public function isSecondary(): bool
    {
    }
}
