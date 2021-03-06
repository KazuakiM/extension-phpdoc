<?php

/**
 * EvCheck.
 * EvPrepare and EvCheck watchers are usually used in pairs. EvPrepare watchers get invoked before the process blocks, EvCheck afterwards.
 * It is not allowed to call EvLoop::run() or similar methods or functions that enter the current event loop from either EvPrepare or EvCheck watchers. Other loops than the current one are fine, however. The rationale behind this is that one don't need to check for recursion in those watchers, i.e. the sequence will always be: EvPrepare -> blocking -> EvCheck , so having a watcher of each kind they will always be called in pairs bracketing the blocking call.
 * The main purpose is to integrate other event mechanisms into libev and their use is somewhat advanced. They could be used, for example, to track variable changes, implement custom watchers, integrate net-snmp or a coroutine library and lots more. They are also occasionally useful to cache some data and want to flush it before blocking.
 * It is recommended to give EvCheck watchers highest( Ev::MAXPRI ) priority, to ensure that they are being run before any other watchers after the poll (this doesn’t matter for EvPrepare watchers).
 * Also, EvCheck watchers should not activate/feed events. While libev fully supports this, they might get executed before other EvCheck watchers did their job.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.evcheck.php
 */
class EvCheck extends EvWatcher
{
    /* Inherited methods */
    //public $is_active;
    //public $data;
    //public $is_pending;
    //public $priority;

    /**
     * __construct.
     * Constructs the EvCheck watcher object.
     *
     * @param callable $callback
     * @param mixed    $data     (optional)
     * @param int      $priority (optional)
     *
     * @see http://php.net/manual/en/evcheck.construct.php
     */
    public function __construct(callable $callback, mixed $data, int $priority)
    {
    }

    /**
     * createStopped.
     * Create instance of a stopped EvCheck watcher.
     *
     * @param string $callback
     * @param string $data     (optional)
     * @param string $priority (optional)
     *
     * @return object
     *
     * @see http://php.net/manual/en/evcheck.createstopped.php
     */
    final public static function createStopped(string $callback, string $data, string $priority): object
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
