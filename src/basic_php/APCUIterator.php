<?php

/**
 * APCUIterator.
 *
 * The APCUIterator class makes it easier to iterate over large APCu caches. This is helpful as it allows iterating over large caches in steps, while grabbing a defined number of entries per lock instance, so it frees the cache locks for other activities rather than hold up the entire cache to grab 100 (the default) entries. Also, using regular expression matching is more efficient as it's been moved to the C level.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.apcuiterator.php
 */
class APCUIterator implements Iterator
{
    /**
     * __construct.
     *
     * Constructs an APCUIterator iterator object
     *
     * @param mixed $search     = null
     * @param int   $format     = APC_ITER_ALL
     * @param int   $chunk_size = 100
     * @param int   $list       = APC_LIST_ACTIVE
     *
     * @see http://php.net/manual/en/apcuiterator.construct.php
     */
    public function __construct(mixed $search = null, int $format = APC_ITER_ALL, int $chunk_size = 100, int $list = APC_LIST_ACTIVE)
    {
    }

    /**
     * current.
     *
     * Get current item
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/apcuiterator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * getTotalCount.
     *
     * Get total count
     *
     * @return int
     *
     * @see http://php.net/manual/en/apcuiterator.gettotalcount.php
     */
    public function getTotalCount(): int
    {
    }

    /**
     * getTotalHits.
     *
     * Get total cache hits
     *
     * @return int
     *
     * @see http://php.net/manual/en/apcuiterator.gettotalhits.php
     */
    public function getTotalHits(): int
    {
    }

    /**
     * getTotalSize.
     *
     * Get total cache size
     *
     * @return int
     *
     * @see http://php.net/manual/en/apcuiterator.gettotalsize.php
     */
    public function getTotalSize(): int
    {
    }

    /**
     * key.
     *
     * Get iterator key
     *
     * @return string
     *
     * @see http://php.net/manual/en/apcuiterator.key.php
     */
    public function key(): string
    {
    }

    /**
     * next.
     *
     * Move pointer to next item
     *
     *
     * @see http://php.net/manual/en/apcuiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     *
     * Rewinds iterator
     *
     *
     * @see http://php.net/manual/en/apcuiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * valid.
     *
     * Checks if current position is valid
     *
     *
     * @see http://php.net/manual/en/apcuiterator.valid.php
     */
    public function valid(): void
    {
    }
}
