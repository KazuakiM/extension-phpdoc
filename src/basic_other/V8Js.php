<?php

/**
 * V8Js.
 * This is the core class for V8Js extension. Each instance created from this class has own context in which all JavaScript is compiled and executed.
 * See V8Js::__construct() for more information.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.v8js.php
 */
class V8Js
{
    //const V8_VERSION;
    const FLAG_NONE = 1;
    const FLAG_FORCE_ARRAY = 2;

    /**
     * __construct.
     * Construct a new V8Js object.
     *
     * @param string $object_name                = 'PHP'
     * @param array  $variables                  = array()
     * @param array  $extensions                 = array()
     * @param bool   $report_uncaught_exceptions = TRUE
     *
     * @see http://php.net/manual/en/v8js.construct.php
     */
    public function __construct(string $object_name = 'PHP', array $variables = [], array $extensions = [], bool $report_uncaught_exceptions = true)
    {
    }

    /**
     * executeString.
     * Execute a string as Javascript code.
     *
     * @param string $script
     * @param string $identifier = 'V8Js::executeString()'
     * @param int    $flags      = V8Js::FLAG_NONE
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/v8js.executestring.php
     */
    public function executeString(string $script, string $identifier = 'V8Js::executeString()', int $flags = self::FLAG_NONE): mixed
    {
    }

    /**
     * getExtensions.
     * Return an array of registered extensions.
     *
     * @return array
     *
     * @see http://php.net/manual/en/v8js.getextensions.php
     */
    public static function getExtensions(): array
    {
    }

    /**
     * getPendingException.
     * Return pending uncaught Javascript exception.
     *
     * @return V8JsException
     *
     * @see http://php.net/manual/en/v8js.getpendingexception.php
     */
    public function getPendingException(): V8JsException
    {
    }

    /**
     * registerExtension.
     * Register Javascript extensions for V8Js.
     *
     * @param string $extension_name
     * @param string $script
     * @param array  $dependencies   = array()
     * @param bool   $auto_enable    = FALSE
     *
     * @return bool
     *
     * @see http://php.net/manual/en/v8js.registerextension.php
     */
    public static function registerExtension(string $extension_name, string $script, array $dependencies = [], bool $auto_enable = false): bool
    {
    }
}
