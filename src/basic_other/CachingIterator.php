<?php

/**
 * CachingIterator.
 * This object supports cached iteration over another iterator.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cachingiterator.php
 */
class CachingIterator extends IteratorIterator implements OuterIterator, ArrayAccess, Countable
{
    const CALL_TOSTRING = 1;
    const CATCH_GET_CHILD = 16;
    const TOSTRING_USE_KEY = 2;
    const TOSTRING_USE_CURRENT = 4;
    const TOSTRING_USE_INNER = 8;
    const FULL_CACHE = 256;

    /**
     * __construct.
     * Construct a new CachingIterator object for the iterator.
     *
     * @param Iterator $iterator
     * @param int      $flags    = self::CALL_TOSTRING
     *
     * @see http://php.net/manual/en/cachingiterator.construct.php
     */
    public function __construct(Iterator $iterator, int $flags = self::CALL_TOSTRING)
    {
    }

    /**
     * __toString.
     * Return the string representation of the current element.
     *
     * @see http://php.net/manual/en/cachingiterator.tostring.php
     */
    public function __toString(): void
    {
    }

    /**
     * count.
     * The number of elements in the iterator.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cachingiterator.count.php
     */
    public function count(): int
    {
    }

    /**
     * current.
     * Return the current element.
     *
     * @see http://php.net/manual/en/cachingiterator.current.php
     */
    public function current(): void
    {
    }

    /**
     * getCache.
     * Retrieve the contents of the cache.
     *
     * @throws BadMethodCallException
     *
     * @return array
     *
     * @see http://php.net/manual/en/cachingiterator.getcache.php
     */
    public function getCache(): array
    {
    }

    /**
     * getFlags.
     * Get flags used.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cachingiterator.getflags.php
     */
    public function getFlags(): int
    {
    }

    /**
     * getInnerIterator.
     * Returns the inner iterator.
     *
     * @return Iterator
     *
     * @see http://php.net/manual/en/cachingiterator.getinneriterator.php
     */
    public function getInnerIterator(): Iterator
    {
    }

    /**
     * hasNext.
     * Check whether the inner iterator has a valid next element.
     *
     * @see http://php.net/manual/en/cachingiterator.hasnext.php
     */
    public function hasNext(): void
    {
    }

    /**
     * key.
     * Return the key for the current element.
     *
     * @return scalar
     *
     * @see http://php.net/manual/en/cachingiterator.key.php
     */
    public function key(): scalar
    {
    }

    /**
     * next.
     * Move the iterator forward.
     *
     * @see http://php.net/manual/en/cachingiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * offsetExists.
     * The offsetExists purpose.
     *
     * @param string $index
     *
     * @see http://php.net/manual/en/cachingiterator.offsetexists.php
     */
    public function offsetExists(string $index): void
    {
    }

    /**
     * offsetGet.
     * The offsetGet purpose.
     *
     * @param string $index
     *
     * @see http://php.net/manual/en/cachingiterator.offsetget.php
     */
    public function offsetGet(string $index): void
    {
    }

    /**
     * offsetSet.
     * The offsetSet purpose.
     *
     * @param string $index
     * @param string $newval
     *
     * @see http://php.net/manual/en/cachingiterator.offsetset.php
     */
    public function offsetSet(string $index, string $newval): void
    {
    }

    /**
     * offsetUnset.
     * The offsetUnset purpose.
     *
     * @param string $index
     *
     * @see http://php.net/manual/en/cachingiterator.offsetunset.php
     */
    public function offsetUnset(string $index): void
    {
    }

    /**
     * rewind.
     * Rewind the iterator.
     *
     * @see http://php.net/manual/en/cachingiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * setFlags.
     * The setFlags purpose.
     *
     * @param int $flags
     *
     * @see http://php.net/manual/en/cachingiterator.setflags.php
     */
    public function setFlags(int $flags): void
    {
    }

    /**
     * valid.
     * Check whether the current element is valid.
     *
     * @see http://php.net/manual/en/cachingiterator.valid.php
     */
    public function valid(): void
    {
    }
}
