<?php

/**
 * EvIdle.
 * EvIdle watchers trigger events when no other events of the same or higher priority are pending ( EvPrepare , EvCheck and other EvIdle watchers do not count as receiving events ).
 * Thus, as long as the process is busy handling sockets or timeouts(or even signals) of the same or higher priority it will not be triggered. But when the process is in idle(or only lower-priority watchers are pending), the EvIdle watchers are being called once per event loop iteration - until stopped, that is, or the process receives more events and becomes busy again with higher priority stuff.
 * Apart from keeping the process non-blocking(which is a useful on its own sometimes), EvIdle watchers are a good place to do "pseudo-background processing" , or delay processing stuff to after the event loop has handled all outstanding events.
 * The most noticeable effect is that as long as any idle watchers are active, the process will not block when waiting for new events.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.evidle.php
 */
class EvIdle extends EvWatcher
{
    /* Inherited methods */
    //public $is_active;
    //public $data;
    //public $is_pending;
    //public $priority;

    /**
     * __construct.
     * Constructs the EvIdle watcher object.
     *
     * @param callable $callback
     * @param mixed    $data     (optional)
     * @param int      $priority (optional)
     *
     * @see http://php.net/manual/en/evidle.construct.php
     */
    public function __construct(callable $callback, mixed $data, int $priority)
    {
    }

    /**
     * createStopped.
     * Creates instance of a stopped EvIdle watcher object.
     *
     * @param string $callback
     * @param mixed  $data     (optional)
     * @param int    $priority (optional)
     *
     * @return object
     *
     * @see http://php.net/manual/en/evidle.createstopped.php
     */
    final public static function createStopped(string $callback, mixed $data, int $priority): object
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
