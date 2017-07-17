<?php


/**
 * Iterator.
 *
 * Interface for external iterators or objects that can be iterated themselves internally.
 *
 * @see http://php.net/manual/en/class.iterator.php
 */
interface Iterator extends Traversable
{
    /**
     * current.
     *
     * Return the current element
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/iterator.current.php
     */
    abstract public function current(): mixed
    {
    }

    /**
     * key.
     *
     * Return the key of the current element
     *
     * @return scalar
     *
     * @see http://php.net/manual/en/iterator.key.php
     */
    abstract public function key(): scalar
    {
    }

    /**
     * next.
     *
     * Move forward to next element
     *
     *
     * @see http://php.net/manual/en/iterator.next.php
     */
    abstract public function next(): void
    {
    }

    /**
     * rewind.
     *
     * Rewind the Iterator to the first element
     *
     *
     * @see http://php.net/manual/en/iterator.rewind.php
     */
    abstract public function rewind(): void
    {
    }

    /**
     * valid.
     *
     * Checks if current position is valid
     *
     * @return bool
     *
     * @see http://php.net/manual/en/iterator.valid.php
     */
    abstract public function valid(): boolean
    {
    }
}
