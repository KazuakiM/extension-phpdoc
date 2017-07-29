<?php

/**
 * MongoDB\BSON\ObjectID.
 *
 *
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-bson-objectid.php
 */

namespace MongoDB\BSON;

class ObjectID implements MongoDB\BSON\Type, Serializable, JsonSerializable
{
    /**
     * __construct.
     *
     * Construct a new ObjectID
     *
     * @param string $id (optional)
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-bson-objectid.construct.php
     */
    final public function __construct(string $id)
    {
    }

    /**
     * __toString.
     *
     * Returns the hexidecimal representation of this ObjectID
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-objectid.tostring.php
     */
    final public function __toString(): string
    {
    }

    /**
     * getTimestamp.
     *
     * Returns the timestamp component of this ObjectID
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int
     *
     * @see http://php.net/manual/en/mongodb-bson-objectid.gettimestamp.php
     */
    final public function getTimestamp(): int
    {
    }

    /**
     * jsonSerialize.
     *
     * Returns a representation that can be converted to JSON
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/mongodb-bson-objectid.jsonserialize.php
     */
    final public function jsonSerialize(): mixed
    {
    }

    /**
     * serialize.
     *
     * Serialize an ObjectID
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-objectid.serialize.php
     */
    final public function serialize(): string
    {
    }

    /**
     * unserialize.
     *
     * Unserialize an ObjectID
     *
     * @param string $serialized
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     * @throws MongoDB\Driver\Exception\UnexpectedValueException
     *
     * @see http://php.net/manual/en/mongodb-bson-objectid.unserialize.php
     */
    final public function unserialize(string $serialized): void
    {
    }
}
