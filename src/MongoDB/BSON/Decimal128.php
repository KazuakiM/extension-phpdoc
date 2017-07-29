<?php

/**
 * MongoDB\BSON\Decimal128.
 *
 * BSON type for the » Decimal128 floating-point format, which supports numbers with up to 34 decimal digits (i.e. significant digits) and an exponent range of −6143 to +6144.
 * Unlike the double BSON type (i.e. float in PHP), which only stores an approximation of the decimal values, the decimal data type stores the exact value. For example, MongoDB\BSON\Decimal128('9.99') has a precise value of 9.99 where as a double 9.99 would have an approximate value of 9.9900000000000002131628….
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-bson-decimal128.php
 */

namespace MongoDB\BSON;

class Decimal128 implements MongoDB\BSON\Type, Serializable, JsonSerializable
{
    /**
     * __construct.
     *
     * Construct a new Decimal128
     *
     *
     * @param string $value (optional)
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-bson-decimal128.construct.php
     */
    final public function __construct(string $value)
    {
    }

    /**
     * __toString.
     *
     * Returns the string representation of this Decimal128
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-decimal128.tostring.php
     */
    final public function __toString(): string
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
     * @see http://php.net/manual/en/mongodb-bson-decimal128.jsonserialize.php
     */
    final public function jsonSerialize(): mixed
    {
    }

    /**
     * serialize.
     *
     * Serialize a Decimal128
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-decimal128.serialize.php
     */
    final public function serialize(): string
    {
    }

    /**
     * unserialize.
     *
     * Unserialize a Decimal128
     *
     * @param string $serialized
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     * @throws MongoDB\Driver\Exception\UnexpectedValueException
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-bson-decimal128.unserialize.php
     */
    final public function unserialize(string $serialized): void
    {
    }
}
