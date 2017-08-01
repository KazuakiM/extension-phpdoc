<?php

/**
 * MongoDB\BSON\Persistable.
 * Classes may implement this interface to take advantage of automatic ODM (object document mapping) behavior in the driver. During serialization, the driver will inject a __pclass property containing the PHP class name into the data returned by MongoDB\BSON\Serializable::bsonSerialize(). During unserialization, the same __pclass property will then be used to infer the PHP class (independent of any type map configuration) to be constructed before MongoDB\BSON\Unserializable::bsonUnserialize() is invoked. See Persisting Data for additional information.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.mongodb-bson-persistable.php
 */

namespace MongoDB\BSON;

class Persistable implements MongoDB\BSON\Unserializable, MongoDB\BSON\Serializable
{
    /* Inherited methods */
    //abstract public array|object MongoDB\BSON\bsonSerialize()
    //abstract public function MongoDB\BSON\bsonUnserialize(array $data): void
}
