<?php

/**
 * EvEmbed.
 * Used to embed one event loop into another.
 *
 * @property $embed
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.evembed.php
 */
class EvEmbed extends EvWatcher
{
    public $embed;

    /**
     * __construct.
     * Constructs the EvEmbed object.
     *
     * @param object   $other
     * @param callable $callback (optional)
     * @param mixed    $data     (optional)
     * @param int      $priority (optional)
     *
     * @see http://php.net/manual/en/evembed.construct.php
     */
    public function __construct(object $other, callable $callback, mixed $data, int $priority)
    {
    }

    /**
     * createStopped.
     * Create stopped EvEmbed watcher object.
     *
     * @param object   $other
     * @param callable $callback (optional)
     * @param mixed    $data     (optional)
     * @param int      $priority (optional)
     *
     * @see http://php.net/manual/en/evembed.createstopped.php
     */
    final public static function createStopped(object $other, callable $callback, mixed $data, int $priority): void
    {
    }

    /**
     * set.
     * Configures the watcher.
     *
     * @param object $other
     *
     * @see http://php.net/manual/en/evembed.set.php
     */
    public function set(object $other): void
    {
    }

    /**
     * sweep.
     * Make a single, non-blocking sweep over the embedded loop.
     *
     *
     * @see http://php.net/manual/en/evembed.sweep.php
     */
    public function sweep(): void
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
