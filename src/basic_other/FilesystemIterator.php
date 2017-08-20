<?php

/**
 * FilesystemIterator.
 * The Filesystem iterator.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.filesystemiterator.php
 */
class FilesystemIterator extends DirectoryIterator implements SeekableIterator
{
    const CURRENT_AS_PATHNAME = 32;
    const CURRENT_AS_FILEINFO = 0;
    const CURRENT_AS_SELF = 16;
    const CURRENT_MODE_MASK = 240;
    const KEY_AS_PATHNAME = 0;
    const KEY_AS_FILENAME = 256;
    const FOLLOW_SYMLINKS = 512;
    const KEY_MODE_MASK = 3840;
    const NEW_CURRENT_AND_KEY = 256;
    const SKIP_DOTS = 4096;
    const UNIX_PATHS = 8192;

    /**
     * __construct.
     * Constructs a new filesystem iterator.
     *
     * @param string $path
     * @param int    $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::SKIP_DOTS
     *
     * @throws UnexpectedValueException
     *
     * @see http://php.net/manual/en/filesystemiterator.construct.php
     */
    public function __construct(string $path, int $flags = self::KEY_AS_PATHNAME | self::CURRENT_AS_FILEINFO | self::SKIP_DOTS)
    {
    }

    /**
     * current.
     * The current file.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/filesystemiterator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * getFlags.
     * Get the handling flags.
     *
     * @return int
     *
     * @see http://php.net/manual/en/filesystemiterator.getflags.php
     */
    public function getFlags(): int
    {
    }

    /**
     * key.
     * Retrieve the key for the current file.
     *
     * @return string
     *
     * @see http://php.net/manual/en/filesystemiterator.key.php
     */
    public function key(): string
    {
    }

    /**
     * next.
     * Move to the next file.
     *
     *
     * @see http://php.net/manual/en/filesystemiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     * Rewinds back to the beginning.
     *
     *
     * @see http://php.net/manual/en/filesystemiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * setFlags.
     * Sets handling flags.
     *
     * @param int $flags (optional)
     *
     * @see http://php.net/manual/en/filesystemiterator.setflags.php
     */
    public function setFlags(int $flags): void
    {
    }

    /* Inherited methods */
    //public function DirectoryIterator::current(): DirectoryIterator
    //public function DirectoryIterator::getATime(): int
    //public function DirectoryIterator::getBasename(string $suffix): string
    //public function DirectoryIterator::getCTime(): int
    //public function DirectoryIterator::getExtension(): string
    //public function DirectoryIterator::getFilename(): string
    //public function DirectoryIterator::getGroup(): int
    //public function DirectoryIterator::getInode(): int
    //public function DirectoryIterator::getMTime(): int
    //public function DirectoryIterator::getOwner(): int
    //public function DirectoryIterator::getPath(): string
    //public function DirectoryIterator::getPathname(): string
    //public function DirectoryIterator::getPerms(): int
    //public function DirectoryIterator::getSize(): int
    //public function DirectoryIterator::getType(): string
    //public function DirectoryIterator::isDir(): bool
    //public function DirectoryIterator::isDot(): bool
    //public function DirectoryIterator::isExecutable(): bool
    //public function DirectoryIterator::isFile(): bool
    //public function DirectoryIterator::isLink(): bool
    //public function DirectoryIterator::isReadable(): bool
    //public function DirectoryIterator::isWritable(): bool
    //public function DirectoryIterator::key(): string
    //public function DirectoryIterator::next(): void
    //public function DirectoryIterator::rewind(): void
    //public function DirectoryIterator::seek(int $position): void
    //public function DirectoryIterator::__toString(): string
    //public function DirectoryIterator::valid(): bool
}
