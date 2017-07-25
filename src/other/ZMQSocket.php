<?php

/**
 * ZMQSocket.
 *
 *
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.zmqsocket.php
 */
class ZMQSocket
{
    /**
     * __construct.
     *
     * Construct a new ZMQSocket
     *
     * @param ZMQContext $context
     * @param int        $type
     * @param string     $persistent_id = null
     * @param callback   $on_new_socket = null
     *
     * @see http://php.net/manual/en/zmqsocket.construct.php
     */
    public function __construct(ZMQContext $context, int $type, string $persistent_id = null, callback $on_new_socket = null)
    {
    }

    /**
     * bind.
     *
     * Bind the socket
     *
     * @param string $dsn
     * @param bool   $force = false
     *
     * @return ZMQSocket
     *
     * @see http://php.net/manual/en/zmqsocket.bind.php
     */
    public function bind(string $dsn, bool $force = false): ZMQSocket
    {
    }

    /**
     * connect.
     *
     * Connect the socket
     *
     * @param string $dsn
     * @param bool   $force = false
     *
     * @return ZMQSocket
     *
     * @see http://php.net/manual/en/zmqsocket.connect.php
     */
    public function connect(string $dsn, bool $force = false): ZMQSocket
    {
    }

    /**
     * disconnect.
     *
     * Disconnect a socket
     *
     * @param string $dsn
     *
     * @return ZMQSocket
     *
     * @see http://php.net/manual/en/zmqsocket.disconnect.php
     */
    public function disconnect(string $dsn): ZMQSocket
    {
    }

    /**
     * getEndpoints.
     *
     * Get list of endpoints
     *
     * @return array
     *
     * @see http://php.net/manual/en/zmqsocket.getendpoints.php
     */
    public function getEndpoints(): array
    {
    }

    /**
     * getPersistentId.
     *
     * Get the persistent id
     *
     * @return string
     *
     * @see http://php.net/manual/en/zmqsocket.getpersistentid.php
     */
    public function getPersistentId(): string
    {
    }

    /**
     * getSocketType.
     *
     * Get the socket type
     *
     * @return int
     *
     * @see http://php.net/manual/en/zmqsocket.getsockettype.php
     */
    public function getSocketType(): int
    {
    }

    /**
     * getSockOpt.
     *
     * Get socket option
     *
     * @param string $key
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/zmqsocket.getsockopt.php
     */
    public function getSockOpt(string $key): mixed
    {
    }

    /**
     * isPersistent.
     *
     * Whether the socket is persistent
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zmqsocket.ispersistent.php
     */
    public function isPersistent(): bool
    {
    }

    /**
     * recv.
     *
     * Receives a message
     *
     * @param int $mode = 0
     *
     * @return string
     *
     * @see http://php.net/manual/en/zmqsocket.recv.php
     */
    public function recv(int $mode = 0): string
    {
    }

    /**
     * recvMulti.
     *
     * Receives a multipart message
     *
     * @param int $mode = 0
     *
     * @return string
     *
     * @see http://php.net/manual/en/zmqsocket.recvmulti.php
     */
    public function recvMulti(int $mode = 0): string
    {
    }

    /**
     * send.
     *
     * Sends a message
     *
     * @param string $message
     * @param int    $mode    = 0
     *
     * @return ZMQSocket
     *
     * @see http://php.net/manual/en/zmqsocket.send.php
     */
    public function send(string $message, int $mode = 0): ZMQSocket
    {
    }

    /**
     * sendmulti.
     *
     * Sends a message
     *
     * @param array $message
     * @param int   $mode    = 0
     *
     * @return ZMQSocket
     *
     * @see http://php.net/manual/en/zmqsocket.sendmulti.php
     */
    public function sendmulti(array $message, int $mode = 0): ZMQSocket
    {
    }

    /**
     * setSockOpt.
     *
     * Set a socket option
     *
     * @param int   $key
     * @param mixed $value
     *
     * @return ZMQSocket
     *
     * @see http://php.net/manual/en/zmqsocket.setsockopt.php
     */
    public function setSockOpt(int $key, mixed $value): ZMQSocket
    {
    }

    /**
     * unbind.
     *
     * Unbind the socket
     *
     * @param string $dsn
     *
     * @return ZMQSocket
     *
     * @see http://php.net/manual/en/zmqsocket.unbind.php
     */
    public function unbind(string $dsn): ZMQSocket
    {
    }
}
