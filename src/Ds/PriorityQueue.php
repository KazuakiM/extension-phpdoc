<?php

/**
 * Ds\PriorityQueue.
 * A PriorityQueue is very similar to a Queue. Values are pushed into the queue with an assigned priority, and the value with the highest priority will always be at the front of the queue.
 * Implemented using a max heap.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ds-priorityqueue.php
 */

namespace Ds;

class PriorityQueue implements Ds\Collection
{
    const MIN_CAPACITY = 8;

    /**
     * __construct.
     * Creates a new instance.
     *
     * @param mixed $values (optional)
     *
     * @see http://php.net/manual/en/ds-priorityqueue.construct.php
     */
    public function __construct(mixed $values)
    {
    }

    /**
     * allocate.
     * Allocates enough memory for a required capacity.
     *
     * @param int $capacity
     *
     * @see http://php.net/manual/en/ds-priorityqueue.allocate.php
     */
    public function allocate(int $capacity): void
    {
    }

    /**
     * capacity.
     * Returns the current capacity.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ds-priorityqueue.capacity.php
     */
    public function capacity(): int
    {
    }

    /**
     * clear.
     * Removes all values.
     *
     * @see http://php.net/manual/en/ds-priorityqueue.clear.php
     */
    public function clear(): void
    {
    }

    /**
     * copy.
     * Returns a shallow copy of the queue.
     *
     * @return Ds\PriorityQueue
     *
     * @see http://php.net/manual/en/ds-priorityqueue.copy.php
     */
    public function copy(): Ds\PriorityQueue
    {
    }

    /**
     * count.
     * Returns the number of values in the collection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ds-priorityqueue.count.php
     */
    public function count(): int
    {
    }

    /**
     * isEmpty.
     * Returns whether the queue is empty.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-priorityqueue.isempty.php
     */
    public function isEmpty(): bool
    {
    }

    /**
     * jsonSerialize.
     * Returns a representation that can be converted to JSON.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-priorityqueue.jsonserialize.php
     */
    public function jsonSerialize(): mixed
    {
    }

    /**
     * peek.
     * Returns the value at the front of the queue.
     *
     * @throws UnderflowException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-priorityqueue.peek.php
     */
    public function peek(): mixed
    {
    }

    /**
     * pop.
     * Removes and returns the value with the highest priority.
     *
     * @throws UnderflowException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-priorityqueue.pop.php
     */
    public function pop(): mixed
    {
    }

    /**
     * push.
     * Pushes values into the queue.
     *
     * @param mixed $value
     * @param int   $priority
     *
     * @see http://php.net/manual/en/ds-priorityqueue.push.php
     */
    public function push(mixed $value, int $priority): void
    {
    }

    /**
     * toArray.
     * Converts the queue to an array.
     *
     * @return array
     *
     * @see http://php.net/manual/en/ds-priorityqueue.toarray.php
     */
    public function toArray(): array
    {
    }
}
