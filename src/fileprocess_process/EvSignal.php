<?php

/**
 * EvSignal.
 * EvSignal watchers will trigger an event when the process receives a specific signal one or more times. Even though signals are very asynchronous, libev will try its best to deliver signals synchronously, i.e. as part of the normal event processing, like any other event.
 * There is no limit for the number of watchers for the same signal, but only within the same loop, i.e. one can watch for SIGINT in the default loop and for SIGIO in another loop, but it is not allowed to watch for SIGINT in both the default loop and another loop at the same time. At the moment, SIGCHLD is permanently tied to the default loop.
 * If possible and supported, libev will install its handlers with SA_RESTART (or equivalent) behaviour enabled, so system calls should not be unduly interrupted. In case of a problem with system calls getting interrupted by signals, all the signals can be blocked in an EvCheck watcher and unblocked in a EvPrepare watcher.
 *
 * @property $signum
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.evsignal.php
 */
class EvSignal extends EvWatcher
{
    public $signum;

    /* Inherited methods */
    //public $is_active;
    //public $data;
    //public $is_pending;
    //public $priority;

    /**
     * __construct.
     * Constructs EvPeriodic watcher object.
     *
     * @param int      $signum
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @see http://php.net/manual/en/evsignal.construct.php
     */
    public function __construct(int $signum, callable $callback, mixed $data = null, int $priority = 0)
    {
    }

    /**
     * createStopped.
     * Create stopped EvSignal watcher object.
     *
     * @param int      $signum
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @return EvSignal
     *
     * @see http://php.net/manual/en/evsignal.createstopped.php
     */
    final public static function createStopped(int $signum, callable $callback, mixed $data = null, int $priority = 0): EvSignal
    {
    }

    /**
     * set.
     * Configures the watcher.
     *
     * @param int $signum
     *
     * @see http://php.net/manual/en/evsignal.set.php
     */
    public function set(int $signum): void
    {
    }

    /* Inherited methods */
    //public function EvWatcher::clear(): int
    //abstract public function __construct()
    //public function EvWatcher::feed(int $revents): void
    //public function EvWatcher::getLoop(): EvLoop
    //public function EvWatcher::invoke(int $revents): void
    //public function EvWatcher::keepalive(bool $value): bool
    //public function EvWatcher::setCallback(callable $callback): void
    //public function EvWatcher::start(): void
    //public function EvWatcher::stop(): void
}
