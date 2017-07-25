<?php


/**
 * IteratorAggregate.
 *
 * Interface to create an external Iterator.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
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
