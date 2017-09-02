<?php

/**
 * Ds\Stack.
 * A Stack is a “last in, first out” or “LIFO” collection that only allows access to the value at the top of the structure and iterates in that order, destructively.
 * Uses a Ds\stack internally.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ds-stack.php
 */

namespace Ds;

class Stack implements Ds\Collection
{
    /**
     * __construct.
     * Creates a new instance.
     *
     * @param mixed $values (optional)
     *
     * @see http://php.net/manual/en/ds-stack.construct.php
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
     * @see http://php.net/manual/en/ds-stack.allocate.php
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
     * @see http://php.net/manual/en/ds-stack.capacity.php
     */
    public function capacity(): int
    {
    }

    /**
     * clear.
     * Removes all values.
     *
     * @see http://php.net/manual/en/ds-stack.clear.php
     */
    public function clear(): void
    {
    }

    /**
     * copy.
     * Returns a shallow copy of the stack.
     *
     * @return Ds\Stack
     *
     * @see http://php.net/manual/en/ds-stack.copy.php
     */
    public function copy(): Ds\Stack
    {
    }

    /**
     * count.
     * Returns the number of values in the collection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ds-stack.count.php
     */
    public function count(): int
    {
    }

    /**
     * isEmpty.
     * Returns whether the stack is empty.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-stack.isempty.php
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
     * @see http://php.net/manual/en/ds-stack.jsonserialize.php
     */
    public function jsonSerialize(): mixed
    {
    }

    /**
     * peek.
     * Returns the value at the top of the stack.
     *
     * @throws UnderflowException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-stack.peek.php
     */
    public function peek(): mixed
    {
    }

    /**
     * pop.
     * Removes and returns the value at the top of the stack.
     *
     * @throws UnderflowException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-stack.pop.php
     */
    public function pop(): mixed
    {
    }

    /**
     * push.
     * Pushes values onto the stack.
     *
     * @param mixed $values (optional)
     *
     * @see http://php.net/manual/en/ds-stack.push.php
     */
    public function push(mixed $values): void
    {
    }

    /**
     * toArray.
     * Converts the stack to an array.
     *
     * @return array
     *
     * @see http://php.net/manual/en/ds-stack.toarray.php
     */
    public function toArray(): array
    {
    }
}
