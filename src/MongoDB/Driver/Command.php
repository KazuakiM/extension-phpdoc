<?php

/**
 * MongoDB\Driver\Command.
 *
 * The MongoDB\Driver\Command class is a value object that represents a database command.
 * To provide "Command Helpers" the MongoDB\Driver\Command object should be composed.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-command.php
 */

namespace MongoDB\Driver;

final class Command
{
    /**
     * __construct.
     *
     * Create a new Command
     *
     * @param array|object $document
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-driver-command.construct.php
     */
    final public function __construct(mixed $document)
    {
    }
}
