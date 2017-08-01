<?php

/**
 * WeakMap.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.weakmap.php
 */
class WeakMap implements Countable, ArrayAccess, Iterator
{
    /**
     * __construct.
     * Constructs a new map.
     *
     * @see http://php.net/manual/en/weakmap.construct.php
     */
    public function __construct()
    {
    }

    /**
     * count.
     * Counts the number of live entries in the map.
     *
     * @return int
     *
     * @see http://php.net/manual/en/weakmap.count.php
     */
    public function count(): int
    {
    }

    /**
     * current.
     * Returns the current value under iteration.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/weakmap.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * key.
     * Returns the current key under iteration.
     *
     * @return object
     *
     * @see http://php.net/manual/en/weakmap.key.php
     */
    public function key(): object
    {
    }

    /**
     * next.
     * Advances to the next map element.
     *
     * @see http://php.net/manual/en/weakmap.next.php
     */
    public function next(): void
    {
    }

    /**
     * offsetExists.
     * Checks whether a certain object is in the map.
     *
     * @param object $object
     *
     * @return bool
     *
     * @see http://php.net/manual/en/weakmap.offsetexists.php
     */
    public function offsetExists(object $object): bool
    {
    }

    /**
     * offsetGet.
     * Returns the value pointed to by a certain object.
     *
     * @param object $object
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/weakmap.offsetget.php
     */
    public function offsetGet(object $object): mixed
    {
    }

    /**
     * offsetSet.
     * Updates the map with a new key-value pair.
     *
     * @param object $object
     * @param mixed  $value
     *
     * @see http://php.net/manual/en/weakmap.offsetset.php
     */
    public function offsetSet(object $object, mixed $value): void
    {
    }

    /**
     * offsetUnset.
     * Removes an entry from the map.
     *
     * @param object $object
     *
     * @see http://php.net/manual/en/weakmap.offsetunset.php
     */
    public function offsetUnset(object $object): void
    {
    }

    /**
     * rewind.
     * Rewinds the iterator to the beginning of the map.
     *
     * @see http://php.net/manual/en/weakmap.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * valid.
     * Returns whether the iterator is still on a valid map element.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/weakmap.valid.php
     */
    public function valid(): bool
    {
    }
}
