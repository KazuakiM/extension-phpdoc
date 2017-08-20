<?php

/**
 * Pool.
 * A Pool is a container for, and controller of, an adjustable number of Workers.
 * Pooling provides a higher level abstraction of the Worker functionality, including the management of references in the way required by pthreads.
 *
 * @property $size
 * @property $class
 * @property $workers
 * @property $work
 * @property $ctor
 * @property $last
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.pool.php
 */
class Pool
{
    protected $size;
    protected $class;
    protected $workers;
    protected $work;
    protected $ctor;
    protected $last;

    /**
     * __construct.
     * Creates a new Pool of Workers.
     *
     * @param int    $size
     * @param string $class (optional)
     * @param array  $ctor  (optional)
     *
     * @see http://php.net/manual/en/pool.construct.php
     */
    public function __construct(int $size, string $class, array $ctor)
    {
    }

    /**
     * collect.
     * Collect references to completed tasks.
     *
     * @param callable $collector (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/pool.collect.php
     */
    public function collect(callable $collector): int
    {
    }

    /**
     * resize.
     * Resize the Pool.
     *
     * @param int $size
     *
     * @see http://php.net/manual/en/pool.resize.php
     */
    public function resize(int $size): void
    {
    }

    /**
     * shutdown.
     * Shutdown all workers.
     *
     *
     * @see http://php.net/manual/en/pool.shutdown.php
     */
    public function shutdown(): void
    {
    }

    /**
     * submit.
     * Submits an object for execution.
     *
     * @param Threaded $task
     *
     * @return int
     *
     * @see http://php.net/manual/en/pool.submit.php
     */
    public function submit(Threaded $task): int
    {
    }

    /**
     * submitTo.
     * Submits a task to a specific worker for execution.
     *
     * @param int      $worker
     * @param Threaded $task
     *
     * @return int
     *
     * @see http://php.net/manual/en/pool.submitTo.php
     */
    public function submitTo(int $worker, Threaded $task): int
    {
    }
}
