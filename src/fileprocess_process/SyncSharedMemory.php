<?php

/**
 * SyncSharedMemory.
 * A cross-platform, native, consistent implementation of named shared memory objects.
 * Shared memory lets two separate processes communicate without the need for complex pipes or sockets. There are several integer-based shared memory implementations for PHP. Named shared memory is an alternative.
 * Synchronization objects (e.g. SyncMutex) are still required to protect most uses of shared memory.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.syncsharedmemory.php
 */
class SyncSharedMemory
{
    /**
     * __construct.
     * Constructs a new SyncSharedMemory object.
     *
     * @param string $name
     * @param int    $size
     *
     * @see http://php.net/manual/en/syncsharedmemory.construct.php
     */
    public function __construct(string $name, int $size)
    {
    }

    /**
     * first.
     * Check to see if the object is the first instance system-wide of named shared memory.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncsharedmemory.first.php
     */
    public function first(): bool
    {
    }

    /**
     * read.
     * Copy data from named shared memory.
     *
     * @param int $start  = 0
     * @param int $length (optional)
     *
     * @see http://php.net/manual/en/syncsharedmemory.read.php
     */
    public function read(int $start = 0, int $length): void
    {
    }

    /**
     * size.
     * Returns the size of the named shared memory.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncsharedmemory.size.php
     */
    public function size(): bool
    {
    }

    /**
     * write.
     * Copy data to named shared memory.
     *
     * @param string $string (optional)
     * @param int    $start  = 0 (optional)
     *
     * @see http://php.net/manual/en/syncsharedmemory.write.php
     */
    public function write(string $string, int $start = 0): void
    {
    }
}
