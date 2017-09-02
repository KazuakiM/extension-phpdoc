<?php

/**
 * SplDoublyLinkedList.
 * The SplDoublyLinkedList class provides the main functionalities of a doubly linked list.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.spldoublylinkedlist.php
 */
class SplDoublyLinkedList implements Iterator, ArrayAccess, Countable
{
    /**
     * __construct.
     * Constructs a new doubly linked list.
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.construct.php
     */
    public function __construct()
    {
    }

    /**
     * add.
     * Add/insert a new value at the specified index.
     *
     * @param mixed $index
     * @param mixed $newval
     *
     * @throws OutOfRangeException
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.add.php
     */
    public function add(mixed $index, mixed $newval): void
    {
    }

    /**
     * bottom.
     * Peeks at the node from the beginning of the doubly linked list.
     *
     * @throws RuntimeException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.bottom.php
     */
    public function bottom(): mixed
    {
    }

    /**
     * count.
     * Counts the number of elements in the doubly linked list.
     *
     * @return int
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.count.php
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
     * @see http://php.net/manual/en/spldoublylinkedlist.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * getIteratorMode.
     * Returns the mode of iteration.
     *
     * @return int
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.getiteratormode.php
     */
    public function getIteratorMode(): int
    {
    }

    /**
     * isEmpty.
     * Checks whether the doubly linked list is empty.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.isempty.php
     */
    public function isEmpty(): bool
    {
    }

    /**
     * key.
     * Return current node index.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.key.php
     */
    public function key(): mixed
    {
    }

    /**
     * next.
     * Move to next entry.
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.next.php
     */
    public function next(): void
    {
    }

    /**
     * offsetExists.
     * Returns whether the requested $index exists.
     *
     * @param mixed $index
     *
     * @return bool
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.offsetexists.php
     */
    public function offsetExists(mixed $index): bool
    {
    }

    /**
     * offsetGet.
     * Returns the value at the specified $index.
     *
     * @param mixed $index
     *
     * @throws OutOfRangeException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.offsetget.php
     */
    public function offsetGet(mixed $index): mixed
    {
    }

    /**
     * offsetSet.
     * Sets the value at the specified $index to $newval.
     *
     * @param mixed $index
     * @param mixed $newval
     *
     * @throws OutOfRangeException
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.offsetset.php
     */
    public function offsetSet(mixed $index, mixed $newval): void
    {
    }

    /**
     * offsetUnset.
     * Unsets the value at the specified $index.
     *
     * @param mixed $index
     *
     * @throws OutOfRangeException
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.offsetunset.php
     */
    public function offsetUnset(mixed $index): void
    {
    }

    /**
     * pop.
     * Pops a node from the end of the doubly linked list.
     *
     * @throws RuntimeException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.pop.php
     */
    public function pop(): mixed
    {
    }

    /**
     * prev.
     * Move to previous entry.
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.prev.php
     */
    public function prev(): void
    {
    }

    /**
     * push.
     * Pushes an element at the end of the doubly linked list.
     *
     * @param mixed $value
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.push.php
     */
    public function push(mixed $value): void
    {
    }

    /**
     * rewind.
     * Rewind iterator back to the start.
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * serialize.
     * Serializes the storage.
     *
     * @return string
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * setIteratorMode.
     * Sets the mode of iteration.
     *
     * @param int $mode
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.setiteratormode.php
     */
    public function setIteratorMode(int $mode): void
    {
    }

    /**
     * shift.
     * Shifts a node from the beginning of the doubly linked list.
     *
     * @throws RuntimeException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.shift.php
     */
    public function shift(): mixed
    {
    }

    /**
     * top.
     * Peeks at the node from the end of the doubly linked list.
     *
     * @throws RuntimeException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.top.php
     */
    public function top(): mixed
    {
    }

    /**
     * unserialize.
     * Unserializes the storage.
     *
     * @param string $serialized
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.unserialize.php
     */
    public function unserialize(string $serialized): void
    {
    }

    /**
     * unshift.
     * Prepends the doubly linked list with an element.
     *
     * @param mixed $value
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.unshift.php
     */
    public function unshift(mixed $value): void
    {
    }

    /**
     * valid.
     * Check whether the doubly linked list contains more nodes.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/spldoublylinkedlist.valid.php
     */
    public function valid(): bool
    {
    }
}
