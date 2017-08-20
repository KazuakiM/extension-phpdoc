<?php

/**
 * IteratorIterator.
 * This iterator wrapper allows the conversion of anything that is Traversable into an Iterator. It is important to understand that most classes that do not implement Iterators have reasons as most likely they do not allow the full Iterator feature set. If so, techniques should be provided to prevent misuse, otherwise expect exceptions or fatal errors.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.iteratoriterator.php
 */
class IteratorIterator implements OuterIterator
{
    /**
     * __construct.
     * Create an iterator from anything that is traversable.
     *
     * @param Traversable $iterator
     *
     * @see http://php.net/manual/en/iteratoriterator.construct.php
     */
    public function __construct(Traversable $iterator)
    {
    }

    /**
     * current.
     * Get the current value.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/iteratoriterator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * getInnerIterator.
     * Get the inner iterator.
     *
     * @return Traversable
     *
     * @see http://php.net/manual/en/iteratoriterator.getinneriterator.php
     */
    public function getInnerIterator(): Traversable
    {
    }

    /**
     * key.
     * Get the key of the current element.
     *
     * @return scalar
     *
     * @see http://php.net/manual/en/iteratoriterator.key.php
     */
    public function key(): scalar
    {
    }

    /**
     * next.
     * Forward to the next element.
     *
     *
     * @see http://php.net/manual/en/iteratoriterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     * Rewind to the first element.
     *
     *
     * @see http://php.net/manual/en/iteratoriterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * valid.
     * Checks if the iterator is valid.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/iteratoriterator.valid.php
     */
    public function valid(): bool
    {
    }
}
