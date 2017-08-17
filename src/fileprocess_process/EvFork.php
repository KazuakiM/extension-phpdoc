<?php

/**
 * EvFork.
 * Fork watchers are called when a fork() was detected (usually because whoever signalled libev about it by calling EvLoop::fork() ). The invocation is done before the event loop blocks next and before EvCheck watchers are being called, and only in the child after the fork. Note, that if whoever calling EvLoop::fork() calls it in the wrong process, the fork handlers will be invoked, too.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.evfork.php
 */
class EvFork extends EvWatcher
{
    /* Inherited methods */
    //public $is_active;
    //public $data;
    //public $is_pending;
    //public $priority;

    /**
     * __construct.
     * Constructs the EvFork watcher object.
     *
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @see http://php.net/manual/en/evfork.construct.php
     */
    public function __construct(callable $callback, mixed $data = null, int $priority = 0)
    {
    }

    /**
     * createStopped.
     * Creates a stopped instance of EvFork watcher class.
     *
     * @param string $callback
     * @param string $data     (optional)
     * @param string $priority (optional)
     *
     * @return object
     *
     * @see http://php.net/manual/en/evfork.createstopped.php
     */
    final public static function createStopped(string $callback, string $data, string $priority): object
    {
    }

    /* Inherited methods */
    //public function EvWatcher::clear(): int
    //abstract public function __construct(): EvWatcher::
    //public function EvWatcher::feed(int $revents): void
    //public function EvWatcher::getLoop(): EvLoop
    //public function EvWatcher::invoke(int $revents): void
    //public function EvWatcher::keepalive(bool $value): bool
    //public function EvWatcher::setCallback(callable $callback): void
    //public function EvWatcher::start(): void
    //public function EvWatcher::stop(): void
}
