<?php


/**
 * IteratorAggregate.
 *
 * Interface to create an external Iterator.
 *
 * @see http://php.net/manual/en/class.iteratoraggregate.php
 */
interface IteratorAggregate extends Traversable
{
    /**
     * getIterator.
     *
     * Retrieve an external iterator
     *
     * @return Traversable
     *
     * @see http://php.net/manual/en/iteratoraggregate.getiterator.php
     */
    abstract public function getIterator(): Traversable
    {
    }
}
