<?php

/**
 * RecursiveCachingIterator.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.recursivecachingiterator.php
 */
class RecursiveCachingIterator extends CachingIterator implements Countable, ArrayAccess, OuterIterator, RecursiveIterator
{
    /**
     * __construct.
     * Construct.
     *
     * @param Iterator $iterator
     * @param string   $flags    = self::CALL_TOSTRING
     *
     * @see http://php.net/manual/en/recursivecachingiterator.construct.php
     */
    public function __construct(Iterator $iterator, string $flags = self::CALL_TOSTRING)
    {
    }

    /**
     * getChildren.
     * Return the inner iterator's children as a RecursiveCachingIterator.
     *
     * @return RecursiveCachingIterator
     *
     * @see http://php.net/manual/en/recursivecachingiterator.getchildren.php
     */
    public function getChildren(): RecursiveCachingIterator
    {
    }

    /**
     * hasChildren.
     * Check whether the current element of the inner iterator has children.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/recursivecachingiterator.haschildren.php
     */
    public function hasChildren(): bool
    {
    }

    /* Inherited methods */
    //public function __construct(Iterator $iterator, int $flags = self::CALL_TOSTRING): CachingIterator::
    //public function CachingIterator::count(): int
    //public function CachingIterator::current(): void
    //public function CachingIterator::getCache(): array
    //public function CachingIterator::getFlags(): int
    //public function CachingIterator::getInnerIterator(): Iterator
    //public function CachingIterator::hasNext(): void
    //public function CachingIterator::key(): scalar
    //public function CachingIterator::next(): void
    //public function CachingIterator::offsetExists(string $index): void
    //public function CachingIterator::offsetGet(string $index): void
    //public function CachingIterator::offsetSet(string $index, string $newval): void
    //public function CachingIterator::offsetUnset(string $index): void
    //public function CachingIterator::rewind(): void
    //public function CachingIterator::setFlags(int $flags): void
    //public function CachingIterator::__toString(): void
    //public function CachingIterator::valid(): void
}
