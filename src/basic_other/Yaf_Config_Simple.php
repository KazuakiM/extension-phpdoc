<?php

/**
 * Yaf_Config_Simple.
 *
 * @property $_readonly
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-config-simple.php
 */
class Yaf_Config_Simple extends Yaf_Config_Abstract implements Iterator, ArrayAccess, Countable
{
    protected $_readonly;

    /**
     * __construct.
     * The __construct purpose.
     *
     * @param string $config_file
     * @param string $section     (optional)
     *
     * @see http://php.net/manual/en/yaf-config-simple.construct.php
     */
    public function __construct(string $config_file, string $section)
    {
    }

    /**
     * __get.
     * The __get purpose.
     *
     * @param string $name (optional)
     *
     * @see http://php.net/manual/en/yaf-config-simple.get.php
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
     * @see http://php.net/manual/en/yaf-config-simple.isset.php
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
     * @see http://php.net/manual/en/yaf-config-simple.set.php
     */
    public function __set(string $name, string $value): void
    {
    }

    /**
     * count.
     * The count purpose.
     *
     * @see http://php.net/manual/en/yaf-config-simple.count.php
     */
    public function count(): void
    {
    }

    /**
     * current.
     * The current purpose.
     *
     * @see http://php.net/manual/en/yaf-config-simple.current.php
     */
    public function current(): void
    {
    }

    /**
     * key.
     * The key purpose.
     *
     * @see http://php.net/manual/en/yaf-config-simple.key.php
     */
    public function key(): void
    {
    }

    /**
     * next.
     * The next purpose.
     *
     * @see http://php.net/manual/en/yaf-config-simple.next.php
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
     * @see http://php.net/manual/en/yaf-config-simple.offsetexists.php
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
     * @see http://php.net/manual/en/yaf-config-simple.offsetget.php
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
     * @see http://php.net/manual/en/yaf-config-simple.offsetset.php
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
     * @see http://php.net/manual/en/yaf-config-simple.offsetunset.php
     */
    public function offsetUnset(string $name): void
    {
    }

    /**
     * readonly.
     * The readonly purpose.
     *
     * @see http://php.net/manual/en/yaf-config-simple.readonly.php
     */
    public function readonly(): void
    {
    }

    /**
     * rewind.
     * The rewind purpose.
     *
     * @see http://php.net/manual/en/yaf-config-simple.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * toArray.
     * Returns a PHP array.
     *
     * @return array
     *
     * @see http://php.net/manual/en/yaf-config-simple.toarray.php
     */
    public function toArray(): array
    {
    }

    /**
     * valid.
     * The valid purpose.
     *
     * @see http://php.net/manual/en/yaf-config-simple.valid.php
     */
    public function valid(): void
    {
    }

    /* Inherited methods */
    //abstract public function Yaf_Config_Abstract::get(string $name, mixed $value): mixed
    //abstract public function Yaf_Config_Abstract::readonly(): bool
    //abstract public function Yaf_Config_Abstract::set(): Yaf_Config_Abstract
    //abstract public function Yaf_Config_Abstract::toArray(): array
}
