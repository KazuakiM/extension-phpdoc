<?php

/**
 * FilterIterator.
 * This abstract iterator filters out unwanted values. This class should be extended to implement custom iterator filters. The FilterIterator::accept() must be implemented in the subclass.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.filteriterator.php
 */
abstract class FilterIterator extends IteratorIterator implements OuterIterator
{
    /**
     * __construct.
     * Construct a filterIterator.
     *
     * @param Iterator $iterator
     *
     * @see http://php.net/manual/en/filteriterator.construct.php
     */
    public function __construct(Iterator $iterator)
    {
    }

    /**
     * accept.
     * Check whether the current element of the iterator is acceptable.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/filteriterator.accept.php
     */
    public function accept(): bool
    {
    }

    /**
     * current.
     * Get the current element value.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/filteriterator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * getInnerIterator.
     * Get the inner iterator.
     *
     * @return Iterator
     *
     * @see http://php.net/manual/en/filteriterator.getinneriterator.php
     */
    public function getInnerIterator(): Iterator
    {
    }

    /**
     * key.
     * Get the current key.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/filteriterator.key.php
     */
    public function key(): mixed
    {
    }

    /**
     * next.
     * Move the iterator forward.
     *
     *
     * @see http://php.net/manual/en/filteriterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     * Rewind the iterator.
     *
     *
     * @see http://php.net/manual/en/filteriterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * valid.
     * Check whether the current element is valid.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/filteriterator.valid.php
     */
    public function valid(): bool
    {
    }
}
