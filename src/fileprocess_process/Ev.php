<?php

/**
 * Ev.
 * Ev is a static class providing access to the default loop and to some common operations.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ev.php
 */
final class Ev
{
    const FLAG_AUTO = 0;
    const FLAG_NOENV = 16777216;
    const FLAG_FORKCHECK = 33554432;
    const FLAG_NOINOTIFY = 1048576;
    const FLAG_SIGNALFD = 2097152;
    const FLAG_NOSIGMASK = 4194304;
    const RUN_NOWAIT = 1;
    const RUN_ONCE = 2;
    const BREAK_CANCEL = 0;
    const BREAK_ONE = 1;
    const BREAK_ALL = 2;
    const MINPRI = -2;
    const MAXPRI = 2;
    const READ = 1;
    const WRITE = 2;
    const TIMER = 256;
    const PERIODIC = 512;
    const SIGNAL = 1024;
    const CHILD = 2048;
    const STAT = 4096;
    const IDLE = 8192;
    const PREPARE = 16384;
    const CHECK = 32768;
    const EMBED = 65536;
    const CUSTOM = 16777216;
    const ERROR = 2147483648;
    const BACKEND_SELECT = 1;
    const BACKEND_POLL = 2;
    const BACKEND_EPOLL = 4;
    const BACKEND_KQUEUE = 8;
    const BACKEND_DEVPOLL = 16;
    const BACKEND_PORT = 32;
    const BACKEND_ALL = 63;
    const BACKEND_MASK = 65535;

    /**
     * backend.
     * Returns an integer describing the backend used by libev.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ev.backend.php
     */
    final public static function backend(): int
    {
    }

    /**
     * depth.
     * Returns recursion depth.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ev.depth.php
     */
    final public static function depth(): int
    {
    }

    /**
     * embeddableBackends.
     * Returns the set of backends that are embeddable in other event loops.
     *
     * @see http://php.net/manual/en/ev.embeddablebackends.php
     */
    final public static function embeddableBackends(): void
    {
    }

    /**
     * feedSignal.
     * Feed a signal event info Ev.
     *
     * @param int $signum
     *
     * @see http://php.net/manual/en/ev.feedsignal.php
     */
    final public static function feedSignal(int $signum): void
    {
    }

    /**
     * feedSignalEvent.
     * Feed signal event into the default loop.
     *
     * @param int $signum
     *
     * @see http://php.net/manual/en/ev.feedsignalevent.php
     */
    final public static function feedSignalEvent(int $signum): void
    {
    }

    /**
     * iteration.
     * Return the number of times the default event loop has polled for new events.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ev.iteration.php
     */
    final public static function iteration(): int
    {
    }

    /**
     * now.
     * Returns the time when the last iteration of the default event loop has started.
     *
     * @return float
     *
     * @see http://php.net/manual/en/ev.now.php
     */
    final public static function now(): double
    {
    }

    /**
     * nowUpdate.
     * Establishes the current time by querying the kernel, updating the time returned by Ev::now in the progress.
     *
     * @see http://php.net/manual/en/ev.nowupdate.php
     */
    final public static function nowUpdate(): void
    {
    }

    /**
     * recommendedBackends.
     * Returns a bit mask of recommended backends for current platform.
     *
     * @see http://php.net/manual/en/ev.recommendedbackends.php
     */
    final public static function recommendedBackends(): void
    {
    }

    /**
     * resume.
     * Resume previously suspended default event loop.
     *
     * @see http://php.net/manual/en/ev.resume.php
     */
    final public static function resume(): void
    {
    }

    /**
     * run.
     * Begin checking for events and calling callbacks for the default loop.
     *
     * @param int $flags (optional)
     *
     * @see http://php.net/manual/en/ev.run.php
     */
    final public static function run(int $flags): void
    {
    }

    /**
     * sleep.
     * Block the process for the given number of seconds.
     *
     * @param float $seconds
     *
     * @see http://php.net/manual/en/ev.sleep.php
     */
    final public static function sleep(double $seconds): void
    {
    }

    /**
     * stop.
     * Stops the default event loop.
     *
     * @param int $how (optional)
     *
     * @see http://php.net/manual/en/ev.stop.php
     */
    final public static function stop(int $how): void
    {
    }

    /**
     * supportedBackends.
     * Returns the set of backends supported by current libev configuration.
     *
     * @see http://php.net/manual/en/ev.supportedbackends.php
     */
    final public static function supportedBackends(): void
    {
    }

    /**
     * suspend.
     * Suspend the default event loop.
     *
     * @see http://php.net/manual/en/ev.suspend.php
     */
    final public static function suspend(): void
    {
    }

    /**
     * time.
     * Returns the current time in fractional seconds since the epoch.
     *
     * @return float
     *
     * @see http://php.net/manual/en/ev.time.php
     */
    final public static function time(): double
    {
    }

    /**
     * verify.
     * Performs internal consistency checks(for debugging).
     *
     * @see http://php.net/manual/en/ev.verify.php
     */
    final public static function verify(): void
    {
    }
}
