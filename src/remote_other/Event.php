<?php

/**
 * Event.
 *
 * Event class represents and event firing on a file descriptor being ready to read from or write to; a file descriptor becoming ready to read from or write to(edge-triggered I/O only); a timeout expiring; a signal occuring; a user-triggered event.
 * Every event is associated with EventBase . However, event will never fire until it is added (via Event::add() ). An added event remains in pending state until the registered event occurs, thus turning it to active state. To handle events user may register a callback which is called when event becomes active. If event is configured persistent , it remains pending. If it is not persistent, it stops being pending when it's callback runs. Event::del() method deletes event, thus making it non-pending. By means of Event::add() method it could be added again.
 *
 * @property bool $pending
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.event.php
 */
final class Event
{
    const ET = 32;
    const PERSIST = 16;
    const READ = 2;
    const WRITE = 4;
    const SIGNAL = 8;
    const TIMEOUT = 1;

    public $pending;

    /**
     * __construct.
     *
     * Constructs Event object
     *
     * @param EventBase $base
     * @param mixed     $fd
     * @param int       $what
     * @param callable  $cb
     * @param mixed     $arg  = null
     *
     * @see http://php.net/manual/en/event.construct.php
     */
    public function __construct(EventBase $base, mixed $fd, int $what, callable $cb, mixed $arg = null)
    {
    }

    /**
     * add.
     *
     * Makes event pending
     *
     * @param float $timeout (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/event.add.php
     */
    public function add(double $timeout): bool
    {
    }

    /**
     * addSignal.
     *
     * Makes signal event pending
     *
     * @param float $timeout (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/event.addsignal.php
     */
    public function addSignal(double $timeout): bool
    {
    }

    /**
     * addTimer.
     *
     * Makes timer event pending
     *
     * @param float $timeout (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/event.addtimer.php
     */
    public function addTimer(double $timeout): bool
    {
    }

    /**
     * del.
     *
     * Makes event non-pending
     *
     * @return bool
     *
     * @see http://php.net/manual/en/event.del.php
     */
    public function del(): bool
    {
    }

    /**
     * delSignal.
     *
     * Makes signal event non-pending
     *
     * @return bool
     *
     * @see http://php.net/manual/en/event.delsignal.php
     */
    public function delSignal(): bool
    {
    }

    /**
     * delTimer.
     *
     * Makes timer event non-pending
     *
     * @return bool
     *
     * @see http://php.net/manual/en/event.deltimer.php
     */
    public function delTimer(): bool
    {
    }

    /**
     * free.
     *
     * Make event non-pending and free resources allocated for this event.
     *
     *
     * @see http://php.net/manual/en/event.free.php
     */
    public function free(): void
    {
    }

    /**
     * getSupportedMethods.
     *
     * Returns array with of the names of the methods supported in this version of Libevent
     *
     * @return array
     *
     * @see http://php.net/manual/en/event.getsupportedmethods.php
     */
    public static function getSupportedMethods(): array
    {
    }

    /**
     * pending.
     *
     * Detects whether event is pending or scheduled
     *
     * @param int $flags
     *
     * @return bool
     *
     * @see http://php.net/manual/en/event.pending.php
     */
    public function pending(int $flags): bool
    {
    }

    /**
     * set.
     *
     * Re-configures event
     *
     * @param EventBase $base
     * @param mixed     $fd
     * @param int       $what (optional)
     * @param callable  $cb   (optional)
     * @param mixed     $arg  (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/event.set.php
     */
    public function set(EventBase $base, mixed $fd, int $what, callable $cb, mixed $arg): bool
    {
    }

    /**
     * setPriority.
     *
     * Set event priority
     *
     * @return bool
     *
     * @see http://php.net/manual/en/event.setpriority.php
     */
    public function setPriority(int $priority): bool
    {
    }

    /**
     * setTimer.
     *
     * Re-configures timer event
     *
     * @param EventBase $base
     * @param callable  $cb
     * @param mixed     $arg  (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/event.settimer.php
     */
    public function setTimer(EventBase $base, callable $cb, mixed $arg): bool
    {
    }

    /**
     * signal.
     *
     * Constructs signal event object
     *
     * @param EventBase $base
     * @param int       $signum
     * @param callable  $cb
     * @param mixed     $arg    (optional)
     *
     * @return Event
     *
     * @see http://php.net/manual/en/event.signal.php
     */
    public static function signal(EventBase $base, int $signum, callable $cb, mixed $arg): Event
    {
    }

    /**
     * timer.
     *
     * Constructs timer event object
     *
     * @param EventBase $base
     * @param callable  $cb
     * @param mixed     $arg  (optional)
     *
     * @return Event
     *
     * @see http://php.net/manual/en/event.timer.php
     */
    public static function timer(EventBase $base, callable $cb, mixed $arg): Event
    {
    }
}
