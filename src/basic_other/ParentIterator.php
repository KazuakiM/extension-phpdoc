<?php

/**
 * ParentIterator.
 * This extended FilterIterator allows a recursive iteration using RecursiveIteratorIterator that only shows those elements which have children.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.parentiterator.php
 */
class ParentIterator extends RecursiveFilterIterator implements RecursiveIterator, OuterIterator
{
    /**
     * __construct.
     * Constructs a ParentIterator.
     *
     * @param RecursiveIterator $iterator
     *
     * @see http://php.net/manual/en/parentiterator.construct.php
     */
    public function __construct(RecursiveIterator $iterator)
    {
    }

    /**
     * accept.
     * Determines acceptability.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/parentiterator.accept.php
     */
    public function accept(): bool
    {
    }

    /**
     * getChildren.
     * Return the inner iterator's children contained in a ParentIterator.
     *
     * @return ParentIterator
     *
     * @see http://php.net/manual/en/parentiterator.getchildren.php
     */
    public function getChildren(): ParentIterator
    {
    }

    /**
     * hasChildren.
     * Check whether the inner iterator's current element has children.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/parentiterator.haschildren.php
     */
    public function hasChildren(): bool
    {
    }

    /**
     * next.
     * Move the iterator forward.
     *
     *
     * @see http://php.net/manual/en/parentiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     * Rewind the iterator.
     *
     *
     * @see http://php.net/manual/en/parentiterator.rewind.php
     */
    public function rewind(): void
    {
    }
}
