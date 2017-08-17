<?php

/**
 * EvLoop.
 * Represents an event loop that is always distinct from the default loop . Unlike the default loop , it cannot handle EvChild watchers.
 * Having threads we have to create a loop per thread, and use the default loop in the parent thread.
 * The default event loop is initialized automatically by Ev . It is accessible via methods of the Ev class, or via EvLoop::defaultLoop() method.
 *
 * @property $data
 * @property $backend
 * @property $is_default_loop
 * @property $iteration
 * @property $pending
 * @property $io_interval
 * @property $timeout_interval
 * @property $depth
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.evloop.php
 */
final class EvLoop
{
    public $data;
    public $backend;
    public $is_default_loop;
    public $iteration;
    public $pending;
    public $io_interval;
    public $timeout_interval;
    public $depth;

    /**
     * __construct.
     * Constructs the event loop object.
     *
     * @param int   $flags
     * @param mixed $data             = null
     * @param float $io_interval      = 0.0
     * @param float $timeout_interval = 0.0
     *
     * @see http://php.net/manual/en/evloop.construct.php
     */
    public function __construct(int $flags, mixed $data = null, float $io_interval = 0.0, float $timeout_interval = 0.0)
    {
    }

    /**
     * backend.
     * Returns an integer describing the backend used by libev.
     *
     * @return int
     *
     * @see http://php.net/manual/en/evloop.backend.php
     */
    public function backend(): int
    {
    }

    /**
     * check.
     * Creates EvCheck object associated with the current event loop instance.
     *
     * @param string $callback
     * @param string $data     (optional)
     * @param string $priority (optional)
     *
     * @return EvCheck
     *
     * @see http://php.net/manual/en/evloop.check.php
     */
    final public function check(string $callback, string $data, string $priority): EvCheck
    {
    }

    /**
     * child.
     * Creates EvChild object associated with the current event loop.
     *
     * @param string $pid
     * @param string $trace
     * @param string $callback
     * @param string $data     (optional)
     * @param string $priority (optional)
     *
     * @return EvChild
     *
     * @see http://php.net/manual/en/evloop.child.php
     */
    final public function child(string $pid, string $trace, string $callback, string $data, string $priority): EvChild
    {
    }

    /**
     * defaultLoop.
     * Returns or creates the default event loop.
     *
     * @param int   $flags            = Ev::FLAG_AUTO
     * @param mixed $data             = null
     * @param float $io_interval      = 0.0
     * @param float $timeout_interval = 0.0
     *
     * @return EvLoop
     *
     * @see http://php.net/manual/en/evloop.defaultloop.php
     */
    public static function defaultLoop(int $flags = Ev::FLAG_AUTO, mixed $data = null, float $io_interval = 0.0, float $timeout_interval = 0.0): EvLoop
    {
    }

    /**
     * embed.
     * Creates an instance of EvEmbed watcher associated with the current EvLoop object.
     *
     * @param string $other
     * @param string $callback (optional)
     * @param string $data     (optional)
     * @param string $priority (optional)
     *
     * @return EvEmbed
     *
     * @see http://php.net/manual/en/evloop.embed.php
     */
    final public function embed(string $other, string $callback, string $data, string $priority): EvEmbed
    {
    }

    /**
     * fork.
     * Creates EvFork watcher object associated with the current event loop instance.
     *
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @return EvFork
     *
     * @see http://php.net/manual/en/evloop.fork.php
     */
    final public function fork(callable $callback, mixed $data = null, int $priority = 0): EvFork
    {
    }

    /**
     * idle.
     * Creates EvIdle watcher object associated with the current event loop instance.
     *
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @return EvIdle
     *
     * @see http://php.net/manual/en/evloop.idle.php
     */
    final public function idle(callable $callback, mixed $data = null, int $priority = 0): EvIdle
    {
    }

    /**
     * invokePending.
     * Invoke all pending watchers while resetting their pending state.
     *
     *
     * @see http://php.net/manual/en/evloop.invokepending.php
     */
    public function invokePending(): void
    {
    }

    /**
     * io.
     * Create EvIo watcher object associated with the current event loop instance.
     *
     * @param mixed    $fd
     * @param int      $events
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @return EvIo
     *
     * @see http://php.net/manual/en/evloop.io.php
     */
    final public function io(mixed $fd, int $events, callable $callback, mixed $data = null, int $priority = 0): EvIo
    {
    }

    /**
     * loopFork.
     * Must be called after a fork.
     *
     *
     * @see http://php.net/manual/en/evloop.loopfork.php
     */
    public function loopFork(): void
    {
    }

    /**
     * now.
     * Returns the current "event loop time".
     *
     * @return float
     *
     * @see http://php.net/manual/en/evloop.now.php
     */
    public function now(): float
    {
    }

    /**
     * nowUpdate.
     * Establishes the current time by querying the kernel, updating the time returned by EvLoop::now in the progress.
     *
     *
     * @see http://php.net/manual/en/evloop.nowupdate.php
     */
    public function nowUpdate(): void
    {
    }

    /**
     * periodic.
     * Creates EvPeriodic watcher object associated with the current event loop instance.
     *
     * @param float    $offset
     * @param float    $interval
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @return EvPeriodic
     *
     * @see http://php.net/manual/en/evloop.periodic.php
     */
    final public function periodic(float $offset, float $interval, callable $callback, mixed $data = null, int $priority = 0): EvPeriodic
    {
    }

    /**
     * prepare.
     * Creates EvPrepare watcher object associated with the current event loop instance.
     *
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @return EvPrepare
     *
     * @see http://php.net/manual/en/evloop.prepare.php
     */
    final public function prepare(callable $callback, mixed $data = null, int $priority = 0): EvPrepare
    {
    }

    /**
     * resume.
     * Resume previously suspended default event loop.
     *
     *
     * @see http://php.net/manual/en/evloop.resume.php
     */
    public function resume(): void
    {
    }

    /**
     * run.
     * Begin checking for events and calling callbacks for the loop.
     *
     * @param int $flags = 0
     *
     * @see http://php.net/manual/en/evloop.run.php
     */
    public function run(int $flags = 0): void
    {
    }

    /**
     * signal.
     * Creates EvSignal watcher object associated with the current event loop instance.
     *
     * @param int      $signum
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @return EvSignal
     *
     * @see http://php.net/manual/en/evloop.signal.php
     */
    final public function signal(int $signum, callable $callback, mixed $data = null, int $priority = 0): EvSignal
    {
    }

    /**
     * stat.
     * Creates EvStat watcher object associated with the current event loop instance.
     *
     * @param string   $path
     * @param float    $interval
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @return EvStat
     *
     * @see http://php.net/manual/en/evloop.stat.php
     */
    final public function stat(string $path, float $interval, callable $callback, mixed $data = null, int $priority = 0): EvStat
    {
    }

    /**
     * stop.
     * Stops the event loop.
     *
     * @param int $how (optional)
     *
     * @see http://php.net/manual/en/evloop.stop.php
     */
    public function stop(int $how): void
    {
    }

    /**
     * suspend.
     * Suspend the loop.
     *
     *
     * @see http://php.net/manual/en/evloop.suspend.php
     */
    public function suspend(): void
    {
    }

    /**
     * timer.
     * Creates EvTimer watcher object associated with the current event loop instance.
     *
     * @param float    $after
     * @param float    $repeat
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @return EvTimer
     *
     * @see http://php.net/manual/en/evloop.timer.php
     */
    final public function timer(float $after, float $repeat, callable $callback, mixed $data = null, int $priority = 0): EvTimer
    {
    }

    /**
     * verify.
     * Performs internal consistency checks(for debugging).
     *
     *
     * @see http://php.net/manual/en/evloop.verify.php
     */
    public function verify(): void
    {
    }
}
