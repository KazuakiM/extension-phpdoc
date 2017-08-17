<?php

/**
 * Thread.
 * When the start method of a Thread is invoked, the run method code will be executed in separate Thread, in parallel.
 * After the run method is executed the Thread will exit immediately, it will be joined with the creating Thread at the appropriate time.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.thread.php
 */
class Thread extends Threaded implements Countable, Traversable, ArrayAccess
{
    /**
     * detach.
     * Execution.
     *
     *
     * @see http://php.net/manual/en/thread.detach.php
     */
    public function detach(): void
    {
    }

    /**
     * getCreatorId.
     * Identification.
     *
     * @return int
     *
     * @see http://php.net/manual/en/thread.getcreatorid.php
     */
    public function getCreatorId(): int
    {
    }

    /**
     * getCurrentThread.
     * Identification.
     *
     * @return Thread
     *
     * @see http://php.net/manual/en/thread.getcurrentthread.php
     */
    public static function getCurrentThread(): Thread
    {
    }

    /**
     * getCurrentThreadId.
     * Identification.
     *
     * @return int
     *
     * @see http://php.net/manual/en/thread.getcurrentthreadid.php
     */
    public static function getCurrentThreadId(): int
    {
    }

    /**
     * getThreadId.
     * Identification.
     *
     * @return int
     *
     * @see http://php.net/manual/en/thread.getthreadid.php
     */
    public function getThreadId(): int
    {
    }

    /**
     * globally.
     * Execution.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/thread.globally.php
     */
    public static function globally(): mixed
    {
    }

    /**
     * isJoined.
     * State Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/thread.isjoined.php
     */
    public function isJoined(): bool
    {
    }

    /**
     * isStarted.
     * State Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/thread.isstarted.php
     */
    public function isStarted(): bool
    {
    }

    /**
     * join.
     * Synchronization.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/thread.join.php
     */
    public function join(): bool
    {
    }

    /**
     * kill.
     * Execution.
     *
     *
     * @see http://php.net/manual/en/thread.kill.php
     */
    public function kill(): void
    {
    }

    /**
     * start.
     * Execution.
     *
     * @param int $options (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/thread.start.php
     */
    public function start(int $options): bool
    {
    }

    /* Inherited methods */
    //public function Threaded::chunk(int $size, bool $preserve): array
    //public function Threaded::count(): int
    //public function Threaded::extend(string $class): bool
    //public function Threaded::from(Closure $run, Closure $construct, array $args): Threaded
    //public function Threaded::getTerminationInfo(): array
    //public function Threaded::isRunning(): bool
    //public function Threaded::isTerminated(): bool
    //public function Threaded::isWaiting(): bool
    //public function Threaded::lock(): bool
    //public function Threaded::merge(mixed $from, bool $overwrite): bool
    //public function Threaded::notify(): bool
    //public function Threaded::pop(): bool
    //public function Threaded::run(): void
    //public function Threaded::shift(): mixed
    //public function Threaded::synchronized(Closure $block, mixed $...): mixed
    //public function Threaded::unlock(): bool
    //public function Threaded::wait(int $timeout): bool
}
