<?php

/**
 * NoRewindIterator.
 * This iterator cannot be rewound.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.norewinditerator.php
 */
class NoRewindIterator extends IteratorIterator
{
    /**
     * __construct.
     * Construct a NoRewindIterator.
     *
     * @param Iterator $iterator
     *
     * @see http://php.net/manual/en/norewinditerator.construct.php
     */
    public function __construct(Iterator $iterator)
    {
    }

    /**
     * current.
     * Get the current value.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/norewinditerator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * getInnerIterator.
     * Get the inner iterator.
     *
     * @return iterator
     *
     * @see http://php.net/manual/en/norewinditerator.getinneriterator.php
     */
    public function getInnerIterator(): iterator
    {
    }

    /**
     * key.
     * Get the current key.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/norewinditerator.key.php
     */
    public function key(): mixed
    {
    }

    /**
     * next.
     * Forward to the next element.
     *
     *
     * @see http://php.net/manual/en/norewinditerator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     * Prevents the rewind operation on the inner iterator.
     *
     *
     * @see http://php.net/manual/en/norewinditerator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * valid.
     * Validates the iterator.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/norewinditerator.valid.php
     */
    public function valid(): bool
    {
    }

    /* Inherited methods */
    //public function __construct(Traversable $iterator)
    //public function IteratorIterator::current(): mixed
    //public function IteratorIterator::getInnerIterator(): Traversable
    //public function IteratorIterator::key(): scalar
    //public function IteratorIterator::next(): void
    //public function IteratorIterator::rewind(): void
    //public function IteratorIterator::valid(): bool
}
