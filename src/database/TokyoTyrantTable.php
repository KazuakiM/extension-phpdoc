<?php

/**
 * TokyoTyrantTable.
 * Provides an API to the table databases. A table database can be create using the following command: ttserver -port 1979 /tmp/tt_table.tct. In Tokyo Tyrant the table API is a schemaless database which can store arbitrary amount of key-value pairs under a single primary key.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.tokyotyranttable.php
 */
class TokyoTyrantTable extends TokyoTyrant
{
    /**
     * add.
     * Adds a record.
     *
     * @param string $key
     * @param mixed  $increment
     * @param string $type      (optional)
     *
     * @throws TokyoTyrantException
     *
     * @see http://php.net/manual/en/tokyotyranttable.add.php
     */
    public function add(string $key, mixed $increment, string $type): void
    {
    }

    /**
     * genUid.
     * Generate unique id.
     *
     * @throws TokyoTyrantException
     *
     * @return int
     *
     * @see http://php.net/manual/en/tokyotyranttable.genuid.php
     */
    public function genUid(): int
    {
    }

    /**
     * get.
     * Get a row.
     *
     * @param mixed $keys
     *
     * @return array
     *
     * @see http://php.net/manual/en/tokyotyranttable.get.php
     */
    public function get(mixed $keys): array
    {
    }

    /**
     * getIterator.
     * Get an iterator.
     *
     * @throws TokyoTyrantException
     *
     * @return TokyoTyrantIterator
     *
     * @see http://php.net/manual/en/tokyotyranttable.getiterator.php
     */
    public function getIterator(): TokyoTyrantIterator
    {
    }

    /**
     * getQuery.
     * Get a query object.
     *
     * @throws TokyoTyrantException
     *
     * @return TokyoTyrantQuery
     *
     * @see http://php.net/manual/en/tokyotyranttable.getquery.php
     */
    public function getQuery(): TokyoTyrantQuery
    {
    }

    /**
     * out.
     * Remove records.
     *
     * @param mixed $keys
     *
     * @throws TokyoTyrantException
     *
     * @see http://php.net/manual/en/tokyotyranttable.out.php
     */
    public function out(mixed $keys): void
    {
    }

    /**
     * put.
     * Store a row.
     *
     * @param string $key
     * @param array  $columns
     *
     * @throws TokyoTyrantException
     *
     * @return int
     *
     * @see http://php.net/manual/en/tokyotyranttable.put.php
     */
    public function put(string $key, array $columns): int
    {
    }

    /**
     * putCat.
     * Concatenates to a row.
     *
     * @param string $key
     * @param array  $columns
     *
     * @throws TokyoTyrantException
     *
     * @see http://php.net/manual/en/tokyotyranttable.putcat.php
     */
    public function putCat(string $key, array $columns): void
    {
    }

    /**
     * putKeep.
     * Put a new record.
     *
     * @param string $key
     * @param array  $columns
     *
     * @throws TokyoTyrantException
     *
     * @see http://php.net/manual/en/tokyotyranttable.putkeep.php
     */
    public function putKeep(string $key, array $columns): void
    {
    }

    /**
     * putNr.
     * Puts value.
     *
     * @param mixed  $keys
     * @param string $value (optional)
     *
     * @throws TokyoTyrantException
     *
     * @see http://php.net/manual/en/tokyotyranttable.putnr.php
     */
    public function putNr(mixed $keys, string $value): void
    {
    }

    /**
     * putShl.
     * Concatenates to a record.
     *
     * @param string $key
     * @param string $value
     * @param int    $width
     *
     * @see http://php.net/manual/en/tokyotyranttable.putshl.php
     */
    public function putShl(string $key, string $value, int $width): void
    {
    }

    /**
     * setIndex.
     * Sets index.
     *
     * @param string $column
     * @param int    $type
     *
     * @throws TokyoTyrantException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyranttable.setindex.php
     */
    public function setIndex(string $column, int $type): mixed
    {
    }

    /* Inherited methods */
    //public function add(string $key, number $increment, int $type = 0): number
    //public function connect(string $host, int $port = RDBDEF_PORT, array $options): TokyoTyrant
    //public function connectUri(string $uri): TokyoTyrant
    //public function __construct(string $host, int $port = RDBDEF_PORT, array $options)
    //public function copy(string $path): TokyoTyrant
    //public function ext(string $name, int $options, string $key, string $value): string
    //public function fwmKeys(string $prefix, int $max_recs): array
    //public function get(mixed $keys): mixed
    //public function getIterator(): TokyoTyrantIterator
    //public function num(): int
    //public function out(mixed $keys): TokyoTyrant
    //public function put(mixed $keys, string $value = NULL): TokyoTyrant
    //public function putCat(mixed $keys, string $value): TokyoTyrant
    //public function putKeep(mixed $keys, string $value): TokyoTyrant
    //public function putNr(mixed $keys, string $value = NULL): TokyoTyrant
    //public function putShl(string $key, string $value, int $width): mixed
    //public function restore(string $log_dir, int $timestamp, bool $check_consistency = true): mixed
    //public function setMaster(string $host, int $port, int $timestamp, bool $check_consistency = true): mixed
    //public function size(string $key): int
    //public function stat(): array
    //public function sync(): mixed
    //public function tune(float $timeout, int $options = RDBT_RECON): TokyoTyrant
    //public function vanish(): mixed
}
