<?php

/**
 * SyncReaderWriter.
 * A cross-platform, native implementation of named and unnamed reader-writer objects.
 * A reader-writer object allows many readers or one writer to access a resource. This is an efficient solution for managing resources where access will primarily be read-only but exclusive write access is occasionally necessary.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.syncreaderwriter.php
 */
class SyncReaderWriter
{
    /**
     * __construct.
     * Constructs a new SyncReaderWriter object.
     *
     * @param string $name
     * @param bool   $autounlock = true
     *
     * @see http://php.net/manual/en/syncreaderwriter.construct.php
     */
    public function __construct(string $name, bool $autounlock = true)
    {
    }

    /**
     * readlock.
     * Waits for a read lock.
     *
     * @param int $wait = -1
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncreaderwriter.readlock.php
     */
    public function readlock(int $wait = -1): bool
    {
    }

    /**
     * readunlock.
     * Releases a read lock.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncreaderwriter.readunlock.php
     */
    public function readunlock(): bool
    {
    }

    /**
     * writelock.
     * Waits for an exclusive write lock.
     *
     * @param int $wait = -1
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncreaderwriter.writelock.php
     */
    public function writelock(int $wait = -1): bool
    {
    }

    /**
     * writeunlock.
     * Releases a write lock.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncreaderwriter.writeunlock.php
     */
    public function writeunlock(): bool
    {
    }
}
