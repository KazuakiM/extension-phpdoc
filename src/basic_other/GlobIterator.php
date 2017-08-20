<?php

/**
 * GlobIterator.
 * Iterates through a file system in a similar fashion to glob().
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.globiterator.php
 */
class GlobIterator extends FilesystemIterator implements SeekableIterator, Countable
{
    /**
     * __construct.
     * Construct a directory using glob.
     *
     * @param string $path
     * @param int    $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO
     *
     * @see http://php.net/manual/en/globiterator.construct.php
     */
    public function __construct(string $path, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO)
    {
    }

    /**
     * count.
     * Get the number of directories and files.
     *
     * @return int
     *
     * @see http://php.net/manual/en/globiterator.count.php
     */
    public function count(): int
    {
    }

    /* Inherited methods */
    //public function __construct(string $path, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::SKIP_DOTS)
    //public function FilesystemIterator::current(): mixed
    //public function FilesystemIterator::getFlags(): int
    //public function FilesystemIterator::key(): string
    //public function FilesystemIterator::next(): void
    //public function FilesystemIterator::rewind(): void
    //public function FilesystemIterator::setFlags(int $flags): void
}
