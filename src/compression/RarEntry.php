<?php

/**
 * RarEntry.
 * A RAR entry, representing a directory or a compressed file inside a RAR archive.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.rarentry.php
 */
final class RarEntry
{
    const HOST_MSDOS = 0;
    const HOST_OS2 = 1;
    const HOST_WIN32 = 2;
    const HOST_UNIX = 3;
    const HOST_MACOS = 4;
    const HOST_BEOS = 5;
    const ATTRIBUTE_WIN_READONLY = 1;
    const ATTRIBUTE_WIN_HIDDEN = 2;
    const ATTRIBUTE_WIN_SYSTEM = 4;
    const ATTRIBUTE_WIN_DIRECTORY = 16;
    const ATTRIBUTE_WIN_ARCHIVE = 32;
    const ATTRIBUTE_WIN_DEVICE = 64;
    const ATTRIBUTE_WIN_NORMAL = 128;
    const ATTRIBUTE_WIN_TEMPORARY = 256;
    const ATTRIBUTE_WIN_SPARSE_FILE = 512;
    const ATTRIBUTE_WIN_REPARSE_POINT = 1024;
    const ATTRIBUTE_WIN_COMPRESSED = 2048;
    const ATTRIBUTE_WIN_OFFLINE = 4096;
    const ATTRIBUTE_WIN_NOT_CONTENT_INDEXED = 8192;
    const ATTRIBUTE_WIN_ENCRYPTED = 16384;
    const ATTRIBUTE_WIN_VIRTUAL = 65536;
    const ATTRIBUTE_UNIX_WORLD_EXECUTE = 1;
    const ATTRIBUTE_UNIX_WORLD_WRITE = 2;
    const ATTRIBUTE_UNIX_WORLD_READ = 4;
    const ATTRIBUTE_UNIX_GROUP_EXECUTE = 8;
    const ATTRIBUTE_UNIX_GROUP_WRITE = 16;
    const ATTRIBUTE_UNIX_GROUP_READ = 32;
    const ATTRIBUTE_UNIX_OWNER_EXECUTE = 64;
    const ATTRIBUTE_UNIX_OWNER_WRITE = 128;
    const ATTRIBUTE_UNIX_OWNER_READ = 256;
    const ATTRIBUTE_UNIX_STICKY = 512;
    const ATTRIBUTE_UNIX_SETGID = 1024;
    const ATTRIBUTE_UNIX_SETUID = 2048;
    const ATTRIBUTE_UNIX_FINAL_QUARTET = 61440;
    const ATTRIBUTE_UNIX_FIFO = 4096;
    const ATTRIBUTE_UNIX_CHAR_DEV = 8192;
    const ATTRIBUTE_UNIX_DIRECTORY = 16384;
    const ATTRIBUTE_UNIX_BLOCK_DEV = 24576;
    const ATTRIBUTE_UNIX_REGULAR_FILE = 32768;
    const ATTRIBUTE_UNIX_SYM_LINK = 40960;
    const ATTRIBUTE_UNIX_SOCKET = 49152;

    /**
     * __toString.
     * Get text representation of entry.
     *
     * @return string
     *
     * @see http://php.net/manual/en/rarentry.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * extract.
     * Extract entry from the archive.
     *
     * @param string $dir
     * @param string $filepath      = ''
     * @param string $password      = null
     * @param bool   $extended_data = false
     *
     * @return bool
     *
     * @see http://php.net/manual/en/rarentry.extract.php
     */
    public function extract(string $dir, string $filepath = '', string $password = null, bool $extended_data = false): bool
    {
    }

    /**
     * getAttr.
     * Get attributes of the entry.
     *
     * @return int
     *
     * @see http://php.net/manual/en/rarentry.getattr.php
     */
    public function getAttr(): int
    {
    }

    /**
     * getCrc.
     * Get CRC of the entry.
     *
     * @return string
     *
     * @see http://php.net/manual/en/rarentry.getcrc.php
     */
    public function getCrc(): string
    {
    }

    /**
     * getFileTime.
     * Get entry last modification time.
     *
     * @return string
     *
     * @see http://php.net/manual/en/rarentry.getfiletime.php
     */
    public function getFileTime(): string
    {
    }

    /**
     * getHostOs.
     * Get entry host OS.
     *
     * @return int
     *
     * @see http://php.net/manual/en/rarentry.gethostos.php
     */
    public function getHostOs(): int
    {
    }

    /**
     * getMethod.
     * Get pack method of the entry.
     *
     * @return int
     *
     * @see http://php.net/manual/en/rarentry.getmethod.php
     */
    public function getMethod(): int
    {
    }

    /**
     * getName.
     * Get name of the entry.
     *
     * @return string
     *
     * @see http://php.net/manual/en/rarentry.getname.php
     */
    public function getName(): string
    {
    }

    /**
     * getPackedSize.
     * Get packed size of the entry.
     *
     * @return int
     *
     * @see http://php.net/manual/en/rarentry.getpackedsize.php
     */
    public function getPackedSize(): int
    {
    }

    /**
     * getStream.
     * Get file handler for entry.
     *
     * @param string $password (optional)
     *
     * @return resource
     *
     * @see http://php.net/manual/en/rarentry.getstream.php
     */
    public function getStream(string $password): resource
    {
    }

    /**
     * getUnpackedSize.
     * Get unpacked size of the entry.
     *
     * @return int
     *
     * @see http://php.net/manual/en/rarentry.getunpackedsize.php
     */
    public function getUnpackedSize(): int
    {
    }

    /**
     * getVersion.
     * Get minimum version of RAR program required to unpack the entry.
     *
     * @return int
     *
     * @see http://php.net/manual/en/rarentry.getversion.php
     */
    public function getVersion(): int
    {
    }

    /**
     * isDirectory.
     * Test whether an entry represents a directory.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/rarentry.isdirectory.php
     */
    public function isDirectory(): bool
    {
    }

    /**
     * isEncrypted.
     * Test whether an entry is encrypted.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/rarentry.isencrypted.php
     */
    public function isEncrypted(): bool
    {
    }
}
