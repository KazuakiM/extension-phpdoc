<?php

/**
 * Ds\Deque.
 * A Deque (pronounced “deck”) is a sequence of values in a contiguous buffer that grows and shrinks automatically. The name is a common abbreviation of “double-ended queue” and is used internally by Ds\Queue.
 * Two pointers are used to keep track of a head and a tail. The pointers can “wrap around” the end of the buffer, which avoids the need to move other values around to make room. This makes shift and unshift very fast —  something a Ds\Vector can’t compete with.
 * Accessing a value by index requires a translation between the index and its corresponding position in the buffer: ((head + position) % capacity).
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ds-deque.php
 */

namespace Ds;

class Deque implements Ds\Sequence
{
    const MIN_CAPACITY = 8;

    /**
     * __construct.
     * Creates a new instance.
     *
     * @param mixed $values (optional)
     *
     * @see http://php.net/manual/en/ds-deque.construct.php
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
     * @see http://php.net/manual/en/ds-deque.allocate.php
     */
    public function allocate(int $capacity): void
    {
    }

    /**
     * apply.
     * Updates all values by applying a callback function to each value.
     *
     * @param callable $callback
     *
     * @see http://php.net/manual/en/ds-deque.apply.php
     */
    public function apply(callable $callback): void
    {
    }

    /**
     * capacity.
     * Returns the current capacity.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ds-deque.capacity.php
     */
    public function capacity(): int
    {
    }

    /**
     * clear.
     * Removes all values from the deque.
     *
     * @see http://php.net/manual/en/ds-deque.clear.php
     */
    public function clear(): void
    {
    }

    /**
     * contains.
     * Determines if the deque contains given values.
     *
     * @param mixed $...values (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-deque.contains.php
     */
    public function contains(mixed $values): bool
    {
    }

    /**
     * copy.
     * Returns a shallow copy of the deque.
     *
     * @return Ds\Deque
     *
     * @see http://php.net/manual/en/ds-deque.copy.php
     */
    public function copy(): Ds\Deque
    {
    }

    /**
     * count.
     * Returns the number of values in the collection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ds-deque.count.php
     */
    public function count(): int
    {
    }

    /**
     * filter.
     * Creates a new deque using a callable to determine which values to include.
     *
     * @param callable $callback (optional)
     *
     * @return Ds\Deque
     *
     * @see http://php.net/manual/en/ds-deque.filter.php
     */
    public function filter(callable $callback): Ds\Deque
    {
    }

    /**
     * find.
     * Attempts to find a value's index.
     *
     * @param mixed $value
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-deque.find.php
     */
    public function find(mixed $value): mixed
    {
    }

    /**
     * first.
     * Returns the first value in the deque.
     *
     * @throws UnderflowException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-deque.first.php
     */
    public function first(): mixed
    {
    }

    /**
     * get.
     * Returns the value at a given index.
     *
     * @param int $index
     *
     * @throws OutOfRangeException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-deque.get.php
     */
    public function get(int $index): mixed
    {
    }

    /**
     * insert.
     * Inserts values at a given index.
     *
     * @param int   $index
     * @param mixed $...values (optional)
     *
     * @throws OutOfRangeException
     *
     * @see http://php.net/manual/en/ds-deque.insert.php
     */
    public function insert(int $index, mixed $values): void
    {
    }

    /**
     * isEmpty.
     * Returns whether the deque is empty.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-deque.isempty.php
     */
    public function isEmpty(): bool
    {
    }

    /**
     * join.
     * Joins all values together as a string.
     *
     * @param string $glue (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/ds-deque.join.php
     */
    public function join(string $glue): string
    {
    }

    /**
     * jsonSerialize.
     * Returns a representation that can be converted to JSON.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-deque.jsonserialize.php
     */
    public function jsonSerialize(): mixed
    {
    }

    /**
     * last.
     * Returns the last value.
     *
     * @throws UnderflowException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-deque.last.php
     */
    public function last(): mixed
    {
    }

    /**
     * map.
     * Returns the result of applying a callback to each value.
     *
     * @param callable $callback
     *
     * @return Ds\Deque
     *
     * @see http://php.net/manual/en/ds-deque.map.php
     */
    public function map(callable $callback): Ds\Deque
    {
    }

    /**
     * merge.
     * Returns the result of adding all given values to the deque.
     *
     * @param mixed $values
     *
     * @return Ds\Deque
     *
     * @see http://php.net/manual/en/ds-deque.merge.php
     */
    public function merge(mixed $values): Ds\Deque
    {
    }

    /**
     * pop.
     * Removes and returns the last value.
     *
     * @throws UnderflowException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-deque.pop.php
     */
    public function pop(): mixed
    {
    }

    /**
     * push.
     * Adds values to the end of the deque.
     *
     * @param mixed $...values (optional)
     *
     * @see http://php.net/manual/en/ds-deque.push.php
     */
    public function push(mixed $values): void
    {
    }

    /**
     * reduce.
     * Reduces the deque to a single value using a callback function.
     *
     * @param callable $callback
     * @param mixed    $initial  (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-deque.reduce.php
     */
    public function reduce(callable $callback, mixed $initial): mixed
    {
    }

    /**
     * remove.
     * Removes and returns a value by index.
     *
     * @param int $index
     *
     * @throws OutOfRangeException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-deque.remove.php
     */
    public function remove(int $index): mixed
    {
    }

    /**
     * reverse.
     * Reverses the deque in-place.
     *
     * @see http://php.net/manual/en/ds-deque.reverse.php
     */
    public function reverse(): void
    {
    }

    /**
     * reversed.
     * Returns a reversed copy.
     *
     * @return Ds\Deque
     *
     * @see http://php.net/manual/en/ds-deque.reversed.php
     */
    public function reversed(): Ds\Deque
    {
    }

    /**
     * rotate.
     * Rotates the deque by a given number of rotations.
     *
     * @param int $rotations
     *
     * @see http://php.net/manual/en/ds-deque.rotate.php
     */
    public function rotate(int $rotations): void
    {
    }

    /**
     * set.
     * Updates a value at a given index.
     *
     * @param int   $index
     * @param mixed $value
     *
     * @throws OutOfRangeException
     *
     * @see http://php.net/manual/en/ds-deque.set.php
     */
    public function set(int $index, mixed $value): void
    {
    }

    /**
     * shift.
     * Removes and returns the first value.
     *
     * @throws UnderflowException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-deque.shift.php
     */
    public function shift(): mixed
    {
    }

    /**
     * slice.
     * Returns a sub-deque of a given range.
     *
     * @param int $index
     * @param int $length (optional)
     *
     * @return Ds\Deque
     *
     * @see http://php.net/manual/en/ds-deque.slice.php
     */
    public function slice(int $index, int $length): Ds\Deque
    {
    }

    /**
     * sort.
     * Sorts the deque in-place.
     *
     * @param callable $comparator (optional)
     *
     * @see http://php.net/manual/en/ds-deque.sort.php
     */
    public function sort(callable $comparator): void
    {
    }

    /**
     * sorted.
     * Returns a sorted copy.
     *
     * @param callable $comparator (optional)
     *
     * @return Ds\Deque
     *
     * @see http://php.net/manual/en/ds-deque.sorted.php
     */
    public function sorted(callable $comparator): Ds\Deque
    {
    }

    /**
     * sum.
     * Returns the sum of all values in the deque.
     *
     * @return number
     *
     * @see http://php.net/manual/en/ds-deque.sum.php
     */
    public function sum(): number
    {
    }

    /**
     * toArray.
     * Converts the deque to an array.
     *
     * @return array
     *
     * @see http://php.net/manual/en/ds-deque.toarray.php
     */
    public function toArray(): array
    {
    }

    /**
     * unshift.
     * Adds values to the front of the deque.
     *
     * @param mixed $values (optional)
     *
     * @see http://php.net/manual/en/ds-deque.unshift.php
     */
    public function unshift(mixed $values): void
    {
    }
}
