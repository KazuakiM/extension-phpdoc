<?php

/**
 * SplFileInfo.
 * The SplFileInfo class offers a high-level object oriented interface to information for an individual file.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.splfileinfo.php
 */
class SplFileInfo
{
    /**
     * __construct.
     * Construct a new SplFileInfo object.
     *
     * @param string $file_name
     *
     * @see http://php.net/manual/en/splfileinfo.construct.php
     */
    public function __construct(string $file_name)
    {
    }

    /**
     * __toString.
     * Returns the path to the file as a string.
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileinfo.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * getATime.
     * Gets last access time of the file.
     *
     * @throws RunTimeException
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileinfo.getatime.php
     */
    public function getATime(): int
    {
    }

    /**
     * getBasename.
     * Gets the base name of the file.
     *
     * @param string $suffix (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileinfo.getbasename.php
     */
    public function getBasename(string $suffix): string
    {
    }

    /**
     * getCTime.
     * Gets the inode change time.
     *
     * @throws RunTimeException
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileinfo.getctime.php
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
     * @see http://php.net/manual/en/splfileinfo.getextension.php
     */
    public function getExtension(): string
    {
    }

    /**
     * getFileInfo.
     * Gets an SplFileInfo object for the file.
     *
     * @param string $class_name (optional)
     *
     * @return SplFileInfo
     *
     * @see http://php.net/manual/en/splfileinfo.getfileinfo.php
     */
    public function getFileInfo(string $class_name): SplFileInfo
    {
    }

    /**
     * getFilename.
     * Gets the filename.
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileinfo.getfilename.php
     */
    public function getFilename(): string
    {
    }

    /**
     * getGroup.
     * Gets the file group.
     *
     * @throws RuntimeException
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileinfo.getgroup.php
     */
    public function getGroup(): int
    {
    }

    /**
     * getInode.
     * Gets the inode for the file.
     *
     * @throws RuntimeException
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileinfo.getinode.php
     */
    public function getInode(): int
    {
    }

    /**
     * getLinkTarget.
     * Gets the target of a link.
     *
     * @throws RuntimeException
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileinfo.getlinktarget.php
     */
    public function getLinkTarget(): string
    {
    }

    /**
     * getMTime.
     * Gets the last modified time.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileinfo.getmtime.php
     */
    public function getMTime(): int
    {
    }

    /**
     * getOwner.
     * Gets the owner of the file.
     *
     * @throws RuntimeException
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileinfo.getowner.php
     */
    public function getOwner(): int
    {
    }

    /**
     * getPath.
     * Gets the path without filename.
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileinfo.getpath.php
     */
    public function getPath(): string
    {
    }

    /**
     * getPathInfo.
     * Gets an SplFileInfo object for the path.
     *
     * @param string $class_name (optional)
     *
     * @return SplFileInfo
     *
     * @see http://php.net/manual/en/splfileinfo.getpathinfo.php
     */
    public function getPathInfo(string $class_name): SplFileInfo
    {
    }

    /**
     * getPathname.
     * Gets the path to the file.
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileinfo.getpathname.php
     */
    public function getPathname(): string
    {
    }

    /**
     * getPerms.
     * Gets file permissions.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileinfo.getperms.php
     */
    public function getPerms(): int
    {
    }

    /**
     * getRealPath.
     * Gets absolute path to file.
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileinfo.getrealpath.php
     */
    public function getRealPath(): string
    {
    }

    /**
     * getSize.
     * Gets file size.
     *
     * @throws RunTimeException
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileinfo.getsize.php
     */
    public function getSize(): int
    {
    }

    /**
     * getType.
     * Gets file type.
     *
     * @throws RunTimeException
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileinfo.gettype.php
     */
    public function getType(): string
    {
    }

    /**
     * isDir.
     * Tells if the file is a directory.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfileinfo.isdir.php
     */
    public function isDir(): bool
    {
    }

    /**
     * isExecutable.
     * Tells if the file is executable.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfileinfo.isexecutable.php
     */
    public function isExecutable(): bool
    {
    }

    /**
     * isFile.
     * Tells if the object references a regular file.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfileinfo.isfile.php
     */
    public function isFile(): bool
    {
    }

    /**
     * isLink.
     * Tells if the file is a link.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfileinfo.islink.php
     */
    public function isLink(): bool
    {
    }

    /**
     * isReadable.
     * Tells if file is readable.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfileinfo.isreadable.php
     */
    public function isReadable(): bool
    {
    }

    /**
     * isWritable.
     * Tells if the entry is writable.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfileinfo.iswritable.php
     */
    public function isWritable(): bool
    {
    }

    /**
     * openFile.
     * Gets an SplFileObject object for the file.
     *
     * @param string   $open_mode        = 'r'
     * @param bool     $use_include_path = false
     * @param resource $context          = null
     *
     * @throws RunTimeException
     *
     * @return SplFileObject
     *
     * @see http://php.net/manual/en/splfileinfo.openfile.php
     */
    public function openFile(string $open_mode = 'r', bool $use_include_path = false, resource $context = null): SplFileObject
    {
    }

    /**
     * setFileClass.
     * Sets the class used with SplFileInfo::openFile.
     *
     * @param string $class_name = 'SplFileObject'
     *
     * @see http://php.net/manual/en/splfileinfo.setfileclass.php
     */
    public function setFileClass(string $class_name = 'SplFileObject'): void
    {
    }

    /**
     * setInfoClass.
     * Sets the class used with SplFileInfo::getFileInfo and SplFileInfo::getPathInfo.
     *
     * @param string $class_name = 'SplFileInfo'
     *
     * @see http://php.net/manual/en/splfileinfo.setinfoclass.php
     */
    public function setInfoClass(string $class_name = 'SplFileInfo'): void
    {
    }
}
