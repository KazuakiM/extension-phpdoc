<?php

/**
 * SplMinHeap.
 * The SplMinHeap class provides the main functionalities of a heap, keeping the minimum on the top.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.splminheap.php
 */
class SplMinHeap extends SplHeap implements Iterator, Countable
{
    /**
     * compare.
     * Compare elements in order to place them correctly in the heap while sifting up.
     *
     * @param mixed $value1
     * @param mixed $value2
     *
     * @return int
     *
     * @see http://php.net/manual/en/splminheap.compare.php
     */
    protected function compare(mixed $value1, mixed $value2): int
    {
    }

    /* Inherited methods */
    //abstract protected function SplHeap::compare(mixed $value1, mixed $value2): int
    //public function SplHeap::count(): int
    //public function SplHeap::current(): mixed
    //public function SplHeap::extract(): mixed
    //public function SplHeap::insert(mixed $value): void
    //public function SplHeap::isEmpty(): bool
    //public function SplHeap::key(): mixed
    //public function SplHeap::next(): void
    //public function SplHeap::recoverFromCorruption(): void
    //public function SplHeap::rewind(): void
    //public function SplHeap::top(): mixed
    //public function SplHeap::valid(): bool
}
