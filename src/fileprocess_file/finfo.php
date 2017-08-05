<?php

/**
 * finfo.
 * This class provides an object oriented interface into the fileinfo functions.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.finfo.php
 */
class finfo
{
    /**
     * __construct.
     * Alias of finfo_open.
     *
     * @param int    $options    = FILEINFO_NONE
     * @param string $magic_file = null
     *
     * @see http://php.net/manual/en/finfo.construct.php
     */
    public function __construct(int $options = FILEINFO_NONE, string $magic_file = null)
    {
    }

    /**
     * buffer.
     * Alias of finfo_buffer().
     *
     * @param string   $string  = null
     * @param int      $options = FILEINFO_NONE
     * @param resource $context = null
     *
     * @return string
     *
     * @see http://php.net/manual/en/finfo.buffer.php
     */
    public function buffer(string $string = null, int $options = FILEINFO_NONE, resource $context = null): string
    {
    }

    /**
     * file.
     * Alias of finfo_file().
     *
     * @param string   $file_name = null
     * @param int      $options   = FILEINFO_NONE
     * @param resource $context   = null
     *
     * @return string
     *
     * @see http://php.net/manual/en/finfo.file.php
     */
    public function file(string $file_name = null, int $options = FILEINFO_NONE, resource $context = null): string
    {
    }

    /**
     * set_flags.
     * Alias of finfo_set_flags().
     *
     * @param int $options
     *
     * @return bool
     *
     * @see http://php.net/manual/en/finfo.set-flags.php
     */
    public function set_flags(int $options): bool
    {
    }
}
