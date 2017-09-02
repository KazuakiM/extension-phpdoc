<?php

/**
 * ArrayObject.
 * This class allows objects to work as arrays.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.arrayobject.php
 */
class ArrayObject implements IteratorAggregate, ArrayAccess, Serializable, Countable
{
    const STD_PROP_LIST = 1;
    const ARRAY_AS_PROPS = 2;

    /**
     * __construct.
     * Construct a new array object.
     *
     * @param mixed  $input          = []
     * @param int    $flags          = 0
     * @param string $iterator_class = 'ArrayIterator'
     *
     * @throws InvalidArgumentException
     *
     * @see http://php.net/manual/en/arrayobject.construct.php
     */
    public function __construct($input = [], int $flags = 0, string $iterator_class = 'ArrayIterator')
    {
    }

    /**
     * append.
     * Appends the value.
     *
     * @param mixed $value
     *
     * @see http://php.net/manual/en/arrayobject.append.php
     */
    public function append(mixed $value): void
    {
    }

    /**
     * asort.
     * Sort the entries by value.
     *
     * @see http://php.net/manual/en/arrayobject.asort.php
     */
    public function asort(): void
    {
    }

    /**
     * count.
     * Get the number of public properties in the ArrayObject.
     *
     * @return int
     *
     * @see http://php.net/manual/en/arrayobject.count.php
     */
    public function count(): int
    {
    }

    /**
     * exchangeArray.
     * Exchange the array for another one.
     *
     * @param mixed $input
     *
     * @return array
     *
     * @see http://php.net/manual/en/arrayobject.exchangearray.php
     */
    public function exchangeArray(mixed $input): array
    {
    }

    /**
     * getArrayCopy.
     * Creates a copy of the ArrayObject.
     *
     * @return array
     *
     * @see http://php.net/manual/en/arrayobject.getarraycopy.php
     */
    public function getArrayCopy(): array
    {
    }

    /**
     * getFlags.
     * Gets the behavior flags.
     *
     * @return int
     *
     * @see http://php.net/manual/en/arrayobject.getflags.php
     */
    public function getFlags(): int
    {
    }

    /**
     * getIterator.
     * Create a new iterator from an ArrayObject instance.
     *
     * @return ArrayIterator
     *
     * @see http://php.net/manual/en/arrayobject.getiterator.php
     */
    public function getIterator(): ArrayIterator
    {
    }

    /**
     * getIteratorClass.
     * Gets the iterator classname for the ArrayObject.
     *
     * @return string
     *
     * @see http://php.net/manual/en/arrayobject.getiteratorclass.php
     */
    public function getIteratorClass(): string
    {
    }

    /**
     * ksort.
     * Sort the entries by key.
     *
     * @see http://php.net/manual/en/arrayobject.ksort.php
     */
    public function ksort(): void
    {
    }

    /**
     * natcasesort.
     * Sort an array using a case insensitive "natural order" algorithm.
     *
     * @see http://php.net/manual/en/arrayobject.natcasesort.php
     */
    public function natcasesort(): void
    {
    }

    /**
     * natsort.
     * Sort entries using a "natural order" algorithm.
     *
     * @see http://php.net/manual/en/arrayobject.natsort.php
     */
    public function natsort(): void
    {
    }

    /**
     * offsetExists.
     * Returns whether the requested index exists.
     *
     * @param mixed $index
     *
     * @return bool
     *
     * @see http://php.net/manual/en/arrayobject.offsetexists.php
     */
    public function offsetExists(mixed $index): bool
    {
    }

    /**
     * offsetGet.
     * Returns the value at the specified index.
     *
     * @param mixed $index
     *
     * @throws E_NOTICE
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/arrayobject.offsetget.php
     */
    public function offsetGet(mixed $index): mixed
    {
    }

    /**
     * offsetSet.
     * Sets the value at the specified index to newval.
     *
     * @param mixed $index
     * @param mixed $newval
     *
     * @see http://php.net/manual/en/arrayobject.offsetset.php
     */
    public function offsetSet(mixed $index, mixed $newval): void
    {
    }

    /**
     * offsetUnset.
     * Unsets the value at the specified index.
     *
     * @param mixed $index
     *
     * @see http://php.net/manual/en/arrayobject.offsetunset.php
     */
    public function offsetUnset(mixed $index): void
    {
    }

    /**
     * serialize.
     * Serialize an ArrayObject.
     *
     * @return string
     *
     * @see http://php.net/manual/en/arrayobject.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * setFlags.
     * Sets the behavior flags.
     *
     * @param int $flags
     *
     * @see http://php.net/manual/en/arrayobject.setflags.php
     */
    public function setFlags(int $flags): void
    {
    }

    /**
     * setIteratorClass.
     * Sets the iterator classname for the ArrayObject.
     *
     * @param string $iterator_class
     *
     * @see http://php.net/manual/en/arrayobject.setiteratorclass.php
     */
    public function setIteratorClass(string $iterator_class): void
    {
    }

    /**
     * uasort.
     * Sort the entries with a user-defined comparison function and maintain key association.
     *
     * @param callable $cmp_function
     *
     * @see http://php.net/manual/en/arrayobject.uasort.php
     */
    public function uasort(callable $cmp_function): void
    {
    }

    /**
     * uksort.
     * Sort the entries by keys using a user-defined comparison function.
     *
     * @param callable $cmp_function
     *
     * @see http://php.net/manual/en/arrayobject.uksort.php
     */
    public function uksort(callable $cmp_function): void
    {
    }

    /**
     * unserialize.
     * Unserialize an ArrayObject.
     *
     * @param string $serialized
     *
     * @see http://php.net/manual/en/arrayobject.unserialize.php
     */
    public function unserialize(string $serialized): void
    {
    }
}
