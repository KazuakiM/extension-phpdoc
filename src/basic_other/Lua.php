<?php

/**
 * Lua.
 *
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.lua.php
 */
class Lua
{
    const LUA_VERSION = 'Lua 5.1.4';

    /**
     * __construct.
     * Lua constructor.
     *
     * @param string $lua_script_file = null
     *
     * @see http://php.net/manual/en/lua.construct.php
     */
    public function __construct(string $lua_script_file = null)
    {
    }

    /**
     * __call.
     *
     * @alias Lua::call
     */
    public function __call(callable $lua_func, array $args): mixed
    {
    }

    /**
     * assign.
     * Assign a PHP variable to Lua.
     *
     * @param string $name
     * @param string $value
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/lua.assign.php
     */
    public function assign(string $name, string $value): mixed
    {
    }

    /**
     * call.
     * Call Lua functions.
     *
     * @param callable $lua_func
     * @param array    $args     (optional)
     * @param int      $use_self = 0 (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/lua.call.php
     */
    public function call(callable $lua_func, array $args, int $use_self = 0): mixed
    {
    }

    /**
     * eval.
     * Evaluate a string as Lua code.
     *
     * @param string $statements
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/lua.eval.php
     */
    public function eval(string $statements): mixed
    {
    }

    /**
     * getVersion.
     * The getversion purpose.
     *
     * @return string
     *
     * @see http://php.net/manual/en/lua.getversion.php
     */
    public function getVersion(): string
    {
    }

    /**
     * include.
     * Parse a Lua script file.
     *
     * @param string $file
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/lua.include.php
     */
    public function include(string $file): mixed
    {
    }

    /**
     * registerCallback.
     * Register a PHP function to Lua.
     *
     * @param string   $name
     * @param callable $function
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/lua.registercallback.php
     */
    public function registerCallback(string $name, callable $function): mixed
    {
    }
}
