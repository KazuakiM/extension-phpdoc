<?php

/**
 * RecursiveIteratorIterator.
 *  Can be used to iterate through recursive iterators.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.recursiveiteratoriterator.php
 */
class RecursiveIteratorIterator implements OuterIterator
{
    const LEAVES_ONLY = 0;
    const SELF_FIRST = 1;
    const CHILD_FIRST = 2;
    const CATCH_GET_CHILD = 16;

    /**
     * __construct.
     * Construct a RecursiveIteratorIterator.
     *
     * @param Traversable $iterator
     * @param int         $mode     = RecursiveIteratorIterator::LEAVES_ONLY
     * @param int         $flags    = 0
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.construct.php
     */
    public function __construct(Traversable $iterator, int $mode = self::LEAVES_ONLY, int $flags = 0)
    {
    }

    /**
     * beginChildren.
     * Begin children.
     *
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.beginchildren.php
     */
    public function beginChildren(): void
    {
    }

    /**
     * beginIteration.
     * Begin Iteration.
     *
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.beginiteration.php
     */
    public function beginIteration(): void
    {
    }

    /**
     * callGetChildren.
     * Get children.
     *
     * @return RecursiveIterator
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.callgetchildren.php
     */
    public function callGetChildren(): RecursiveIterator
    {
    }

    /**
     * callHasChildren.
     * Has children.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.callhaschildren.php
     */
    public function callHasChildren(): bool
    {
    }

    /**
     * current.
     * Access the current element value.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * endChildren.
     * End children.
     *
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.endchildren.php
     */
    public function endChildren(): void
    {
    }

    /**
     * endIteration.
     * End Iteration.
     *
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.enditeration.php
     */
    public function endIteration(): void
    {
    }

    /**
     * getDepth.
     * Get the current depth of the recursive iteration.
     *
     * @return int
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.getdepth.php
     */
    public function getDepth(): int
    {
    }

    /**
     * getInnerIterator.
     * Get inner iterator.
     *
     * @return iterator
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.getinneriterator.php
     */
    public function getInnerIterator(): iterator
    {
    }

    /**
     * getMaxDepth.
     * Get max depth.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.getmaxdepth.php
     */
    public function getMaxDepth(): mixed
    {
    }

    /**
     * getSubIterator.
     * The current active sub iterator.
     *
     * @param int $level (optional)
     *
     * @return RecursiveIterator
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.getsubiterator.php
     */
    public function getSubIterator(int $level): RecursiveIterator
    {
    }

    /**
     * key.
     * Access the current key.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.key.php
     */
    public function key(): mixed
    {
    }

    /**
     * next.
     * Move forward to the next element.
     *
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * nextElement.
     * Next element.
     *
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.nextelement.php
     */
    public function nextElement(): void
    {
    }

    /**
     * rewind.
     * Rewind the iterator to the first element of the top level inner iterator.
     *
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * setMaxDepth.
     * Set max depth.
     *
     * @param int $max_depth = -1
     *
     * @throws Exception
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.setmaxdepth.php
     */
    public function setMaxDepth(int $max_depth = -1): void
    {
    }

    /**
     * valid.
     * Check whether the current position is valid.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/recursiveiteratoriterator.valid.php
     */
    public function valid(): bool
    {
    }

    /* Inherited methods */
    //public function OuterIterator::getInnerIterator(): Iterator
}
