<?php

/**
 * SyncMutex.
 * A cross-platform, native implementation of named and unnamed countable mutex objects.
 * A mutex is a mutual exclusion object that restricts access to a shared resource (e.g. a file) to a single instance. Countable mutexes acquire the mutex a single time and internally track the number of times the mutex is locked. The mutex is unlocked as soon as it goes out of scope or is unlocked the same number of times that it was locked.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.syncmutex.php
 */
class SyncMutex
{
    /**
     * __construct.
     * Constructs a new SyncMutex object.
     *
     * @param string $name (optional)
     *
     * @see http://php.net/manual/en/syncmutex.construct.php
     */
    public function __construct(string $name)
    {
    }

    /**
     * lock.
     * Waits for an exclusive lock.
     *
     * @param int $wait = -1
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncmutex.lock.php
     */
    public function lock(int $wait = -1): bool
    {
    }

    /**
     * unlock.
     * Unlocks the mutex.
     *
     * @param bool $all = false
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncmutex.unlock.php
     */
    public function unlock(bool $all = false): bool
    {
    }
}
