<?php

/**
 * Memcache.
 * Represents a connection to a set of memcache servers.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.memcache.php
 */
class Memcache
{
    /**
     * add.
     * Add an item to the server.
     *
     * @param string $key
     * @param mixed  $var
     * @param int    $flag   (optional)
     * @param int    $expire (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcache.add.php
     */
    public function add(string $key, mixed $var, int $flag, int $expire): bool
    {
    }

    /**
     * addServer.
     * Add a memcached server to connection pool.
     *
     * @param string   $host
     * @param int      $port             = 11211
     * @param bool     $persistent       (optional)
     * @param int      $weight           (optional)
     * @param int      $timeout          (optional)
     * @param int      $retry_interval   (optional)
     * @param bool     $status           (optional)
     * @param callable $failure_callback (optional)
     * @param int      $timeoutms        (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcache.addserver.php
     */
    public function addServer(string $host, int $port, bool $persistent, int $weight, int $timeout, int $retry_interval, bool $status, callable $failure_callback, int $timeoutms): bool
    {
    }

    /**
     * close.
     * Close memcached server connection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcache.close.php
     */
    public function close(): bool
    {
    }

    /**
     * connect.
     * Open memcached server connection.
     *
     * @param string $host
     * @param int    $port    (optional)
     * @param int    $timeout (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcache.connect.php
     */
    public function connect(string $host, int $port, int $timeout): bool
    {
    }

    /**
     * decrement.
     * Decrement item's value.
     *
     * @param string $key
     * @param int    $value = 1
     *
     * @return int
     *
     * @see http://php.net/manual/en/memcache.decrement.php
     */
    public function decrement(string $key, int $value = 1): int
    {
    }

    /**
     * delete.
     * Delete item from the server.
     *
     * @param string $key
     * @param int    $timeout = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcache.delete.php
     */
    public function delete(string $key, int $timeout = 0): bool
    {
    }

    /**
     * flush.
     * Flush all existing items at the server.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcache.flush.php
     */
    public function flush(): bool
    {
    }

    /**
     * get.
     * Retrieve item from the server.
     *
     * @param string $key
     * @param int    &$flags (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/memcache.get.php
     */
    public function get(string $key, int &$flags): string
    {
    }

    /**
     * getExtendedStats.
     * Get statistics from all servers in pool.
     *
     * @param string $type   (optional)
     * @param int    $slabid (optional)
     * @param int    $limit  = 100 (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/memcache.getextendedstats.php
     */
    public function getExtendedStats(string $type, int $slabid, int $limit = 100): array
    {
    }

    /**
     * getServerStatus.
     * Returns server status.
     *
     * @param string $host
     * @param int    $port = 11211
     *
     * @return int
     *
     * @see http://php.net/manual/en/memcache.getserverstatus.php
     */
    public function getServerStatus(string $host, int $port = 11211): int
    {
    }

    /**
     * getStats.
     * Get statistics of the server.
     *
     * @param string $type   (optional)
     * @param int    $slabid (optional)
     * @param int    $limit  = 100 (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/memcache.getstats.php
     */
    public function getStats(string $type, int $slabid, int $limit = 100): array
    {
    }

    /**
     * getVersion.
     * Return version of the server.
     *
     * @return string
     *
     * @see http://php.net/manual/en/memcache.getversion.php
     */
    public function getVersion(): string
    {
    }

    /**
     * increment.
     * Increment item's value.
     *
     * @param string $key
     * @param int    $value = 1
     *
     * @return int
     *
     * @see http://php.net/manual/en/memcache.increment.php
     */
    public function increment(string $key, int $value = 1): int
    {
    }

    /**
     * pconnect.
     * Open memcached server persistent connection.
     *
     * @param string $host
     * @param int    $port    (optional)
     * @param int    $timeout (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/memcache.pconnect.php
     */
    public function pconnect(string $host, int $port, int $timeout): mixed
    {
    }

    /**
     * replace.
     * Replace value of the existing item.
     *
     * @param string $key
     * @param mixed  $var
     * @param int    $flag   (optional)
     * @param int    $expire (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcache.replace.php
     */
    public function replace(string $key, mixed $var, int $flag, int $expire): bool
    {
    }

    /**
     * set.
     * Store data at the server.
     *
     * @param string $key
     * @param mixed  $var
     * @param int    $flag   (optional)
     * @param int    $expire (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcache.set.php
     */
    public function set(string $key, mixed $var, int $flag, int $expire): bool
    {
    }

    /**
     * setCompressThreshold.
     * Enable automatic compression of large values.
     *
     * @param int   $threshold
     * @param float $min_savings (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcache.setcompressthreshold.php
     */
    public function setCompressThreshold(int $threshold, float $min_savings): bool
    {
    }

    /**
     * setServerParams.
     * Changes server parameters and status at runtime.
     *
     * @param string   $host
     * @param int      $port             = 11211
     * @param int      $timeout          (optional)
     * @param int      $retry_interval   = false (optional)
     * @param bool     $status           (optional)
     * @param callable $failure_callback (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcache.setserverparams.php
     */
    public function setServerParams(string $host, int $port, int $timeout, int $retry_interval = null, bool $status, callable $failure_callback): bool
    {
    }
}
