<?php

/**
 * EventHttpConnection.
 * Represents an HTTP connection.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.eventhttpconnection.php
 */
class EventHttpConnection
{
    /**
     * __construct.
     * Constructs EventHttpConnection object.
     *
     * @param EventBase       $base
     * @param EventDnsBase    $dns_base
     * @param string          $address
     * @param int             $port
     * @param EventSslContext $ctx      = null
     *
     * @see http://php.net/manual/en/eventhttpconnection.construct.php
     */
    public function __construct(EventBase $base, EventDnsBase $dns_base, string $address, int $port, EventSslContext $ctx = null)
    {
    }

    /**
     * getBase.
     * Returns event base associated with the connection.
     *
     * @return EventBase
     *
     * @see http://php.net/manual/en/eventhttpconnection.getbase.php
     */
    public function getBase(): EventBase
    {
    }

    /**
     * getPeer.
     * Gets the remote address and port associated with the connection.
     *
     * @param string &$address
     * @param int    &$port
     *
     * @see http://php.net/manual/en/eventhttpconnection.getpeer.php
     */
    public function getPeer(string &$address, int &$port): void
    {
    }

    /**
     * makeRequest.
     * Makes an HTTP request over the specified connection.
     *
     * @param EventHttpRequest $req
     * @param int              $type
     * @param string           $uri
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventhttpconnection.makerequest.php
     */
    public function makeRequest(EventHttpRequest $req, int $type, string $uri): bool
    {
    }

    /**
     * setCloseCallback.
     * Set callback for connection close.
     *
     * @param callable $callback
     * @param mixed    $data     (optional)
     *
     * @see http://php.net/manual/en/eventhttpconnection.setclosecallback.php
     */
    public function setCloseCallback(callable $callback, mixed $data): void
    {
    }

    /**
     * setLocalAddress.
     * Sets the IP address from which HTTP connections are made.
     *
     * @param string $address
     *
     * @see http://php.net/manual/en/eventhttpconnection.setlocaladdress.php
     */
    public function setLocalAddress(string $address): void
    {
    }

    /**
     * setLocalPort.
     * Sets the local port from which connections are made.
     *
     * @param int $port
     *
     * @see http://php.net/manual/en/eventhttpconnection.setlocalport.php
     */
    public function setLocalPort(int $port): void
    {
    }

    /**
     * setMaxBodySize.
     * Sets maximum body size for the connection.
     *
     * @param string $max_size
     *
     * @see http://php.net/manual/en/eventhttpconnection.setmaxbodysize.php
     */
    public function setMaxBodySize(string $max_size): void
    {
    }

    /**
     * setMaxHeadersSize.
     * Sets maximum header size.
     *
     * @param string $max_size
     *
     * @see http://php.net/manual/en/eventhttpconnection.setmaxheaderssize.php
     */
    public function setMaxHeadersSize(string $max_size): void
    {
    }

    /**
     * setRetries.
     * Sets the retry limit for the connection.
     *
     * @param int $retries
     *
     * @see http://php.net/manual/en/eventhttpconnection.setretries.php
     */
    public function setRetries(int $retries): void
    {
    }

    /**
     * setTimeout.
     * Sets the timeout for the connection.
     *
     * @param int $timeout
     *
     * @see http://php.net/manual/en/eventhttpconnection.settimeout.php
     */
    public function setTimeout(int $timeout): void
    {
    }
}
