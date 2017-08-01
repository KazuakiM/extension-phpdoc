<?php

/**
 * MongoDB\BSON\Javascript.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-bson-javascript.php
 */

namespace MongoDB\BSON;

class Javascript implements MongoDB\BSON\Type, Serializable, JsonSerializable
{
    /**
     * __construct.
     * Construct a new Javascript.
     *
     * @param string       $code
     * @param array|object $scope (optional)
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @see http://php.net/manual/en/mongodb-bson-javascript.construct.php
     */
    final public function __construct(string $code, mixed $scope)
    {
    }

    /**
     * __toString.
     * Returns the Javascript's code.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-javascript.tostring.php
     */
    final public function __toString(): string
    {
    }

    /**
     * getCode.
     * Returns the Javascript's code.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-javascript.getcode.php
     */
    final public function getCode(): string
    {
    }

    /**
     * getScope.
     * Returns the Javascript's scope document.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/mongodb-bson-javascript.getscope.php
     */
    final public function getScope(): mixed
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
     * @see http://php.net/manual/en/mongodb-bson-javascript.jsonserialize.php
     */
    final public function jsonSerialize(): mixed
    {
    }

    /**
     * serialize.
     * Serialize a Javascript.
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     *
     * @return string
     *
     * @see http://php.net/manual/en/mongodb-bson-javascript.serialize.php
     */
    final public function serialize(): string
    {
    }

    /**
     * unserialize.
     * Unserialize a Javascript.
     *
     * @param string $serialized
     *
     * @throws MongoDB\Driver\Exception\InvalidArgumentException
     * @throws MongoDB\Driver\Exception\UnexpectedValueException
     *
     * @see http://php.net/manual/en/mongodb-bson-javascript.unserialize.php
     */
    final public function unserialize(string $serialized): void
    {
    }
}
