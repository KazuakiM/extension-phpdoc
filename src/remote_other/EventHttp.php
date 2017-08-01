<?php

/**
 * EventHttp.
 * Represents HTTP server.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.eventhttp.php
 */
final class EventHttp
{
    /**
     * __construct.
     * Constructs EventHttp object(the HTTP server).
     *
     * @param EventBase       $base
     * @param EventSslContext $ctx  = null
     *
     * @see http://php.net/manual/en/eventhttp.construct.php
     */
    public function __construct(EventBase $base, EventSslContext $ctx = null)
    {
    }

    /**
     * accept.
     * Makes an HTTP server accept connections on the specified socket stream or resource.
     *
     * @param mixed $socket
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventhttp.accept.php
     */
    public function accept(mixed $socket): bool
    {
    }

    /**
     * addServerAlias.
     * Adds a server alias to the HTTP server object.
     *
     * @param string $alias
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventhttp.addserveralias.php
     */
    public function addServerAlias(string $alias): bool
    {
    }

    /**
     * bind.
     * Binds an HTTP server on the specified address and port.
     *
     * @param string $address
     * @param int    $port
     *
     * @see http://php.net/manual/en/eventhttp.bind.php
     */
    public function bind(string $address, int $port): void
    {
    }

    /**
     * removeServerAlias.
     * Removes server alias.
     *
     * @param string $alias
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventhttp.removeserveralias.php
     */
    public function removeServerAlias(string $alias): bool
    {
    }

    /**
     * setAllowedMethods.
     * Sets the what HTTP methods are supported in requests accepted by this server, and passed to user callbacks.
     *
     * @param int $methods
     *
     * @see http://php.net/manual/en/eventhttp.setallowedmethods.php
     */
    public function setAllowedMethods(int $methods): void
    {
    }

    /**
     * setCallback.
     * Sets a callback for specified URI.
     *
     * @param string $path
     * @param string $cb
     * @param string $arg  (optional)
     *
     * @see http://php.net/manual/en/eventhttp.setcallback.php
     */
    public function setCallback(string $path, string $cb, string $arg): void
    {
    }

    /**
     * setDefaultCallback.
     * Sets default callback to handle requests that are not caught by specific callbacks.
     *
     * @param string $cb
     * @param string $arg (optional)
     *
     * @see http://php.net/manual/en/eventhttp.setdefaultcallback.php
     */
    public function setDefaultCallback(string $cb, string $arg): void
    {
    }

    /**
     * setMaxBodySize.
     * Sets maximum request body size.
     *
     * @param int $value
     *
     * @see http://php.net/manual/en/eventhttp.setmaxbodysize.php
     */
    public function setMaxBodySize(int $value): void
    {
    }

    /**
     * setMaxHeadersSize.
     * Sets maximum HTTP header size.
     *
     * @param int $value
     *
     * @see http://php.net/manual/en/eventhttp.setmaxheaderssize.php
     */
    public function setMaxHeadersSize(int $value): void
    {
    }

    /**
     * setTimeout.
     * Sets the timeout for an HTTP request.
     *
     * @param int $value
     *
     * @see http://php.net/manual/en/eventhttp.settimeout.php
     */
    public function setTimeout(int $value): void
    {
    }
}
