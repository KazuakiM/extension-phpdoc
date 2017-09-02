<?php

/**
 * DirectoryIterator.
 * The DirectoryIterator class provides a simple interface for viewing the contents of filesystem directories.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.directoryiterator.php
 */
class DirectoryIterator extends SplFileInfo implements SeekableIterator
{
    /**
     * __construct.
     * Constructs a new directory iterator from a path.
     *
     * @param string $path
     *
     * @throws UnexpectedValueException
     * @throws RuntimeException
     *
     * @see http://php.net/manual/en/directoryiterator.construct.php
     */
    public function __construct(string $path)
    {
    }

    /**
     * __toString.
     * Get file name as a string.
     *
     * @return string
     *
     * @see http://php.net/manual/en/directoryiterator.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * current.
     * Return the current DirectoryIterator item.
     *
     * @return DirectoryIterator
     *
     * @see http://php.net/manual/en/directoryiterator.current.php
     */
    public function current(): DirectoryIterator
    {
    }

    /**
     * getATime.
     * Get last access time of the current DirectoryIterator item.
     *
     * @return int
     *
     * @see http://php.net/manual/en/directoryiterator.getatime.php
     */
    public function getATime(): int
    {
    }

    /**
     * getBasename.
     * Get base name of current DirectoryIterator item.
     *
     * @param string $suffix (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/directoryiterator.getbasename.php
     */
    public function getBasename(string $suffix): string
    {
    }

    /**
     * getCTime.
     * Get inode change time of the current DirectoryIterator item.
     *
     * @return int
     *
     * @see http://php.net/manual/en/directoryiterator.getctime.php
     */
    public function getCTime(): int
    {
    }

    /**
     * getExtension.
     * Gets the file extension.
     *
     * @return string
     *
     * @see http://php.net/manual/en/directoryiterator.getextension.php
     */
    public function getExtension(): string
    {
    }

    /**
     * getFilename.
     * Return file name of current DirectoryIterator item.
     *
     * @return string
     *
     * @see http://php.net/manual/en/directoryiterator.getfilename.php
     */
    public function getFilename(): string
    {
    }

    /**
     * getGroup.
     * Get group for the current DirectoryIterator item.
     *
     * @return int
     *
     * @see http://php.net/manual/en/directoryiterator.getgroup.php
     */
    public function getGroup(): int
    {
    }

    /**
     * getInode.
     * Get inode for the current DirectoryIterator item.
     *
     * @return int
     *
     * @see http://php.net/manual/en/directoryiterator.getinode.php
     */
    public function getInode(): int
    {
    }

    /**
     * getMTime.
     * Get last modification time of current DirectoryIterator item.
     *
     * @return int
     *
     * @see http://php.net/manual/en/directoryiterator.getmtime.php
     */
    public function getMTime(): int
    {
    }

    /**
     * getOwner.
     * Get owner of current DirectoryIterator item.
     *
     * @return int
     *
     * @see http://php.net/manual/en/directoryiterator.getowner.php
     */
    public function getOwner(): int
    {
    }

    /**
     * getPath.
     * Get path of current Iterator item without filename.
     *
     * @return string
     *
     * @see http://php.net/manual/en/directoryiterator.getpath.php
     */
    public function getPath(): string
    {
    }

    /**
     * getPathname.
     * Return path and file name of current DirectoryIterator item.
     *
     * @return string
     *
     * @see http://php.net/manual/en/directoryiterator.getpathname.php
     */
    public function getPathname(): string
    {
    }

    /**
     * getPerms.
     * Get the permissions of current DirectoryIterator item.
     *
     * @return int
     *
     * @see http://php.net/manual/en/directoryiterator.getperms.php
     */
    public function getPerms(): int
    {
    }

    /**
     * getSize.
     * Get size of current DirectoryIterator item.
     *
     * @return int
     *
     * @see http://php.net/manual/en/directoryiterator.getsize.php
     */
    public function getSize(): int
    {
    }

    /**
     * getType.
     * Determine the type of the current DirectoryIterator item.
     *
     * @return string
     *
     * @see http://php.net/manual/en/directoryiterator.gettype.php
     */
    public function getType(): string
    {
    }

    /**
     * isDir.
     * Determine if current DirectoryIterator item is a directory.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/directoryiterator.isdir.php
     */
    public function isDir(): bool
    {
    }

    /**
     * isDot.
     * Determine if current DirectoryIterator item is '.' or '..'.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/directoryiterator.isdot.php
     */
    public function isDot(): bool
    {
    }

    /**
     * isExecutable.
     * Determine if current DirectoryIterator item is executable.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/directoryiterator.isexecutable.php
     */
    public function isExecutable(): bool
    {
    }

    /**
     * isFile.
     * Determine if current DirectoryIterator item is a regular file.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/directoryiterator.isfile.php
     */
    public function isFile(): bool
    {
    }

    /**
     * isLink.
     * Determine if current DirectoryIterator item is a symbolic link.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/directoryiterator.islink.php
     */
    public function isLink(): bool
    {
    }

    /**
     * isReadable.
     * Determine if current DirectoryIterator item can be read.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/directoryiterator.isreadable.php
     */
    public function isReadable(): bool
    {
    }

    /**
     * isWritable.
     * Determine if current DirectoryIterator item can be written to.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/directoryiterator.iswritable.php
     */
    public function isWritable(): bool
    {
    }

    /**
     * key.
     * Return the key for the current DirectoryIterator item.
     *
     * @return string
     *
     * @see http://php.net/manual/en/directoryiterator.key.php
     */
    public function key(): string
    {
    }

    /**
     * next.
     * Move forward to next DirectoryIterator item.
     *
     * @see http://php.net/manual/en/directoryiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     * Rewind the DirectoryIterator back to the start.
     *
     * @see http://php.net/manual/en/directoryiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * seek.
     * Seek to a DirectoryIterator item.
     *
     * @param int $position
     *
     * @see http://php.net/manual/en/directoryiterator.seek.php
     */
    public function seek(int $position): void
    {
    }

    /**
     * valid.
     * Check whether current DirectoryIterator position is a valid file.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/directoryiterator.valid.php
     */
    public function valid(): bool
    {
    }
}
