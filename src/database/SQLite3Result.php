<?php

/**
 * SQLite3Result.
 * A class that handles result sets for the SQLite 3 extension.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.sqlite3result.php
 */
class SQLite3Result
{
    /**
     * columnName.
     * Returns the name of the nth column.
     *
     * @param int $column_number
     *
     * @return string
     *
     * @see http://php.net/manual/en/sqlite3result.columnname.php
     */
    public function columnName(int $column_number): string
    {
    }

    /**
     * columnType.
     * Returns the type of the nth column.
     *
     * @param int $column_number
     *
     * @return int
     *
     * @see http://php.net/manual/en/sqlite3result.columntype.php
     */
    public function columnType(int $column_number): int
    {
    }

    /**
     * fetchArray.
     * Fetches a result row as an associative or numerically indexed array or both.
     *
     * @param int $mode = SQLITE3_BOTH
     *
     * @return array
     *
     * @see http://php.net/manual/en/sqlite3result.fetcharray.php
     */
    public function fetchArray(int $mode = SQLITE3_BOTH): array
    {
    }

    /**
     * finalize.
     * Closes the result set.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3result.finalize.php
     */
    public function finalize(): bool
    {
    }

    /**
     * numColumns.
     * Returns the number of columns in the result set.
     *
     * @return int
     *
     * @see http://php.net/manual/en/sqlite3result.numcolumns.php
     */
    public function numColumns(): int
    {
    }

    /**
     * reset.
     * Resets the result set back to the first row.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sqlite3result.reset.php
     */
    public function reset(): bool
    {
    }
}
