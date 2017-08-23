<?php

/**
 * Yaf_Registry.
 * All methods of Yaf_Registry declared as static, making it unversally accessible. This provides the ability to get or set any custom data from anyway in your code as necessary.
 *
 * @property static $_instance
 * @property $_entries
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-registry.php
 */
class Yaf_Registry
{
    public $_instance;
    protected $_entries;

    /**
     * __construct.
     * Yaf_Registry implements singleton.
     *
     * @see http://php.net/manual/en/yaf-registry.construct.php
     */
    private function __construct()
    {
    }

    /**
     * __clone.
     * The __clone purpose.
     *
     * @see http://php.net/manual/en/yaf-registry.clone.php
     */
    private function __clone()
    {
    }

    /**
     * del.
     * Remove an item from registry.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/yaf-registry.del.php
     */
    public static function del(string $name): void
    {
    }

    /**
     * get.
     * Retrieve an item from registry.
     *
     * @param string $name
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/yaf-registry.get.php
     */
    public static function get(string $name): mixed
    {
    }

    /**
     * has.
     * Check whether an item exists.
     *
     * @param string $name
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-registry.has.php
     */
    public static function has(string $name): bool
    {
    }

    /**
     * set.
     * Add an item into registry.
     *
     * @param string $name
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-registry.set.php
     */
    public static function set(string $name, string $value): bool
    {
    }
}
