<?php

/**
 * Iterator.
 * Interface for external iterators or objects that can be iterated themselves internally.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.iterator.php
 */
interface Iterator extends Traversable
{
    /**
     * current.
     * Return the current element.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/iterator.current.php
     */
    public function current(): mixed;

    /**
     * key.
     * Return the key of the current element.
     *
     * @return scalar
     *
     * @see http://php.net/manual/en/iterator.key.php
     */
    public function key(): scalar;

    /**
     * next.
     * Move forward to next element.
     *
     * @see http://php.net/manual/en/iterator.next.php
     */
    public function next(): void;

    /**
     * rewind.
     * Rewind the Iterator to the first element.
     *
     * @see http://php.net/manual/en/iterator.rewind.php
     */
    public function rewind(): void;

    /**
     * valid.
     * Checks if current position is valid.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/iterator.valid.php
     */
    public function valid(): bool;
}
