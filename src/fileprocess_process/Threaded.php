<?php

/**
 * Threaded.
 * Threaded objects form the basis of pthreads ability to execute user code in parallel; they expose synchronization methods and various useful interfaces.
 * Threaded objects, most importantly, provide implicit safety for the programmer; all operations on the object scope are safe.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.threaded.php
 */
class Threaded implements Collectable, Traversable, Countable, ArrayAccess
{
    /**
     * chunk.
     * Manipulation.
     *
     * @param int  $size
     * @param bool $preserve
     *
     * @return array
     *
     * @see http://php.net/manual/en/threaded.chunk.php
     */
    public function chunk(int $size, bool $preserve): array
    {
    }

    /**
     * count.
     * Manipulation.
     *
     * @return int
     *
     * @see http://php.net/manual/en/threaded.count.php
     */
    public function count(): int
    {
    }

    /**
     * extend.
     * Runtime Manipulation.
     *
     * @param string $class
     *
     * @return bool
     *
     * @see http://php.net/manual/en/threaded.extend.php
     */
    public function extend(string $class): bool
    {
    }

    /**
     * from.
     * Creation.
     *
     * @param Closure $run
     * @param Closure $construct (optional)
     * @param array   $args      (optional)
     *
     * @return Threaded
     *
     * @see http://php.net/manual/en/threaded.from.php
     */
    public function from(Closure $run, Closure $construct, array $args): Threaded
    {
    }

    /**
     * getTerminationInfo.
     * Error Detection.
     *
     * @return array
     *
     * @see http://php.net/manual/en/threaded.getterminationinfo.php
     */
    public function getTerminationInfo(): array
    {
    }

    /**
     * isRunning.
     * State Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/thread.isrunning.php
     */
    public function isRunning(): bool
    {
    }

    /**
     * isTerminated.
     * State Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/threaded.isterminated.php
     */
    public function isTerminated(): bool
    {
    }

    /**
     * isWaiting.
     * State Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/threaded.iswaiting.php
     */
    public function isWaiting(): bool
    {
    }

    /**
     * lock.
     * Synchronization.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/threaded.lock.php
     */
    public function lock(): bool
    {
    }

    /**
     * merge.
     * Manipulation.
     *
     * @param mixed $from
     * @param bool  $overwrite (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/threaded.merge.php
     */
    public function merge(mixed $from, bool $overwrite): bool
    {
    }

    /**
     * notify.
     * Synchronization.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/threaded.notify.php
     */
    public function notify(): bool
    {
    }

    /**
     * pop.
     * Manipulation.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/threaded.pop.php
     */
    public function pop(): bool
    {
    }

    /**
     * run.
     * Execution.
     *
     *
     * @see http://php.net/manual/en/threaded.run.php
     */
    public function run(): void
    {
    }

    /**
     * shift.
     * Manipulation.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/threaded.shift.php
     */
    public function shift(): mixed
    {
    }

    /**
     * synchronized.
     * Synchronization.
     *
     * @param Closure $block
     * @param mixed   $etc   (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/threaded.synchronized.php
     */
    public function synchronized(Closure $block, mixed $etc): mixed
    {
    }

    /**
     * unlock.
     * Synchronization.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/threaded.unlock.php
     */
    public function unlock(): bool
    {
    }

    /**
     * wait.
     * Synchronization.
     *
     * @param int $timeout (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/threaded.wait.php
     */
    public function wait(int $timeout): bool
    {
    }
}
