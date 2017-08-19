<?php

/**
 * LuaClosure.
 * LuaClosure is a wrapper class for LUA_TFUNCTION which could be return from calling to Lua function.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.luaclosure.php
 */
class LuaClosure
{
    /**
     * __invoke.
     * invoke luaclosure.
     *
     * @param mixed $arg
     * @param mixed $... (optional)
     *
     * @see http://php.net/manual/en/luaclosure.invoke.php
     */
    public function __invoke(mixed $arg, mixed $ect): void
    {
    }
}
