<?php

/**
 * ZMQContext.
 *
 *
 *
 * @see http://php.net/manual/en/class.zmqcontext.php
 */
class ZMQContext
{
    /**
     * __construct.
     *
     * Construct a new ZMQContext object
     *
     * @param int  $io_threads    = 1
     * @param bool $is_persistent = true
     *
     * @see http://php.net/manual/en/zmqcontext.construct.php
     */
    public function __construct(int $io_threads = 1, bool $is_persistent = true)
    {
    }

    /**
     * getOpt.
     *
     * Get context option
     *
     * @param string $key
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/zmqcontext.getopt.php
     */
    public function getOpt(string $key): mixed
    {
    }

    /**
     * getSocket.
     *
     * Create a new socket
     *
     * @param int      $type
     * @param string   $persistent_id = null
     * @param callback $on_new_socket = null
     *
     * @return ZMQSocket
     *
     * @see http://php.net/manual/en/zmqcontext.getsocket.php
     */
    public function getSocket(int $type, string $persistent_id = null, callback $on_new_socket = null): ZMQSocket
    {
    }

    /**
     * isPersistent.
     *
     * Whether the context is persistent
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zmqcontext.ispersistent.php
     */
    public function isPersistent(): boolean
    {
    }

    /**
     * setOpt.
     *
     * Set a socket option
     *
     * @param int   $key
     * @param mixed $value
     *
     * @return ZMQContext
     *
     * @see http://php.net/manual/en/zmqcontext.setopt.php
     */
    public function setOpt(int $key, mixed $value): ZMQContext
    {
    }
}
