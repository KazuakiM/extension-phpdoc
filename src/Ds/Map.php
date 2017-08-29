<?php

/**
 * Ds\Map.
 * A Map is a sequential collection of key-value pairs, almost identical to an array used in a similar context. Keys can be any type, but must be unique. Values are replaced if added to the map using the same key.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ds-map.php
 */

namespace Ds;

class Map implements Ds\Collection
{
    const MIN_CAPACITY = 16;

    /**
     * __construct.
     * Creates a new instance.
     *
     * @param mixed $values (optional)
     *
     * @see http://php.net/manual/en/ds-map.construct.php
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
     * @see http://php.net/manual/en/ds-map.allocate.php
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
     * @see http://php.net/manual/en/ds-map.apply.php
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
     * @see http://php.net/manual/en/ds-map.capacity.php
     */
    public function capacity(): int
    {
    }

    /**
     * clear.
     * Removes all values.
     *
     *
     * @see http://php.ne/manual/en/ds-map.clear.php
     */
    public function clear(): void
    {
    }

    /**
     * copy.
     * Returns a shallow copy of the map.
     *
     * @return Ds\Map
     *
     * @see http://php.net/manual/en/ds-map.copy.php
     */
    public function copy(): Ds\Map
    {
    }

    /**
     * count.
     * Returns the number of values in the collection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ds-map.count.php
     */
    public function count(): int
    {
    }

    /**
     * diff.
     * Creates a new map using keys that aren't in another map.
     *
     * @param Ds\Map $map
     *
     * @return Ds\Map
     *
     * @see http://php.net/manual/en/ds-map.diff.php
     */
    public function diff(Ds\Map $map): Ds\Map
    {
    }

    /**
     * filter.
     * Creates a new map using a callable to determine which pairs to include.
     *
     * @param callable $callback (optional)
     *
     * @return Ds\Map
     *
     * @see http://php.net/manual/en/ds-map.filter.php
     */
    public function filter(callable $callback): Ds\Map
    {
    }

    /**
     * first.
     * Returns the first pair in the map.
     *
     * @throws UnderflowException
     *
     * @return Ds\Pair
     *
     * @see http://php.net/manual/en/ds-map.first.php
     */
    public function first(): Ds\Pair
    {
    }

    /**
     * get.
     * Returns the value for a given key.
     *
     * @param mixed $key
     * @param mixed $default (optional)
     *
     * @throws OutOfBoundsException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-map.get.php
     */
    public function get(mixed $key, mixed $default): mixed
    {
    }

    /**
     * hasKey.
     * Determines whether the map contains a given key.
     *
     * @param mixed $key
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-map.haskey.php
     */
    public function hasKey(mixed $key): bool
    {
    }

    /**
     * hasValue.
     * Determines whether the map contains a given value.
     *
     * @param mixed $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-map.hasvalue.php
     */
    public function hasValue(mixed $value): bool
    {
    }

    /**
     * intersect.
     * Creates a new map by intersecting keys with another map.
     *
     * @param Ds\Map $map
     *
     * @return Ds\Map
     *
     * @see http://php.net/manual/en/ds-map.intersect.php
     */
    public function intersect(Ds\Map $map): Ds\Map
    {
    }

    /**
     * isEmpty.
     * Returns whether the map is empty.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ds-map.isempty.php
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
     * @see http://php.net/manual/en/ds-map.jsonserialize.php
     */
    public function jsonSerialize(): mixed
    {
    }

    /**
     * keys.
     * Returns a set of the map's keys.
     *
     * @return Ds\Set
     *
     * @see http://php.net/manual/en/ds-map.keys.php
     */
    public function keys(): Ds\Set
    {
    }

    /**
     * ksort.
     * Sorts the map in-place by key.
     *
     * @param callable $comparator (optional)
     *
     * @see http://php.net/manual/en/ds-map.ksort.php
     */
    public function ksort(callable $comparator): void
    {
    }

    /**
     * ksorted.
     * Returns a copy, sorted by key.
     *
     * @param callable $comparator (optional)
     *
     * @return Ds\Map
     *
     * @see http://php.net/manual/en/ds-map.ksorted.php
     */
    public function ksorted(callable $comparator): Ds\Map
    {
    }

    /**
     * last.
     * Returns the last pair of the map.
     *
     * @throws UnderflowException
     *
     * @return Ds\Pair
     *
     * @see http://php.net/manual/en/ds-map.last.php
     */
    public function last(): Ds\Pair
    {
    }

    /**
     * map.
     * Returns the result of applying a callback to each value.
     *
     * @param callable $callback
     *
     * @return Ds\Map
     *
     * @see http://php.net/manual/en/ds-map.map.php
     */
    public function map(callable $callback): Ds\Map
    {
    }

    /**
     * merge.
     * Returns the result of adding all given associations.
     *
     * @param mixed $values
     *
     * @return Ds\Map
     *
     * @see http://php.net/manual/en/ds-map.merge.php
     */
    public function merge(mixed $values): Ds\Map
    {
    }

    /**
     * pairs.
     * Returns a sequence containing all the pairs of the map.
     *
     * @return Ds\Sequence
     *
     * @see http://php.net/manual/en/ds-map.pairs.php
     */
    public function pairs(): Ds\Sequence
    {
    }

    /**
     * put.
     * Associates a key with a value.
     *
     * @param mixed $key
     * @param mixed $value
     *
     * @see http://php.net/manual/en/ds-map.put.php
     */
    public function put(mixed $key, mixed $value): void
    {
    }

    /**
     * putAll.
     * Associates all key-value pairs of a traversable object or array.
     *
     * @param mixed $pairs
     *
     * @see http://php.net/manual/en/ds-map.putall.php
     */
    public function putAll(mixed $pairs): void
    {
    }

    /**
     * reduce.
     * Reduces the map to a single value using a callback function.
     *
     * @param callable $callback
     * @param mixed    $initial  (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-map.reduce.php
     */
    public function reduce(callable $callback, mixed $initial): mixed
    {
    }

    /**
     * remove.
     * Removes and returns a value by key.
     *
     * @param mixed $key
     * @param mixed $default (optional)
     *
     * @throws OutOfBoundsException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ds-map.remove.php
     */
    public function remove(mixed $key, mixed $default): mixed
    {
    }

    /**
     * reverse.
     * Reverses the map in-place.
     *
     *
     * @see http://php.net/manual/en/ds-map.reverse.php
     */
    public function reverse(): void
    {
    }

    /**
     * reversed.
     * Returns a reversed copy.
     *
     * @return Ds\Map
     *
     * @see http://php.net/manual/en/ds-map.reversed.php
     */
    public function reversed(): Ds\Map
    {
    }

    /**
     * skip.
     * Returns the pair at a given positional index.
     *
     * @param int $position
     *
     * @throws OutOfRangeException
     *
     * @return Ds\Pair
     *
     * @see http://php.net/manual/en/ds-map.skip.php
     */
    public function skip(int $position): Ds\Pair
    {
    }

    /**
     * slice.
     * Returns a subset of the map defined by a starting index and length.
     *
     * @param int $index
     * @param int $length (optional)
     *
     * @return Ds\Map
     *
     * @see http://php.net/manual/en/ds-map.slice.php
     */
    public function slice(int $index, int $length): Ds\Map
    {
    }

    /**
     * sort.
     * Sorts the map in-place by value.
     *
     * @param callable $comparator (optional)
     *
     * @see http://php.net/manual/en/ds-map.sort.php
     */
    public function sort(callable $comparator): void
    {
    }

    /**
     * sorted.
     * Returns a copy, sorted by value.
     *
     * @param callable $comparator (optional)
     *
     * @return Ds\Map
     *
     * @see http://php.net/manual/en/ds-map.sorted.php
     */
    public function sorted(callable $comparator): Ds\Map
    {
    }

    /**
     * sum.
     * Returns the sum of all values in the map.
     *
     * @return number
     *
     * @see http://php.net/manual/en/ds-map.sum.php
     */
    public function sum(): number
    {
    }

    /**
     * toArray.
     * Converts the map to an array.
     *
     * @return array
     *
     * @see http://php.net/manual/en/ds-map.toarray.php
     */
    public function toArray(): array
    {
    }

    /**
     * union.
     * Creates a new map using values from the current instance and another map.
     *
     * @param Ds\Map $map
     *
     * @return Ds\Map
     *
     * @see http://php.net/manual/en/ds-map.union.php
     */
    public function union(Ds\Map $map): Ds\Map
    {
    }

    /**
     * values.
     * Returns a sequence of the map's values.
     *
     * @return Ds\Sequence
     *
     * @see http://php.net/manual/en/ds-map.values.php
     */
    public function values(): Ds\Sequence
    {
    }

    /**
     * xor.
     * Creates a new map using keys of either the current instance or of another map, but not of both.
     *
     * @param Ds\Map $map
     *
     * @return Ds\Map
     *
     * @see http://php.net/manual/en/ds-map.xor.php
     */
    public function xor(Ds\Map $map): Ds\Map
    {
    }
}
