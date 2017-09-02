<?php

/**
 * AppendIterator.
 * An Iterator that iterates over several iterators one after the other.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.appenditerator.php
 */
class AppendIterator extends IteratorIterator implements OuterIterator
{
    /**
     * __construct.
     * Appends an iterator.
     *
     * @see http://php.net/manual/en/appenditerator.construct.php
     */
    public function __construct()
    {
    }

    /**
     * append.
     * Constructs an AppendIterator.
     *
     * @param Iterator $iterator
     *
     * @see http://php.net/manual/en/appenditerator.append.php
     */
    public function append(Iterator $iterator): void
    {
    }

    /**
     * current.
     * Gets the current value.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/appenditerator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * getArrayIterator.
     * Gets the ArrayIterator.
     *
     * @return ArrayIterator
     *
     * @see http://php.net/manual/en/appenditerator.getarrayiterator.php
     */
    public function getArrayIterator(): ArrayIterator
    {
    }

    /**
     * getInnerIterator.
     * Gets the inner iterator.
     *
     * @return Iterator
     *
     * @see http://php.net/manual/en/appenditerator.getinneriterator.php
     */
    public function getInnerIterator(): Iterator
    {
    }

    /**
     * getIteratorIndex.
     * Gets an index of iterators.
     *
     * @return int
     *
     * @see http://php.net/manual/en/appenditerator.getiteratorindex.php
     */
    public function getIteratorIndex(): int
    {
    }

    /**
     * key.
     * Gets the current key.
     *
     * @return scalar
     *
     * @see http://php.net/manual/en/appenditerator.key.php
     */
    public function key(): scalar
    {
    }

    /**
     * next.
     * Moves to the next element.
     *
     * @see http://php.net/manual/en/appenditerator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     * Rewinds the Iterator.
     *
     * @see http://php.net/manual/en/appenditerator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * valid.
     * Checks validity of the current element.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/appenditerator.valid.php
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
