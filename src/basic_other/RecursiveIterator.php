<?php

/**
 * RecursiveIterator.
 * Classes implementing RecursiveIterator can be used to iterate over iterators recursively.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.recursiveiterator.php
 */
interface RecursiveIterator extends Iterator
{
    /**
     * getChildren.
     * Returns an iterator for the current entry.
     *
     * @return RecursiveIterator
     *
     * @see http://php.net/manual/en/recursiveiterator.getchildren.php
     */
    public function getChildren(): RecursiveIterator;

    /**
     * hasChildren.
     * Returns if an iterator can be created for the current entry.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/recursiveiterator.haschildren.php
     */
    public function hasChildren(): bool;

    /* Inherited methods */
    //abstract public function Iterator::current(): mixed
    //abstract public function Iterator::key(): scalar
    //abstract public function Iterator::next(): void
    //abstract public function Iterator::rewind(): void
    //abstract public function Iterator::valid(): bool
}
