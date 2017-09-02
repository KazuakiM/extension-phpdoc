<?php

/**
 * InfiniteIterator.
 * The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.infiniteiterator.php
 */
class InfiniteIterator extends IteratorIterator implements OuterIterator
{
    /**
     * __construct.
     * Constructs an InfiniteIterator.
     *
     * @param Iterator $iterator
     *
     * @throws E_RECOVERABLE_ERROR
     *
     * @see http://php.net/manual/en/infiniteiterator.construct.php
     */
    public function __construct(Iterator $iterator)
    {
    }

    /**
     * next.
     * Moves the inner Iterator forward or rewinds it.
     *
     * @see http://php.net/manual/en/infiniteiterator.next.php
     */
    public function next(): void
    {
    }

    /* Inherited methods */
    //public function __construct(Traversable $iterator)
    //public function IteratorIterator::current()
    //public function IteratorIterator::getInnerIterator(): Traversable
    //public function IteratorIterator::key(): scalar
    //public function IteratorIterator::next(): void
    //public function IteratorIterator::rewind(): void
    //public function IteratorIterator::valid(): bool
}
