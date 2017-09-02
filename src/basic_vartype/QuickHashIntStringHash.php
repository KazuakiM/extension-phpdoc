<?php

/**
 * QuickHashIntStringHash.
 * This class wraps around a hash containing integer numbers, where the values are strings. Hashes are also available as implementation of the ArrayAccess interface.
 * Hashes can also be iterated over with foreach as the Iterator interface is implemented as well. The order of which elements are returned in is not guaranteed.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.quickhashintstringhash.php
 */
class QuickHashIntStringHash
{
    const CHECK_FOR_DUPES = 1;
    const DO_NOT_USE_ZEND_ALLOC = 2;
    const HASHER_NO_HASH = 256;
    const HASHER_JENKINS1 = 512;
    const HASHER_JENKINS2 = 1024;

    /**
     * __construct.
     * Creates a new QuickHashIntStringHash object.
     *
     * @param int $size
     * @param int $options = 0
     *
     * @see http://php.net/manual/en/quickhashintstringhash.construct.php
     */
    public function __construct(int $size, int $options = 0)
    {
    }

    /**
     * add.
     * This method adds a new entry to the hash.
     *
     * @param int    $key
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashintstringhash.add.php
     */
    public function add(int $key, string $value): bool
    {
    }

    /**
     * delete.
     * This method deletes am entry from the hash.
     *
     * @param int $key
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashintstringhash.delete.php
     */
    public function delete(int $key): bool
    {
    }

    /**
     * exists.
     * This method checks whether a key is part of the hash.
     *
     * @param int $key
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashintstringhash.exists.php
     */
    public function exists(int $key): bool
    {
    }

    /**
     * get.
     * This method retrieves a value from the hash by its key.
     *
     * @param int $key
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/quickhashintstringhash.get.php
     */
    public function get(int $key): mixed
    {
    }

    /**
     * getSize.
     * Returns the number of elements in the hash.
     *
     * @return int
     *
     * @see http://php.net/manual/en/quickhashintstringhash.getsize.php
     */
    public function getSize(): int
    {
    }

    /**
     * loadFromFile.
     * This factory method creates a hash from a file.
     *
     * @param string $filename
     * @param int    $size     = 0
     * @param int    $options  = 0
     *
     * @return QuickHashIntStringHash
     *
     * @see http://php.net/manual/en/quickhashintstringhash.loadfromfile.php
     */
    public static function loadFromFile(string $filename, int $size = 0, int $options = 0): QuickHashIntStringHash
    {
    }

    /**
     * loadFromString.
     * This factory method creates a hash from a string.
     *
     * @param string $contents
     * @param int    $size     = 0
     * @param int    $options  = 0
     *
     * @return QuickHashIntStringHash
     *
     * @see http://php.net/manual/en/quickhashintstringhash.loadfromstring.php
     */
    public static function loadFromString(string $contents, int $size = 0, int $options = 0): QuickHashIntStringHash
    {
    }

    /**
     * saveToFile.
     * This method stores an in-memory hash to disk.
     *
     * @param string $filename
     *
     * @see http://php.net/manual/en/quickhashintstringhash.savetofile.php
     */
    public function saveToFile(string $filename): void
    {
    }

    /**
     * saveToString.
     * This method returns a serialized version of the hash.
     *
     * @return string
     *
     * @see http://php.net/manual/en/quickhashintstringhash.savetostring.php
     */
    public function saveToString(): string
    {
    }

    /**
     * set.
     * This method updates an entry in the hash with a new value, or adds a new one if the entry doesn't exist.
     *
     * @param int    $key
     * @param string $value
     *
     * @return int
     *
     * @see http://php.net/manual/en/quickhashintstringhash.set.php
     */
    public function set(int $key, string $value): int
    {
    }

    /**
     * update.
     * This method updates an entry in the hash with a new value.
     *
     * @param int    $key
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashintstringhash.update.php
     */
    public function update(int $key, string $value): bool
    {
    }
}
