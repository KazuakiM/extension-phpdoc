<?php


/**
 * MongoDB\BSON\Unserializable.
 *
 * Classes that implement this interface may be specified in a type map for unserializing BSON arrays and documents (both root and embedded).
 *
 * @see http://php.net/manual/en/class.mongodb-bson-unserializable.php
 */

namespace MongoDB\BSON;

class Unserializable
{
    /**
     * bsonUnserialize.
     *
     * Constructs the object from a BSON array or document
     *
     * @param array $data
     *
     * @see http://php.net/manual/en/mongodb-bson-unserializable.bsonunserialize.php
     */
    abstract public function bsonUnserialize(array $data): void
    {
    }
}
