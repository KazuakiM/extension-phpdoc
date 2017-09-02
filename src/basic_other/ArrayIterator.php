<?php

/**
 * ArrayIterator.
 * This iterator allows to unset and modify values and keys while iterating over Arrays and Objects.
 * When you want to iterate over the same array multiple times you need to instantiate ArrayObject and let it create ArrayIterator instances that refer to it either by using foreach or by calling its getIterator() method manually.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.arrayiterator.php
 */
class ArrayIterator implements ArrayAccess, SeekableIterator, Countable, Serializable
{
    /**
     * __construct.
     * Construct an ArrayIterator.
     *
     * @param mixed $array = array()
     * @param int   $flags = 0
     *
     * @throws InvalidArgumentException
     *
     * @see http://php.net/manual/en/arrayiterator.construct.php
     */
    public function __construct($array = [], int $flags = 0)
    {
    }

    /**
     * append.
     * Append an element.
     *
     * @param mixed $value
     *
     * @see http://php.net/manual/en/arrayiterator.append.php
     */
    public function append(mixed $value): void
    {
    }

    /**
     * asort.
     * Sort array by values.
     *
     * @see http://php.net/manual/en/arrayiterator.asort.php
     */
    public function asort(): void
    {
    }

    /**
     * count.
     * Count elements.
     *
     * @return int
     *
     * @see http://php.net/manual/en/arrayiterator.count.php
     */
    public function count(): int
    {
    }

    /**
     * current.
     * Return current array entry.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/arrayiterator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * getArrayCopy.
     * Get array copy.
     *
     * @return array
     *
     * @see http://php.net/manual/en/arrayiterator.getarraycopy.php
     */
    public function getArrayCopy(): array
    {
    }

    /**
     * getFlags.
     * Get flags.
     *
     * @see http://php.net/manual/en/arrayiterator.getflags.php
     */
    public function getFlags(): void
    {
    }

    /**
     * key.
     * Return current array key.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/arrayiterator.key.php
     */
    public function key(): mixed
    {
    }

    /**
     * ksort.
     * Sort array by keys.
     *
     * @see http://php.net/manual/en/arrayiterator.ksort.php
     */
    public function ksort(): void
    {
    }

    /**
     * natcasesort.
     * Sort an array naturally, case insensitive.
     *
     * @see http://php.net/manual/en/arrayiterator.natcasesort.php
     */
    public function natcasesort(): void
    {
    }

    /**
     * natsort.
     * Sort an array naturally.
     *
     * @see http://php.net/manual/en/arrayiterator.natsort.php
     */
    public function natsort(): void
    {
    }

    /**
     * next.
     * Move to next entry.
     *
     * @see http://php.net/manual/en/arrayiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * offsetExists.
     * Check if offset exists.
     *
     * @param string $index
     *
     * @see http://php.net/manual/en/arrayiterator.offsetexists.php
     */
    public function offsetExists(string $index): void
    {
    }

    /**
     * offsetGet.
     * Get value for an offset.
     *
     * @param string $index
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/arrayiterator.offsetget.php
     */
    public function offsetGet(string $index): mixed
    {
    }

    /**
     * offsetSet.
     * Set value for an offset.
     *
     * @param string $index
     * @param string $newval
     *
     * @see http://php.net/manual/en/arrayiterator.offsetset.php
     */
    public function offsetSet(string $index, string $newval): void
    {
    }

    /**
     * offsetUnset.
     * Unset value for an offset.
     *
     * @param string $index
     *
     * @see http://php.net/manual/en/arrayiterator.offsetunset.php
     */
    public function offsetUnset(string $index): void
    {
    }

    /**
     * rewind.
     * Rewind array back to the start.
     *
     * @see http://php.net/manual/en/arrayiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * seek.
     * Seek to position.
     *
     * @param int $position
     *
     * @see http://php.net/manual/en/arrayiterator.seek.php
     */
    public function seek(int $position): void
    {
    }

    /**
     * serialize.
     * Serialize.
     *
     * @return string
     *
     * @see http://php.net/manual/en/arrayiterator.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * setFlags.
     * Set behaviour flags.
     *
     * @param string $flags
     *
     * @see http://php.net/manual/en/arrayiterator.setflags.php
     */
    public function setFlags(string $flags): void
    {
    }

    /**
     * uasort.
     * User defined sort.
     *
     * @param string $cmp_function
     *
     * @see http://php.net/manual/en/arrayiterator.uasort.php
     */
    public function uasort(string $cmp_function): void
    {
    }

    /**
     * uksort.
     * User defined sort.
     *
     * @param string $cmp_function
     *
     * @see http://php.net/manual/en/arrayiterator.uksort.php
     */
    public function uksort(string $cmp_function): void
    {
    }

    /**
     * unserialize.
     * Unserialize.
     *
     * @param string $serialized
     *
     * @return string
     *
     * @see http://php.net/manual/en/arrayiterator.unserialize.php
     */
    public function unserialize(string $serialized): string
    {
    }

    /**
     * valid.
     * Check whether array contains more entries.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/arrayiterator.valid.php
     */
    public function valid(): bool
    {
    }
}
