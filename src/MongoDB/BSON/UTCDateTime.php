<?php

/**
 * MongoDB\BSON\UTCDateTime.
 * Represents a [BSON date](https://docs.mongodb.com/manual/reference/bson-types/#date).
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-bson-utcdatetime.php
 */

namespace MongoDB\BSON;

class UTCDateTime implements MongoDB\BSON\Type, Serializable, JsonSerializable
{
    /**
     * __construct.
     * Construct a new UTCDateTime.
     *
     * @param int|float|string|DateTimeInterface $milliseconds = null
     *
     * @see http://php.net/manual/en/mongodb-bson-utcdatetime.construct.php
     */
    final public function __construct(mixed $milliseconds = null)
    {
    }

    /**
     * __toString.
     * Returns the string representation of this UTCDateTime.
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-utcdatetime.tostring.php
     */
    final public function __toString(): string
    {
    }

    /**
     * jsonSerialize.
     * Returns a representation that can be converted to JSON.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/mongodb-bson-utcdatetime.jsonserialize.php
     */
    final public function jsonSerialize(): mixed
    {
    }

    /**
     * serialize.
     * Serialize a UTCDateTime.
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-utcdatetime.serialize.php
     */
    final public function serialize(): string
    {
    }

    /**
     * toDateTime.
     * Returns the DateTime representation of this UTCDateTime.
     *
     * @return DateTime
     *
     * @see http://php.net/manual/en/mongodb-bson-utcdatetime.todatetime.php
     */
    final public function toDateTime(): DateTime
    {
    }

    /**
     * unserialize.
     * Unserialize a UTCDateTime.
     *
     * @param string $serialized
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     * @throws MongoDB\Driver\Exception\UnexpectedValueException
     *
     * @see http://php.net/manual/en/mongodb-bson-utcdatetime.unserialize.php
     */
    final public function unserialize(string $serialized): void
    {
    }
}
