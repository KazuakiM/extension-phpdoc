<?php

/**
 * SyncSemaphore.
 * A cross-platform, native implementation of named and unnamed sempahore objects.
 * A semaphore restricts access to a limited resource to a limited number of instances. Semaphores differ from mutexes in that they can allow more than one instance to access a resource at one time while a mutex only allows one instance at a time.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.syncsemaphore.php
 */
class SyncSemaphore
{
    /**
     * __construct.
     * Constructs a new SyncSemaphore object.
     *
     * @param string $name       (optional)
     * @param int    $initialval = 1 (optional)
     * @param bool   $autounlock = true (optional)
     *
     * @see http://php.net/manual/en/syncsemaphore.construct.php
     */
    public function __construct(string $name, int $initialval = 1, bool $autounlock = true)
    {
    }

    /**
     * lock.
     * Decreases the count of the semaphore or waits.
     *
     * @param int $wait = -1
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncsemaphore.lock.php
     */
    public function lock(int $wait = -1): bool
    {
    }

    /**
     * unlock.
     * Increases the count of the semaphore.
     *
     * @param int &$prevcount (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncsemaphore.unlock.php
     */
    public function unlock(int &$prevcount): bool
    {
    }
}
