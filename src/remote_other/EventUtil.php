<?php


/**
 * EventUtil.
 * EventUtil is a singleton with supplimentary methods and constants.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.eventutil.php
 */
final class EventUtil
{
    const AF_INET = 2;
    const AF_INET6 = 10;
    const AF_UNSPEC = 0;
    const LIBEVENT_VERSION_NUMBER = 33559808;
    const SO_DEBUG = 1;
    const SO_REUSEADDR = 2;
    const SO_KEEPALIVE = 9;
    const SO_DONTROUTE = 5;
    const SO_LINGER = 13;
    const SO_BROADCAST = 6;
    const SO_OOBINLINE = 10;
    const SO_SNDBUF = 7;
    const SO_RCVBUF = 8;
    const SO_SNDLOWAT = 19;
    const SO_RCVLOWAT = 18;
    const SO_SNDTIMEO = 21;
    const SO_RCVTIMEO = 20;
    const SO_TYPE = 3;
    const SO_ERROR = 4;
    const SOL_SOCKET = 1;
    const SOL_TCP = 6;
    const SOL_UDP = 17;
    const IPPROTO_IP = 0;
    const IPPROTO_IPV6 = 41;

    /**
     * __construct.
     * The abstract constructor.
     *
     * @see http://php.net/manual/en/eventutil.construct.php
     */
    abstract public function __construct()
    {
    }

    /**
     * getLastSocketErrno.
     * Returns the most recent socket error number.
     *
     * @param mixed $socket = null
     *
     * @return int
     *
     * @see http://php.net/manual/en/eventutil.getlastsocketerrno.php
     */
    public static function getLastSocketErrno(mixed $socket = null): int
    {
    }

    /**
     * getLastSocketError.
     * Returns the most recent socket error.
     *
     * @param mixed $socket
     *
     * @return string
     *
     * @see http://php.net/manual/en/eventutil.getlastsocketerror.php
     */
    public static function getLastSocketError(mixed $socket): string
    {
    }

    /**
     * getSocketFd.
     * Returns numeric file descriptor of a socket, or stream.
     *
     * @param mixed $socket
     *
     * @return int
     *
     * @see http://php.net/manual/en/eventutil.getsocketfd.php
     */
    public static function getSocketFd(mixed $socket): int
    {
    }

    /**
     * getSocketName.
     * Retreives the current address to which the socket is bound.
     *
     * @param mixed  $socket
     * @param string &$address
     * @param mixed  &$port
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventutil.getsocketname.php
     */
    public static function getSocketName(mixed $socket, string &$address, mixed &$port): bool
    {
    }

    /**
     * setSocketOption.
     * Sets socket options.
     *
     * @param mixed $socket
     * @param int   $level
     * @param int   $optname
     * @param mixed $optval
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventutil.setsocketoption.php
     */
    public static function setSocketOption(mixed $socket, int $level, int $optname, mixed $optval): bool
    {
    }

    /**
     * sslRandPoll.
     * Generates entropy by means of OpenSSL's RAND_poll().
     *
     * @see http://php.net/manual/en/eventutil.sslrandpoll.php
     */
    public static function sslRandPoll(): void
    {
    }
}
