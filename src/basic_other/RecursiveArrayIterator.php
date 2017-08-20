<?php

/**
 * RecursiveArrayIterator.
 * This iterator allows to unset and modify values and keys while iterating over Arrays and Objects in the same way as the ArrayIterator. Additionally it is possible to iterate over the current iterator entry.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.recursivearrayiterator.php
 */
class RecursiveArrayIterator extends ArrayIterator implements RecursiveIterator
{
    const CHILD_ARRAYS_ONLY = 4;

    /**
     * getChildren.
     * Returns an iterator for the current entry if it is an array or an object.
     *
     * @throws InvalidArgumentException
     *
     * @return RecursiveArrayIterator
     *
     * @see http://php.net/manual/en/recursivearrayiterator.getchildren.php
     */
    public function getChildren(): RecursiveArrayIterator
    {
    }

    /**
     * hasChildren.
     * Returns whether current entry is an array or an object.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/recursivearrayiterator.haschildren.php
     */
    public function hasChildren(): bool
    {
    }

    /* Inherited methods */
    //public function ArrayIterator::append(mixed $value): void
    //public function ArrayIterator::asort(): void
    //public function __construct(mixed $array = array(): ArrayIterator::, int $flags = 0)
    //public function ArrayIterator::count(): int
    //public function ArrayIterator::current(): mixed
    //public function ArrayIterator::getArrayCopy(): array
    //public function ArrayIterator::getFlags(): void
    //public function ArrayIterator::key(): mixed
    //public function ArrayIterator::ksort(): void
    //public function ArrayIterator::natcasesort(): void
    //public function ArrayIterator::natsort(): void
    //public function ArrayIterator::next(): void
    //public function ArrayIterator::offsetExists(string $index): void
    //public function ArrayIterator::offsetGet(string $index): mixed
    //public function ArrayIterator::offsetSet(string $index, string $newval): void
    //public function ArrayIterator::offsetUnset(string $index): void
    //public function ArrayIterator::rewind(): void
    //public function ArrayIterator::seek(int $position): void
    //public function ArrayIterator::serialize(): string
    //public function ArrayIterator::setFlags(string $flags): void
    //public function ArrayIterator::uasort(string $cmp_function): void
    //public function ArrayIterator::uksort(string $cmp_function): void
    //public function ArrayIterator::unserialize(string $serialized): string
    //public function ArrayIterator::valid(): bool
}
