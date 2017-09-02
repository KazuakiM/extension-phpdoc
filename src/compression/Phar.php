<?php

/**
 * Phar.
 * The Phar class provides a high-level interface to accessing and creating phar archives.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.phar.php
 */
class Phar extends RecursiveDirectoryIterator implements Countable, ArrayAccess
{
    /**
     * __construct.
     * Construct a Phar archive object.
     *
     * @param string $fname
     * @param int    $flags (optional)
     * @param string $alias (optional)
     *
     * @throws BadMethodCallException
     * @throws UnexpectedValueException
     *
     * @see http://php.net/manual/en/phar.construct.php
     */
    public function __construct(string $fname, int $flags, string $alias)
    {
    }

    /**
     * addEmptyDir.
     * Add an empty directory to the phar archive.
     *
     * @param string $dirname
     *
     * @see http://php.net/manual/en/phar.addemptydir.php
     */
    public function addEmptyDir(string $dirname): void
    {
    }

    /**
     * addFile.
     * Add a file from the filesystem to the phar archive.
     *
     * @param string $file
     * @param string $localname (optional)
     *
     * @see http://php.net/manual/en/phar.addfile.php
     */
    public function addFile(string $file, string $localname): void
    {
    }

    /**
     * addFromString.
     * Add a file from a string to the phar archive.
     *
     * @param string $localname
     * @param string $contents
     *
     * @see http://php.net/manual/en/phar.addfromstring.php
     */
    public function addFromString(string $localname, string $contents): void
    {
    }

    /**
     * apiVersion.
     * Returns the api version.
     *
     * @return string
     *
     * @see http://php.net/manual/en/phar.apiversion.php
     */
    final public static function apiVersion(): string
    {
    }

    /**
     * buildFromDirectory.
     * Construct a phar archive from the files within a directory.
     *
     * @param string $base_dir
     * @param string $regex    (optional)
     *
     * @throws BadMethodCallException
     * @throws PharException
     *
     * @return array
     *
     * @see http://php.net/manual/en/phar.buildfromdirectory.php
     */
    public function buildFromDirectory(string $base_dir, string $regex): array
    {
    }

    /**
     * buildFromIterator.
     * Construct a phar archive from an iterator.
     *
     * @param Iterator $iter
     * @param string   $base_directory (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/phar.buildfromiterator.php
     */
    public function buildFromIterator(Iterator $iter, string $base_directory): array
    {
    }

    /**
     * canCompress.
     * Returns whether phar extension supports compression using either zlib or bzip2.
     *
     * @param int $type = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.cancompress.php
     */
    final public static function canCompress(int $type = 0): bool
    {
    }

    /**
     * canWrite.
     * Returns whether phar extension supports writing and creating phars.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.canwrite.php
     */
    final public static function canWrite(): bool
    {
    }

    /**
     * compress.
     * Compresses the entire Phar archive using Gzip or Bzip2 compression.
     *
     * @param int    $compression
     * @param string $extension   (optional)
     *
     * @throws BadMethodCallException
     *
     * @return object
     *
     * @see http://php.net/manual/en/phar.compress.php
     */
    public function compress(int $compression, string $extension): object
    {
    }

    /**
     * compressAllFilesBZIP2.
     * Compresses all files in the current Phar archive using Bzip2 compression.
     *
     * @throws BadMethodCallException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.compressallfilesbzip2.php
     */
    public function compressAllFilesBZIP2(): bool
    {
    }

    /**
     * compressAllFilesGZ.
     * Compresses all files in the current Phar archive using Gzip compression.
     *
     * @throws BadMethodCallException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.compressallfilesgz.php
     */
    public function compressAllFilesGZ(): bool
    {
    }

    /**
     * compressFiles.
     * Compresses all files in the current Phar archive.
     *
     * @param int $compression
     *
     * @throws BadMethodCallException
     *
     * @see http://php.net/manual/en/phar.compressfiles.php
     */
    public function compressFiles(int $compression): void
    {
    }

    /**
     * convertToData.
     * Convert a phar archive to a non-executable tar or zip file.
     *
     * @param int    $format      = 9021976
     * @param int    $compression = 9021976
     * @param string $extension   (optional)
     *
     * @throws BadMethodCallException
     * @throws PharException
     *
     * @return PharData
     *
     * @see http://php.net/manual/en/phar.converttodata.php
     */
    public function convertToData(int $format = 9021976, int $compression = 9021976, string $extension): PharData
    {
    }

    /**
     * convertToExecutable.
     * Convert a phar archive to another executable phar archive file format.
     *
     * @param int    $format      = 9021976
     * @param int    $compression = 9021976
     * @param string $extension   (optional)
     *
     * @throws BadMethodCallException
     * @throws UnexpectedValueException
     * @throws PharException
     *
     * @return Phar
     *
     * @see http://php.net/manual/en/phar.converttoexecutable.php
     */
    public function convertToExecutable(int $format = 9021976, int $compression = 9021976, string $extension): Phar
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
     * @see http://php.net/manual/en/phar.copy.php
     */
    public function copy(string $oldfile, string $newfile): bool
    {
    }

    /**
     * count.
     * Returns the number of entries (files) in the Phar archive.
     *
     * @return int
     *
     * @see http://php.net/manual/en/phar.count.php
     */
    public function count(): int
    {
    }

    /**
     * createDefaultStub.
     * Create a phar-file format specific stub.
     *
     * @param string $indexfile    (optional)
     * @param string $webindexfile (optional)
     *
     * @throws UnexpectedValueException
     *
     * @return string
     *
     * @see http://php.net/manual/en/phar.createdefaultstub.php
     */
    final public static function createDefaultStub(string $indexfile, string $webindexfile): string
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
     * @see http://php.net/manual/en/phar.decompress.php
     */
    public function decompress(string $extension): object
    {
    }

    /**
     * decompressFiles.
     * Decompresses all files in the current Phar archive.
     *
     * @throws BadMethodCallException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.decompressfiles.php
     */
    public function decompressFiles(): bool
    {
    }

    /**
     * delMetadata.
     * Deletes the global metadata of the phar.
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.delmetadata.php
     */
    public function delMetadata(): bool
    {
    }

    /**
     * delete.
     * Delete a file within a phar archive.
     *
     * @param string $entry
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.delete.php
     */
    public function delete(string $entry): bool
    {
    }

    /**
     * extractTo.
     * Extract the contents of a phar archive to a directory.
     *
     * @param string       $pathto
     * @param string|array $files     (optional)
     * @param bool         $overwrite = false (optional)
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.extractto.php
     */
    public function extractTo(string $pathto, mixed $files, bool $overwrite = false): bool
    {
    }

    /**
     * getMetadata.
     * Returns phar archive meta-data.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/phar.getmetadata.php
     */
    public function getMetadata(): mixed
    {
    }

    /**
     * getModified.
     * Return whether phar was modified.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.getmodified.php
     */
    public function getModified(): bool
    {
    }

    /**
     * getSignature.
     * Return MD5/SHA1/SHA256/SHA512/OpenSSL signature of a Phar archive.
     *
     * @return array
     *
     * @see http://php.net/manual/en/phar.getsignature.php
     */
    public function getSignature(): array
    {
    }

    /**
     * getStub.
     * Return the PHP loader or bootstrap stub of a Phar archive.
     *
     * @throws RuntimeException
     *
     * @return string
     *
     * @see http://php.net/manual/en/phar.getstub.php
     */
    public function getStub(): string
    {
    }

    /**
     * getSupportedCompression.
     * Return array of supported compression algorithms.
     *
     * @return array
     *
     * @see http://php.net/manual/en/phar.getsupportedcompression.php
     */
    final public static function getSupportedCompression(): array
    {
    }

    /**
     * getSupportedSignatures.
     * Return array of supported signature types.
     *
     * @return array
     *
     * @see http://php.net/manual/en/phar.getsupportedsignatures.php
     */
    final public static function getSupportedSignatures(): array
    {
    }

    /**
     * getVersion.
     * Return version info of Phar archive.
     *
     * @return string
     *
     * @see http://php.net/manual/en/phar.getversion.php
     */
    public function getVersion(): string
    {
    }

    /**
     * hasMetadata.
     * Returns whether phar has global meta-data.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.hasmetadata.php
     */
    public function hasMetadata(): bool
    {
    }

    /**
     * interceptFileFuncs.
     * instructs phar to intercept fopen, file_get_contents, opendir, and all of the stat-related functions.
     *
     * @see http://php.net/manual/en/phar.interceptfilefuncs.php
     */
    final public static function interceptFileFuncs(): void
    {
    }

    /**
     * isBuffering.
     * Used to determine whether Phar write operations are being buffered, or are flushing directly to disk.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.isbuffering.php
     */
    public function isBuffering(): bool
    {
    }

    /**
     * isCompressed.
     * Returns Phar::GZ or PHAR::BZ2 if the entire phar archive is compressed (.tar.gz/tar.bz and so on).
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/phar.iscompressed.php
     */
    public function isCompressed(): mixed
    {
    }

    /**
     * isFileFormat.
     * Returns true if the phar archive is based on the tar/phar/zip file format depending on the parameter.
     *
     * @param int $format
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.isfileformat.php
     */
    public function isFileFormat(int $format): bool
    {
    }

    /**
     * isValidPharFilename.
     * Returns whether the given filename is a valid phar filename.
     *
     * @param string $filename
     * @param bool   $executable = true
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.isvalidpharfilename.php
     */
    final public static function isValidPharFilename(string $filename, bool $executable = true): bool
    {
    }

    /**
     * isWritable.
     * Returns true if the phar archive can be modified.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.iswritable.php
     */
    public function isWritable(): bool
    {
    }

    /**
     * loadPhar.
     * Loads any phar archive with an alias.
     *
     * @param string $filename
     * @param string $alias    (optional)
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.loadphar.php
     */
    final public static function loadPhar(string $filename, string $alias): bool
    {
    }

    /**
     * mapPhar.
     * Reads the currently executed file (a phar) and registers its manifest.
     *
     * @param string $alias      (optional)
     * @param int    $dataoffset = 0 (optional)
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.mapphar.php
     */
    final public static function mapPhar(string $alias, int $dataoffset = 0): bool
    {
    }

    /**
     * mount.
     * Mount an external path or file to a virtual location within the phar archive.
     *
     * @param string $pharpath
     * @param string $externalpath
     *
     * @throws PharException
     *
     * @see http://php.net/manual/en/phar.mount.php
     */
    final public static function mount(string $pharpath, string $externalpath): void
    {
    }

    /**
     * mungServer.
     * Defines a list of up to 4 $_SERVER variables that should be modified for execution.
     *
     * @param array $munglist
     *
     * @throws UnexpectedValueException
     *
     * @see http://php.net/manual/en/phar.mungserver.php
     */
    final public static function mungServer(array $munglist): void
    {
    }

    /**
     * offsetExists.
     * determines whether a file exists in the phar.
     *
     * @param string $offset
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.offsetexists.php
     */
    public function offsetExists(string $offset): bool
    {
    }

    /**
     * offsetGet.
     * Gets a PharFileInfo object for a specific file.
     *
     * @param string $offset
     *
     * @throws BadMethodCallException
     *
     * @return int
     *
     * @see http://php.net/manual/en/phar.offsetget.php
     */
    public function offsetGet(string $offset): int
    {
    }

    /**
     * offsetSet.
     * set the contents of an internal file to those of an external file.
     *
     * @param string $offset
     * @param string $value
     *
     * @throws BadMethodCallException
     * @throws PharException
     *
     * @see http://php.net/manual/en/phar.offsetset.php
     */
    public function offsetSet(string $offset, string $value): void
    {
    }

    /**
     * offsetUnset.
     * remove a file from a phar.
     *
     * @param string $offset
     *
     * @throws BadMethodCallException
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.offsetunset.php
     */
    public function offsetUnset(string $offset): bool
    {
    }

    /**
     * running.
     * Returns the full path on disk or full phar URL to the currently executing Phar archive.
     *
     * @param bool $retphar = true
     *
     * @return string
     *
     * @see http://php.net/manual/en/phar.running.php
     */
    final public static function running(bool $retphar = true): string
    {
    }

    /**
     * setAlias.
     * Set the alias for the Phar archive.
     *
     * @param string $alias
     *
     * @throws UnexpectedValueException
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.setalias.php
     */
    public function setAlias(string $alias): bool
    {
    }

    /**
     * setDefaultStub.
     * Used to set the PHP loader or bootstrap stub of a Phar archive to the default loader.
     *
     * @param string $index    (optional)
     * @param string $webindex (optional)
     *
     * @throws UnexpectedValueException
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.setdefaultstub.php
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
     * @see http://php.net/manual/en/phar.setmetadata.php
     */
    public function setMetadata(mixed $metadata): void
    {
    }

    /**
     * setSignatureAlgorithm.
     * set the signature algorithm for a phar and apply it.
     *
     * @param int    $sigtype
     * @param string $privatekey (optional)
     *
     * @throws UnexpectedValueException
     * @throws PharException
     *
     * @see http://php.net/manual/en/phar.setsignaturealgorithm.php
     */
    public function setSignatureAlgorithm(int $sigtype, string $privatekey): void
    {
    }

    /**
     * setStub.
     * Used to set the PHP loader or bootstrap stub of a Phar archive.
     *
     * @param string $stub
     * @param int    $len  = 1
     *
     * @throws UnexpectedValueException
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.setstub.php
     */
    public function setStub(string $stub, int $len = 1): bool
    {
    }

    /**
     * startBuffering.
     * Start buffering Phar write operations, do not modify the Phar object on disk.
     *
     * @see http://php.net/manual/en/phar.startbuffering.php
     */
    public function startBuffering(): void
    {
    }

    /**
     * stopBuffering.
     * Stop buffering write requests to the Phar archive, and save changes to disk.
     *
     * @throws PharException
     *
     * @see http://php.net/manual/en/phar.stopbuffering.php
     */
    public function stopBuffering(): void
    {
    }

    /**
     * uncompressAllFiles.
     * Uncompresses all files in the current Phar archive.
     *
     * @throws BadMethodCallException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.uncompressallfiles.php
     */
    public function uncompressAllFiles(): bool
    {
    }

    /**
     * unlinkArchive.
     * Completely remove a phar archive from disk and from memory.
     *
     * @param string $archive
     *
     * @throws PharException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/phar.unlinkarchive.php
     */
    final public static function unlinkArchive(string $archive): bool
    {
    }

    /**
     * webPhar.
     * mapPhar for web-based phars. front controller for web applications.
     *
     * @param string   $alias     (optional)
     * @param string   $index     = 'index.php' (optional)
     * @param string   $f404      (optional)
     * @param array    $mimetypes (optional)
     * @param callable $rewrites  (optional)
     *
     * @throws UnexpectedValueException
     * @throws PharException
     *
     * @see http://php.net/manual/en/phar.webphar.php
     */
    final public static function webPhar(string $alias, string $index = 'index.php', string $f404, array $mimetypes, callable $rewrites): void
    {
    }
}
