<?php

/**
 * Yaf_Config_Abstract.
 *
 * @property $_config
 * @property $_readonly
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-config-abstract.php
 */
abstract class Yaf_Config_Abstract
{
    protected $_config;
    protected $_readonly;

    /**
     * get.
     * Getter.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/yaf-config-abstract.get.php
     */
    public function get(string $name, mixed $value): mixed
    {
    }

    /**
     * readonly.
     * Find a config whether readonly.
     *
     * @see http://php.net/manual/en/yaf-config-abstract.readonly.php
     */
    public function readonly(): void
    {
    }

    /**
     * set.
     * Setter.
     *
     * @return Yaf_Config_Abstract
     *
     * @see http://php.net/manual/en/yaf-config-abstract.set.php
     */
    public function set(): Yaf_Config_Abstract
    {
    }

    /**
     * toArray.
     * Cast to array.
     *
     * @return array
     *
     * @see http://php.net/manual/en/yaf-config-abstract.toarray.php
     */
    public function toArray(): array
    {
    }
}
