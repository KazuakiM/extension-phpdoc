<?php

/**
 * EvPeriodic.
 * Periodic watchers are also timers of a kind, but they are very versatile.
 * Unlike EvTimer , EvPeriodic watchers are not based on real time(or relative time, the physical time that passes) but on wall clock time(absolute time, calendar or clock). The difference is that wall clock time can run faster or slower than real time, and time jumps are not uncommon(e.g. when adjusting it).
 * EvPeriodic watcher can be configured to trigger after some specific point in time. For example, if an EvPeriodic watcher is configured to trigger "in 10 seconds" (e.g. EvLoop::now() + 10.0 , i.e. an absolute time, not a delay), and the system clock is reset to January of the previous year , then it will take a year or more to trigger the event (unlike an EvTimer , which would still trigger roughly 10 seconds after starting it as it uses a relative timeout).
 * As with timers, the callback is guaranteed to be invoked only when the point in time where it is supposed to trigger has passed. If multiple timers become ready during the same loop iteration then the ones with earlier time-out values are invoked before ones with later time-out values (but this is no longer true when a callback calls EvLoop::run() recursively).
 *
 * @property $offset
 * @property $interval
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.evperiodic.php
 */
class EvPeriodic extends EvWatcher
{
    public $offset;
    public $interval;

    /**
     * __construct.
     * Constructs EvPeriodic watcher object.
     *
     * @param float    $offset
     * @param string   $interval
     * @param callable $reschedule_cb
     * @param callable $callback
     * @param mixed    $data          = null
     * @param int      $priority      = 0
     *
     * @see http://php.net/manual/en/evperiodic.construct.php
     */
    public function __construct(float $offset, string $interval, callable $reschedule_cb, callable $callback, mixed $data = null, int $priority = 0)
    {
    }

    /* Inherited methods */
    //public $is_active;
    //public $data;
    //public $is_pending;
    //public $priority;

    /**
     * again.
     * Simply stops and restarts the periodic watcher again.
     *
     * @see http://php.net/manual/en/evperiodic.again.php
     */
    public function again(): void
    {
    }

    /**
     * at.
     * Returns the absolute time that this watcher is supposed to trigger next.
     *
     * @return float
     *
     * @see http://php.net/manual/en/evperiodic.at.php
     */
    public function at(): float
    {
    }

    /**
     * createStopped.
     * Create a stopped EvPeriodic watcher.
     *
     * @param float    $offset
     * @param float    $interval
     * @param callable $reschedule_cb
     * @param callable $callback
     * @param mixed    $data          = null
     * @param int      $priority      = 0
     *
     * @return EvPeriodic
     *
     * @see http://php.net/manual/en/evperiodic.createstopped.php
     */
    final public static function createStopped(float $offset, float $interval, callable $reschedule_cb, callable $callback, mixed $data = null, int $priority = 0): EvPeriodic
    {
    }

    /**
     * set.
     * Configures the watcher.
     *
     * @param float $offset
     * @param float $interval
     *
     * @see http://php.net/manual/en/evperiodic.set.php
     */
    public function set(float $offset, float $interval): void
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
