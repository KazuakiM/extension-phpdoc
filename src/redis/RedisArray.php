<?php

/**
 * RedisArray.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](https://github.com/ukko/phpredis-phpdoc) by Max Kamashev is licensed under [the MIT License](http://opensource.org/licenses/mit-license.php).
 *
 * @see https://github.com/ukko/phpredis-phpdoc
 * @see https://raw.githubusercontent.com/ukko/phpredis-phpdoc/master/src/Redis.php
 */
class RedisArray
{
    /**
     * __construct.
     *
     * @param string $name  Name of the redis array to create (required if using redis.ini to define array)
     * @param array  $hosts Array of hosts to construct the array with
     * @param array  $opts  Array of options
     *
     * @see https://github.com/nicolasff/phpredis/blob/master/arrays.markdown
     */
    public function __construct($name = '', array $hosts = null, array $opts = null)
    {
    }

    /**
     * _hosts.
     *
     * @return array list of hosts for the selected array
     */
    public function _hosts()
    {
    }

    /**
     * _function.
     *
     * @return string the name of the function used to extract key parts during consistent hashing
     */
    public function _function()
    {
    }

    /**
     * _target.
     *
     * @param string $key The key for which you want to lookup the host
     *
     * @return string the host to be used for a certain key
     */
    public function _target($key)
    {
    }

    /**
     * _rehash.
     * Use this function when a new node is added and keys need to be rehashed.
     */
    public function _rehash()
    {
    }
}
