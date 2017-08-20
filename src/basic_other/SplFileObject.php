<?php

/**
 * SplFileObject.
 * The SplFileObject class offers an object oriented interface for a file.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.splfileobject.php
 */
class SplFileObject extends SplFileInfo implements RecursiveIterator, SeekableIterator
{
    const DROP_NEW_LINE = 1;
    const READ_AHEAD = 2;
    const SKIP_EMPTY = 4;
    const READ_CSV = 8;

    /**
     * __construct.
     * Construct a new file object.
     *
     * @param string   $filename
     * @param string   $open_mode        = 'r'
     * @param bool     $use_include_path = false
     * @param resource $context          (optional)
     *
     * @throws RuntimeException
     *
     * @see http://php.net/manual/en/splfileobject.construct.php
     */
    public function __construct(string $filename, string $open_mode = 'r', bool $use_include_path = false, resource $context)
    {
    }

    /**
     * __toString.
     * Alias of SplFileObject::current.
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileobject.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * current.
     * Retrieve current line of file.
     *
     * @return string|array
     *
     * @see http://php.net/manual/en/splfileobject.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * eof.
     * Reached end of file.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfileobject.eof.php
     */
    public function eof(): bool
    {
    }

    /**
     * fflush.
     * Flushes the output to the file.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfileobject.fflush.php
     */
    public function fflush(): bool
    {
    }

    /**
     * fgetc.
     * Gets character from file.
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileobject.fgetc.php
     */
    public function fgetc(): string
    {
    }

    /**
     * fgetcsv.
     * Gets line from file and parse as CSV fields.
     *
     * @param string $delimiter = ','
     * @param string $enclosure = "\'"
     * @param string $escape    = '\\'
     *
     * @return array
     *
     * @see http://php.net/manual/en/splfileobject.fgetcsv.php
     */
    public function fgetcsv(string $delimiter = ',', string $enclosure = "\'", string $escape = '\\'): array
    {
    }

    /**
     * fgets.
     * Gets line from file.
     *
     * @throws RuntimeException
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileobject.fgets.php
     */
    public function fgets(): string
    {
    }

    /**
     * fgetss.
     * Gets line from file and strip HTML tags.
     *
     * @param string $allowable_tags (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileobject.fgetss.php
     */
    public function fgetss(string $allowable_tags): string
    {
    }

    /**
     * flock.
     * Portable file locking.
     *
     * @param int $operation
     * @param int &$wouldblock (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfileobject.flock.php
     */
    public function flock(int $operation, int &$wouldblock): bool
    {
    }

    /**
     * fpassthru.
     * Output all remaining data on a file pointer.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileobject.fpassthru.php
     */
    public function fpassthru(): int
    {
    }

    /**
     * fputcsv.
     * Write a field array as a CSV line.
     *
     * @param array  $fields
     * @param string $delimiter = ','
     * @param string $enclosure = '"'
     * @param string $escape    = '\'
     *
     * @throws E_WARNING
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileobject.fputcsv.php
     */
    public function fputcsv(array $fields, string $delimiter = ',', string $enclosure = '"', string $escape = '\\'): int
    {
    }

    /**
     * fread.
     * Read from file.
     *
     * @param int $length
     *
     * @return string
     *
     * @see http://php.net/manual/en/splfileobject.fread.php
     */
    public function fread(int $length): string
    {
    }

    /**
     * fscanf.
     * Parses input from file according to a format.
     *
     * @param string $format
     * @param mixed  &$...   (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/splfileobject.fscanf.php
     */
    public function fscanf(string $format, mixed &$ect): mixed
    {
    }

    /**
     * fseek.
     * Seek to a position.
     *
     * @param int $offset
     * @param int $whence = SEEK_SET
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileobject.fseek.php
     */
    public function fseek(int $offset, int $whence = SEEK_SET): int
    {
    }

    /**
     * fstat.
     * Gets information about the file.
     *
     * @return array
     *
     * @see http://php.net/manual/en/splfileobject.fstat.php
     */
    public function fstat(): array
    {
    }

    /**
     * ftell.
     * Return current file position.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileobject.ftell.php
     */
    public function ftell(): int
    {
    }

    /**
     * ftruncate.
     * Truncates the file to a given length.
     *
     * @param int $size
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfileobject.ftruncate.php
     */
    public function ftruncate(int $size): bool
    {
    }

    /**
     * fwrite.
     * Write to file.
     *
     * @param string $str
     * @param int    $length (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileobject.fwrite.php
     */
    public function fwrite(string $str, int $length): int
    {
    }

    /**
     * getChildren.
     * No purpose.
     *
     *
     * @see http://php.net/manual/en/splfileobject.getchildren.php
     */
    public function getChildren(): void
    {
    }

    /**
     * getCsvControl.
     * Get the delimiter, enclosure and escape character for CSV.
     *
     * @return array
     *
     * @see http://php.net/manual/en/splfileobject.getcsvcontrol.php
     */
    public function getCsvControl(): array
    {
    }

    /**
     * getFlags.
     * Gets flags for the SplFileObject.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileobject.getflags.php
     */
    public function getFlags(): int
    {
    }

    /**
     * getMaxLineLen.
     * Get maximum line length.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileobject.getmaxlinelen.php
     */
    public function getMaxLineLen(): int
    {
    }

    /**
     * hasChildren.
     * SplFileObject does not have children.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfileobject.haschildren.php
     */
    public function hasChildren(): bool
    {
    }

    /**
     * key.
     * Get line number.
     *
     * @return int
     *
     * @see http://php.net/manual/en/splfileobject.key.php
     */
    public function key(): int
    {
    }

    /**
     * next.
     * Read next line.
     *
     *
     * @see http://php.net/manual/en/splfileobject.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     * Rewind the file to the first line.
     *
     * @throws RuntimeException
     *
     * @see http://php.net/manual/en/splfileobject.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * seek.
     * Seek to specified line.
     *
     * @param int $line_pos
     *
     * @throws LogicException
     *
     * @see http://php.net/manual/en/splfileobject.seek.php
     */
    public function seek(int $line_pos): void
    {
    }

    /**
     * setCsvControl.
     * Set the delimiter, enclosure and escape character for CSV.
     *
     * @param string $delimiter = ','
     * @param string $enclosure = "\'"
     * @param string $escape    = '\\'
     *
     * @see http://php.net/manual/en/splfileobject.setcsvcontrol.php
     */
    public function setCsvControl(string $delimiter = ',', string $enclosure = "\'", string $escape = '\\'): void
    {
    }

    /**
     * setFlags.
     * Sets flags for the SplFileObject.
     *
     * @param int $flags
     *
     * @see http://php.net/manual/en/splfileobject.setflags.php
     */
    public function setFlags(int $flags): void
    {
    }

    /**
     * setMaxLineLen.
     * Set maximum line length.
     *
     * @param int $max_len
     *
     * @throws DomainException
     *
     * @see http://php.net/manual/en/splfileobject.setmaxlinelen.php
     */
    public function setMaxLineLen(int $max_len): void
    {
    }

    /**
     * valid.
     * Not at EOF.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/splfileobject.valid.php
     */
    public function valid(): bool
    {
    }

    /* Inherited methods */
    //public function __construct(string $file_name): SplFileInfo::
    //public function SplFileInfo::getATime(): int
    //public function SplFileInfo::getBasename(string $suffix): string
    //public function SplFileInfo::getCTime(): int
    //public function SplFileInfo::getExtension(): string
    //public function SplFileInfo::getFileInfo(string $class_name): SplFileInfo
    //public function SplFileInfo::getFilename(): string
    //public function SplFileInfo::getGroup(): int
    //public function SplFileInfo::getInode(): int
    //public function SplFileInfo::getLinkTarget(): string
    //public function SplFileInfo::getMTime(): int
    //public function SplFileInfo::getOwner(): int
    //public function SplFileInfo::getPath(): string
    //public function SplFileInfo::getPathInfo(string $class_name): SplFileInfo
    //public function SplFileInfo::getPathname(): string
    //public function SplFileInfo::getPerms(): int
    //public function SplFileInfo::getRealPath(): string
    //public function SplFileInfo::getSize(): int
    //public function SplFileInfo::getType(): string
    //public function SplFileInfo::isDir(): bool
    //public function SplFileInfo::isExecutable(): bool
    //public function SplFileInfo::isFile(): bool
    //public function SplFileInfo::isLink(): bool
    //public function SplFileInfo::isReadable(): bool
    //public function SplFileInfo::isWritable(): bool
    //public function SplFileInfo::openFile(string $open_mode = 'r', bool $use_include_path = false, resource $context = null): SplFileObject
    //public function SplFileInfo::setFileClass(string $class_name = 'SplFileObject'): void
    //public function SplFileInfo::setInfoClass(string $class_name = 'SplFileInfo'): void
    //public function SplFileInfo::__toString(): void
}
