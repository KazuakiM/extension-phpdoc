<?php

/**
 * QuickHashIntSet.
 * This class wraps around a set containing integer numbers.
 * Sets can also be iterated over with foreach as the Iterator interface is implemented as well. The order of which elements are returned in is not guaranteed.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.quickhashintset.php
 */
class QuickHashIntSet
{
    const CHECK_FOR_DUPES = 1;
    const DO_NOT_USE_ZEND_ALLOC = 2;
    const HASHER_NO_HASH = 256;
    const HASHER_JENKINS1 = 512;
    const HASHER_JENKINS2 = 1024;

    /**
     * __construct.
     * Creates a new QuickHashIntSet object.
     *
     * @param int $size
     * @param int $options (optional)
     *
     * @see http://php.net/manual/en/quickhashintset.construct.php
     */
    public function __construct(int $size, int $options)
    {
    }

    /**
     * add.
     * This method adds a new entry to the set.
     *
     * @param int $key
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashintset.add.php
     */
    public function add(int $key): bool
    {
    }

    /**
     * delete.
     * This method deletes an entry from the set.
     *
     * @param int $key
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashintset.delete.php
     */
    public function delete(int $key): bool
    {
    }

    /**
     * exists.
     * This method checks whether a key is part of the set.
     *
     * @param int $key
     *
     * @return bool
     *
     * @see http://php.net/manual/en/quickhashintset.exists.php
     */
    public function exists(int $key): bool
    {
    }

    /**
     * getSize.
     * Returns the number of elements in the set.
     *
     * @return publicint
     *
     * @see http://php.net/manual/en/quickhashintset.getsize.php
     */
    public function getSize(): publicint
    {
    }

    /**
     * loadFromFile.
     * This factory method creates a set from a file.
     *
     * @param string $filename
     * @param int    $size     (optional)
     * @param int    $options  (optional)
     *
     * @return QuickHashIntSet
     *
     * @see http://php.net/manual/en/quickhashintset.loadfromfile.php
     */
    public static function loadFromFile(string $filename, int $size, int $options): QuickHashIntSet
    {
    }

    /**
     * loadFromString.
     * This factory method creates a set from a string.
     *
     * @param string $contents
     * @param int    $size     (optional)
     * @param int    $options  (optional)
     *
     * @return QuickHashIntSet
     *
     * @see http://php.net/manual/en/quickhashintset.loadfromstring.php
     */
    public static function loadFromString(string $contents, int $size, int $options): QuickHashIntSet
    {
    }

    /**
     * saveToFile.
     * This method stores an in-memory set to disk.
     *
     * @param string $filename
     *
     * @see http://php.net/manual/en/quickhashintset.savetofile.php
     */
    public function saveToFile(string $filename): void
    {
    }

    /**
     * saveToString.
     * This method returns a serialized version of the set.
     *
     * @return string
     *
     * @see http://php.net/manual/en/quickhashintset.savetostring.php
     */
    public function saveToString(): string
    {
    }
}
