<?php

/**
 * RecursiveCallbackFilterIterator.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.recursivecallbackfilteriterator.php
 */
class RecursiveCallbackFilterIterator extends CallbackFilterIterator implements OuterIterator, RecursiveIterator
{
    /**
     * __construct.
     * Create a RecursiveCallbackFilterIterator from a RecursiveIterator.
     *
     * @param RecursiveIterator $iterator
     * @param string            $callback
     *
     * @see http://php.net/manual/en/recursivecallbackfilteriterator.construct.php
     */
    public function __construct(RecursiveIterator $iterator, string $callback)
    {
    }

    /**
     * getChildren.
     * Return the inner iterator's children contained in a RecursiveCallbackFilterIterator.
     *
     * @return RecursiveCallbackFilterIterator
     *
     * @see http://php.net/manual/en/recursivecallbackfilteriterator.getchildren.php
     */
    public function getChildren(): RecursiveCallbackFilterIterator
    {
    }

    /**
     * hasChildren.
     * Check whether the inner iterator's current element has children.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/recursivecallbackfilteriterator.haschildren.php
     */
    public function hasChildren(): bool
    {
    }

    /* Inherited methods */
    //public function CallbackFilterIterator::accept(): string
}
