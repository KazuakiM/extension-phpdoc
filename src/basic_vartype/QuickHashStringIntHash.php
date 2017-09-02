<?php

/**
 * QuickHashStringIntHash.
 * This class wraps around a hash containing strings, where the values are integer numbers. Hashes are also available as implementation of the ArrayAccess interface.
 * Hashes can also be iterated over with foreach as the Iterator interface is implemented as well. The order of which elements are returned in is not guaranteed.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.quickhashstringinthash.php
 */
class QuickHashStringIntHash
{
    const CHECK_FOR_DUPES = 1;
    const DO_NOT_USE_ZEND_ALLOC = 2;

    /**
     * __construct.
     * Creates a new QuickHashStringIntHash object.
     *
     * @param int $size
     * @param int $options = 0
     *
     * @see http://php.net/manual/en/quickhashstringinthash.construct.php
     */
    public function __construct(int $size, int $options = 0)
    {
    }

    /**
     * add.
     * This method adds a new entry to the hash.
     *
     * @param string $key
     * @param int    $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashstringinthash.add.php
     */
    public function add(string $key, int $value): bool
    {
    }

    /**
     * delete.
     * This method deletes am entry from the hash.
     *
     * @param string $key
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashstringinthash.delete.php
     */
    public function delete(string $key): bool
    {
    }

    /**
     * exists.
     * This method checks whether a key is part of the hash.
     *
     * @param string $key
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashstringinthash.exists.php
     */
    public function exists(string $key): bool
    {
    }

    /**
     * get.
     * This method retrieves a value from the hash by its key.
     *
     * @param string $key
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/quickhashstringinthash.get.php
     */
    public function get(string $key): mixed
    {
    }

    /**
     * getSize.
     * Returns the number of elements in the hash.
     *
     * @return int
     *
     * @see http://php.net/manual/en/quickhashstringinthash.getsize.php
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
     * @return QuickHashStringIntHash
     *
     * @see http://php.net/manual/en/quickhashstringinthash.loadfromfile.php
     */
    public static function loadFromFile(string $filename, int $size = 0, int $options = 0): QuickHashStringIntHash
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
     * @return QuickHashStringIntHash
     *
     * @see http://php.net/manual/en/quickhashstringinthash.loadfromstring.php
     */
    public static function loadFromString(string $contents, int $size = 0, int $options = 0): QuickHashStringIntHash
    {
    }

    /**
     * saveToFile.
     * This method stores an in-memory hash to disk.
     *
     * @param string $filename
     *
     * @see http://php.net/manual/en/quickhashstringinthash.savetofile.php
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
     * @see http://php.net/manual/en/quickhashstringinthash.savetostring.php
     */
    public function saveToString(): string
    {
    }

    /**
     * set.
     * This method updates an entry in the hash with a new value, or adds a new one if the entry doesn't exist.
     *
     * @param string $key
     * @param int    $value
     *
     * @return int
     *
     * @see http://php.net/manual/en/quickhashstringinthash.set.php
     */
    public function set(string $key, int $value): int
    {
    }

    /**
     * update.
     * This method updates an entry in the hash with a new value.
     *
     * @param string $key
     * @param int    $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashstringinthash.update.php
     */
    public function update(string $key, int $value): bool
    {
    }
}
