<?php

/**
 * EmptyIterator.
 * The EmptyIterator class for an empty iterator.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.emptyiterator.php
 */
class EmptyIterator implements Iterator
{
    /**
     * current.
     * The current() method.
     *
     * @throws Exception
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/emptyiterator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * key.
     * The key() method.
     *
     * @throws Exception
     *
     * @return scalar
     *
     * @see http://php.net/manual/en/emptyiterator.key.php
     */
    public function key(): scalar
    {
    }

    /**
     * next.
     * The next() method.
     *
     *
     * @see http://php.net/manual/en/emptyiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     * The rewind() method.
     *
     *
     * @see http://php.net/manual/en/emptyiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * valid.
     * The valid() method.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/emptyiterator.valid.php
     */
    public function valid(): bool
    {
    }
}
