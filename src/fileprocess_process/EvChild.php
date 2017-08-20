<?php

/**
 * EvChild.
 * EvChild watchers trigger when the process receives a SIGCHLD in response to some child status changes (most typically when a child dies or exits). It is permissible to install an EvChild watcher after the child has been forked(which implies it might have already exited), as long as the event loop isn't entered(or is continued from a watcher), i.e. forking and then immediately registering a watcher for the child is fine, but forking and registering a watcher a few event loop iterations later or in the next callback invocation is not.
 * It is allowed to register EvChild watchers in the default loop only.
 *
 * @property $pid
 * @property $rpid
 * @property $rstatus
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.evchild.php
 */
class EvChild extends EvWatcher
{
    public $pid;
    public $rpid;
    public $rstatus;

    /* Inherited methods */
    //public $is_active;
    //public $data;
    //public $is_pending;
    //public $priority;

    /**
     * __construct.
     * Constructs the EvChild watcher object.
     *
     * @param int      $pid
     * @param bool     $trace
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @see http://php.net/manual/en/evchild.construct.php
     */
    public function __construct(int $pid, bool $trace, callable $callback, mixed $data = null, int $priority = 0)
    {
    }

    /**
     * createStopped.
     * Create instance of a stopped EvCheck watcher.
     *
     * @param int      $pid
     * @param bool     $trace
     * @param callable $callback
     * @param mixed    $data     (optional)
     * @param int      $priority (optional)
     *
     * @return object
     *
     * @see http://php.net/manual/en/evchild.createstopped.php
     */
    final public static function createStopped(int $pid, bool $trace, callable $callback, mixed $data, int $priority): object
    {
    }

    /**
     * set.
     * Configures the watcher.
     *
     *
     * @see http://php.net/manual/en/evchild.set.php
     */
    public function set(int $pid, bool $trace): void
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
