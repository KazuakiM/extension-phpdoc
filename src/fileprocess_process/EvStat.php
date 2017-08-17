<?php

/**
 * EvStat.
 * EvStat monitors a file system path for attribute changes. It calls stat() on that path in regular intervals(or when the OS signals it changed) and sees if it changed compared to the last time, invoking the callback if it did.
 * The path does not need to exist: changing from "path exists" to "path does not exist" is a status change like any other. The condition "path does not exist" is signified by the 'nlink' item being 0(returned by EvStat::attr() method).
 * The path must not end in a slash or contain special components such as '.' or .. . The path should be absolute: if it is relative and the working directory changes, then the behaviour is undefined.
 * Since there is no portable change notification interface available, the portable implementation simply calls stat() regularly on the path to see if it changed somehow. For this case a recommended polling interval can be specified. If one specifies a polling interval of 0.0 (highly recommended) then a suitable, unspecified default value will be used(which could be expected to be around 5 seconds, although this might change dynamically). libev will also impose a minimum interval which is currently around 0.1 , but that’s usually overkill.
 * This watcher type is not meant for massive numbers of EvStat watchers, as even with OS-supported change notifications, this can be resource-intensive.
 *
 * @property $path
 * @property $interval
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.evstat.php
 */
class EvStat extends EvWatcher
{
    public $path;
    public $interval;

    /**
     * __construct.
     * Constructs EvStat watcher object.
     *
     * @param string   $path
     * @param float    $interval
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @see http://php.net/manual/en/evstat.construct.php
     */
    public function __construct(string $path, float $interval, callable $callback, mixed $data = null, int $priority = 0)
    {
    }

    /* Inherited methods */
    //public $is_active;
    //public $data;
    //public $is_pending;
    //public $priority;

    /**
     * attr.
     * Returns the values most recently detected by Ev.
     *
     * @return array
     *
     * @see http://php.net/manual/en/evstat.attr.php
     */
    public function attr(): array
    {
    }

    /**
     * createStopped.
     * Create a stopped EvStat watcher object.
     *
     * @param string   $path
     * @param float    $interval
     * @param callable $callback
     * @param mixed    $data     = null
     * @param int      $priority = 0
     *
     * @see http://php.net/manual/en/evstat.createstopped.php
     */
    final public static function createStopped(string $path, float $interval, callable $callback, mixed $data = null, int $priority = 0): void
    {
    }

    /**
     * prev.
     * Returns the previous set of values returned by EvStat::attr.
     *
     *
     * @see http://php.net/manual/en/evstat.prev.php
     */
    public function prev(): void
    {
    }

    /**
     * set.
     * Configures the watcher.
     *
     * @param string $path
     * @param float  $interval
     *
     * @see http://php.net/manual/en/evstat.set.php
     */
    public function set(string $path, float $interval): void
    {
    }

    /**
     * stat.
     * Initiates the stat call.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/evstat.stat.php
     */
    public function stat(): bool
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
