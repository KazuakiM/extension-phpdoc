<?php

/**
 * Zookeeper.
 *
 * Represents ZooKeeper session.
 *
 * @see http://php.net/manual/en/class.zookeeper.php
 */
class Zookeeper
{
    const PERM_READ = 1;
    const PERM_WRITE = 2;
    const PERM_CREATE = 4;
    const PERM_DELETE = 8;
    const PERM_ADMIN = 16;
    const PERM_ALL = 31;
    const LOG_LEVEL_ERROR = 1;
    const LOG_LEVEL_WARN = 2;
    const LOG_LEVEL_INFO = 3;
    const LOG_LEVEL_DEBUG = 4;
    const EXPIRED_SESSION_STATE = 112;
    const AUTH_FAILED_STATE = 113;
    const CONNECTING_STATE = 1;
    const ASSOCIATING_STATE = 2;
    const CONNECTED_STATE = 3;
    const READONLY_STATE = 5;
    const NOTCONNECTED_STATE = 999;

    /**
     * __construct.
     *
     * Create a handle to used communicate with zookeeper.
     *
     * @param string   $host         = ''
     * @param callable $watcher_cb   = null
     * @param int      $recv_timeout = 10000
     *
     * @see http://php.net/manual/en/zookeeper.construct.php
     */
    public function __construct(string $host = '', callable $watcher_cb = null, int $recv_timeout = 10000)
    {
    }

    /**
     * addAuth.
     *
     * Specify application credentials.
     *
     * @param string   $scheme
     * @param string   $cert
     * @param callable $completion_cb = null
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zookeeper.addauth.php
     */
    public function addAuth(string $scheme, string $cert, callable $completion_cb = null): bool
    {
    }

    /**
     * connect.
     *
     * Create a handle to used communicate with zookeeper.
     *
     * @param string   $host
     * @param callable $watcher_cb   = null
     * @param int      $recv_timeout = 10000
     *
     * @see http://php.net/manual/en/zookeeper.connect.php
     */
    public function connect(string $host, callable $watcher_cb = null, int $recv_timeout = 10000): void
    {
    }

    /**
     * create.
     *
     * Create a node synchronously.
     *
     * @param string $path
     * @param string $value
     * @param array  $acls
     * @param int    $flags = null
     *
     * @return string
     *
     * @see http://php.net/manual/en/zookeeper.create.php
     */
    public function create(string $path, string $value, array $acls, int $flags = null): string
    {
    }

    /**
     * delete.
     *
     * Delete a node in zookeeper synchronously.
     *
     * @param string $path
     * @param int    $version =1
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zookeeper.delete.php
     */
    public function delete(string $path, int $version = 1): bool
    {
    }

    /**
     * exists.
     *
     * Checks the existence of a node in zookeeper synchronously.
     *
     * @param string   $path
     * @param callable $watcher_cb = null
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zookeeper.exists.php
     */
    public function exists(string $path, callable $watcher_cb = null): bool
    {
    }

    /**
     * get.
     *
     * Gets the data associated with a node synchronously.
     *
     * @param string   $path
     * @param callable $watcher_cb = null
     * @param array    &$stat      = null
     * @param int      $max_size   = 0
     *
     * @return string
     *
     * @see http://php.net/manual/en/zookeeper.get.php
     */
    public function get(string $path, callable $watcher_cb = null, array &$stat = null, int $max_size = 0): string
    {
    }

    /**
     * getAcl.
     *
     * Gets the acl associated with a node synchronously.
     *
     * @param string $path
     *
     * @return array
     *
     * @see http://php.net/manual/en/zookeeper.getacl.php
     */
    public function getAcl(string $path): array
    {
    }

    /**
     * getClientId.
     *
     * return the client session id, only valid if the connections is currently connected (ie. last watcher state is ZOO_CONNECTED_STATE)
     *
     * @return int
     *
     * @see http://php.net/manual/en/zookeeper.getclientid.php
     */
    public function getClientId(): int
    {
    }

    /**
     * getRecvTimeout.
     *
     * Return the timeout for this session, only valid if the connections is currently connected (ie. last watcher state is ZOO_CONNECTED_STATE). This value may change after a server re-connect.
     *
     * @return int
     *
     * @see http://php.net/manual/en/zookeeper.getrecvtimeout.php
     */
    public function getRecvTimeout(): int
    {
    }

    /**
     * getState.
     *
     * Get the state of the zookeeper connection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/zookeeper.getstate.php
     */
    public function getState(): int
    {
    }

    /**
     * isRecoverable.
     *
     * Checks if the current zookeeper connection state can be recovered.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zookeeper.isrecoverable.php
     */
    public function isRecoverable(): bool
    {
    }

    /**
     * set.
     *
     * Sets the data associated with a node.
     *
     * @param string $path
     * @param string $value
     * @param int    $version = 1
     * @param array  &$stat   = null
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zookeeper.set.php
     */
    public function set(string $path, string $value, int $version = 1, array &$stat = null): bool
    {
    }

    /**
     * setAcl.
     *
     * Sets the acl associated with a node synchronously.
     *
     * @param string $path
     * @param int    $version
     * @param array  $acl
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zookeeper.setacl.php
     */
    public function setAcl(string $path, int $version, array $acl): bool
    {
    }

    /**
     * setDebugLevel.
     *
     * Sets the debugging level for the library.
     *
     * @param int $logLevel
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zookeeper.setdebuglevel.php
     */
    public static function setDebugLevel(int $logLevel): bool
    {
    }

    /**
     * setDeterministicConnOrder.
     *
     * Enable/disable quorum endpoint order randomization.
     *
     * @param bool $yesOrNo
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zookeeper.setdeterministicconnorder.php
     */
    public static function setDeterministicConnOrder(bool $yesOrNo): bool
    {
    }

    /**
     * setLogStream.
     *
     * Sets the stream to be used by the library for logging.
     *
     * @param resource $stream
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zookeeper.setlogstream.php
     */
    public function setLogStream(resource $stream): bool
    {
    }

    /**
     * setWatcher.
     *
     * Set a watcher function.
     *
     * @param callable $watcher_cb
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zookeeper.setwatcher.php
     */
    public function setWatcher(callable $watcher_cb): bool
    {
    }
}
