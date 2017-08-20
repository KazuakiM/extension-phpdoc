<?php

/**
 * RecursiveDirectoryIterator.
 * The RecursiveDirectoryIterator provides an interface for iterating recursively over filesystem directories.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.recursivedirectoryiterator.php
 */
class RecursiveDirectoryIterator extends FilesystemIterator implements SeekableIterator, RecursiveIterator
{
    /**
     * __construct.
     * Constructs a RecursiveDirectoryIterator.
     *
     * @param string $path
     * @param int    $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO
     *
     * @throws UnexpectedValueException
     *
     * @see http://php.net/manual/en/recursivedirectoryiterator.construct.php
     */
    public function __construct(string $path, int $flags = FilesystemIterator::KEY_AS_PATHNAME | FilesystemIterator::CURRENT_AS_FILEINFO)
    {
    }

    /**
     * getChildren.
     * Returns an iterator for the current entry if it is a directory.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/recursivedirectoryiterator.getchildren.php
     */
    public function getChildren(): mixed
    {
    }

    /**
     * getSubPath.
     * Get sub path.
     *
     * @return string
     *
     * @see http://php.net/manual/en/recursivedirectoryiterator.getsubpath.php
     */
    public function getSubPath(): string
    {
    }

    /**
     * getSubPathname.
     * Get sub path and name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/recursivedirectoryiterator.getsubpathname.php
     */
    public function getSubPathname(): string
    {
    }

    /**
     * hasChildren.
     * Returns whether current entry is a directory and not '.' or '..'.
     *
     * @param bool $allow_links = false
     *
     * @return bool
     *
     * @see http://php.net/manual/en/recursivedirectoryiterator.haschildren.php
     */
    public function hasChildren(bool $allow_links = false): bool
    {
    }

    /**
     * key.
     * Return path and filename of current dir entry.
     *
     * @return string
     *
     * @see http://php.net/manual/en/recursivedirectoryiterator.key.php
     */
    public function key(): string
    {
    }

    /**
     * next.
     * Move to next entry.
     *
     *
     * @see http://php.net/manual/en/recursivedirectoryiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     * Rewind dir back to the start.
     *
     *
     * @see http://php.net/manual/en/recursivedirectoryiterator.rewind.php
     */
    public function rewind(): void
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
