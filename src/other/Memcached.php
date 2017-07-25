<?php

/**
 * Memcached.
 *
 * Represents a connection to a set of memcached servers.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.memcached.php
 */
class Memcached
{
    /**
     * __construct.
     *
     * Create a Memcached instance
     *
     * @param string $persistent_id (optional)
     *
     * @see http://php.net/manual/en/memcached.construct.php
     */
    public function __construct(string $persistent_id)
    {
    }

    /**
     * add.
     *
     * Add an item under a new key
     *
     * @param string $key
     * @param mixed  $value
     * @param int    $expiration (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.add.php
     */
    public function add(string $key, mixed $value, int $expiration): bool
    {
    }

    /**
     * addByKey.
     *
     * Add an item under a new key on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param mixed  $value
     * @param int    $expiration (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.addbykey.php
     */
    public function addByKey(string $server_key, string $key, mixed $value, int $expiration): bool
    {
    }

    /**
     * addServer.
     *
     * Add a server to the server pool
     *
     * @param string $host
     * @param int    $port
     * @param int    $weight = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.addserver.php
     */
    public function addServer(string $host, int $port, int $weight = 0): bool
    {
    }

    /**
     * addServers.
     *
     * Add multiple servers to the server pool
     *
     * @param array $servers
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.addservers.php
     */
    public function addServers(array $servers): bool
    {
    }

    /**
     * append.
     *
     * Append data to an existing item
     *
     * @param string $key
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.append.php
     */
    public function append(string $key, string $value): bool
    {
    }

    /**
     * appendByKey.
     *
     * Append data to an existing item on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.appendbykey.php
     */
    public function appendByKey(string $server_key, string $key, string $value): bool
    {
    }

    /**
     * cas.
     *
     * Compare and swap an item
     *
     * @param float  $cas_token
     * @param string $key
     * @param mixed  $value
     * @param int    $expiration (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.cas.php
     */
    public function cas(float $cas_token, string $key, mixed $value, int $expiration): bool
    {
    }

    /**
     * casByKey.
     *
     * Compare and swap an item on a specific server
     *
     * @param float  $cas_token
     * @param string $server_key
     * @param string $key
     * @param mixed  $value
     * @param int    $expiration (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.casbykey.php
     */
    public function casByKey(float $cas_token, string $server_key, string $key, mixed $value, int $expiration): bool
    {
    }

    /**
     * decrement.
     *
     * Decrement numeric item's value
     *
     * @param string $key
     * @param int    $offset        = 1
     * @param int    $initial_value = 0
     * @param int    $expiry        = 0
     *
     * @return int
     *
     * @see http://php.net/manual/en/memcached.decrement.php
     */
    public function decrement(string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int
    {
    }

    /**
     * decrementByKey.
     *
     * Decrement numeric item's value, stored on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param int    $offset        = 1
     * @param int    $initial_value = 0
     * @param int    $expiry        = 0
     *
     * @return int
     *
     * @see http://php.net/manual/en/memcached.decrementbykey.php
     */
    public function decrementByKey(string $server_key, string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int
    {
    }

    /**
     * delete.
     *
     * Delete an item
     *
     * @param string $key
     * @param int    $time = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.delete.php
     */
    public function delete(string $key, int $time = 0): bool
    {
    }

    /**
     * deleteByKey.
     *
     * Delete an item from a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param int    $time       = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.deletebykey.php
     */
    public function deleteByKey(string $server_key, string $key, int $time = 0): bool
    {
    }

    /**
     * deleteMulti.
     *
     * Delete multiple items
     *
     * @param array $keys
     * @param int   $time = 0
     *
     * @return array
     *
     * @see http://php.net/manual/en/memcached.deletemulti.php
     */
    public function deleteMulti(array $keys, int $time = 0): array
    {
    }

    /**
     * deleteMultiByKey.
     *
     * Delete multiple items from a specific server
     *
     * @param string $server_key
     * @param array  $keys
     * @param int    $time       = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.deletemultibykey.php
     */
    public function deleteMultiByKey(string $server_key, array $keys, int $time = 0): bool
    {
    }

    /**
     * fetch.
     *
     * Fetch the next result
     *
     * @return array
     *
     * @see http://php.net/manual/en/memcached.fetch.php
     */
    public function fetch(): array
    {
    }

    /**
     * fetchAll.
     *
     * Fetch all the remaining results
     *
     * @return array
     *
     * @see http://php.net/manual/en/memcached.fetchall.php
     */
    public function fetchAll(): array
    {
    }

    /**
     * flush.
     *
     * Invalidate all items in the cache
     *
     * @param int $delay = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.flush.php
     */
    public function flush(int $delay = 0): bool
    {
    }

    /**
     * get.
     *
     * Retrieve an item
     *
     * @param string   $key
     * @param callable $cache_cb (optional)
     * @param int      $flags    (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/memcached.get.php
     */
    public function get(string $key, callable $cache_cb, int $flags): mixed
    {
    }

    /**
     * getAllKeys.
     *
     * Gets the keys stored on all the servers
     *
     * @return array
     *
     * @see http://php.net/manual/en/memcached.getallkeys.php
     */
    public function getAllKeys(): array
    {
    }

    /**
     * getByKey.
     *
     * Retrieve an item from a specific server
     *
     * @param string   $server_key
     * @param string   $key
     * @param callable $cache_cb   (optional)
     * @param int      $flags      (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/memcached.getbykey.php
     */
    public function getByKey(string $server_key, string $key, callable $cache_cb, int $flags): mixed
    {
    }

    /**
     * getDelayed.
     *
     * Request multiple items
     *
     * @param array    $keys
     * @param bool     $with_cas (optional)
     * @param callable $value_cb (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.getdelayed.php
     */
    public function getDelayed(array $keys, bool $with_cas, callable $value_cb): bool
    {
    }

    /**
     * getDelayedByKey.
     *
     * Request multiple items from a specific server
     *
     * @param string   $server_key
     * @param array    $keys
     * @param bool     $with_cas   (optional)
     * @param callable $value_cb   (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.getdelayedbykey.php
     */
    public function getDelayedByKey(string $server_key, array $keys, bool $with_cas, callable $value_cb): bool
    {
    }

    /**
     * getMulti.
     *
     * Retrieve multiple items
     *
     * @param array $keys
     * @param int   $flags (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/memcached.getmulti.php
     */
    public function getMulti(array $keys, int $flags): mixed
    {
    }

    /**
     * getMultiByKey.
     *
     * Retrieve multiple items from a specific server
     *
     * @param string $server_key
     * @param array  $keys
     * @param int    $flags      (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/memcached.getmultibykey.php
     */
    public function getMultiByKey(string $server_key, array $keys, int $flags): array
    {
    }

    /**
     * getOption.
     *
     * Retrieve a Memcached option value
     *
     * @param int $option
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/memcached.getoption.php
     */
    public function getOption(int $option): mixed
    {
    }

    /**
     * getResultCode.
     *
     * Return the result code of the last operation
     *
     * @return int
     *
     * @see http://php.net/manual/en/memcached.getresultcode.php
     */
    public function getResultCode(): int
    {
    }

    /**
     * getResultMessage.
     *
     * Return the message describing the result of the last operation
     *
     * @return string
     *
     * @see http://php.net/manual/en/memcached.getresultmessage.php
     */
    public function getResultMessage(): string
    {
    }

    /**
     * getServerByKey.
     *
     * Map a key to a server
     *
     * @param string $server_key
     *
     * @return array
     *
     * @see http://php.net/manual/en/memcached.getserverbykey.php
     */
    public function getServerByKey(string $server_key): array
    {
    }

    /**
     * getServerList.
     *
     * Get the list of the servers in the pool
     *
     * @return array
     *
     * @see http://php.net/manual/en/memcached.getserverlist.php
     */
    public function getServerList(): array
    {
    }

    /**
     * getStats.
     *
     * Get server pool statistics
     *
     * @return array
     *
     * @see http://php.net/manual/en/memcached.getstats.php
     */
    public function getStats(): array
    {
    }

    /**
     * getVersion.
     *
     * Get server pool version info
     *
     * @return array
     *
     * @see http://php.net/manual/en/memcached.getversion.php
     */
    public function getVersion(): array
    {
    }

    /**
     * increment.
     *
     * Increment numeric item's value
     *
     * @param string $key
     * @param int    $offset        = 1
     * @param int    $initial_value = 0
     * @param int    $expiry        = 0
     *
     * @return int
     *
     * @see http://php.net/manual/en/memcached.increment.php
     */
    public function increment(string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int
    {
    }

    /**
     * incrementByKey.
     *
     * Increment numeric item's value, stored on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param int    $offset        = 1
     * @param int    $initial_value = 0
     * @param int    $expiry        = 0
     *
     * @return int
     *
     * @see http://php.net/manual/en/memcached.incrementbykey.php
     */
    public function incrementByKey(string $server_key, string $key, int $offset = 1, int $initial_value = 0, int $expiry = 0): int
    {
    }

    /**
     * isPersistent.
     *
     * Check if a persitent connection to memcache is being used
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.ispersistent.php
     */
    public function isPersistent(): bool
    {
    }

    /**
     * isPristine.
     *
     * Check if the instance was recently created
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.ispristine.php
     */
    public function isPristine(): bool
    {
    }

    /**
     * prepend.
     *
     * Prepend data to an existing item
     *
     * @param string $key
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.prepend.php
     */
    public function prepend(string $key, string $value): bool
    {
    }

    /**
     * prependByKey.
     *
     * Prepend data to an existing item on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.prependbykey.php
     */
    public function prependByKey(string $server_key, string $key, string $value): bool
    {
    }

    /**
     * quit.
     *
     * Close any open connections
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.quit.php
     */
    public function quit(): bool
    {
    }

    /**
     * replace.
     *
     * Replace the item under an existing key
     *
     * @param string $key
     * @param mixed  $value
     * @param int    $expiration (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.replace.php
     */
    public function replace(string $key, mixed $value, int $expiration): bool
    {
    }

    /**
     * replaceByKey.
     *
     * Replace the item under an existing key on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param mixed  $value
     * @param int    $expiration (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.replacebykey.php
     */
    public function replaceByKey(string $server_key, string $key, mixed $value, int $expiration): bool
    {
    }

    /**
     * resetServerList.
     *
     * Clears all servers from the server list
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.resetserverlist.php
     */
    public function resetServerList(): bool
    {
    }

    /**
     * set.
     *
     * Store an item
     *
     * @param string $key
     * @param mixed  $value
     * @param int    $expiration (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.set.php
     */
    public function set(string $key, mixed $value, int $expiration): bool
    {
    }

    /**
     * setByKey.
     *
     * Store an item on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param mixed  $value
     * @param int    $expiration (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.setbykey.php
     */
    public function setByKey(string $server_key, string $key, mixed $value, int $expiration): bool
    {
    }

    /**
     * setMulti.
     *
     * Store multiple items
     *
     * @param array $items
     * @param int   $expiration (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.setmulti.php
     */
    public function setMulti(array $items, int $expiration): bool
    {
    }

    /**
     * setMultiByKey.
     *
     * Store multiple items on a specific server
     *
     * @param string $server_key
     * @param array  $items
     * @param int    $expiration (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.setmultibykey.php
     */
    public function setMultiByKey(string $server_key, array $items, int $expiration): bool
    {
    }

    /**
     * setOption.
     *
     * Set a Memcached option
     *
     * @param int   $option
     * @param mixed $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.setoption.php
     */
    public function setOption(int $option, mixed $value): bool
    {
    }

    /**
     * setOptions.
     *
     * Set Memcached options
     *
     * @param array $options
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.setoptions.php
     */
    public function setOptions(array $options): bool
    {
    }

    /**
     * setSaslAuthData.
     *
     * Set the credentials to use for authentication
     *
     * @param string $username
     * @param string $password
     *
     * @see http://php.net/manual/en/memcached.setsaslauthdata.php
     */
    public function setSaslAuthData(string $username, string $password): void
    {
    }

    /**
     * touch.
     *
     * Set a new expiration on an item
     *
     * @param string $key
     * @param int    $expiration
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.touch.php
     */
    public function touch(string $key, int $expiration): bool
    {
    }

    /**
     * touchByKey.
     *
     * Set a new expiration on an item on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param int    $expiration
     *
     * @return bool
     *
     * @see http://php.net/manual/en/memcached.touchbykey.php
     */
    public function touchByKey(string $server_key, string $key, int $expiration): bool
    {
    }
}
