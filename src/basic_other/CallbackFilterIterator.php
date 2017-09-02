<?php

/**
 * CallbackFilterIterator.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.callbackfilteriterator.php
 */
class CallbackFilterIterator extends FilterIterator implements OuterIterator
{
    /**
     * __construct.
     * Create a filtered iterator from another iterator.
     *
     * @param Iterator $iterator
     * @param callable $callback
     *
     * @see http://php.net/manual/en/callbackfilteriterator.construct.php
     */
    public function __construct(Iterator $iterator, callable $callback)
    {
    }

    /**
     * accept.
     * Calls the callback with the current value, the current key and the inner iterator as arguments.
     *
     * @return string
     *
     * @see http://php.net/manual/en/callbackfilteriterator.accept.php
     */
    public function accept(): string
    {
    }

    /* Inherited methods */
    //public function bool FilterIterator::accept(): abstract
    //public function __construct(Iterator $iterator)
    //public function FilterIterator::current(): mixed
    //public function FilterIterator::getInnerIterator(): Iterator
    //public function FilterIterator::key(): mixed
    //public function FilterIterator::next(): void
    //public function FilterIterator::rewind(): void
    //public function FilterIterator::valid(): bool
}
