<?php

/**
 * SQLite3.
 *
 * A class that interfaces SQLite 3 databases.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.sqlite3.php
 */
class SQLite3
{
    /**
     * __construct.
     *
     * Instantiates an SQLite3 object and opens an SQLite 3 database
     *
     * @param string $filename
     * @param int    $flags          = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE
     * @param string $encryption_key = null
     *
     * @throws Exception
     *
     * @see http://php.net/manual/en/sqlite3.construct.php
     */
    public function __construct(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryption_key = null)
    {
    }

    /**
     * busyTimeout.
     *
     * Sets the busy connection handler
     *
     * @param int $msecs
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3.busytimeout.php
     */
    public function busyTimeout(int $msecs): bool
    {
    }

    /**
     * changes.
     *
     * Returns the number of database rows that were changed (or inserted or deleted) by the most recent SQL statement
     *
     * @return int
     *
     * @see http://php.net/manual/en/sqlite3.changes.php
     */
    public function changes(): int
    {
    }

    /**
     * close.
     *
     * Closes the database connection
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3.close.php
     */
    public function close(): bool
    {
    }

    /**
     * createAggregate.
     *
     * Registers a PHP function for use as an SQL aggregate function
     *
     * @param string $name
     * @param mixed  $step_callback
     * @param mixed  $final_callback
     * @param int    $argument_count = 1
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3.createaggregate.php
     */
    public function createAggregate(string $name, mixed $step_callback, mixed $final_callback, int $argument_count = 1): bool
    {
    }

    /**
     * createCollation.
     *
     * Registers a PHP function for use as an SQL collating function
     *
     * @param string   $name
     * @param callable $callback
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3.createcollation.php
     */
    public function createCollation(string $name, callable $callback): bool
    {
    }

    /**
     * createFunction.
     *
     * Registers a PHP function for use as an SQL scalar function
     *
     * @param string $name
     * @param mixed  $callback
     * @param int    $argument_count = 1
     * @param int    $flags          = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3.createfunction.php
     */
    public function createFunction(string $name, mixed $callback, int $argument_count = 1, int $flags = 0): bool
    {
    }

    /**
     * enableExceptions.
     *
     * Enable throwing exceptions
     *
     * @param bool $enableExceptions = false
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3.enableexceptions.php
     */
    public function enableExceptions(bool $enableExceptions = false): bool
    {
    }

    /**
     * escapeString.
     *
     * Returns a string that has been properly escaped
     *
     * @param string $value
     *
     * @return string
     *
     * @see http://php.net/manual/en/sqlite3.escapestring.php
     */
    public static function escapeString(string $value): string
    {
    }

    /**
     * exec.
     *
     * Executes a result-less query against a given database
     *
     * @param string $query
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3.exec.php
     */
    public function exec(string $query): bool
    {
    }

    /**
     * lastErrorCode.
     *
     * Returns the numeric result code of the most recent failed SQLite request
     *
     * @return int
     *
     * @see http://php.net/manual/en/sqlite3.lasterrorcode.php
     */
    public function lastErrorCode(): int
    {
    }

    /**
     * lastErrorMsg.
     *
     * Returns English text describing the most recent failed SQLite request
     *
     * @return string
     *
     * @see http://php.net/manual/en/sqlite3.lasterrormsg.php
     */
    public function lastErrorMsg(): string
    {
    }

    /**
     * lastInsertRowID.
     *
     * Returns the row ID of the most recent INSERT into the database
     *
     * @return int
     *
     * @see http://php.net/manual/en/sqlite3.lastinsertrowid.php
     */
    public function lastInsertRowID(): int
    {
    }

    /**
     * loadExtension.
     *
     * Attempts to load an SQLite extension library
     *
     * @param string $shared_library
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3.loadextension.php
     */
    public function loadExtension(string $shared_library): bool
    {
    }

    /**
     * open.
     *
     * Opens an SQLite database
     *
     * @param string $filename
     * @param int    $flags          = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE
     * @param string $encryption_key = null
     *
     * @see http://php.net/manual/en/sqlite3.open.php
     */
    public function open(string $filename, int $flags = SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE, string $encryption_key = null): void
    {
    }

    /**
     * openBlob.
     *
     * Opens a stream resource to read a BLOB
     *
     * @param string $table
     * @param string $column
     * @param int    $rowid
     * @param string $dbname = 'main'
     * @param int    $flags  = SQLITE3_OPEN_READONLY
     *
     * @return resource
     *
     * @see http://php.net/manual/en/sqlite3.openblob.php
     */
    public function openBlob(string $table, string $column, int $rowid, string $dbname = 'main', int $flags = SQLITE3_OPEN_READONLY): resource
    {
    }

    /**
     * prepare.
     *
     * Prepares an SQL statement for execution
     *
     * @param string $query
     *
     * @return SQLite3Stmt
     *
     * @see http://php.net/manual/en/sqlite3.prepare.php
     */
    public function prepare(string $query): SQLite3Stmt
    {
    }

    /**
     * query.
     *
     * Executes an SQL query
     *
     * @param string $query
     *
     * @return SQLite3Result
     *
     * @see http://php.net/manual/en/sqlite3.query.php
     */
    public function query(string $query): SQLite3Result
    {
    }

    /**
     * querySingle.
     *
     * Executes a query and returns a single result
     *
     * @param string $query
     * @param bool   $entire_row = false
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/sqlite3.querysingle.php
     */
    public function querySingle(string $query, bool $entire_row = false): mixed
    {
    }

    /**
     * version.
     *
     * Returns the SQLite3 library version as a string constant and as a number
     *
     * @return array
     *
     * @see http://php.net/manual/en/sqlite3.version.php
     */
    public static function version(): array
    {
    }
}
