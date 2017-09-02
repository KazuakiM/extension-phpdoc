<?php

/**
 * IntlIterator.
 * This class represents iterator objects throughout the intl extension whenever the iterator cannot be identified with any other object provided by the extension. The distinct iterator object used internally by the foreach construct can only be obtained (in the relevant part here) from objects, so objects of this class serve the purpose of providing the hook through which this internal object can be obtained. As a convenience, this class also implements the Iterator interface, allowing the collection of values to be navigated using the methods defined in that interface. Both these methods and the internal iterator objects provided to foreach are backed by the same state (e.g. the position of the iterator and its current value).
 * Subclasses may provide richer functionality.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.intliterator.php
 */
class IntlIterator implements Iterator
{
    /**
     * current.
     * Get the current element.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intliterator.current.php
     */
    public function current(): ReturnType
    {
    }

    /**
     * key.
     * Get the current key.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intliterator.key.php
     */
    public function key(): ReturnType
    {
    }

    /**
     * next.
     * Move forward to the next element.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intliterator.next.php
     */
    public function next(): ReturnType
    {
    }

    /**
     * rewind.
     * Rewind the iterator to the first element.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intliterator.rewind.php
     */
    public function rewind(): ReturnType
    {
    }

    /**
     * valid.
     * Check if current position is valid.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intliterator.valid.php
     */
    public function valid(): ReturnType
    {
    }
}
