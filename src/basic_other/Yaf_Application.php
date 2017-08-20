<?php

/**
 * Yaf_Application.
 * Yaf_Application provides a bootstrapping facility for applications which provides reusable resources, common- and module-based bootstrap classes and dependency checking.
 *
 * @property $config
 * @property $dispatcher
 * @property static $_app
 * @property $_modules
 * @property $_running
 * @property $_environ
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-application.php
 */
final class Yaf_Application
{
    private $config;
    private $dispatcher;
    private $_app;
    private $_modules;
    private $_running;
    private $_environ;

    /**
     * __construct.
     * Yaf_Application constructor.
     *
     * @param mixed  $config
     * @param string $envrion (optional)
     *
     * @see http://php.net/manual/en/yaf-application.construct.php
     */
    public function __construct(mixed $config, string $envrion)
    {
    }

    /**
     * __destruct.
     * The __destruct purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-application.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * __clone.
     * Yaf_Application can not be cloned.
     *
     *
     * @see http://php.net/manual/en/yaf-application.clone.php
     */
    private function __clone()
    {
    }

    /**
     * __sleep.
     * Yaf_Application can not be serialized.
     *
     *
     * @see http://php.net/manual/en/yaf-application.sleep.php
     */
    private function __sleep(): void
    {
    }

    /**
     * __wakeup.
     * Yaf_Application can not be unserialized.
     *
     *
     * @see http://php.net/manual/en/yaf-application.wakeup.php
     */
    private function __wakeup(): void
    {
    }

    /**
     * app.
     * Retrieve an Application instance.
     *
     *
     * @see http://php.net/manual/en/yaf-application.app.php
     */
    public static function app(): void
    {
    }

    /**
     * bootstrap.
     * Call bootstrap.
     *
     * @param Yaf_Bootstrap_Abstract $bootstrap (optional)
     *
     * @see http://php.net/manual/en/yaf-application.bootstrap.php
     */
    public function bootstrap(Yaf_Bootstrap_Abstract $bootstrap): void
    {
    }

    /**
     * clearLastError.
     * Clear the last error info.
     *
     * @return Yaf_Application
     *
     * @see http://php.net/manual/en/yaf-application.clearlasterror.php
     */
    public function clearLastError(): Yaf_Application
    {
    }

    /**
     * environ.
     * Retrive environ.
     *
     *
     * @see http://php.net/manual/en/yaf-application.environ.php
     */
    public function environ(): void
    {
    }

    /**
     * execute.
     * Execute a callback.
     *
     * @param callable $entry
     * @param string   $...   (optional)
     *
     * @see http://php.net/manual/en/yaf-application.execute.php
     */
    public function execute(callable $entry, string $etc): void
    {
    }

    /**
     * getAppDirectory.
     * Get the application directory.
     *
     * @return Yaf_Application
     *
     * @see http://php.net/manual/en/yaf-application.getappdirectory.php
     */
    public function getAppDirectory(): Yaf_Application
    {
    }

    /**
     * getConfig.
     * Retrive the config instance.
     *
     * @return Yaf_Config_Abstract
     *
     * @see http://php.net/manual/en/yaf-application.getconfig.php
     */
    public function getConfig(): Yaf_Config_Abstract
    {
    }

    /**
     * getDispatcher.
     * Get Yaf_Dispatcher instance.
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-application.getdispatcher.php
     */
    public function getDispatcher(): Yaf_Dispatcher
    {
    }

    /**
     * getLastErrorMsg.
     * Get message of the last occurred error.
     *
     * @return string
     *
     * @see http://php.net/manual/en/yaf-application.getlasterrormsg.php
     */
    public function getLastErrorMsg(): string
    {
    }

    /**
     * getLastErrorNo.
     * Get code of last occurred error.
     *
     * @return int
     *
     * @see http://php.net/manual/en/yaf-application.getlasterrorno.php
     */
    public function getLastErrorNo(): int
    {
    }

    /**
     * getModules.
     * Get defined module names.
     *
     * @return array
     *
     * @see http://php.net/manual/en/yaf-application.getmodules.php
     */
    public function getModules(): array
    {
    }

    /**
     * run.
     * Start Yaf_Application.
     *
     *
     * @see http://php.net/manual/en/yaf-application.run.php
     */
    public function run(): void
    {
    }

    /**
     * setAppDirectory.
     * Change the application directory.
     *
     * @param string $directory
     *
     * @return Yaf_Application
     *
     * @see http://php.net/manual/en/yaf-application.setappdirectory.php
     */
    public function setAppDirectory(string $directory): Yaf_Application
    {
    }
}
