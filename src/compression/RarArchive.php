<?php

/**
 * RarArchive.
 * This class represents a RAR archive, which may be formed by several volumes (parts) and which contains a number of RAR entries (i.e., files, directories and other special objects such as symbolic links).
 * Objects of this class can be traversed, yielding the entries stored in the respective RAR archive. Those entries can also be obtained through RarArchive::getEntry() and RarArchive::getEntries().
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.rararchive.php
 */
final class RarArchive implements Traversable
{
    /**
     * __toString.
     * Get text representation.
     *
     * @return string
     *
     * @see http://php.net/manual/en/rararchive.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * close.
     * Close RAR archive and free all resources.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/rararchive.close.php
     */
    public function close(): bool
    {
    }

    /**
     * getComment.
     * Get comment text from the RAR archive.
     *
     * @return string
     *
     * @see http://php.net/manual/en/rararchive.getcomment.php
     */
    public function getComment(): string
    {
    }

    /**
     * getEntries.
     * Get full list of entries from the RAR archive.
     *
     * @return array
     *
     * @see http://php.net/manual/en/rararchive.getentries.php
     */
    public function getEntries(): array
    {
    }

    /**
     * getEntry.
     * Get entry object from the RAR archive.
     *
     * @param string $entryname
     *
     * @return RarEntry
     *
     * @see http://php.net/manual/en/rararchive.getentry.php
     */
    public function getEntry(string $entryname): RarEntry
    {
    }

    /**
     * isBroken.
     * Test whether an archive is broken (incomplete).
     *
     * @return bool
     *
     * @see http://php.net/manual/en/rararchive.isbroken.php
     */
    public function isBroken(): bool
    {
    }

    /**
     * isSolid.
     * Check whether the RAR archive is solid.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/rararchive.issolid.php
     */
    public function isSolid(): bool
    {
    }

    /**
     * open.
     * Open RAR archive.
     *
     * @param string   $filename
     * @param string   $password        = null
     * @param callable $volume_callback = null
     *
     * @return RarArchive
     *
     * @see http://php.net/manual/en/rararchive.open.php
     */
    public static function open(string $filename, string $password = null, callable $volume_callback = null): RarArchive
    {
    }

    /**
     * setAllowBroken.
     * Whether opening broken archives is allowed.
     *
     * @param bool $allow_broken
     *
     * @return bool
     *
     * @see http://php.net/manual/en/rararchive.setallowbroken.php
     */
    public function setAllowBroken(bool $allow_broken): bool
    {
    }
}
