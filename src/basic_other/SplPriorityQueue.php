<?php

/**
 * SplPriorityQueue.
 * The SplPriorityQueue class provides the main functionalities of a prioritized queue, implemented using a max heap.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.splpriorityqueue.php
 */
class SplPriorityQueue implements Iterator, Countable
{
    /**
     * __construct.
     * Constructs a new empty queue.
     *
     * @see http://php.net/manual/en/splpriorityqueue.construct.php
     */
    public function __construct()
    {
    }

    /**
     * compare.
     * Compare priorities in order to place elements correctly in the heap while sifting up.
     *
     * @param mixed $priority1
     * @param mixed $priority2
     *
     * @return int
     *
     * @see http://php.net/manual/en/splpriorityqueue.compare.php
     */
    public function compare(mixed $priority1, mixed $priority2): int
    {
    }

    /**
     * count.
     * Counts the number of elements in the queue.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splpriorityqueue.count.php
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
     * @see http://php.net/manual/en/splpriorityqueue.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * extract.
     * Extracts a node from top of the heap and shift up.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/splpriorityqueue.extract.php
     */
    public function extract(): mixed
    {
    }

    /**
     * insert.
     * Inserts an element in the queue by sifting it up.
     *
     * @param mixed $value
     * @param mixed $priority
     *
     * @see http://php.net/manual/en/splpriorityqueue.insert.php
     */
    public function insert(mixed $value, mixed $priority): void
    {
    }

    /**
     * isEmpty.
     * Checks whether the queue is empty.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splpriorityqueue.isempty.php
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
     * @see http://php.net/manual/en/splpriorityqueue.key.php
     */
    public function key(): mixed
    {
    }

    /**
     * next.
     * Move to the next node.
     *
     * @see http://php.net/manual/en/splpriorityqueue.next.php
     */
    public function next(): void
    {
    }

    /**
     * recoverFromCorruption.
     * Recover from the corrupted state and allow further actions on the queue.
     *
     * @see http://php.net/manual/en/splpriorityqueue.recoverfromcorruption.php
     */
    public function recoverFromCorruption(): void
    {
    }

    /**
     * rewind.
     * Rewind iterator back to the start (no-op).
     *
     * @see http://php.net/manual/en/splpriorityqueue.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * setExtractFlags.
     * Sets the mode of extraction.
     *
     * @param int $flags
     *
     * @see http://php.net/manual/en/splpriorityqueue.setextractflags.php
     */
    public function setExtractFlags(int $flags): void
    {
    }

    /**
     * top.
     * Peeks at the node from the top of the queue.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/splpriorityqueue.top.php
     */
    public function top(): mixed
    {
    }

    /**
     * valid.
     * Check whether the queue contains more nodes.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splpriorityqueue.valid.php
     */
    public function valid(): bool
    {
    }
}
