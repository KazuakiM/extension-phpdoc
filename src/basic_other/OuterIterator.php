<?php

/**
 * OuterIterator.
 * Classes implementing OuterIterator can be used to iterate over iterators.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.outeriterator.php
 */
interface OuterIterator extends Iterator
{
    /**
     * getInnerIterator.
     * Returns the inner iterator for the current entry.
     *
     * @return Iterator
     *
     * @see http://php.net/manual/en/outeriterator.getinneriterator.php
     */
    public function getInnerIterator(): Iterator;

    /* Inherited methods */
    //abstract public function Iterator::current(): mixed
    //abstract public function Iterator::key(): scalar
    //abstract public function Iterator::next(): void
    //abstract public function Iterator::rewind(): void
    //abstract public function Iterator::valid(): bool
}
