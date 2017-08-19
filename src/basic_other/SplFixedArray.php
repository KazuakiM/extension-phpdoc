<?php

/**
 * SplFixedArray.
 * The SplFixedArray class provides the main functionalities of array. The main differences between a SplFixedArray and a normal PHP array is that the SplFixedArray is of fixed length and allows only integers within the range as indexes. The advantage is that it allows a faster array implementation.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.splfixedarray.php
 */
class SplFixedArray implements Iterator, ArrayAccess, Countable
{
    /**
     * __construct.
     * Constructs a new fixed array.
     *
     * @param int $size = 0
     *
     * @throws InvalidArgumentException
     *
     * @see http://php.net/manual/en/splfixedarray.construct.php
     */
    public function __construct(int $size = 0)
    {
    }

    /**
     * __wakeup.
     * Reinitialises the array after being unserialised.
     *
     *
     * @see http://php.net/manual/en/splfixedarray.wakeup.php
     */
    public function __wakeup(): void
    {
    }

    /**
     * count.
     * Returns the size of the array.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfixedarray.count.php
     */
    public function count(): int
    {
    }

    /**
     * current.
     * Return current array entry.
     *
     * @throws RuntimeException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/splfixedarray.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * fromArray.
     * Import a PHP array in a SplFixedArray instance.
     *
     * @param array $array
     * @param bool  $save_indexes = true
     *
     * @return SplFixedArray
     *
     * @see http://php.net/manual/en/splfixedarray.fromarray.php
     */
    public static function fromArray(array $array, bool $save_indexes = true): SplFixedArray
    {
    }

    /**
     * getSize.
     * Gets the size of the array.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfixedarray.getsize.php
     */
    public function getSize(): int
    {
    }

    /**
     * key.
     * Return current array index.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfixedarray.key.php
     */
    public function key(): int
    {
    }

    /**
     * next.
     * Move to next entry.
     *
     *
     * @see http://php.net/manual/en/splfixedarray.next.php
     */
    public function next(): void
    {
    }

    /**
     * offsetExists.
     * Returns whether the requested index exists.
     *
     * @param int $index
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfixedarray.offsetexists.php
     */
    public function offsetExists(int $index): bool
    {
    }

    /**
     * offsetGet.
     * Returns the value at the specified index.
     *
     * @param int $index
     *
     * @throws RuntimeException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/splfixedarray.offsetget.php
     */
    public function offsetGet(int $index): mixed
    {
    }

    /**
     * offsetSet.
     * Sets a new value at a specified index.
     *
     * @param int   $index
     * @param mixed $newval
     *
     * @throws RuntimeException
     *
     * @see http://php.net/manual/en/splfixedarray.offsetset.php
     */
    public function offsetSet(int $index, mixed $newval): void
    {
    }

    /**
     * offsetUnset.
     * Unsets the value at the specified $index.
     *
     * @param int $index
     *
     * @throws RuntimeException
     *
     * @see http://php.net/manual/en/splfixedarray.offsetunset.php
     */
    public function offsetUnset(int $index): void
    {
    }

    /**
     * rewind.
     * Rewind iterator back to the start.
     *
     *
     * @see http://php.net/manual/en/splfixedarray.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * setSize.
     * Change the size of an array.
     *
     * @param int $size
     *
     * @throws InvalidArgumentException
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfixedarray.setsize.php
     */
    public function setSize(int $size): int
    {
    }

    /**
     * toArray.
     * Returns a PHP array from the fixed array.
     *
     * @return array
     *
     * @see http://php.net/manual/en/splfixedarray.toarray.php
     */
    public function toArray(): array
    {
    }

    /**
     * valid.
     * Check whether the array contains more elements.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfixedarray.valid.php
     */
    public function valid(): bool
    {
    }
}
