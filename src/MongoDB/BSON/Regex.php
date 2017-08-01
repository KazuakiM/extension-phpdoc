<?php

/**
 * MongoDB\BSON\Regex.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-bson-regex.php
 */

namespace MongoDB\BSON;

class Regex implements MongoDB\BSON\Type, Serializable, JsonSerializable
{
    /**
     * __construct.
     * Construct a new Regex.
     *
     * @param string $pattern
     * @param string $flags   = ''
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-bson-regex.construct.php
     */
    final public function __construct(string $pattern, string $flags = '')
    {
    }

    /**
     * __toString.
     * Returns the string representation of this Regex.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-regex.tostring.php
     */
    final public function __toString(): string
    {
    }

    /**
     * getFlags.
     * Returns the Regex's flags.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-regex.getflags.php
     */
    final public function getFlags(): string
    {
    }

    /**
     * getPattern.
     * Returns the Regex's pattern.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-regex.getpattern.php
     */
    final public function getPattern(): string
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
     * @see http://php.net/manual/en/mongodb-bson-regex.jsonserialize.php
     */
    final public function jsonSerialize(): mixed
    {
    }

    /**
     * serialize.
     * Serialize a Regex.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-regex.serialize.php
     */
    final public function serialize(): string
    {
    }

    /**
     * unserialize.
     * Unserialize a Regex.
     *
     * @param string $serialized
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     * @throws MongoDB\Driver\Exception\UnexpectedValueException
     *
     * @see http://php.net/manual/en/mongodb-bson-regex.unserialize.php
     */
    final public function unserialize(string $serialized): void
    {
    }
}
