<?php

/**
 * Yar_Concurrent_Client.
 *
 *
 * @property static $_callstack
 * @property static $_callback
 * @property static $_error_callback
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yar-concurrent-client.php
 */
class Yar_Concurrent_Client
{
    public $_callstack;
    public $_callback;
    public $_error_callback;

    /**
     * call.
     * Register a concurrent call.
     *
     * @param string   $uri,
     * @param string   $method,
     * @param array    $parameters,
     * @param callable $callback    (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/yar-concurrent-client.call.php
     */
    public static function call(string $uri, string $method, array $parameters, callable $callback): int
    {
    }

    /**
     * loop.
     * Send all calls.
     *
     * @param callable $callback       (optional)
     * @param callable $error_callback (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yar-concurrent-client.loop.php
     */
    public static function loop(callable $callback, callable $error_callback): bool
    {
    }

    /**
     * reset.
     * Clean all registered calls.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yar-concurrent-client.reset.php
     */
    public static function reset(): bool
    {
    }
}
