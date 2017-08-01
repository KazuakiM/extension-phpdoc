<?php

/**
 * MongoDB\Driver\ReadPreference.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-driver-readpreference.php
 */

namespace MongoDB\Driver;

final class ReadPreference implements MongoDB\BSON\Serializable
{
    const RP_PRIMARY = 1;
    const RP_PRIMARY_PREFERRED = 5;
    const RP_SECONDARY = 2;
    const RP_SECONDARY_PREFERRED = 6;
    const RP_NEAREST = 10;
    const NO_MAX_STALENESS = -1;
    const SMALLEST_MAX_STALENESS_SECONDS = 90;

    /**
     * __construct.
     * Construct immutable ReadPreference.
     *
     * @param int   $mode
     * @param array $tagSets = null
     * @param array $options = []
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-driver-readpreference.construct.php
     */
    final public function __construct(int $mode, array $tagSets = null, array $options = [])
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
     * @see http://php.net/manual/en/mongodb-driver-readpreference.bsonserialize.php
     */
    final public function bsonSerialize(): object
    {
    }

    /**
     * getMaxStalenessSeconds.
     * Returns the ReadPreference's "maxStalenessSeconds" option.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int
     *
     * @see http://php.net/manual/en/mongodb-driver-readpreference.getmaxstalenessseconds.php
     */
    final public function getMaxStalenessSeconds(): int
    {
    }

    /**
     * getMode.
     * Returns the ReadPreference's "mode" option.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int
     *
     * @see http://php.net/manual/en/mongodb-driver-readpreference.getmode.php
     */
    final public function getMode(): int
    {
    }

    /**
     * getTagSets.
     * Returns the ReadPreference's "tagSets" option.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return array
     *
     * @see http://php.net/manual/en/mongodb-driver-readpreference.gettagsets.php
     */
    final public function getTagSets(): array
    {
    }
}
