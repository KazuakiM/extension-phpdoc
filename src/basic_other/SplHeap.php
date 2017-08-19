<?php

/**
 * SplHeap.
 * The SplHeap class provides the main functionalities of a Heap.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.splheap.php
 */
abstract class SplHeap implements Iterator, Countable
{
    /**
     * __construct.
     * Constructs a new empty heap.
     *
     * @see http://php.net/manual/en/splheap.construct.php
     */
    public function __construct()
    {
    }

    /**
     * count.
     * Counts the number of elements in the heap.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splheap.count.php
     */
    public function count(): int
    {
    }

    /**
     * current.
     * Return current node pointed by the iterator.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/splheap.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * extract.
     * Extracts a node from top of the heap and sift up.
     *
     * @throws RuntimeException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/splheap.extract.php
     */
    public function extract(): mixed
    {
    }

    /**
     * insert.
     * Inserts an element in the heap by sifting it up.
     *
     * @param mixed $value
     *
     * @see http://php.net/manual/en/splheap.insert.php
     */
    public function insert(mixed $value): void
    {
    }

    /**
     * isEmpty.
     * Checks whether the heap is empty.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splheap.isempty.php
     */
    public function isEmpty(): bool
    {
    }

    /**
     * key.
     * Return current node index.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/splheap.key.php
     */
    public function key(): mixed
    {
    }

    /**
     * next.
     * Move to the next node.
     *
     *
     * @see http://php.net/manual/en/splheap.next.php
     */
    public function next(): void
    {
    }

    /**
     * recoverFromCorruption.
     * Recover from the corrupted state and allow further actions on the heap.
     *
     *
     * @see http://php.net/manual/en/splheap.recoverfromcorruption.php
     */
    public function recoverFromCorruption(): void
    {
    }

    /**
     * rewind.
     * Rewind iterator back to the start (no-op).
     *
     *
     * @see http://php.net/manual/en/splheap.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * top.
     * Peeks at the node from the top of the heap.
     *
     * @throws RuntimeException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/splheap.top.php
     */
    public function top(): mixed
    {
    }

    /**
     * valid.
     * Check whether the heap contains more nodes.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splheap.valid.php
     */
    public function valid(): bool
    {
    }

    /**
     * compare.
     * Compare elements in order to place them correctly in the heap while sifting up.
     *
     * @param mixed $value1
     * @param mixed $value2
     *
     * @return int
     *
     * @see http://php.net/manual/en/splheap.compare.php
     */
    protected function compare(mixed $value1, mixed $value2): int
    {
    }
}
