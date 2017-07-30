<?php

/**
 * TokyoTyrantQuery.
 *
 * This class is used to query the table databases
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.tokyotyrantquery.php
 */
class TokyoTyrantQuery implements Iterator
{
    /**
     * __construct.
     *
     * Construct a new query
     *
     * @param TokyoTyrantTable $table
     *
     * @throws TokyoTyrantException
     *
     * @see http://php.net/manual/en/tokyotyrantquery.construct.php
     */
    public function __construct(TokyoTyrantTable $table)
    {
    }

    /**
     * addCond.
     *
     * Adds a condition to the query
     *
     * @param string $name
     * @param int    $op
     * @param string $expr
     *
     * @throws TokyoTyrantException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyrantquery.addcond.php
     */
    public function addCond(string $name, int $op, string $expr): mixed
    {
    }

    /**
     * count.
     *
     * Counts records
     *
     * @throws TokyoTyrantException
     *
     * @return int
     *
     * @see http://php.net/manual/en/tokyotyrantquery.count.php
     */
    public function count(): int
    {
    }

    /**
     * current.
     *
     * Returns the current element
     *
     * @return array
     *
     * @see http://php.net/manual/en/tokyotyrantquery.current.php
     */
    public function current(): array
    {
    }

    /**
     * hint.
     *
     * Get the hint string of the query
     *
     * @return string
     *
     * @see http://php.net/manual/en/tokyotyrantquery.hint.php
     */
    public function hint(): string
    {
    }

    /**
     * key.
     *
     * Returns the current key
     *
     * @throws TokyoTyrantException
     *
     * @return string
     *
     * @see http://php.net/manual/en/tokyotyrantquery.key.php
     */
    public function key(): string
    {
    }

    /**
     * metaSearch.
     *
     * Retrieve records with multiple queries
     *
     * @param array $queries
     * @param int   $type
     *
     * @throws TokyoTyrantException
     *
     * @return array
     *
     * @see http://php.net/manual/en/tokyotyrantquery.metasearch.php
     */
    public function metaSearch(array $queries, int $type): array
    {
    }

    /**
     * next.
     *
     * Moves the iterator to next entry
     *
     * @throws TokyoTyrantException
     *
     * @return array
     *
     * @see http://php.net/manual/en/tokyotyrantquery.next.php
     */
    public function next(): array
    {
    }

    /**
     * out.
     *
     * Removes records based on query
     *
     * @throws TokyoTyrantException
     *
     * @return TokyoTyrantQuery
     *
     * @see http://php.net/manual/en/tokyotyrantquery.out.php
     */
    public function out(): TokyoTyrantQuery
    {
    }

    /**
     * rewind.
     *
     * Rewinds the iterator
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tokyotyrantquery.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * search.
     *
     * Searches records
     *
     * @throws TokyoTyrantException
     *
     * @return array
     *
     * @see http://php.net/manual/en/tokyotyrantquery.search.php
     */
    public function search(): array
    {
    }

    /**
     * setLimit.
     *
     * Limit results
     *
     * @param int $max  (optional)
     * @param int $skip (optional)
     *
     * @throws TokyoTyrantException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyrantquery.setlimit.php
     */
    public function setLimit(int $max, int $skip): mixed
    {
    }

    /**
     * setOrder.
     *
     * Orders results
     *
     * @param string $name
     * @param int    $type
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyrantquery.setorder.php
     */
    public function setOrder(string $name, int $type): mixed
    {
    }

    /**
     * valid.
     *
     * Checks the validity of current item
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tokyotyrantquery.valid.php
     */
    public function valid(): bool
    {
    }
}
