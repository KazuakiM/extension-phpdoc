<?php

/**
 * RecursiveTreeIterator.
 * Allows iterating over a RecursiveIterator to generate an ASCII graphic tree.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.recursivetreeiterator.php
 */
class RecursiveTreeIterator extends RecursiveIteratorIterator implements OuterIterator
{
    const BYPASS_CURRENT = 4;
    const BYPASS_KEY = 8;
    const PREFIX_LEFT = 0;
    const PREFIX_MID_HAS_NEXT = 1;
    const PREFIX_MID_LAST = 2;
    const PREFIX_END_HAS_NEXT = 3;
    const PREFIX_END_LAST = 4;
    const PREFIX_RIGHT = 5;

    /**
     * __construct.
     * Construct a RecursiveTreeIterator.
     *
     * @param RecursiveIterator|IteratorAggregate $it
     * @param int                                 $flags     = RecursiveTreeIterator::BYPASS_KEY
     * @param int                                 $cit_flags = CachingIterator::CATCH_GET_CHILD
     * @param int                                 $mode      = RecursiveIteratorIterator::SELF_FIRST
     *
     * @see http://php.net/manual/en/recursivetreeiterator.construct.php
     */
    public function __construct(mixed $it, int $flags = self::BYPASS_KEY, int $cit_flags = CachingIterator::CATCH_GET_CHILD, int $mode = RecursiveIteratorIterator::SELF_FIRST)
    {
    }

    /**
     * beginChildren.
     * Begin children.
     *
     * @see http://php.net/manual/en/recursivetreeiterator.beginchildren.php
     */
    public function beginChildren(): void
    {
    }

    /**
     * beginIteration.
     * Begin iteration.
     *
     * @return RecursiveIterator
     *
     * @see http://php.net/manual/en/recursivetreeiterator.beginiteration.php
     */
    public function beginIteration(): RecursiveIterator
    {
    }

    /**
     * callGetChildren.
     * Get children.
     *
     * @return RecursiveIterator
     *
     * @see http://php.net/manual/en/recursivetreeiterator.callgetchildren.php
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
     * @see http://php.net/manual/en/recursivetreeiterator.callhaschildren.php
     */
    public function callHasChildren(): bool
    {
    }

    /**
     * current.
     * Get current element.
     *
     * @return string
     *
     * @see http://php.net/manual/en/recursivetreeiterator.current.php
     */
    public function current(): string
    {
    }

    /**
     * endChildren.
     * End children.
     *
     * @see http://php.net/manual/en/recursivetreeiterator.endchildren.php
     */
    public function endChildren(): void
    {
    }

    /**
     * endIteration.
     * End iteration.
     *
     * @see http://php.net/manual/en/recursivetreeiterator.enditeration.php
     */
    public function endIteration(): void
    {
    }

    /**
     * getEntry.
     * Get current entry.
     *
     * @return string
     *
     * @see http://php.net/manual/en/recursivetreeiterator.getentry.php
     */
    public function getEntry(): string
    {
    }

    /**
     * getPostfix.
     * Get the postfix.
     *
     * @see http://php.net/manual/en/recursivetreeiterator.getpostfix.php
     */
    public function getPostfix(): void
    {
    }

    /**
     * getPrefix.
     * Get the prefix.
     *
     * @return string
     *
     * @see http://php.net/manual/en/recursivetreeiterator.getprefix.php
     */
    public function getPrefix(): string
    {
    }

    /**
     * key.
     * Get the key of the current element.
     *
     * @return string
     *
     * @see http://php.net/manual/en/recursivetreeiterator.key.php
     */
    public function key(): string
    {
    }

    /**
     * next.
     * Move to next element.
     *
     * @see http://php.net/manual/en/recursivetreeiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * nextElement.
     * Next element.
     *
     * @see http://php.net/manual/en/recursivetreeiterator.nextelement.php
     */
    public function nextElement(): void
    {
    }

    /**
     * rewind.
     * Rewind iterator.
     *
     * @see http://php.net/manual/en/recursivetreeiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * setPrefixPart.
     * Set a part of the prefix.
     *
     * @param int    $part
     * @param string $value
     *
     * @see http://php.net/manual/en/recursivetreeiterator.setprefixpart.php
     */
    public function setPrefixPart(int $part, string $value): void
    {
    }

    /**
     * valid.
     * Check validity.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/recursivetreeiterator.valid.php
     */
    public function valid(): bool
    {
    }

    /* Inherited methods */
    //public function RecursiveIteratorIterator::beginChildren(): void
    //public function RecursiveIteratorIterator::beginIteration(): void
    //public function RecursiveIteratorIterator::callGetChildren(): RecursiveIterator
    //public function RecursiveIteratorIterator::callHasChildren(): bool
    //public function __construct(Traversable $iterator, int $mode = RecursiveIteratorIterator::LEAVES_ONLY, int $flags = 0)
    //public function RecursiveIteratorIterator::current(): mixed
    //public function RecursiveIteratorIterator::endChildren(): void
    //public function RecursiveIteratorIterator::endIteration(): void
    //public function RecursiveIteratorIterator::getDepth(): int
    //public function RecursiveIteratorIterator::getInnerIterator(): iterator
    //public function RecursiveIteratorIterator::getMaxDepth(): mixed
    //public function RecursiveIteratorIterator::getSubIterator(int $level): RecursiveIterator
    //public function RecursiveIteratorIterator::key(): mixed
    //public function RecursiveIteratorIterator::next(): void
    //public function RecursiveIteratorIterator::nextElement(): void
    //public function RecursiveIteratorIterator::rewind(): void
    //public function RecursiveIteratorIterator::setMaxDepth(string $max_depth = -1): void
    //public function RecursiveIteratorIterator::valid(): bool
}
