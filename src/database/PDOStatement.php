<?php

/**
 * PDOStatement.
 * Represents a prepared statement and, after the statement is executed, an associated result set.
 *
 * @property string $queryString
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.pdostatement.php
 */
class PDOStatement implements Traversable
{
    public $queryString;

    /**
     * bindColumn.
     * Bind a column to a PHP variable.
     *
     * @param mixed $column
     * @param mixed &$param
     * @param int   $type       (optional)
     * @param int   $maxlen     (optional)
     * @param mixed $driverdata (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdostatement.bindcolumn.php
     */
    public function bindColumn(mixed $column, mixed &$param, int $type, int $maxlen, mixed $driverdata): bool
    {
    }

    /**
     * bindParam.
     * Binds a parameter to the specified variable name.
     *
     * @param mixed $parameter
     * @param mixed &$variable
     * @param int   $data_type      = PARAM_STR
     * @param int   $length         (optional)
     * @param mixed $driver_options (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdostatement.bindparam.php
     */
    public function bindParam(mixed $parameter, mixed &$variable, int $data_type = PARAM_STR, int $length, mixed $driver_options): bool
    {
    }

    /**
     * bindValue.
     * Binds a value to a parameter.
     *
     * @param mixed $parameter
     * @param mixed $value
     * @param int   $data_type = PARAM_STR
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdostatement.bindvalue.php
     */
    public function bindValue(mixed $parameter, mixed $value, int $data_type = PARAM_STR): bool
    {
    }

    /**
     * closeCursor.
     * Closes the cursor, enabling the statement to be executed again.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdostatement.closecursor.php
     */
    public function closeCursor(): bool
    {
    }

    /**
     * columnCount.
     * Returns the number of columns in the result set.
     *
     * @return int
     *
     * @see http://php.net/manual/en/pdostatement.columncount.php
     */
    public function columnCount(): int
    {
    }

    /**
     * debugDumpParams.
     * Dump an SQL prepared command.
     *
     * @see http://php.net/manual/en/pdostatement.debugdumpparams.php
     */
    public function debugDumpParams(): void
    {
    }

    /**
     * errorCode.
     * Fetch the SQLSTATE associated with the last operation on the statement handle.
     *
     * @return string
     *
     * @see http://php.net/manual/en/pdostatement.errorcode.php
     */
    public function errorCode(): string
    {
    }

    /**
     * errorInfo.
     * Fetch extended error information associated with the last operation on the statement handle.
     *
     * @return array
     *
     * @see http://php.net/manual/en/pdostatement.errorinfo.php
     */
    public function errorInfo(): array
    {
    }

    /**
     * execute.
     * Executes a prepared statement.
     *
     * @param array $input_parameters (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdostatement.errorinfo.php
     */
    public function execute(array $input_parameters): bool
    {
    }

    /**
     * fetch.
     * Fetches the next row from a result set.
     *
     * @param int $fetch_style        (optional)
     * @param int $cursor_orientation = FETCH_ORI_NEXT (optional)
     * @param int $cursor_offset      = 0 (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/pdostatement.fetch.php
     */
    public function fetch(int $fetch_style, int $cursor_orientation = FETCH_ORI_NEXT, int $cursor_offset = 0): mixed
    {
    }

    /**
     * fetchAll.
     * Returns an array containing all of the result set rows.
     *
     * @param int   $fetch_style    (optional)
     * @param mixed $fetch_argument (optional)
     * @param array $ctor_args      = array() (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/pdostatement.fetchall.php
     */
    public function fetchAll(int $fetch_style, mixed $fetch_argument, array $ctor_args = []): array
    {
    }

    /**
     * fetchColumn.
     * Returns a single column from the next row of a result set.
     *
     * @param int $column_number = 0
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/pdostatement.fetchcolumn.php
     */
    public function fetchColumn(int $column_number = 0): mixed
    {
    }

    /**
     * fetchObject.
     * Fetches the next row and returns it as an object.
     *
     * @param string $class_name = 'stdClass'
     * @param array  $ctor_args  (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/pdostatement.fetchobject.php
     */
    public function fetchObject(string $class_name = 'stdClass', array $ctor_args): mixed
    {
    }

    /**
     * getAttribute.
     * Retrieve a statement attribute.
     *
     * @param int $attribute
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/pdostatement.getattribute.php
     */
    public function getAttribute(int $attribute): mixed
    {
    }

    /**
     * getColumnMeta.
     * Returns metadata for a column in a result set.
     *
     * @param int $column
     *
     * @return array
     *
     * @see http://php.net/manual/en/pdostatement.getcolumnmeta.php
     */
    public function getColumnMeta(int $column): array
    {
    }

    /**
     * nextRowset.
     * Advances to the next rowset in a multi-rowset statement handle.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdostatement.nextrowset.php
     */
    public function nextRowset(): bool
    {
    }

    /**
     * rowCount.
     * Returns the number of rows affected by the last SQL statement.
     *
     * @return int
     *
     * @see http://php.net/manual/en/pdostatement.rowcount.php
     */
    public function rowCount(): int
    {
    }

    /**
     * setAttribute.
     * Set a statement attribute.
     *
     * @param int   $attribute
     * @param mixed $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdostatement.setattribute.php
     */
    public function setAttribute(int $attribute, mixed $value): bool
    {
    }

    /**
     * setFetchMode.
     * Set the default fetch mode for this statement.
     *
     * @param int $mode
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdostatement.setfetchmode.php
     */
    public function setFetchMode(int $mode): bool
    {
    }
}
