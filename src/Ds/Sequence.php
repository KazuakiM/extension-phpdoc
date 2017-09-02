<?php

/**
 * Ds\Sequence.
 * A Sequence describes the behaviour of values arranged in a single, linear dimension. Some languages refer to this as a "List". It’s similar to an array that uses incremental integer keys, with the exception of a few characteristics:
 *  Values will always be indexed as 0, 1, 2, …, size - 1.
 *  Only allowed to access values by index in the range 0, size - 1.
 * Use cases:
 *  Wherever you would use an array as a list (not concerned with keys).
 *  A more efficient alternative to SplDoublyLinkedList and SplFixedArray.
 *
 * @see http://php.net/manual/en/class.ds-sequence.php
 */

namespace Ds;

interface Sequence extends Ds\Collection
{
    /**
     * allocate.
     * Allocates enough memory for a required capacity.
     *
     * @param int $capacity
     *
     * @see http://php.net/manual/en/ds-sequence.allocate.php
     */
    public function allocate(int $capacity): void;

    /**
     * apply.
     * Updates all values by applying a callback function to each value.
     *
     * @param callable $callback
     *
     * @see http://php.net/manual/en/ds-sequence.apply.php
     */
    public function apply(callable $callback): void;

    /**
     * capacity.
     * Returns the current capacity.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ds-sequence.capacity.php
     */
    public function capacity(): int;

    /**
     * contains.
     * Determines if the sequence contains given values.
     *
     * @param mixed $...values (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-sequence.contains.php
     */
    public function contains(mixed $values): bool;

    /**
     * filter.
     * Creates a new sequence using a callable to determine which values to include.
     *
     * @param callable $callback (optional)
     *
     * @return Ds\Sequence
     *
     * @see http://php.net/manual/en/ds-sequence.filter.php
     */
    public function filter(callable $callback): Ds\Sequence;

    /**
     * find.
     * Attempts to find a value's index.
     *
     * @param mixed $value
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-sequence.find.php
     */
    public function find(mixed $value): mixed;

    /**
     * first.
     * Returns the first value in the sequence.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-sequence.first.php
     */
    public function first(): mixed;

    /**
     * get.
     * Returns the value at a given index.
     *
     * @param int $index
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-sequence.get.php
     */
    public function get(int $index): mixed;

    /**
     * insert.
     * Inserts values at a given index.
     *
     * @param int   $index
     * @param mixed $...values (optional)
     *
     * @see http://php.net/manual/en/ds-sequence.insert.php
     */
    public function insert(int $index, mixed $values): void;

    /**
     * join.
     * Joins all values together as a string.
     *
     * @param string $glue (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/ds-sequence.join.php
     */
    public function join(string $glue): string;

    /**
     * last.
     * Returns the last value.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-sequence.last.php
     */
    public function last(): mixed;

    /**
     * map.
     * Returns the result of applying a callback to each value.
     *
     * @param callable $callback
     *
     * @return Ds\Sequence
     *
     * @see http://php.net/manual/en/ds-sequence.map.php
     */
    public function map(callable $callback): Ds\Sequence;

    /**
     * merge.
     * Returns the result of adding all given values to the sequence.
     *
     * @param mixed $values
     *
     * @return Ds\Sequence
     *
     * @see http://php.net/manual/en/ds-sequence.merge.php
     */
    public function merge(mixed $values): Ds\Sequence;

    /**
     * pop.
     * Removes and returns the last value.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-sequence.pop.php
     */
    public function pop(): mixed;

    /**
     * push.
     * Adds values to the end of the sequence.
     *
     * @param mixed $...values (optional)
     *
     * @see http://php.net/manual/en/ds-sequence.push.php
     */
    public function push(mixed $values): void;

    /**
     * reduce.
     * Reduces the sequence to a single value using a callback function.
     *
     * @param callable $callback
     * @param mixed    $initial  (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-sequence.reduce.php
     */
    public function reduce(callable $callback, mixed $initial): mixed;

    /**
     * remove.
     * Removes and returns a value by index.
     *
     * @param int $index
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-sequence.remove.php
     */
    public function remove(int $index): mixed;

    /**
     * reverse.
     * Reverses the sequence in-place.
     *
     * @see http://php.net/manual/en/ds-sequence.reverse.php
     */
    public function reverse(): void;

    /**
     * reversed.
     * Returns a reversed copy.
     *
     * @return Ds\Sequence
     *
     * @see http://php.net/manual/en/ds-sequence.reversed.php
     */
    public function reversed(): Ds\Sequence;

    /**
     * rotate.
     * Rotates the sequence by a given number of rotations.
     *
     * @param int $rotations
     *
     * @see http://php.net/manual/en/ds-sequence.rotate.php
     */
    public function rotate(int $rotations): void;

    /**
     * set.
     * Updates a value at a given index.
     *
     * @param int   $index
     * @param mixed $value
     *
     * @see http://php.net/manual/en/ds-sequence.set.php
     */
    public function set(int $index, mixed $value): void;

    /**
     * shift.
     * Removes and returns the first value.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-sequence.shift.php
     */
    public function shift(): mixed;

    /**
     * slice.
     * Returns a sub-sequence of a given range.
     *
     * @param int $index
     * @param int $length (optional)
     *
     * @return Ds\Sequence
     *
     * @see http://php.net/manual/en/ds-sequence.slice.php
     */
    public function slice(int $index, int $length): Ds\Sequence;

    /**
     * sort.
     * Sorts the sequence in-place.
     *
     * @param callable $comparator (optional)
     *
     * @see http://php.net/manual/en/ds-sequence.sort.php
     */
    public function sort(callable $comparator): void;

    /**
     * sorted.
     * Returns a sorted copy.
     *
     * @param callable $comparator (optional)
     *
     * @return Ds\Sequence
     *
     * @see http://php.net/manual/en/ds-sequence.sorted.php
     */
    public function sorted(callable $comparator): Ds\Sequence;

    /**
     * sum.
     * Returns the sum of all values in the sequence.
     *
     * @return number
     *
     * @see http://php.net/manual/en/ds-sequence.sum.php
     */
    public function sum(): number;

    /**
     * unshift.
     * Adds values to the front of the sequence.
     *
     * @param mixed $values (optional)
     *
     * @see http://php.net/manual/en/ds-sequence.unshift.php
     */
    public function unshift(mixed $values): void;
}
