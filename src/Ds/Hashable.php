<?php

/**
 * Ds\Hashable.
 * Hashable is an interface which allows objects to be used as keys. It’s an alternative to spl_object_hash(), which determines an object’s hash based on its handle: this means that two objects that are considered equal by an implicit definition would not treated as equal because they are not the same instance.
 * hash() is used to return a scalar value to be used as the object's hash value, which determines where it goes in the hash table. While this value does not have to be unique, objects which are equal must have the same hash value.
 * equals() is used to determine if two objects are equal. It's guaranteed that the comparing object will be an instance of the same class as the subject.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ds-hashable.php
 */

namespace Ds;

interface Hashable
{
    /**
     * equals.
     * Determines whether an object is equal to the current instance.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-hashable.equals.php
     */
    public function equals(object $obj): bool;

    /**
     * hash.
     * Returns a scalar value to be used as a hash value.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-hashable.hash.php
     */
    public function hash(): mixed;
}
