<?php


/**
 * MongoDB\BSON\Serializable.
 *
 * Classes that implement this interface may return data to be serialized as a BSON array or document in lieu of the object's public properties.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-bson-serializable.php
 */

namespace MongoDB\BSON;

class Serializable implements MongoDB\BSON\Type
{
    /**
     * bsonSerialize.
     *
     * Provides an array or document to serialize as BSON
     *
     * @return array|object
     *
     * @see http://php.net/manual/en/mongodb-bson-serializable.bsonserialize.php
     */
    abstract public function bsonSerialize(): mixed
    {
    }
}
