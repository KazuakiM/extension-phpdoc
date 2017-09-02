<?php

/**
 * EventListener.
 * Represents a connection listener.
 *
 * @property int $fd
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.eventlistener.php
 */
final class EventListener
{
    const OPT_LEAVE_SOCKETS_BLOCKING = 1;
    const OPT_CLOSE_ON_FREE = 2;
    const OPT_CLOSE_ON_EXEC = 4;
    const OPT_REUSEABLE = 8;
    const OPT_THREADSAFE = 16;

    public $fd;

    /**
     * __construct.
     * Creates new connection listener associated with an event base.
     *
     * @param EventBase $base
     * @param callable  $cb
     * @param mixed     $data
     * @param int       $flags
     * @param int       $backlog
     * @param mixed     $target
     *
     * @see http://php.net/manual/en/eventlistener.construct.php
     */
    public function __construct(EventBase $base, callable $cb, mixed $data, int $flags, int $backlog, mixed $target)
    {
    }

    /**
     * disable.
     * Disables an event connect listener object.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventlistener.disable.php
     */
    public function disable(): bool
    {
    }

    /**
     * enable.
     * Enables an event connect listener object.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventlistener.enable.php
     */
    public function enable(): bool
    {
    }

    /**
     * getBase.
     * Returns event base associated with the event listener.
     *
     * @see http://php.net/manual/en/eventlistener.getbase.php
     */
    public function getBase(): void
    {
    }

    /**
     * getSocketName.
     * Retreives the current address to which the listener's socket is bound.
     *
     * @param string &$address
     * @param mixed  &$port
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventlistener.getsocketname.php
     */
    public static function getSocketName(string &$address, mixed &$port): bool
    {
    }

    /**
     * setCallback.
     * The setCallback purpose.
     *
     * @param callable $cb
     * @param mixed    $arg = null
     *
     * @see http://php.net/manual/en/eventlistener.setcallback.php
     */
    public function setCallback(callable $cb, mixed $arg = null): void
    {
    }

    /**
     * setErrorCallback.
     * Set event listener's error callback.
     *
     * @param string $cb
     *
     * @see http://php.net/manual/en/eventlistener.seterrorcallback.php
     */
    public function setErrorCallback(string $cb): void
    {
    }
}
