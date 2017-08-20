<?php

/**
 * EvTimer.
 * EvTimer watchers are simple relative timers that generate an event after a given time, and optionally repeating in regular intervals after that.
 * The timers are based on real time, that is, if one registers an event that times out after an hour and resets the system clock to January last year , it will still time out after(roughly) one hour. "Roughly" because detecting time jumps is hard, and some inaccuracies are unavoidable.
 * The callback is guaranteed to be invoked only after its timeout has passed (not at, so on systems with very low-resolution clocks this might introduce a small delay). If multiple timers become ready during the same loop iteration then the ones with earlier time-out values are invoked before ones of the same priority with later time-out values (but this is no longer true when a callback calls EvLoop::run() recursively).
 * The timer itself will do a best-effort at avoiding drift, that is, if a timer is configured to trigger every 10 seconds, then it will normally trigger at exactly 10 second intervals. If, however, the script cannot keep up with the timer because it takes longer than those 10 seconds to do) the timer will not fire more than once per event loop iteration.
 *
 * @property $repeat
 * @property $remaining
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.evtimer.php
 */
class EvTimer extends EvWatcher
{
    public $repeat;
    public $remaining;

    /**
     * __construct.
     * Constructs an EvTimer watcher object.
     *
     * @param float    $after
     * @param float    $repeat
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @see http://php.net/manual/en/evtimer.construct.php
     */
    public function __construct(float $after, float $repeat, callable $callback, mixed $data = null, int $priority = 0)
    {
    }

    /* Inherited methods */
    //public $is_active;
    //public $data;
    //public $is_pending;
    //public $priority;

    /**
     * again.
     * Restarts the timer watcher.
     *
     *
     * @see http://php.net/manual/en/evtimer.again.php
     */
    public function again(): void
    {
    }

    /**
     * createStopped.
     * Creates EvTimer stopped watcher object.
     *
     * @param float    $after
     * @param float    $repeat
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @return EvTimer
     *
     * @see http://php.net/manual/en/evtimer.createstopped.php
     */
    final public static function createStopped(float $after, float $repeat, callable $callback, mixed $data = null, int $priority = 0): EvTimer
    {
    }

    /**
     * set.
     * Configures the watcher.
     *
     * @param float $after
     * @param float $repeat
     *
     * @see http://php.net/manual/en/evtimer.set.php
     */
    public function set(float $after, float $repeat): void
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
