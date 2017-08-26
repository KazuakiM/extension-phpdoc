<?php

/**
 * Yaf_Session.
 *
 *
 * @property static $_instance
 * @property $_session
 * @property $_started
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-session.php
 */
class Yaf_Session implements Iterator, ArrayAccess, Countable
{
    protected $_instance;
    protected $_session;
    protected $_started;

    /**
     * __construct.
     * Constructor of Yaf_Session.
     *
     * @see http://php.net/manual/en/yaf-session.construct.php
     */
    private function __construct()
    {
    }

    /**
     * __clone.
     * The __clone purpose.
     *
     * @see http://php.net/manual/en/yaf-session.clone.php
     */
    private function __clone()
    {
    }

    /**
     * __get.
     * The __get purpose.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/yaf-session.get.php
     */
    public function __get(string $name): void
    {
    }

    /**
     * __isset.
     * The __isset purpose.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/yaf-session.isset.php
     */
    public function __isset(string $name): void
    {
    }

    /**
     * __set.
     * The __set purpose.
     *
     * @param string $name
     * @param string $value
     *
     * @see http://php.net/manual/en/yaf-session.set.php
     */
    public function __set(string $name, string $value): void
    {
    }

    /**
     * __sleep.
     * The __sleep purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-session.sleep.php
     */
    private function __sleep(): void
    {
    }

    /**
     * __unset.
     * The __unset purpose.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/yaf-session.unset.php
     */
    public function __unset(string $name): void
    {
    }

    /**
     * __wakeup.
     * The __wakeup purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-session.wakeup.php
     */
    private function __wakeup(): void
    {
    }

    /**
     * count.
     * The count purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-session.count.php
     */
    public function count(): void
    {
    }

    /**
     * current.
     * The current purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-session.current.php
     */
    public function current(): void
    {
    }

    /**
     * del.
     * The del purpose.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/yaf-session.del.php
     */
    public function del(string $name): void
    {
    }

    /**
     * getInstance.
     * The getInstance purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-session.getinstance.php
     */
    public static function getInstance(): void
    {
    }

    /**
     * has.
     * The has purpose.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/yaf-session.has.php
     */
    public function has(string $name): void
    {
    }

    /**
     * key.
     * The key purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-session.key.php
     */
    public function key(): void
    {
    }

    /**
     * next.
     * The next purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-session.next.php
     */
    public function next(): void
    {
    }

    /**
     * offsetExists.
     * The offsetExists purpose.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/yaf-session.offsetexists.php
     */
    public function offsetExists(string $name): void
    {
    }

    /**
     * offsetGet.
     * The offsetGet purpose.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/yaf-session.offsetget.php
     */
    public function offsetGet(string $name): void
    {
    }

    /**
     * offsetSet.
     * The offsetSet purpose.
     *
     * @param string $name
     * @param string $value
     *
     * @see http://php.net/manual/en/yaf-session.offsetset.php
     */
    public function offsetSet(string $name, string $value): void
    {
    }

    /**
     * offsetUnset.
     * The offsetUnset purpose.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/yaf-session.offsetunset.php
     */
    public function offsetUnset(string $name): void
    {
    }

    /**
     * rewind.
     * The rewind purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-session.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * start.
     * The start purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-session.start.php
     */
    public function start(): void
    {
    }

    /**
     * valid.
     * The valid purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-session.valid.php
     */
    public function valid(): void
    {
    }
}
