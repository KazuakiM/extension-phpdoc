<?php

/**
 * IntlPartsIterator.
 * Objects of this class can be obtained from IntlBreakIterator objects. While the break iterators provide a sequence of boundary positions when iterated, IntlPartsIterator objects provide, as a convenience, the text fragments comprehended between two successive boundaries.
 * The keys may represent the offset of the left boundary, right boundary, or they may just the sequence of non-negative integers. See IntlBreakIterator::getPartsIterator().
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.intlpartsiterator.php
 */
class IntlPartsIterator extends IntlIterator implements Iterator
{
    const KEY_SEQUENTIAL = 0;
    const KEY_LEFT = 1;
    const KEY_RIGHT = 2;

    /**
     * getBreakIterator.
     * Get IntlBreakIterator backing this parts iterator.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlpartsiterator.getbreakiterator.php
     */
    public function getBreakIterator(): ReturnType
    {
    }

    /* Inherited methods */
    //public function current(): ReturnType
    //public function key(): ReturnType
    //public function next(): ReturnType
    //public function rewind(): ReturnType
    //public function valid(): ReturnType
}
