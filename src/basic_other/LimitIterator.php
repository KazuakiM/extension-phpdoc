<?php

/**
 * LimitIterator.
 * The LimitIterator class allows iteration over a limited subset of items in an Iterator.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.limititerator.php
 */
class LimitIterator extends IteratorIterator implements OuterIterator
{
    /**
     * __construct.
     * Construct a LimitIterator.
     *
     * @param Iterator $iterator
     * @param int      $offset   = 0
     * @param int      $count    = -1
     *
     * @throws OutOfRangeException
     *
     * @see http://php.net/manual/en/limititerator.construct.php
     */
    public function __construct(Iterator $iterator, int $offset = 0, int $count = -1)
    {
    }

    /**
     * current.
     * Get current element.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/limititerator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * getInnerIterator.
     * Get inner iterator.
     *
     * @return Iterator
     *
     * @see http://php.net/manual/en/limititerator.getinneriterator.php
     */
    public function getInnerIterator(): Iterator
    {
    }

    /**
     * getPosition.
     * Return the current position.
     *
     * @return int
     *
     * @see http://php.net/manual/en/limititerator.getposition.php
     */
    public function getPosition(): int
    {
    }

    /**
     * key.
     * Get current key.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/limititerator.key.php
     */
    public function key(): mixed
    {
    }

    /**
     * next.
     * Move the iterator forward.
     *
     *
     * @see http://php.net/manual/en/limititerator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     * Rewind the iterator to the specified starting offset.
     *
     *
     * @see http://php.net/manual/en/limititerator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * seek.
     * Seek to the given position.
     *
     * @param int $position
     *
     * @throws OutOfBoundsException
     *
     * @return int
     *
     * @see http://php.net/manual/en/limititerator.seek.php
     */
    public function seek(int $position): int
    {
    }

    /**
     * valid.
     * Check whether the current element is valid.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/limititerator.valid.php
     */
    public function valid(): bool
    {
    }
}
