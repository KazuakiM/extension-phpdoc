<?php

/**
 * MongoDB\Driver\Query.
 * The MongoDB\Driver\Query class is a value object that represents a database query.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-query.php
 */

namespace MongoDB\Driver;

final class Query
{
    /**
     * __construct.
     * Construct new Query.
     *
     * @param array|object mixed $filter
     * @param array              $queryOptions (optional)
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-driver-query.construct.php
     */
    final public function __construct(mixed $filter, array $queryOptions)
    {
    }
}
