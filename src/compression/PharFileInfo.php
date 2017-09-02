<?php

/**
 * PharFileInfo.
 * The PharFileInfo class provides a high-level interface to the contents and attributes of a single file within a phar archive.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.pharfileinfo.php
 */
class PharFileInfo extends SplFileInfo
{
    /**
     * __construct.
     * Construct a Phar entry object.
     *
     * @param string $entry
     *
     * @throws BadMethodCallException
     * @throws UnexpectedValueException
     *
     * @see http://php.net/manual/en/pharfileinfo.construct.php
     */
    public function __construct(string $entry)
    {
    }

    /**
     * chmod.
     * Sets file-specific permission bits.
     *
     * @param int $permissions
     *
     * @see http://php.net/manual/en/pharfileinfo.chmod.php
     */
    public function chmod(int $permissions): void
    {
    }

    /**
     * compress.
     * Compresses the current Phar entry with either zlib or bzip2 compression.
     *
     * @param int $compression
     *
     * @throws BadMethodCallException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pharfileinfo.compress.php
     */
    public function compress(int $compression): bool
    {
    }

    /**
     * decompress.
     * Decompresses the current Phar entry within the phar.
     *
     * @throws BadMethodCallException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pharfileinfo.decompress.php
     */
    public function decompress(): bool
    {
    }

    /**
     * delMetadata.
     * Deletes the metadata of the entry.
     *
     * @throws BadMethodCallException
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pharfileinfo.delmetadata.php
     */
    public function delMetadata(): bool
    {
    }

    /**
     * getCRC32.
     * Returns CRC32 code or throws an exception if CRC has not been verified.
     *
     * @throws BadMethodCallException
     *
     * @return int
     *
     * @see http://php.net/manual/en/pharfileinfo.getcrc32.php
     */
    public function getCRC32(): int
    {
    }

    /**
     * getCompressedSize.
     * Returns the actual size of the file (with compression) inside the Phar archive.
     *
     * @return int
     *
     * @see http://php.net/manual/en/pharfileinfo.getcompressedsize.php
     */
    public function getCompressedSize(): int
    {
    }

    /**
     * getMetadata.
     * Returns file-specific meta-data saved with a file.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/pharfileinfo.getmetadata.php
     */
    public function getMetadata(): mixed
    {
    }

    /**
     * getPharFlags.
     * Returns the Phar file entry flags.
     *
     * @return int
     *
     * @see http://php.net/manual/en/pharfileinfo.getpharflags.php
     */
    public function getPharFlags(): int
    {
    }

    /**
     * hasMetadata.
     * Returns the metadata of the entry.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pharfileinfo.hasmetadata.php
     */
    public function hasMetadata(): bool
    {
    }

    /**
     * isCRCChecked.
     * Returns whether file entry has had its CRC verified.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pharfileinfo.iscrcchecked.php
     */
    public function isCRCChecked(): bool
    {
    }

    /**
     * isCompressed.
     * Returns whether the entry is compressed.
     *
     * @param int $compression_type = 9021976
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pharfileinfo.iscompressed.php
     */
    public function isCompressed(int $compression_type = 9021976): bool
    {
    }

    /**
     * isCompressedBZIP2.
     * Returns whether the entry is compressed using bzip2.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pharfileinfo.iscompressedbzip2.php
     */
    public function isCompressedBZIP2(): bool
    {
    }

    /**
     * isCompressedGZ.
     * Returns whether the entry is compressed using gz.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pharfileinfo.iscompressedgz.php
     */
    public function isCompressedGZ(): bool
    {
    }

    /**
     * setCompressedBZIP2.
     * Compresses the current Phar entry within the phar using Bzip2 compression.
     *
     * @throws BadMethodCallException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pharfileinfo.setcompressedbzip2.php
     */
    public function setCompressedBZIP2(): bool
    {
    }

    /**
     * setCompressedGZ.
     * Compresses the current Phar entry within the phar using gz compression.
     *
     * @throws BadMethodCallException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pharfileinfo.setcompressedgz.php
     */
    public function setCompressedGZ(): bool
    {
    }

    /**
     * setMetadata.
     * Sets file-specific meta-data saved with a file.
     *
     * @param mixed $metadata
     *
     * @see http://php.net/manual/en/pharfileinfo.setmetadata.php
     */
    public function setMetadata(mixed $metadata): void
    {
    }

    /**
     * setUncompressed.
     * Uncompresses the current Phar entry within the phar, if it is compressed.
     *
     * @throws BadMethodCallException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/pharfileinfo.setuncompressed.php
     */
    public function setUncompressed(): bool
    {
    }
}
