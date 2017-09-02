<?php

/**
 * Directory.
 * Instances of Directory are created by calling the dir() function, not by the new operator.
 *
 * @property string $path
 * @property resource $handle
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.directory.php
 */
class Directory
{
    public $path;
    public $handle;

    /**
     * close.
     * Close directory handle.
     *
     * @param resource $dir_handle (optional)
     *
     * @see http://php.net/manual/en/directory.close.php
     */
    public function close(resource $dir_handle): void
    {
    }

    /**
     * read.
     * Read entry from directory handle.
     *
     * @param resource $dir_handle (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/directory.read.php
     */
    public function read(resource $dir_handle): string
    {
    }

    /**
     * rewind.
     * Rewind directory handle.
     *
     * @param resource $dir_handle (optional)
     *
     * @see http://php.net/manual/en/directory.rewind.php
     */
    public function rewind(resource $dir_handle): void
    {
    }
}
