<?php

/**
 * TokyoTyrant.
 * The main Tokyo Tyrant class.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.tokyotyrant.php
 */
class TokyoTyrant
{
    const RDBDEF_PORT = 1978;
    const RDBQC_STREQ = 0;
    const RDBQC_STRINC = 1;
    const RDBQC_STRBW = 2;
    const RDBQC_STREW = 3;
    const RDBQC_STRAND = 4;
    const RDBQC_STROR = 5;
    const RDBQC_STROREQ = 6;
    const RDBQC_STRRX = 7;
    const RDBQC_NUMEQ = 8;
    const RDBQC_NUMGT = 9;
    const RDBQC_NUMGE = 10;
    const RDBQC_NUMLT = 11;
    const RDBQC_NUMLE = 12;
    const RDBQC_NUMBT = 13;
    const RDBQC_NUMOREQ = 14;
    const RDBQC_NEGATE = 16777216;
    const RDBQC_NOIDX = 33554432;
    const RDBQO_STRASC = 0;
    const RDBQO_STRDESC = 1;
    const RDBQO_NUMASC = 2;
    const RDBQO_NUMDESC = 3;
    const RDBIT_LEXICAL = 0;
    const RDBIT_DECIMAL = 1;
    const RDBIT_TOKEN = 2;
    const RDBIT_QGRAM = 3;
    const RDBIT_OPT = 9998;
    const RDBIT_VOID = 9999;
    const RDBIT_KEEP = 16777216;
    const RDBQCFTS_PH = 15;
    const RDBQCFTS_AND = 16;
    const RDBQCFTS_OR = 17;
    const RDBQCFTS_EX = 18;
    const RDBXO_LCKREC = 1;
    const RDBXOLCK_GLB = 2;
    const RDBREC_INT = 1;
    const RDBREC_DBL = 2;
    const RDBMS_UNION = 0;
    const RDBMS_ISECT = 1;
    const RDBMS_DIFF = 2;
    const RDBT_RECON = 1;

    /**
     * __construct.
     * Construct a new TokyoTyrant object.
     *
     * @param string $host    (optional)
     * @param int    $port    = RDBDEF_PORT (optional)
     * @param array  $options (optional)
     *
     * @see http://php.net/manual/en/tokyotyrant.construct.php
     */
    public function __construct(string $host, int $port = RDBDEF_PORT, array $options)
    {
    }

    /**
     * add.
     * Adds to a numeric key.
     *
     * @param string $key
     * @param number $increment
     * @param int    $type      = 0
     *
     * @return number
     *
     * @see http://php.net/manual/en/tokyotyrant.add.php
     */
    public function add(string $key, number $increment, int $type = 0): number
    {
    }

    /**
     * connect.
     * Connect to a database.
     *
     * @param string $host
     * @param int    $port    = RDBDEF_PORT
     * @param array  $options (optional)
     *
     * @throws TokyoTyrantException
     *
     * @return TokyoTyrant
     *
     * @see http://php.net/manual/en/tokyotyrant.connect.php
     */
    public function connect(string $host, int $port = RDBDEF_PORT, array $options): TokyoTyrant
    {
    }

    /**
     * connectUri.
     * Connects to a database.
     *
     * @param string $uri
     *
     * @throws TokyoTyrantException
     *
     * @return TokyoTyrant
     *
     * @see http://php.net/manual/en/tokyotyrant.connecturi.php
     */
    public function connectUri(string $uri): TokyoTyrant
    {
    }

    /**
     * copy.
     * Copies the database.
     *
     * @param string $path
     *
     * @throws TokyoTyrantException
     *
     * @return TokyoTyrant
     *
     * @see http://php.net/manual/en/tokyotyrant.copy.php
     */
    public function copy(string $path): TokyoTyrant
    {
    }

    /**
     * ext.
     * Execute a remote script.
     *
     * @param string $name
     * @param int    $options
     * @param string $key
     * @param string $value
     *
     * @return string
     *
     * @see http://php.net/manual/en/tokyotyrant.ext.php
     */
    public function ext(string $name, int $options, string $key, string $value): string
    {
    }

    /**
     * fwmKeys.
     * Returns the forward matching keys.
     *
     * @param string $prefix
     * @param int    $max_recs
     *
     * @return array
     *
     * @see http://php.net/manual/en/tokyotyrant.fwmkeys.php
     */
    public function fwmKeys(string $prefix, int $max_recs): array
    {
    }

    /**
     * get.
     * The get purpose.
     *
     * @param mixed $keys
     *
     * @throws TokyoTyrantException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyrant.get.php
     */
    public function get(mixed $keys): mixed
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
     * @see http://php.net/manual/en/tokyotyrant.getiterator.php
     */
    public function getIterator(): TokyoTyrantIterator
    {
    }

    /**
     * num.
     * Number of records in the database.
     *
     * @return int
     *
     * @see http://php.net/manual/en/tokyotyrant.num.php
     */
    public function num(): int
    {
    }

    /**
     * out.
     * Removes records.
     *
     * @param mixed $keys
     *
     * @throws TokyoTyrantException
     *
     * @return TokyoTyrant
     *
     * @see http://php.net/manual/en/tokyotyrant.out.php
     */
    public function out(mixed $keys): TokyoTyrant
    {
    }

    /**
     * put.
     * Puts values.
     *
     * @param mixed  $keys
     * @param string $value = null
     *
     * @throws TokyoTyrantException
     *
     * @return TokyoTyrant
     *
     * @see http://php.net/manual/en/tokyotyrant.put.php
     */
    public function put(mixed $keys, string $value = null): TokyoTyrant
    {
    }

    /**
     * putCat.
     * Concatenates to a record.
     *
     * @param mixed  $keys
     * @param string $value (optional)
     *
     * @throws TokyoTyrantException
     *
     * @return TokyoTyrant
     *
     * @see http://php.net/manual/en/tokyotyrant.putcat.php
     */
    public function putCat(mixed $keys, string $value): TokyoTyrant
    {
    }

    /**
     * putKeep.
     * Puts a record.
     *
     * @param mixed  $keys
     * @param string $value (optional)
     *
     * @throws TokyoTyrantException
     *
     * @return TokyoTyrant
     *
     * @see http://php.net/manual/en/tokyotyrant.putkeep.php
     */
    public function putKeep(mixed $keys, string $value): TokyoTyrant
    {
    }

    /**
     * putNr.
     * Puts value.
     *
     * @param mixed  $keys
     * @param string $value = null
     *
     * @throws TokyoTyrantException
     *
     * @return TokyoTyrant
     *
     * @see http://php.net/manual/en/tokyotyrant.putnr.php
     */
    public function putNr(mixed $keys, string $value = null): TokyoTyrant
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
     * @throws TokyoTyrantException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyrant.putshl.php
     */
    public function putShl(string $key, string $value, int $width): mixed
    {
    }

    /**
     * restore.
     * Restore the database.
     *
     * @param string $log_dir
     * @param int    $timestamp
     * @param bool   $check_consistency = true
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyrant.restore.php
     */
    public function restore(string $log_dir, int $timestamp, bool $check_consistency = true): mixed
    {
    }

    /**
     * setMaster.
     * Set the replication master.
     *
     * @param string $host
     * @param int    $port
     * @param int    $timestamp
     * @param bool   $check_consistency = true
     *
     * @throws TokyoTyrantException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyrant.setmaster.php
     */
    public function setMaster(string $host, int $port, int $timestamp, bool $check_consistency = true): mixed
    {
    }

    /**
     * size.
     * Returns the size of the value.
     *
     * @param string $key
     *
     * @throws TokyoTyrantException
     *
     * @return int
     *
     * @see http://php.net/manual/en/tokyotyrant.size.php
     */
    public function size(string $key): int
    {
    }

    /**
     * stat.
     * Get statistics.
     *
     * @return array
     *
     * @see http://php.net/manual/en/tokyotyrant.stat.php
     */
    public function stat(): array
    {
    }

    /**
     * sync.
     * Synchronize the database.
     *
     * @throws TokyoTyrantException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyrant.sync.php
     */
    public function sync(): mixed
    {
    }

    /**
     * tune.
     * Tunes connection values.
     *
     * @param float $timeout
     * @param int   $options = RDBT_RECON
     *
     * @throws TokyoTyrantException
     *
     * @return TokyoTyrant
     *
     * @see http://php.net/manual/en/tokyotyrant.tune.php
     */
    public function tune(float $timeout, int $options = RDBT_RECON): TokyoTyrant
    {
    }

    /**
     * vanish.
     * Empties the database.
     *
     * @throws TokyoTyrantException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyrant.vanish.php
     */
    public function vanish(): mixed
    {
    }
}
