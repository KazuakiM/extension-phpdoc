<?php

/**
 * MongoDB\BSON\Binary.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-bson-binary.php
 */

namespace MongoDB\BSON;

class Binary implements MongoDB\BSON\Type, Serializable, JsonSerializable
{
    const TYPE_GENERIC = 0;
    const TYPE_FUNCTION = 1;
    const TYPE_OLD_BINARY = 2;
    const TYPE_OLD_UUID = 3;
    const TYPE_UUID = 4;
    const TYPE_MD5 = 5;
    const TYPE_USER_DEFINED = 128;

    /**
     * __construct.
     * Construct a new Binary.
     *
     * @param string $data
     * @param int    $type
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-bson-binary.construct.php
     */
    final public function __construct(string $data, int $type)
    {
    }

    /**
     * __toString.
     * Returns the Binary's data.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-binary.tostring.php
     */
    final public function __toString(): string
    {
    }

    /**
     * getData.
     * Returns the Binary's data.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-binary.getdata.php
     */
    final public function getData(): string
    {
    }

    /**
     * getType.
     * Returns the Binary's type.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return int
     *
     * @see http://php.net/manual/en/mongodb-bson-binary.gettype.php
     */
    final public function getType(): int
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
     * @see http://php.net/manual/en/mongodb-bson-binary.jsonserialize.php
     */
    final public function jsonSerialize(): mixed
    {
    }

    /**
     * serialize.
     * Serialize a Binary.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-binary.serialize.php
     */
    final public function serialize(): string
    {
    }

    /**
     * unserialize.
     * Unserialize a Binary.
     *
     * @param string $serialized
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     * @throws MongoDB\Driver\Exception\UnexpectedValueException
     *
     * @see http://php.net/manual/en/mongodb-bson-binary.unserialize.php
     */
    final public function unserialize(string $serialized): void
    {
    }
}
