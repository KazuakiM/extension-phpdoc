<?php

/**
 * Worker.
 * Worker Threads have a persistent context, as such should be used over Threads in most cases.
 * When a Worker is started, the run method will be executed, but the Thread will not leave until one of the following conditions are met:
 *  the Worker goes out of scope (no more references remain)
 *  the programmer calls shutdown
 *  the script dies
 * This means the programmer can reuse the context throughout execution; placing objects on the stack of the Worker will cause the Worker to execute the stacked objects run method.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.worker.php
 */
class Worker extends Thread implements Traversable, Countable, ArrayAccess
{
    /**
     * collect.
     * Collect references to completed tasks.
     *
     * @param callable $collector (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/worker.collect.php
     */
    public function collect(callable $collector): int
    {
    }

    /**
     * getStacked.
     * Gets the remaining stack size.
     *
     * @return int
     *
     * @see http://php.net/manual/en/worker.getstacked.php
     */
    public function getStacked(): int
    {
    }

    /**
     * isShutdown.
     * State Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/worker.isshutdown.php
     */
    public function isShutdown(): bool
    {
    }

    /**
     * isWorking.
     * State Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/worker.isworking.php
     */
    public function isWorking(): bool
    {
    }

    /**
     * shutdown.
     * Shutdown the worker.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/worker.shutdown.php
     */
    public function shutdown(): bool
    {
    }

    /**
     * stack.
     * Stacking work.
     *
     * @param Threaded &$work
     *
     * @return int
     *
     * @see http://php.net/manual/en/worker.stack.php
     */
    public function stack(Threaded &$work): int
    {
    }

    /**
     * unstack.
     * Unstacking work.
     *
     * @return int
     *
     * @see http://php.net/manual/en/worker.unstack.php
     */
    public function unstack(): int
    {
    }

    /* Inherited methods */
    //public function Thread::detach(): void
    //public function Thread::getCreatorId(): int
    //public static function Thread::getCurrentThread(): Thread
    //public static function Thread::getCurrentThreadId(): int
    //public function Thread::getThreadId(): int
    //public static function Thread::globally(): mixed
    //public function Thread::isJoined(): bool
    //public function Thread::isStarted(): bool
    //public function Thread::join(): bool
    //public function Thread::kill(): void
    //public function Thread::start(int $options): bool
}
