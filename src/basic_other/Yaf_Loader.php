<?php

/**
 * Yaf_Loader.
 * Yaf_Loader introduces a comprehensive autoloading solution for Yaf.
 * The first time an instance of Yaf_Application is retrieved, Yaf_Loader will instance a singleton, and registers itself with spl_autoload. You retrieve an instance using the Yaf_Loader::getInstance()
 * Yaf_Loader attempt to load a class only one shot, if failed, depend on yaf.use_spl_auload, if this config is On Yaf_Loader::autoload() will return FALSE, thus give the chance to other autoload function. if it is Off (by default), Yaf_Loader::autoload() will return TRUE, and more important is that a very usefull warning will be triggerd (very usefull to find out why a class could not be loaded).
 *
 * @property $_local_ns
 * @property $_library
 * @property $_global_library
 * @property static $_instance
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-loader.php
 */
class Yaf_Loader
{
    public $_instance;
    protected $_local_ns;
    protected $_library;
    protected $_global_library;

    /**
     * __construct.
     * The __construct purpose.
     *
     * @see http://php.net/manual/en/yaf-loader.construct.php
     */
    private function __construct()
    {
    }

    /**
     * __clone.
     * The __clone purpose.
     *
     * @see http://php.net/manual/en/yaf-loader.clone.php
     */
    private function __clone()
    {
    }

    /**
     * __sleep.
     * The __sleep purpose.
     *
     * @see http://php.net/manual/en/yaf-loader.sleep.php
     */
    private function __sleep(): void
    {
    }

    /**
     * __wakeup.
     * The __wakeup purpose.
     *
     * @see http://php.net/manual/en/yaf-loader.wakeup.php
     */
    private function __wakeup(): void
    {
    }

    /**
     * autoload.
     * The autoload purpose.
     *
     * @see http://php.net/manual/en/yaf-loader.autoload.php
     */
    public function autoload(): void
    {
    }

    /**
     * clearLocalNamespace.
     * The clearLocalNamespace purpose.
     *
     * @see http://php.net/manual/en/yaf-loader.clearlocalnamespace.php
     */
    public function clearLocalNamespace(): void
    {
    }

    /**
     * getInstance.
     * The getInstance purpose.
     *
     * @see http://php.net/manual/en/yaf-loader.getinstance.php
     */
    public static function getInstance(): void
    {
    }

    /**
     * getLibraryPath.
     * get the library path.
     *
     * @param bool $is_global = false
     *
     * @return Yaf_Loader
     *
     * @see http://php.net/manual/en/yaf-loader.getlibrarypath.php
     */
    public function getLibraryPath(bool $is_global = false): Yaf_Loader
    {
    }

    /**
     * getLocalNamespace.
     * The getLocalNamespace purpose.
     *
     * @see http://php.net/manual/en/yaf-loader.getlocalnamespace.php
     */
    public function getLocalNamespace(): void
    {
    }

    /**
     * import.
     * The import purpose.
     *
     * @see http://php.net/manual/en/yaf-loader.import.php
     */
    public static function import(): void
    {
    }

    /**
     * isLocalName.
     * The isLocalName purpose.
     *
     * @see http://php.net/manual/en/yaf-loader.islocalname.php
     */
    public function isLocalName(): void
    {
    }

    /**
     * registerLocalNamespace.
     * register local class prefix.
     *
     * @param mixed $prefix
     *
     * @see http://php.net/manual/en/yaf-loader.registerlocalnamespace.php
     */
    public function registerLocalNamespace(mixed $prefix): void
    {
    }

    /**
     * setLibraryPath.
     * Change the library path.
     *
     * @param string $directory
     * @param bool   $is_global = false
     *
     * @return Yaf_Loader
     *
     * @see http://php.net/manual/en/yaf-loader.setlibrarypath.php
     */
    public function setLibraryPath(string $directory, bool $is_global = false): Yaf_Loader
    {
    }
}
