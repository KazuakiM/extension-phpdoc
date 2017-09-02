<?php

/**
 * QuickHashIntHash.
 * This class wraps around a hash containing integer numbers, where the values are also integer numbers. Hashes are also available as implementation of the ArrayAccess interface.
 * Hashes can also be iterated over with foreach as the Iterator interface is implemented as well. The order of which elements are returned in is not guaranteed.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.quickhashinthash.php
 */
class QuickHashIntHash
{
    const CHECK_FOR_DUPES = 1;
    const DO_NOT_USE_ZEND_ALLOC = 2;
    const HASHER_NO_HASH = 256;
    const HASHER_JENKINS1 = 512;
    const HASHER_JENKINS2 = 1024;

    /**
     * __construct.
     * Creates a new QuickHashIntHash object.
     *
     * @param int $size
     * @param int $options (optional)
     *
     * @see http://php.net/manual/en/quickhashinthash.construct.php
     */
    public function __construct(int $size, int $options)
    {
    }

    /**
     * add.
     * This method adds a new entry to the hash.
     *
     * @param int $key
     * @param int $value (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashinthash.add.php
     */
    public function add(int $key, int $value): bool
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
     * @see http://php.net/manual/en/quickhashinthash.delete.php
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
     * @see http://php.net/manual/en/quickhashinthash.exists.php
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
     * @return int
     *
     * @see http://php.net/manual/en/quickhashinthash.get.php
     */
    public function get(int $key): int
    {
    }

    /**
     * getSize.
     * Returns the number of elements in the hash.
     *
     * @return int
     *
     * @see http://php.net/manual/en/quickhashinthash.getsize.php
     */
    public function getSize(): int
    {
    }

    /**
     * loadFromFile.
     * This factory method creates a hash from a file.
     *
     * @param string $filename
     * @param int    $options  (optional)
     *
     * @return QuickHashIntHash
     *
     * @see http://php.net/manual/en/quickhashinthash.loadfromfile.php
     */
    public static function loadFromFile(string $filename, int $options): QuickHashIntHash
    {
    }

    /**
     * loadFromString.
     * This factory method creates a hash from a string.
     *
     * @param string $contents
     * @param int    $options  (optional)
     *
     * @return QuickHashIntHash
     *
     * @see http://php.net/manual/en/quickhashinthash.loadfromstring.php
     */
    public static function loadFromString(string $contents, int $options): QuickHashIntHash
    {
    }

    /**
     * saveToFile.
     * This method stores an in-memory hash to disk.
     *
     * @param string $filename
     *
     * @see http://php.net/manual/en/quickhashinthash.savetofile.php
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
     * @see http://php.net/manual/en/quickhashinthash.savetostring.php
     */
    public function saveToString(): string
    {
    }

    /**
     * set.
     * This method updates an entry in the hash with a new value, or adds a new one if the entry doesn't exist.
     *
     * @param int $key
     * @param int $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashinthash.set.php
     */
    public function set(int $key, int $value): bool
    {
    }

    /**
     * update.
     * This method updates an entry in the hash with a new value.
     *
     * @param int $key
     * @param int $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashinthash.update.php
     */
    public function update(int $key, int $value): bool
    {
    }
}
