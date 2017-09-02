<?php

/**
 * EvIo.
 * EvIo watchers check whether a file descriptor(or socket, or a stream castable to numeric file descriptor) is readable or writable in each iteration of the event loop, or, more precisely, when reading would not block the process and writing would at least be able to write some data. This behaviour is called level-triggering because events are kept receiving as long as the condition persists. To stop receiving events just stop the watcher.
 * The number of read and/or write event watchers per fd is unlimited. Setting all file descriptors to non-blocking mode is also usually a good idea(but not required).
 * Another thing to watch out for is that it is quite easy to receive false readiness notifications, i.e. the callback might be called with Ev::READ but a subsequent read() will actually block because there is no data. It is very easy to get into this situation. Thus it is best to always use non-blocking I/O: An extra read() returning EAGAIN (or similar) is far preferable to a program hanging until some data arrives.
 * If for some reason it is impossible to run the fd in non-blocking mode, then separately re-test whether a file descriptor is really ready. Some people additionally use SIGALRM and an interval timer, just to be sure thry won't block infinitely.
 * Always consider using non-blocking mode.
 *
 * @property $fd
 * @property $events
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.evio.php
 */
class EvIo extends EvWatcher
{
    public $fd;
    public $events;

    /* Inherited methods */
    //public $is_active;
    //public $data;
    //public $is_pending;
    //public $priority;

    /**
     * __construct.
     * Constructs EvIo watcher object.
     *
     * @param mixed    $fd
     * @param int      $events
     * @param callable $callback
     * @param mixed    $data     (optional)
     * @param int      $priority (optional)
     *
     * @see http://php.net/manual/en/evio.construct.php
     */
    public function __construct(mixed $fd, int $events, callable $callback, mixed $data, int $priority)
    {
    }

    /**
     * createStopped.
     * Create stopped EvIo watcher object.
     *
     * @param mixed    $fd
     * @param int      $events
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @return EvIo
     *
     * @see http://php.net/manual/en/evio.createstopped.php
     */
    final public static function createStopped(mixed $fd, int $events, callable $callback, mixed $data = null, int $priority = 0): EvIo
    {
    }

    /**
     * set.
     * Configures the watcher.
     *
     * @param mixed $fd
     * @param int   $events
     *
     * @see http://php.net/manual/en/evio.set.php
     */
    public function set(mixed $fd, int $events): void
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
