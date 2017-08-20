<?php

/**
 * SeekableIterator.
 * The Seekable iterator.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.seekableiterator.php
 */
interface SeekableIterator extends Iterator
{
    /**
     * seek.
     * Seeks to a position.
     *
     * @throws OutOfBoundsException
     *
     * @see http://php.net/manual/en/seekableiterator.seek.php
     */
    public function seek(int $position): void;

    /* Inherited methods */
    //abstract public function Iterator::current(): mixed
    //abstract public function Iterator::key(): scalar
    //abstract public function Iterator::next(): void
    //abstract public function Iterator::rewind(): void
    //abstract public function Iterator::valid(): bool
}
