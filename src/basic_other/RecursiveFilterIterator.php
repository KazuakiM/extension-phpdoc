<?php

/**
 * RecursiveFilterIterator.
 * This abstract iterator filters out unwanted values for a RecursiveIterator. This class should be extended to implement custom filters. The RecursiveFilterIterator::accept() must be implemented in the subclass.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.recursivefilteriterator.php
 */
abstract class RecursiveFilterIterator extends FilterIterator implements OuterIterator, RecursiveIterator
{
    /**
     * __construct.
     * Create a RecursiveFilterIterator from a RecursiveIterator.
     *
     * @param RecursiveIterator $iterator
     *
     * @see http://php.net/manual/en/recursivefilteriterator.construct.php
     */
    public function __construct(RecursiveIterator $iterator)
    {
    }

    /**
     * getChildren.
     * Return the inner iterator's children contained in a RecursiveFilterIterator.
     *
     * @return RecursiveFilterIterator
     *
     * @see http://php.net/manual/en/recursivefilteriterator.getchildren.php
     */
    public function getChildren(): RecursiveFilterIterator
    {
    }

    /**
     * hasChildren.
     * Check whether the inner iterator's current element has children.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/recursivefilteriterator.haschildren.php
     */
    public function hasChildren(): bool
    {
    }

    /* Inherited methods */
    //public function bool FilterIterator::accept(): abstract
    //public function __construct(Iterator $iterator)
    //public function FilterIterator::current(): mixed
    //public function FilterIterator::getInnerIterator(): Iterator
    //public function FilterIterator::key(): mixed
    //public function FilterIterator::next(): void
    //public function FilterIterator::rewind(): void
    //public function FilterIterator::valid(): bool
}
