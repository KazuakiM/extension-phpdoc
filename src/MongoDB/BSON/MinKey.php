<?php

/**
 * MongoDB\BSON\MinKey.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-bson-minkey.php
 */

namespace MongoDB\BSON;

class MinKey implements MongoDB\BSON\Type, Serializable, JsonSerializable
{
    /**
     * __construct.
     * Construct a new MinKey.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-bson-minkey.construct.php
     */
    final public function __construct()
    {
    }

    /**
     * jsonSerialize.
     * Returns a representation that can be converted to JSON.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/mongodb-bson-minkey.jsonserialize.php
     */
    final public function jsonSerialize(): mixed
    {
    }

    /**
     * serialize.
     * Serialize a MinKey.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-minkey.serialize.php
     */
    final public function serialize(): string
    {
    }

    /**
     * unserialize.
     * Unserialize a MinKey.
     *
     * @param string $serialized
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-bson-minkey.unserialize.php
     */
    final public function unserialize(string $serialized): void
    {
    }
}
