<?php

/**
 * Yaf_Config_Ini.
 * Yaf_Config_Ini enables developers to store configuration data in a familiar INI format and read them in the application by using nested object property syntax. The INI format is specialized to provide both the ability to have a hierarchy of configuration data keys and inheritance between configuration data sections. Configuration data hierarchies are supported by separating the keys with the dot or period character ("."). A section may extend or inherit from another section by following the section name with a colon character (":") and the name of the section from which data are to be inherited.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-config-ini.php
 */
class Yaf_Config_Ini extends Yaf_Config_Abstract implements Iterator, ArrayAccess, Countable
{
    /**
     * __construct.
     * Yaf_Config_Ini constructor.
     *
     * @param string $config_file
     * @param string $section     (optional)
     *
     * @see http://php.net/manual/en/yaf-config-ini.construct.php
     */
    public function __construct(string $config_file, string $section): void
    {
    }

    /**
     * __get.
     * The __get purpose.
     *
     * @param string $name (optional)
     *
     * @see http://php.net/manual/en/yaf-config-ini.get.php
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
     * @see http://php.net/manual/en/yaf-config-ini.isset.php
     */
    public function __isset(string $name): void
    {
    }

    /**
     * __set.
     * The __set purpose.
     *
     * @param string $name
     * @param mixed  $value
     *
     * @see http://php.net/manual/en/yaf-config-ini.set.php
     */
    public function __set(string $name, mixed $value): void
    {
    }

    /**
     * count.
     * The count purpose.
     *
     * @see http://php.net/manual/en/yaf-config-ini.count.php
     */
    public function count(): void
    {
    }

    /**
     * current.
     * The current purpose.
     *
     * @see http://php.net/manual/en/yaf-config-ini.current.php
     */
    public function current(): void
    {
    }

    /**
     * key.
     * The key purpose.
     *
     * @see http://php.net/manual/en/yaf-config-ini.key.php
     */
    public function key(): void
    {
    }

    /**
     * next.
     * The next purpose.
     *
     * @see http://php.net/manual/en/yaf-config-ini.next.php
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
     * @see http://php.net/manual/en/yaf-config-ini.offsetexists.php
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
     * @see http://php.net/manual/en/yaf-config-ini.offsetget.php
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
     * @see http://php.net/manual/en/yaf-config-ini.offsetset.php
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
     * @see http://php.net/manual/en/yaf-config-ini.offsetunset.php
     */
    public function offsetUnset(string $name): void
    {
    }

    /**
     * readonly.
     * The readonly purpose.
     *
     * @see http://php.net/manual/en/yaf-config-ini.readonly.php
     */
    public function readonly(): void
    {
    }

    /**
     * rewind.
     * The rewind purpose.
     *
     * @see http://php.net/manual/en/yaf-config-ini.rewind.php
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
     * @see http://php.net/manual/en/yaf-config-ini.toarray.php
     */
    public function toArray(): array
    {
    }

    /**
     * valid.
     * The valid purpose.
     *
     * @see http://php.net/manual/en/yaf-config-ini.valid.php
     */
    public function valid(): void
    {
    }

    /* Inherited methods */
    //abstract public function Yaf_Config_Abstract::get(string $name, mixed $value): mixed
    //abstract public function Yaf_Config_Abstract::(): bool
    //abstract public function Yaf_Config_Abstract::set(): Yaf_Config_Abstract
    //abstract public function Yaf_Config_Abstract::toArray(): array
}
