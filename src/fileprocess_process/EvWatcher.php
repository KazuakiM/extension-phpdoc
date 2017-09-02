<?php

/**
 * EvWatcher.
 * EvWatcher is a base class for all watchers( EvCheck , EvChild etc.). Since EvWatcher 's constructor is abstract , one can't(and don't need to) create EvWatcher objects directly.
 *
 * @property $is_active
 * @property $data
 * @property $is_pending
 * @property $priority
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.evwatcher.php
 */
abstract class EvWatcher
{
    public $is_active;
    public $data;
    public $is_pending;
    public $priority;

    /**
     * __construct.
     * Abstract constructor of a watcher object.
     *
     * @see http://php.net/manual/en/evwatcher.construct.php
     */
    public function __construct()
    {
    }

    /**
     * clear.
     * Clear watcher pending status.
     *
     * @return int
     *
     * @see http://php.net/manual/en/evwatcher.clear.php
     */
    public function clear(): int
    {
    }

    /**
     * feed.
     * Feeds the given revents set into the event loop.
     *
     * @param int $revents
     *
     * @see http://php.net/manual/en/evwatcher.feed.php
     */
    public function feed(int $revents): void
    {
    }

    /**
     * getLoop.
     * Returns the loop responsible for the watcher.
     *
     * @return EvLoop
     *
     * @see http://php.net/manual/en/evwatcher.getloop.php
     */
    public function getLoop(): EvLoop
    {
    }

    /**
     * invoke.
     * Invokes the watcher callback with the given received events bit mask.
     *
     * @param int $revents
     *
     * @see http://php.net/manual/en/evwatcher.invoke.php
     */
    public function invoke(int $revents): void
    {
    }

    /**
     * keepalive.
     * Configures whether to keep the loop from returning.
     *
     * @param bool $value (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/evwatcher.keepalive.php
     */
    public function keepalive(bool $value): bool
    {
    }

    /**
     * setCallback.
     * Sets new callback for the watcher.
     *
     * @param callable $callback
     *
     * @see http://php.net/manual/en/evwatcher.setcallback.php
     */
    public function setCallback(callable $callback): void
    {
    }

    /**
     * start.
     * Starts the watcher.
     *
     * @see http://php.net/manual/en/evwatcher.start.php
     */
    public function start(): void
    {
    }

    /**
     * stop.
     * Stops the watcher.
     *
     * @see http://php.net/manual/en/evwatcher.stop.php
     */
    public function stop(): void
    {
    }
}
