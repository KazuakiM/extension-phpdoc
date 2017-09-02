<?php

/**
 * Judy.
 * The Judy class implements the ArrayAccess interface and the Iterator interface. This class, once instantiated, can be accessed like a PHP array.
 * A PHP Judy object (or Judy Array) can be one of the following type :
 *  Judy::BITSET
 *  Judy::INT_TO_INT
 *  Judy::INT_TO_MIXED
 *  Judy::STRING_TO_INT
 *  Judy::STRING_TO_MIXED.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.judy.php
 */
class Judy implements ArrayAccess, Iterator
{
    const BITSET = 1;
    const INT_TO_INT = 2;
    const INT_TO_MIXED = 3;
    const STRING_TO_INT = 4;
    const STRING_TO_MIXED = 5;

    /**
     * __construct.
     * Construct a new Judy object.
     *
     * @param int $judy_type
     *
     * @see http://php.net/manual/en/judy.construct.php
     */
    public function __construct(int $judy_type)
    {
    }

    /**
     * __destruct.
     * Destruct a Judy object.
     *
     * @see http://php.net/manual/en/judy.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * byCount.
     * Locate the Nth index present in the Judy array.
     *
     * @param int $nth_index
     *
     * @return int
     *
     * @see http://php.net/manual/en/judy.bycount.php
     */
    public function byCount(int $nth_index): int
    {
    }

    /**
     * count.
     * Count the number of elements in the Judy array.
     *
     * @param int $index_start = 0
     * @param int $index_end   = -1
     *
     * @return int
     *
     * @see http://php.net/manual/en/judy.count.php
     */
    public function count(int $index_start = 0, int $index_end = -1): int
    {
    }

    /**
     * first.
     * Search for the first index in the Judy array.
     *
     * @param mixed $index (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/judy.first.php
     */
    public function first(mixed $index): mixed
    {
    }

    /**
     * firstEmpty.
     * Search for the first absent index in the Judy array.
     *
     * @param mixed $index = 0
     *
     * @return int
     *
     * @see http://php.net/manual/en/judy.firstempty.php
     */
    public function firstEmpty($index = 0): int
    {
    }

    /**
     * free.
     * Free the entire Judy array.
     *
     * @return int
     *
     * @see http://php.net/manual/en/judy.free.php
     */
    public function free(): int
    {
    }

    /**
     * getType.
     * Return the type of the current Judy array.
     *
     * @return int
     *
     * @see http://php.net/manual/en/judy.gettype.php
     */
    public function getType(): int
    {
    }

    /**
     * last.
     * Search for the last index in the Judy array.
     *
     * @param string $index (optional)
     *
     * @see http://php.net/manual/en/judy.last.php
     */
    public function last(string $index): void
    {
    }

    /**
     * lastEmpty.
     * Search for the last absent index in the Judy array.
     *
     * @param int $index = -1
     *
     * @return int
     *
     * @see http://php.net/manual/en/judy.lastempty.php
     */
    public function lastEmpty(int $index = -1): int
    {
    }

    /**
     * memoryUsage.
     * Return the memory used by the Judy array.
     *
     * @return int
     *
     * @see http://php.net/manual/en/judy.memoryusage.php
     */
    public function memoryUsage(): int
    {
    }

    /**
     * next.
     * Search for the next index in the Judy array.
     *
     * @param mixed $index
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/judy.next.php
     */
    public function next(mixed $index): mixed
    {
    }

    /**
     * nextEmpty.
     * Search for the next absent index in the Judy array.
     *
     * @param int $index
     *
     * @return int
     *
     * @see http://php.net/manual/en/judy.nextempty.php
     */
    public function nextEmpty(int $index): int
    {
    }

    /**
     * offsetExists.
     * Whether a offset exists.
     *
     * @param mixed $offset
     *
     * @return bool
     *
     * @see http://php.net/manual/en/judy.offsetexists.php
     */
    public function offsetExists(mixed $offset): bool
    {
    }

    /**
     * offsetGet.
     * Offset to retrieve.
     *
     * @param mixed $offset
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/judy.offsetget.php
     */
    public function offsetGet(mixed $offset): mixed
    {
    }

    /**
     * offsetSet.
     * Offset to set.
     *
     * @param mixed $offset
     * @param mixed $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/judy.offsetset.php
     */
    public function offsetSet(mixed $offset, mixed $value): bool
    {
    }

    /**
     * offsetUnset.
     * Offset to unset.
     *
     * @param mixed $offset
     *
     * @return bool
     *
     * @see http://php.net/manual/en/judy.offsetunset.php
     */
    public function offsetUnset(mixed $offset): bool
    {
    }

    /**
     * prev.
     * Search for the previous index in the Judy array.
     *
     * @param mixed $index
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/judy.prev.php
     */
    public function prev(mixed $index): mixed
    {
    }

    /**
     * prevEmpty.
     * Search for the previous absent index in the Judy array.
     *
     * @param mixed $index
     *
     * @return int
     *
     * @see http://php.net/manual/en/judy.prevempty.php
     */
    public function prevEmpty(mixed $index): int
    {
    }

    /**
     * size.
     * Return the size of the current Judy array.
     *
     * @see http://php.net/manual/en/judy.size.php
     */
    public function size(): void
    {
    }
}
