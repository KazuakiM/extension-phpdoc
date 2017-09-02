<?php

/**
 * SplObjectStorage.
 * The SplObjectStorage class provides a map from objects to data or, by ignoring data, an object set. This dual purpose can be useful in many cases involving the need to uniquely identify objects.
 *
 * @author Kazuaki MABUCHI
 * @copyright[Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under[CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.splobjectstorage.php
 */
class SplObjectStorage implements Countable, Iterator, Serializable, ArrayAccess
{
    /**
     * addAll.
     * Adds all objects from another storage.
     *
     * @param SplObjectStorage $storage
     *
     * @see http://php.net/manual/en/splobjectstorage.addall.php
     */
    public function addAll(SplObjectStorage $storage): void
    {
    }

    /**
     * attach.
     * Adds an object in the storage.
     *
     * @param object $object
     * @param mixed  $data   = null
     *
     * @see http://php.net/manual/en/splobjectstorage.attach.php
     */
    public function attach(object $object, mixed $data = null): void
    {
    }

    /**
     * contains.
     * Checks if the storage contains a specific object.
     *
     * @param object $object
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splobjectstorage.contains.php
     */
    public function contains(object $object): bool
    {
    }

    /**
     * count.
     * Returns the number of objects in the storage.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splobjectstorage.count.php
     */
    public function count(): int
    {
    }

    /**
     * current.
     * Returns the current storage entry.
     *
     * @return object
     *
     * @see http://php.net/manual/en/splobjectstorage.current.php
     */
    public function current(): object
    {
    }

    /**
     * detach.
     * Removes an object from the storage.
     *
     * @param object $object
     *
     * @see http://php.net/manual/en/splobjectstorage.detach.php
     */
    public function detach(object $object): void
    {
    }

    /**
     * getHash.
     * Calculate a unique identifier for the contained objects.
     *
     * @param object $object
     *
     * @throws RuntimeException
     *
     * @return string
     *
     * @see http://php.net/manual/en/splobjectstorage.gethash.php
     */
    public function getHash(object $object): string
    {
    }

    /**
     * getInfo.
     * Returns the data associated with the current iterator entry.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/splobjectstorage.getinfo.php
     */
    public function getInfo(): mixed
    {
    }

    /**
     * key.
     * Returns the index at which the iterator currently is.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splobjectstorage.key.php
     */
    public function key(): int
    {
    }

    /**
     * next.
     * Move to the next entry.
     *
     * @see http://php.net/manual/en/splobjectstorage.next.php
     */
    public function next(): void
    {
    }

    /**
     * offsetExists.
     * Checks whether an object exists in the storage.
     *
     * @param object $object
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splobjectstorage.offsetexists.php
     */
    public function offsetExists(object $object): bool
    {
    }

    /**
     * offsetGet.
     * Returns the data associated with an object.
     *
     * @param object $object
     *
     * @throws UnexpectedValueException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/splobjectstorage.offsetget.php
     */
    public function offsetGet(object $object): mixed
    {
    }

    /**
     * offsetSet.
     * Associates data to an object in the storage.
     *
     * @param object $object
     * @param mixed  $data   = null
     *
     * @see http://php.net/manual/en/splobjectstorage.offsetset.php
     */
    public function offsetSet(object $object, mixed $data = null): void
    {
    }

    /**
     * offsetUnset.
     * Removes an object from the storage.
     *
     * @param object $object
     *
     * @see http://php.net/manual/en/splobjectstorage.offsetunset.php
     */
    public function offsetUnset(object $object): void
    {
    }

    /**
     * removeAll.
     * Removes objects contained in another storage from the current storage.
     *
     * @param SplObjectStorage $storage
     *
     * @see http://php.net/manual/en/splobjectstorage.removeall.php
     */
    public function removeAll(SplObjectStorage $storage): void
    {
    }

    /**
     * removeAllExcept.
     * Removes all objects except for those contained in another storage from the current storage.
     *
     * @param SplObjectStorage $storage
     *
     * @see http://php.net/manual/en/splobjectstorage.removeallexcept.php
     */
    public function removeAllExcept(SplObjectStorage $storage): void
    {
    }

    /**
     * rewind.
     * Rewind the iterator to the first storage element.
     *
     * @see http://php.net/manual/en/splobjectstorage.rewind.php
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
     * @see http://php.net/manual/en/splobjectstorage.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * setInfo.
     * Sets the data associated with the current iterator entry.
     *
     * @param mixed $data
     *
     * @see http://php.net/manual/en/splobjectstorage.setinfo.php
     */
    public function setInfo(mixed $data): void
    {
    }

    /**
     * unserialize.
     * Unserializes a storage from its string representation.
     *
     * @param string $serialized
     *
     * @see http://php.net/manual/en/splobjectstorage.unserialize.php
     */
    public function unserialize(string $serialized): void
    {
    }

    /**
     * valid.
     * Returns if the current iterator entry is valid.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splobjectstorage.valid.php
     */
    public function valid(): bool
    {
    }
}
