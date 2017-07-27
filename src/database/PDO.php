<?php

/**
 * PDO.
 *
 * Represents a connection between PHP and a database server.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.pdo.php
 */
class PDO
{
    /**
     * __construct.
     *
     * Creates a PDO instance representing a connection to a database
     *
     * @param string $dsn
     * @param string $username (optional)
     * @param string $password (optional)
     * @param array  $options  (optional)
     *
     * @throws PDOException
     *
     * @see http://php.net/manual/en/pdo.construct.php
     */
    public function __construct(string $dsn, string $username, string $password, array $options)
    {
    }

    /**
     * beginTransaction.
     *
     * Initiates a transaction
     *
     * @throws PDOException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdo.begintransaction.php
     */
    public function beginTransaction(): bool
    {
    }

    /**
     * commit.
     *
     * Commits a transaction
     *
     * @throws PDOException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdo.commit.php
     */
    public function commit(): bool
    {
    }

    /**
     * errorCode.
     *
     * Fetch the SQLSTATE associated with the last operation on the database handle
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/pdo.errorcode.php
     */
    public function errorCode(): mixed
    {
    }

    /**
     * errorInfo.
     *
     * Fetch extended error information associated with the last operation on the database handle
     *
     * @return array
     *
     * @see http://php.net/manual/en/pdo.errorinfo.php
     */
    public function errorInfo(): array
    {
    }

    /**
     * exec.
     *
     * Execute an SQL statement and return the number of affected rows
     *
     * @param string $statement
     *
     * @return int
     *
     * @see http://php.net/manual/en/pdo.exec.php
     */
    public function exec(string $statement): int
    {
    }

    /**
     * getAttribute.
     *
     * Retrieve a database connection attribute
     *
     * @param int $attribute
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/pdo.getattribute.php
     */
    public function getAttribute(int $attribute): mixed
    {
    }

    /**
     * getAvailableDrivers.
     *
     * Return an array of available PDO drivers
     *
     * @return array
     *
     * @see http://php.net/manual/en/pdo.getavailabledrivers.php
     */
    public static function getAvailableDrivers(): array
    {
    }

    /**
     * inTransaction.
     *
     * Checks if inside a transaction
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdo.intransaction.php
     */
    public function inTransaction(): bool
    {
    }

    /**
     * lastInsertId.
     *
     * Returns the ID of the last inserted row or sequence value
     *
     * @param string $name = null (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/pdo.lastinsertid.php
     */
    public function lastInsertId(string $name = null): string
    {
    }

    /**
     * prepare.
     *
     * Prepares a statement for execution and returns a statement object
     *
     * @param string $statement
     * @param array  $driver_options = array()
     *
     * @return PDOStatement
     *
     * @see http://php.net/manual/en/pdo.prepare.php
     */
    public function prepare(string $statement, array $driver_options = []): PDOStatement
    {
    }

    /**
     * query.
     *
     * Executes an SQL statement, returning a result set as a PDOStatement object
     *
     * @param string $statement
     *
     * @return PDOStatement
     *
     * @see http://php.net/manual/en/pdo.query.php
     */
    public function query(string $statement): PDOStatement
    {
    }

    /**
     * quote.
     *
     * Quotes a string for use in a query.
     *
     * @param string $string
     * @param int    $parameter_type = PARAM_STR
     *
     * @return string
     *
     * @see http://php.net/manual/en/pdo.quote.php
     */
    public function quote(string $string, int $parameter_type = PARAM_STR): string
    {
    }

    /**
     * rollBack.
     *
     * Rolls back a transaction
     *
     * @throws PDOException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdo.rollback.php
     */
    public function rollBack(): bool
    {
    }

    /**
     * setAttribute.
     *
     * Set an attribute
     *
     * @param int   $attribute
     * @param mixed $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pdo.setattribute.php
     */
    public function setAttribute(int $attribute, mixed $value): bool
    {
    }
}
