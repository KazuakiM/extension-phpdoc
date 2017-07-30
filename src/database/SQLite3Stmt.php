<?php

/**
 * SQLite3Stmt.
 *
 * A class that handles prepared statements for the SQLite 3 extension.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.sqlite3stmt.php
 */
class SQLite3Stmt
{
    /**
     * bindParam.
     *
     * Binds a parameter to a statement variable
     *
     * @param mixed $sql_param
     * @param mixed &$param
     * @param int   $type      (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3stmt.bindparam.php
     */
    public function bindParam(mixed $sql_param, mixed &$param, int $type): bool
    {
    }

    /**
     * bindValue.
     *
     * Binds the value of a parameter to a statement variable
     *
     * @param mixed $sql_param
     * @param mixed $value
     * @param int   $type      (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3stmt.bindvalue.php
     */
    public function bindValue(mixed $sql_param, mixed $value, int $type): bool
    {
    }

    /**
     * clear.
     *
     * Clears all current bound parameters
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3stmt.clear.php
     */
    public function clear(): bool
    {
    }

    /**
     * close.
     *
     * Closes the prepared statement
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3stmt.close.php
     */
    public function close(): bool
    {
    }

    /**
     * execute.
     *
     * Executes a prepared statement and returns a result set object
     *
     * @return SQLite3Result
     *
     * @see http://php.net/manual/en/sqlite3stmt.execute.php
     */
    public function execute(): SQLite3Result
    {
    }

    /**
     * paramCount.
     *
     * Returns the number of parameters within the prepared statement
     *
     * @return int
     *
     * @see http://php.net/manual/en/sqlite3stmt.paramcount.php
     */
    public function paramCount(): int
    {
    }

    /**
     * readOnly.
     *
     * Returns whether a statement is definitely read only
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3stmt.readonly.php
     */
    public function readOnly(): bool
    {
    }

    /**
     * reset.
     *
     * Resets the prepared statement
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3stmt.reset.php
     */
    public function reset(): bool
    {
    }
}
