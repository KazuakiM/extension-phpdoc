<?php

/**
 * MongoDB\BSON\Timestamp.
 * Represents a [BSON timestamp](https://docs.mongodb.com/manual/reference/bson-types/#timestamps), which is an internal MongoDB type not intended for general date storage.
 *
 * @see http://php.net/manual/en/class.mongodb-bson-timestamp.php
 */

namespace MongoDB\BSON;

class Timestamp implements MongoDB\BSON\Type, Serializable, JsonSerializable
{
    /**
     * __construct.
     * Construct a new Timestamp.
     *
     * @param int $increment
     * @param int $timestamp
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-bson-timestamp.construct.php
     */
    final public function __construct(int $increment, int $timestamp)
    {
    }

    /**
     * __toString.
     * Returns the string representation of this Timestamp.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-timestamp.tostring.php
     */
    final public function __toString(): string
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
     * @see http://php.net/manual/en/mongodb-bson-timestamp.jsonserialize.php
     */
    final public function jsonSerialize(): mixed
    {
    }

    /**
     * serialize.
     * Serialize a Timestamp.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-timestamp.serialize.php
     */
    final public function serialize(): string
    {
    }

    /**
     * unserialize.
     * Unserialize a Timestamp.
     *
     * @param string $serialized
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     * @throws MongoDB\Driver\Exception\UnexpectedValueException
     *
     * @see http://php.net/manual/en/mongodb-bson-timestamp.unserialize.php
     */
    final public function unserialize(string $serialized): void
    {
    }
}
