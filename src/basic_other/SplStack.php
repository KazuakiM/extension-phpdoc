<?php

/**
 * SplStack.
 * The SplStack class provides the main functionalities of a stack implemented using a doubly linked list.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.splstack.php
 */
class SplStack extends SplDoublyLinkedList implements Iterator, ArrayAccess, Countable
{
    /**
     * __construct.
     * Constructs a new stack implemented using a doubly linked list.
     *
     * @see http://php.net/manual/en/splstack.construct.php
     */
    public function __construct()
    {
    }

    /**
     * setIteratorMode.
     * Sets the mode of iteration.
     *
     * @param int $mode
     *
     * @see http://php.net/manual/en/splstack.setiteratormode.php
     */
    public function setIteratorMode(int $mode): void
    {
    }

    /* Inherited methods */
    //public function SplDoublyLinkedList::add(mixed $index, mixed $newval): void
    //public function SplDoublyLinkedList::bottom(): mixed
    //public function SplDoublyLinkedList::count(): int
    //public function SplDoublyLinkedList::current(): mixed
    //public function SplDoublyLinkedList::getIteratorMode(): int
    //public function SplDoublyLinkedList::isEmpty(): bool
    //public function SplDoublyLinkedList::key(): mixed
    //public function SplDoublyLinkedList::next(): void
    //public function SplDoublyLinkedList::offsetExists(mixed $index): bool
    //public function SplDoublyLinkedList::offsetGet(mixed $index): mixed
    //public function SplDoublyLinkedList::offsetSet(mixed $index, mixed $newval): void
    //public function SplDoublyLinkedList::offsetUnset(mixed $index): void
    //public function SplDoublyLinkedList::pop(): mixed
    //public function SplDoublyLinkedList::prev(): void
    //public function SplDoublyLinkedList::push(mixed $value): void
    //public function SplDoublyLinkedList::rewind(): void
    //public function SplDoublyLinkedList::serialize(): string
    //public function SplDoublyLinkedList::setIteratorMode(int $mode): void
    //public function SplDoublyLinkedList::shift(): mixed
    //public function SplDoublyLinkedList::top(): mixed
    //public function SplDoublyLinkedList::unserialize(string $serialized): void
    //public function SplDoublyLinkedList::unshift(mixed $value): void
    //public function SplDoublyLinkedList::valid(): bool
}
