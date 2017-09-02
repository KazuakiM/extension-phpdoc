<?php

/**
 * PharData.
 * The PharData class provides a high-level interface to accessing and creating non-executable tar and zip archives. Because these archives do not contain a stub and cannot be executed by the phar extension, it is possible to create and manipulate regular zip and tar files using the PharData class even if phar.readonly php.ini setting is 1.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.phardata.php
 */
class PharData extends Phar
{
    /**
     * __construct.
     * Construct a non-executable tar or zip archive object.
     *
     * @param string $fname
     * @param int    $flags  (optional)
     * @param string $alias  (optional)
     * @param int    $format = TAR (optional)
     *
     * @throws BadMethodCallException
     * @throws UnexpectedValueException
     *
     * @see http://php.net/manual/en/phardata.construct.php
     */
    public function __construct(string $fname, int $flags, string $alias, int $format = TAR)
    {
    }

    /**
     * addEmptyDir.
     * Add an empty directory to the tar/zip archive.
     *
     * @param string $dirname
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.addemptydir.php
     */
    public function addEmptyDir(string $dirname): bool
    {
    }

    /**
     * addFile.
     * Add a file from the filesystem to the tar/zip archive.
     *
     * @param string $file
     * @param string $localname (optional)
     *
     * @see http://php.net/manual/en/phardata.addfile.php
     */
    public function addFile(string $file, string $localname): void
    {
    }

    /**
     * addFromString.
     * Add a file from the filesystem to the tar/zip archive.
     *
     * @param string $localname
     * @param string $contents
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.addfromstring.php
     */
    public function addFromString(string $localname, string $contents): bool
    {
    }

    /**
     * buildFromDirectory.
     * Construct a tar/zip archive from the files within a directory.
     *
     * @param string $base_dir
     * @param string $regex    (optional)
     *
     * @throws BadMethodCallException
     * @throws PharException
     *
     * @return array
     *
     * @see http://php.net/manual/en/phardata.buildfromdirectory.php
     */
    public function buildFromDirectory(string $base_dir, string $regex): array
    {
    }

    /**
     * buildFromIterator.
     * Construct a tar or zip archive from an iterator.
     *
     * @param Iterator $iter
     * @param string   $base_directory (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/phardata.buildfromiterator.php
     */
    public function buildFromIterator(Iterator $iter, string $base_directory): array
    {
    }

    /**
     * compress.
     * Compresses the entire tar/zip archive using Gzip or Bzip2 compression.
     *
     * @param int    $compression
     * @param string $extension   (optional)
     *
     * @throws BadMethodCallException
     *
     * @return object
     *
     * @see http://php.net/manual/en/phardata.compress.php
     */
    public function compress(int $compression, string $extension): object
    {
    }

    /**
     * compressFiles.
     * Compresses all files in the current tar/zip archive.
     *
     * @param int $compression
     *
     * @throws BadMethodCallException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.compressfiles.php
     */
    public function compressFiles(int $compression): bool
    {
    }

    /**
     * convertToData.
     * Convert a phar archive to a non-executable tar or zip file.
     *
     * @param int    $format      (optional)
     * @param int    $compression (optional)
     * @param string $extension   (optional)
     *
     * @throws BadMethodCallException
     * @throws PharException
     *
     * @return PharData
     *
     * @see http://php.net/manual/en/phardata.converttodata.php
     */
    public function convertToData(int $format, int $compression, string $extension): PharData
    {
    }

    /**
     * convertToExecutable.
     * Convert a non-executable tar/zip archive to an executable phar archive.
     *
     * @param int    $format      (optional)
     * @param int    $compression (optional)
     * @param string $extension   (optional)
     *
     * @throws BadMethodCallException
     * @throws UnexpectedValueException
     * @throws PharException
     *
     * @return Phar
     *
     * @see http://php.net/manual/en/phardata.converttoexecutable.php
     */
    public function convertToExecutable(int $format, int $compression, string $extension): Phar
    {
    }

    /**
     * copy.
     * Copy a file internal to the phar archive to another new file within the phar.
     *
     * @param string $oldfile
     * @param string $newfile
     *
     * @throws UnexpectedValueException
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.copy.php
     */
    public function copy(string $oldfile, string $newfile): bool
    {
    }

    /**
     * decompress.
     * Decompresses the entire Phar archive.
     *
     * @param string $extension (optional)
     *
     * @throws BadMethodCallException
     *
     * @return object
     *
     * @see http://php.net/manual/en/phardata.decompress.php
     */
    public function decompress(string $extension): object
    {
    }

    /**
     * decompressFiles.
     * Decompresses all files in the current zip archive.
     *
     * @throws BadMethodCallException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.decompressfiles.php
     */
    public function decompressFiles(): bool
    {
    }

    /**
     * delMetadata.
     * Deletes the global metadata of a zip archive.
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.delmetadata.php
     */
    public function delMetadata(): bool
    {
    }

    /**
     * delete.
     * Delete a file within a tar/zip archive.
     *
     * @param string $entry
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.delete.php
     */
    public function delete(string $entry): bool
    {
    }

    /**
     * extractTo.
     * Extract the contents of a tar/zip archive to a directory.
     *
     * @param string       $pathto
     * @param string|array $files     (optional)
     * @param bool         $overwrite = false (optional)
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.extractto.php
     */
    public function extractTo(string $pathto, mixed $files, bool $overwrite = false): bool
    {
    }

    /**
     * isWritable.
     * Returns true if the tar/zip archive can be modified.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.iswritable.php
     */
    public function isWritable(): bool
    {
    }

    /**
     * offsetSet.
     * set the contents of a file within the tar/zip to those of an external file or string.
     *
     * @param string $offset
     * @param string $value
     *
     * @throws PharException
     *
     * @see http://php.net/manual/en/phardata.offsetset.php
     */
    public function offsetSet(string $offset, string $value): void
    {
    }

    /**
     * offsetUnset.
     * remove a file from a tar/zip archive.
     *
     * @param string $offset
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.offsetunset.php
     */
    public function offsetUnset(string $offset): bool
    {
    }

    /**
     * setAlias.
     * dummy function (Phar::setAlias is not valid for PharData).
     *
     * @param string $alias
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.setalias.php
     */
    public function setAlias(string $alias): bool
    {
    }

    /**
     * setDefaultStub.
     * dummy function (Phar::setDefaultStub is not valid for PharData).
     *
     * @param string $index    (optional)
     * @param string $webindex (optional)
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.setdefaultstub.php
     */
    public function setDefaultStub(string $index, string $webindex): bool
    {
    }

    /**
     * setMetadata.
     * Sets phar archive meta-data.
     *
     * @param mixed $metadata
     *
     * @see http://php.net/manual/en/phardata.setmetadata.php
     */
    public function setMetadata(mixed $metadata): void
    {
    }

    /**
     * setSignatureAlgorithm.
     * set the signature algorithm for a phar and apply it.
     *
     * @param int $sigtype
     *
     * @throws BadMethodCallException
     * @throws UnexpectedValueException
     * @throws PharException
     *
     * @see http://php.net/manual/en/phardata.setsignaturealgorithm.php
     */
    public function setSignatureAlgorithm(int $sigtype): void
    {
    }

    /**
     * setStub.
     * dummy function (Phar::setStub is not valid for PharData).
     *
     * @param string $stub
     * @param int    $len  = 1
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phardata.setstub.php
     */
    public function setStub(string $stub, int $len = 1): bool
    {
    }

    /* Inherited methods */
    //public function addEmptyDir(string $dirname): void
    //public function addFile(string $file, string $localname): void
    //public function addFromString(string $localname, string $contents): void
    //final public static function apiVersion(): string
    //public function buildFromDirectory(string $base_dir, string $regex): array
    //public function buildFromIterator(Iterator $iter, string $base_directory): array
    //final public static function canCompress(int $type = 0): bool
    //final public static function canWrite(): bool
    //public function compress(int $compression, string $extension): object
    //public function compressAllFilesBZIP2(): bool
    //public function compressAllFilesGZ(): bool
    //public function compressFiles(int $compression): void
    //public function __construct(string $fname, int $flags, string $alias)
    //public function convertToData(int $format = 9021976, int $compression = 9021976, string $extension): PharData
    //public function convertToExecutable(int $format = 9021976, int $compression = 9021976, string $extension): Phar
    //public function copy(string $oldfile, string $newfile): bool
    //public function count(): int
    //final public static function createDefaultStub(string $indexfile, string $webindexfile): string
    //public function decompress(string $extension): object
    //public function decompressFiles(): bool
    //public function delMetadata(): bool
    //public function delete(string $entry): bool
    //public function extractTo(string $pathto, string|array $files, bool $overwrite = false): bool
    //public function getMetadata(): mixed
    //public function getModified(): bool
    //public function getSignature(): array
    //public function getStub(): string
    //final public static function getSupportedCompression(): array
    //final public static function getSupportedSignatures(): array
    //public function getVersion(): string
    //public function hasMetadata(): bool
    //final public static function interceptFileFuncs(): void
    //public function isBuffering(): bool
    //public function isCompressed(): mixed
    //public function isFileFormat(int $format): bool
    //final public static function isValidPharFilename(string $filename, bool $executable = true): bool
    //public function isWritable(): bool
    //final public static function loadPhar(string $filename, string $alias): bool
    //final public static function mapPhar(string $alias, int $dataoffset = 0): bool
    //final public static function mount(string $pharpath, string $externalpath): void
    //final public static function mungServer(array $munglist): void
    //public function offsetExists(string $offset): bool
    //public function offsetGet(string $offset): int
    //public function offsetSet(string $offset, string $value): void
    //public function offsetUnset(string $offset): bool
    //final public static function running(bool $retphar = true): string
    //public function setAlias(string $alias): bool
    //public function setDefaultStub(string $index, string $webindex): bool
    //public function setMetadata(mixed $metadata): void
    //public function setSignatureAlgorithm(int $sigtype, string $privatekey): void
    //public function setStub(string $stub, int $len = 1): bool
    //public function startBuffering(): void
    //public function stopBuffering(): void
    //public function uncompressAllFiles(): bool
    //final public static function unlinkArchive(string $archive): bool
    //final public static function webPhar(string $alias, string $index = 'index.php', string $f404, array $mimetypes, callable $rewrites): void
}
