<?php

/**
 * Ds\Set.
 * A Set is a sequence of unique values. This implementation uses the same hash table as Ds\Map, where values are used as keys and the mapped value is ignored.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ds-set.php
 */

namespace Ds;

class Set implements Ds\Collection
{
    const MIN_CAPACITY = 16;

    /**
     * __construct.
     * Creates a new instance.
     *
     * @param mixed $values (optional)
     *
     * @see http://php.net/manual/en/ds-set.construct.php
     */
    public function __construct(mixed $values)
    {
    }

    /**
     * add.
     * Adds values to the set.
     *
     * @param mixed $...values (optional)
     *
     * @see http://php.net/manual/en/ds-set.add.php
     */
    public function add(mixed $values): void
    {
    }

    /**
     * allocate.
     * Allocates enough memory for a required capacity.
     *
     * @param int $capacity
     *
     * @see http://php.net/manual/en/ds-set.allocate.php
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
     * @see http://php.net/manual/en/ds-set.capacity.php
     */
    public function capacity(): int
    {
    }

    /**
     * clear.
     * Removes all values.
     *
     *
     * @see http://php.net/manual/en/ds-set.clear.php
     */
    public function clear(): void
    {
    }

    /**
     * contains.
     * Determines if the set contains all values.
     *
     * @param mixed $...values (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-set.contains.php
     */
    public function contains(mixed $values): bool
    {
    }

    /**
     * copy.
     * Returns a shallow copy of the set.
     *
     * @return Ds\Set
     *
     * @see http://php.net/manual/en/ds-set.copy.php
     */
    public function copy(): Ds\Set
    {
    }

    /**
     * count.
     * Returns the number of values in the collection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ds-set.count.php
     */
    public function count(): int
    {
    }

    /**
     * diff.
     * Creates a new set using values that aren't in another set.
     *
     * @param Ds\Set $set
     *
     * @return Ds\Set
     *
     * @see http://php.net/manual/en/ds-set.diff.php
     */
    public function diff(Ds\Set $set): Ds\Set
    {
    }

    /**
     * filter.
     * Creates a new set using a callable to determine which values to include.
     *
     * @param callable $callback (optional)
     *
     * @return Ds\Set
     *
     * @see http://php.net/manual/en/ds-set.filter.php
     */
    public function filter(callable $callback): Ds\Set
    {
    }

    /**
     * first.
     * Returns the first value in the set.
     *
     * @throws UnderflowException
     *
     * @see http://php.net/manual/en/ds-set.first.php
     */
    public function first(): void
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
     * @see http://php.net/manual/en/ds-set.get.php
     */
    public function get(int $index): mixed
    {
    }

    /**
     * intersect.
     * Creates a new set by intersecting values with another set.
     *
     * @param Ds\Set $set
     *
     * @return Ds\Set
     *
     * @see http://php.net/manual/en/ds-set.intersect.php
     */
    public function intersect(Ds\Set $set): Ds\Set
    {
    }

    /**
     * isEmpty.
     * Returns whether the set is empty.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-set.isempty.php
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
     * @see http://php.net/manual/en/ds-set.join.php
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
     * @see http://php.net/manual/en/ds-set.jsonserialize.php
     */
    public function jsonSerialize(): mixed
    {
    }

    /**
     * last.
     * Returns the last value in the set.
     *
     * @throws UnderflowException
     *
     * @see http://php.net/manual/en/ds-set.last.php
     */
    public function last(): void
    {
    }

    /**
     * merge.
     * Returns the result of adding all given values to the set.
     *
     * @param mixed $values
     *
     * @return Ds\Set
     *
     * @see http://php.net/manual/en/ds-set.merge.php
     */
    public function merge(mixed $values): Ds\Set
    {
    }

    /**
     * reduce.
     * Reduces the set to a single value using a callback function.
     *
     * @param callable $callback
     * @param mixed    $initial  (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-set.reduce.php
     */
    public function reduce(callable $callback, mixed $initial): mixed
    {
    }

    /**
     * remove.
     * Removes all given values from the set.
     *
     * @param mixed $...values (optional)
     *
     * @see http://php.net/manual/en/ds-set.remove.php
     */
    public function remove(mixed $values): void
    {
    }

    /**
     * reverse.
     * Reverses the set in-place.
     *
     *
     * @see http://php.net/manual/en/ds-set.reverse.php
     */
    public function reverse(): void
    {
    }

    /**
     * reversed.
     * Returns a reversed copy.
     *
     * @return Ds\Set
     *
     * @see http://php.net/manjal/en/ds-set.reversed.php
     */
    public function reversed(): Ds\Set
    {
    }

    /**
     * slice.
     * Returns a sub-set of a given range.
     *
     * @param int $index
     * @param int $length (optional)
     *
     * @return Ds\Set
     *
     * @see http://php.net/manual/en/ds-set.slice.php
     */
    public function slice(int $index, int $length): Ds\Set
    {
    }

    /**
     * sort.
     * Sorts the set in-place.
     *
     * @param callable $comparator (optional)
     *
     * @see http://php.net/manual/en/ds-set.sort.php
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
     * @return Ds\Set
     *
     * @see http://php.net/manual/en/ds-set.sorted.php
     */
    public function sorted(callable $comparator): Ds\Set
    {
    }

    /**
     * sum.
     * Returns the sum of all values in the set.
     *
     * @return number
     *
     * @see http://php.net/manual/en/ds-set.sum.php
     */
    public function sum(): number
    {
    }

    /**
     * toArray.
     * Converts the set to an array.
     *
     * @return array
     *
     * @see http://php.net/manual/en/ds-set.toarray.php
     */
    public function toArray(): array
    {
    }

    /**
     * union.
     * Creates a new set using values from the current instance and another set.
     *
     * @param Ds\Set $set
     *
     * @return Ds\Set
     *
     * @see http://php.net/manual/en/ds-set.union.php
     */
    public function union(Ds\Set $set): Ds\Set
    {
    }

    /**
     * xor.
     * Creates a new set using values in either the current instance or in another set, but not in both.
     *
     * @param Ds\Set $set
     *
     * @return Ds\Set
     *
     * @see http://php.net/manual/en/ds-set.xor.php
     */
    public function xor(Ds\Set $set): Ds\Set
    {
    }
}
