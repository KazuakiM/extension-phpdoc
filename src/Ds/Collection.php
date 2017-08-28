<?php

/**
 * Ds\Collection.
 * Collection is the base interface which covers functionality common to all the data structures in this library. It guarantees that all structures are traversable, countable, and can be converted to json using json_encode().
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ds-collection.php
 */

namespace Ds;

interface Collection extends Traversable, Countable, JsonSerializable
{
    /**
     * clear.
     * Removes all values.
     *
     *
     * @see http://php.net/manual/en/ds-collection.clear.php
     */
    public function clear(): void;

    /**
     * copy.
     * Returns a shallow copy of the collection.
     *
     * @return Ds\Collection
     *
     * @see http://php.net/manual/en/ds-collection.copy.php
     */
    public function copy(): Ds\Collection;

    /**
     * isEmpty.
     * Returns whether the collection is empty.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-collection.isempty.php
     */
    public function isEmpty(): bool;

    /**
     * toArray.
     * Converts the collection to an array.
     *
     * @return array
     *
     * @see http://php.net/manual/en/ds-collection.toarray.php
     */
    public function toArray(): array;
}
