<?php

/**
 * Ds\Vector.
 * A Vector is a sequence of values in a contiguous buffer that grows and shrinks automatically. It’s the most efficient sequential structure because a value’s index is a direct mapping to its index in the buffer, and the growth factor isn't bound to a specific multiple or exponent.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ds-vector.php
 */

namespace Ds;

class Vector implements Ds\Sequence
{
    const MIN_CAPACITY = 10;

    /**
     * __construct.
     * Creates a new instance.
     *
     * @param mixed $values (optional)
     *
     * @see http://php.net/manual/en/ds-vector.construct.php
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
     * @see http://php.net/manual/en/ds-vector.allocate.php
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
     * @see http://php.net/manual/en/ds-vector.apply.php
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
     * @see http://php.net/manual/en/ds-vector.capacity.php
     */
    public function capacity(): int
    {
    }

    /**
     * clear.
     * Removes all values.
     *
     * @see http://php.net/manual/en/ds-vector.clear.php
     */
    public function clear(): void
    {
    }

    /**
     * contains.
     * Determines if the vector contains given values.
     *
     * @param mixed $...values (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-vector.contains.php
     */
    public function contains(mixed $values): bool
    {
    }

    /**
     * copy.
     * Returns a shallow copy of the vector.
     *
     * @return Ds\Vector
     *
     * @see http://php.net/manual/en/ds-vector.copy.php
     */
    public function copy(): Ds\Vector
    {
    }

    /**
     * count.
     * Returns the number of values in the collection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ds-vector.count.php
     */
    public function count(): int
    {
    }

    /**
     * filter.
     * Creates a new vector using a callable to determine which values to include.
     *
     * @param callable $callback (optional)
     *
     * @return Ds\Vector
     *
     * @see http://php.net/manual/en/ds-vector.filter.php
     */
    public function filter(callable $callback): Ds\Vector
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
     * @see http://php.net/manual/en/ds-vector.find.php
     */
    public function find(mixed $value): mixed
    {
    }

    /**
     * first.
     * Returns the first value in the vector.
     *
     * @throws UnderflowException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-vector.first.php
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
     * @see http://php.net/manual/en/ds-vector.get.php
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
     * @see http://php.net/manual/en/ds-vector.insert.php
     */
    public function insert(int $index, mixed $values): void
    {
    }

    /**
     * isEmpty.
     * Returns whether the vector is empty.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-vector.isempty.php
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
     * @see http://php.net/manual/en/ds-vector.join.php
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
     * @see http://php.net/manual/en/ds-vector.jsonserialize.php
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
     * @see http://php.net/manual/en/ds-vector.last.php
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
     * @return Ds\Vector
     *
     * @see http://php.net/manual/en/ds-vector.map.php
     */
    public function map(callable $callback): Ds\Vector
    {
    }

    /**
     * merge.
     * Returns the result of adding all given values to the vector.
     *
     * @param mixed $values
     *
     * @return Ds\Vector
     *
     * @see http://php.net/manual/en/ds-vector.merge.php
     */
    public function merge(mixed $values): Ds\Vector
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
     * @see http://php.net/manual/en/ds-vector.pop.php
     */
    public function pop(): mixed
    {
    }

    /**
     * push.
     * Adds values to the end of the vector.
     *
     * @param mixed $...values (optional)
     *
     * @see http://php.net/manual/en/ds-vector.push.php
     */
    public function push(mixed $values): void
    {
    }

    /**
     * reduce.
     * Reduces the vector to a single value using a callback function.
     *
     * @param callable $callback
     * @param mixed    $initial  (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-vector.reduce.php
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
     * @see http://php.net/manual/en/ds-vector.remove.php
     */
    public function remove(int $index): mixed
    {
    }

    /**
     * reverse.
     * Reverses the vector in-place.
     *
     * @see http://php.net/manual/en/ds-vector.reverse.php
     */
    public function reverse(): void
    {
    }

    /**
     * reversed.
     * Returns a reversed copy.
     *
     * @return Ds\Vector
     *
     * @see http://php.net/manual/en/ds-vector.reversed.php
     */
    public function reversed(): Ds\Vector
    {
    }

    /**
     * rotate.
     * Rotates the vector by a given number of rotations.
     *
     * @param int $rotations
     *
     * @see http://php.net/manual/en/ds-vector.rotate.php
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
     * @see http://php.net/manual/en/ds-vector.set.php
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
     * @see http://php.net/manual/en/ds-vector.shift.php
     */
    public function shift(): mixed
    {
    }

    /**
     * slice.
     * Returns a sub-vector of a given range.
     *
     * @param int $index
     * @param int $length (optional)
     *
     * @return Ds\Vector
     *
     * @see http://php.net/manual/en/ds-vector.slice.php
     */
    public function slice(int $index, int $length): Ds\Vector
    {
    }

    /**
     * sort.
     * Sorts the vector in-place.
     *
     * @param callable $comparator (optional)
     *
     * @see http://php.net/manual/en/ds-vector.sort.php
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
     * @return Ds\Vector
     *
     * @see http://php.net/manual/en/ds-vector.sorted.php
     */
    public function sorted(callable $comparator): Ds\Vector
    {
    }

    /**
     * sum.
     * Returns the sum of all values in the vector.
     *
     * @return number
     *
     * @see http://php.net/manual/en/ds-vector.sum.php
     */
    public function sum(): number
    {
    }

    /**
     * toArray.
     * Converts the vector to an array.
     *
     * @return array
     *
     * @see http://php.net/manual/en/ds-vector.toarray.php
     */
    public function toArray(): array
    {
    }

    /**
     * unshift.
     * Adds values to the front of the vector.
     *
     * @param mixed $values (optional)
     *
     * @see http://php.net/manual/en/ds-vector.unshift.php
     */
    public function unshift(mixed $values): void
    {
    }
}
