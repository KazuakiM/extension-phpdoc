<?php

/**
 * Ds\Queue.
 * A Queue is a “first in, first out” or “FIFO” collection that only allows access to the value at the front of the queue and iterates in that order, destructively.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ds-queue.php
 */

namespace Ds;

class Queue implements Ds\Collection
{
    const MIN_CAPACITY = 8;

    /**
     * __construct.
     * Creates a new instance.
     *
     * @param mixed $values (optional)
     *
     * @see http://php.net/manual/en/ds-queue.construct.php
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
     * @see http://php.net/manual/en/ds-queue.allocate.php
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
     * @see http://php.net/manual/en/ds-queue.capacity.php
     */
    public function capacity(): int
    {
    }

    /**
     * clear.
     * Removes all values.
     *
     *
     * @see http://php.net/manual/en/ds-queue.clear.php
     */
    public function clear(): void
    {
    }

    /**
     * copy.
     * Returns a shallow copy of the queue.
     *
     * @return Ds\Queue
     *
     * @see http://php.net/manual/en/ds-queue.copy.php
     */
    public function copy(): Ds\Queue
    {
    }

    /**
     * count.
     * Returns the number of values in the collection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ds-queue.count.php
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
     * @see http://php.net/manual/en/ds-queue.isempty.php
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
     * @see http://php.net/manual/en/ds-queue.jsonserialize.php
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
     * @see http://php.net/manual/en/ds-queue.peek.php
     */
    public function peek(): mixed
    {
    }

    /**
     * pop.
     * Removes and returns the value at the front of the queue.
     *
     * @throws UnderflowException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-queue.pop.php
     */
    public function pop(): mixed
    {
    }

    /**
     * push.
     * Pushes values into the queue.
     *
     * @param mixed $...values (optional)
     *
     * @see http://php.net/manual/en/ds-queue.push.php
     */
    public function push(mixed $values): void
    {
    }

    /**
     * toArray.
     * Converts the queue to an array.
     *
     * @return array
     *
     * @see http://php.net/manual/en/ds-queue.toarray.php
     */
    public function toArray(): array
    {
    }
}
