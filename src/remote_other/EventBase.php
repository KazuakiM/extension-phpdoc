<?php

/**
 * EventBase.
 * EventBase class represents libevent's event base structure. It holds a set of events and can poll to determine which events are active.
 * Each event base has a method, or a backend that it uses to determine which events are ready. The recognized methods are: select, poll, epoll, kqueue, devpoll, evport and win32 .
 * To configure event base to use, or avoid specific backend EventConfig class can be used.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.eventbase.php
 */
final class EventBase
{
    const LOOP_ONCE = 1;
    const LOOP_NONBLOCK = 2;
    const NOLOCK = 1;
    const STARTUP_IOCP = 4;
    const NO_CACHE_TIME = 8;
    const EPOLL_USE_CHANGELIST = 16;

    /**
     * __construct.
     * Constructs EventBase object.
     *
     * @param EventConfig $cfg
     *
     * @see http://php.net/manual/en/eventbase.construct.php
     */
    public function __construct(EventConfig $cfg)
    {
    }

    /**
     * dispatch.
     * Dispatch pending events.
     *
     * @see http://php.net/manual/en/eventbase.dispatch.php
     */
    public function dispatch(): void
    {
    }

    /**
     * exit.
     * Stop dispatching events.
     *
     * @param float $timeout
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbase.exit.php
     */
    public function exit(double $timeout): bool
    {
    }

    /**
     * free.
     * Free resources allocated for this event base.
     *
     * @see http://php.net/manual/en/eventbase.free.php
     */
    public function free(): void
    {
    }

    /**
     * getFeatures.
     * Returns bitmask of features supported.
     *
     * @return int
     *
     * @see http://php.net/manual/en/eventbase.getfeatures.php
     */
    public function getFeatures(): int
    {
    }

    /**
     * getMethod.
     * Returns event method in use.
     *
     * @return string
     *
     * @see http://php.net/manual/en/eventbase.getmethod.php
     */
    public function getMethod(): string
    {
    }

    /**
     * getTimeOfDayCached.
     * Returns the current event base time.
     *
     * @return float
     *
     * @see http://php.net/manual/en/eventbase.gettimeofdaycached.php
     */
    public function getTimeOfDayCached(): double
    {
    }

    /**
     * gotExit.
     * Checks if the event loop was told to exit.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbase.gotexit.php
     */
    public function gotExit(): bool
    {
    }

    /**
     * gotStop.
     * Checks if the event loop was told to exit.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbase.gotstop.php
     */
    public function gotStop(): bool
    {
    }

    /**
     * loop.
     * Dispatch pending events.
     *
     * @param int $flags
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbase.loop.php
     */
    public function loop(int $flags): bool
    {
    }

    /**
     * priorityInit.
     * Sets number of priorities per event base.
     *
     * @param int $n_priorities
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbase.priorityinit.php
     */
    public function priorityInit(int $n_priorities): bool
    {
    }

    /**
     * reInit.
     * Re]initialize event base(after a fork).
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbase.reinit.php
     */
    public function reInit(): bool
    {
    }

    /**
     * stop.
     * Tells event_base to stop dispatching events.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbase.stop.php
     */
    public function stop(): bool
    {
    }
}
