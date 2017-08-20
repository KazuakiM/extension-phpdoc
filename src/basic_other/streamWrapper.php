<?php

/**
 * streamWrapper.
 * Allows you to implement your own protocol handlers and streams for use with all the other filesystem functions (such as fopen(), fread() etc.).
 *
 * @property resource $context
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.streamwrapper.php
 */
class streamWrapper
{
    public $context;

    /**
     * __construct.
     * Constructs a new stream wrapper.
     *
     * @see http://php.net/manual/en/streamwrapper.construct.php
     */
    public function __construct()
    {
    }

    /**
     * __destruct.
     * Destructs an existing stream wrapper.
     *
     * @see http://php.net/manual/en/streamwrapper.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * dir_closedir.
     * Close directory handle.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.dir-closedir.php
     */
    public function dir_closedir(): bool
    {
    }

    /**
     * dir_opendir.
     * Open directory handle.
     *
     * @param string $path
     * @param int    $options
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.dir-opendir.php
     */
    public function dir_opendir(string $path, int $options): bool
    {
    }

    /**
     * dir_readdir.
     * Read entry from directory handle.
     *
     * @throws E_WARNING
     *
     * @return string
     *
     * @see http://php.net/manual/en/streamwrapper.dir-readdir.php
     */
    public function dir_readdir(): string
    {
    }

    /**
     * dir_rewinddir.
     * Rewind directory handle.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.dir-rewinddir.php
     */
    public function dir_rewinddir(): bool
    {
    }

    /**
     * mkdir.
     * Create a directory.
     *
     * @param string $path
     * @param int    $mode
     * @param int    $options
     *
     * @throws E_WARNING
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.mkdir.php
     */
    public function mkdir(string $path, int $mode, int $options): bool
    {
    }

    /**
     * rename.
     * Renames a file or directory.
     *
     * @param string $path_from
     * @param string $path_to
     *
     * @throws E_WARNING
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.rename.php
     */
    public function rename(string $path_from, string $path_to): bool
    {
    }

    /**
     * rmdir.
     * Removes a directory.
     *
     * @param string $path
     * @param int    $options
     *
     * @throws E_WARNING
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.rmdir.php
     */
    public function rmdir(string $path, int $options): bool
    {
    }

    /**
     * stream_cast.
     * Retrieve the underlaying resource.
     *
     * @param int $cast_as
     *
     * @return resource
     *
     * @see http://php.net/manual/en/streamwrapper.stream-cast.php
     */
    public function stream_cast(int $cast_as): resource
    {
    }

    /**
     * stream_close.
     * Close a resource.
     *
     *
     * @see http://php.net/manual/en/streamwrapper.stream-close.php
     */
    public function stream_close(): void
    {
    }

    /**
     * stream_eof.
     * Tests for end-of-file on a file pointer.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.stream-eof.php
     */
    public function stream_eof(): bool
    {
    }

    /**
     * stream_flush.
     * Flushes the output.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.stream-flush.php
     */
    public function stream_flush(): bool
    {
    }

    /**
     * stream_lock.
     * Advisory file locking.
     *
     * @param int $operation
     *
     * @throws E_WARNING
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.stream-lock.php
     */
    public function stream_lock(int $operation): bool
    {
    }

    /**
     * stream_metadata.
     * Change stream metadata.
     *
     * @param string $path
     * @param int    $option
     * @param mixed  $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.stream-metadata.php
     */
    public function stream_metadata(string $path, int $option, mixed $value): bool
    {
    }

    /**
     * stream_open.
     * Opens file or URL.
     *
     * @param string $path
     * @param string $mode
     * @param int    $options
     * @param string &$opened_path
     *
     * @throws E_WARNING
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.stream-open.php
     */
    public function stream_open(string $path, string $mode, int $options, string &$opened_path): bool
    {
    }

    /**
     * stream_read.
     * Read from stream.
     *
     * @param int $count
     *
     * @throws E_WARNING
     *
     * @return string
     *
     * @see http://php.net/manual/en/streamwrapper.stream-read.php
     */
    public function stream_read(int $count): string
    {
    }

    /**
     * stream_seek.
     * Seeks to specific location in a stream.
     *
     * @param int $offset
     * @param int $whence = SEEK_SET
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.stream-seek.php
     */
    public function stream_seek(int $offset, int $whence = SEEK_SET): bool
    {
    }

    /**
     * stream_set_option.
     * Change stream options.
     *
     * @param int $option
     * @param int $arg1
     * @param int $arg2
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.stream-set-option.php
     */
    public function stream_set_option(int $option, int $arg1, int $arg2): bool
    {
    }

    /**
     * stream_stat.
     * Retrieve information about a file resource.
     *
     * @throws E_WARNING
     *
     * @return array
     *
     * @see http://php.net/manual/en/streamwrapper.stream-stat.php
     */
    public function stream_stat(): array
    {
    }

    /**
     * stream_tell.
     * Retrieve the current position of a stream.
     *
     * @return int
     *
     * @see http://php.net/manual/en/streamwrapper.stream-tell.php
     */
    public function stream_tell(): int
    {
    }

    /**
     * stream_truncate.
     * Truncate stream.
     *
     * @param int $new_size
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.stream-truncate.php
     */
    public function stream_truncate(int $new_size): bool
    {
    }

    /**
     * stream_write.
     * Write to stream.
     *
     * @param string $data
     *
     * @throws E_WARNING
     *
     * @return int
     *
     * @see http://php.net/manual/en/streamwrapper.stream-write.php
     */
    public function stream_write(string $data): int
    {
    }

    /**
     * unlink.
     * Delete a file.
     *
     * @param string $path
     *
     * @throws E_WARNING
     *
     * @return bool
     *
     * @see http://php.net/manual/en/streamwrapper.unlink.php
     */
    public function unlink(string $path): bool
    {
    }

    /**
     * url_stat.
     * Retrieve information about a file.
     *
     * @param string $path
     * @param int    $flags
     *
     * @throws E_WARNING
     *
     * @return array
     *
     * @see http://php.net/manual/en/streamwrapper.url-stat.php
     */
    public function url_stat(string $path, int $flags): array
    {
    }
}
