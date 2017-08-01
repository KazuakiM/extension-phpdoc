<?php

/**
 * OCI-Lob.
 * OCI8 LOB functionality for large binary (BLOB) and character (CLOB) objects.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.OCI-Lob.php
 */
//class OCI-Lob
class OCILob
{
    /**
     * append.
     * Appends data from the large object to another large object.
     *
     * @param OCI-Lob $lob_from
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.append.php
     */
    //public function append(OCI-Lob $lob_from): bool
    public function append(OCILob $lob_from): bool
    {
    }

    /**
     * close.
     * Closes LOB descriptor.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.close.php
     */
    public function close(): bool
    {
    }

    /**
     * eof.
     * Tests for end-of-file on a large object's descriptor.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.eof.php
     */
    public function eof(): bool
    {
    }

    /**
     * erase.
     * Erases a specified portion of the internal LOB data.
     *
     * @param int $offset
     * @param int $length (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/oci-lob.erase.php
     */
    public function erase(int $offset, int $length): int
    {
    }

    /**
     * export.
     * Exports LOB's contents to a file.
     *
     * @param string $filename
     * @param int    $start    (optional)
     * @param int    $length   (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.export.php
     */
    public function export(string $filename, int $start, int $length): bool
    {
    }

    /**
     * writeToFile.
     *
     * @alias OCI-Lob::export
     *
     * @see http://php.net/manual/en/oci-lob.writetofile.php
     */
    public function writeToFile(string $filename, int $start, int $length): bool
    {
    }

    /**
     * flush.
     * Flushes/writes buffer of the LOB to the server.
     *
     * @param int $flag (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.flush.php
     */
    public function flush(int $flag): bool
    {
    }

    /**
     * free.
     * Frees resources associated with the LOB descriptor.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.free.php
     */
    public function free(): bool
    {
    }

    /**
     * getBuffering.
     * Returns current state of buffering for the large object.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.getbuffering.php
     */
    public function getBuffering(): bool
    {
    }

    /**
     * import.
     * Imports file data to the LOB.
     *
     * @param string $filename
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.import.php
     */
    public function import(string $filename): bool
    {
    }

    /**
     * saveFile.
     *
     * @alias OCI-Lob::import
     *
     * @see http://php.net/manual/en/oci-lob.savefile.php
     */
    public function saveFile(string $filename): bool
    {
    }

    /**
     * load.
     * Returns large object's contents.
     *
     * @return string
     *
     * @see http://php.net/manual/en/oci-lob.load.php
     */
    public function load(): string
    {
    }

    /**
     * read.
     * Reads part of the large object.
     *
     * @param int $length
     *
     * @return string
     *
     * @see http://php.net/manual/en/oci-lob.read.php
     */
    public function read(int $length): string
    {
    }

    /**
     * rewind.
     * Moves the internal pointer to the beginning of the large object.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.rewind.php
     */
    public function rewind(): bool
    {
    }

    /**
     * save.
     * Saves data to the large object.
     *
     * @param string $data
     * @param int    $offset (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.save.php
     */
    public function save(string $data, int $offset): bool
    {
    }

    /**
     * seek.
     * Sets the internal pointer of the large object.
     *
     * @param int $offset
     * @param int $whence = OCI_SEEK_SET
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.seek.php
     */
    public function seek(int $offset, int $whence = OCI_SEEK_SET): bool
    {
    }

    /**
     * setBuffering.
     * Changes current state of buffering for the large object.
     *
     * @param bool $on_off
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.setbuffering.php
     */
    public function setBuffering(bool $on_off): bool
    {
    }

    /**
     * size.
     * Returns size of large object.
     *
     * @return int
     *
     * @see http://php.net/manual/en/oci-lob.size.php
     */
    public function size(): int
    {
    }

    /**
     * tell.
     * Returns the current position of internal pointer of large object.
     *
     * @return int
     *
     * @see http://php.net/manual/en/oci-lob.tell.php
     */
    public function tell(): int
    {
    }

    /**
     * truncate.
     * Truncates large object.
     *
     * @param int $length = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.truncate.php
     */
    public function truncate(int $length = 0): bool
    {
    }

    /**
     * write.
     * Writes data to the large object.
     *
     * @param string $data
     * @param int    $length (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/oci-lob.write.php
     */
    public function write(string $data, int $length): int
    {
    }

    /**
     * writeTemporary.
     * Writes a temporary large object.
     *
     * @param string $data
     * @param int    $lob_type = OCI_TEMP_CLOB
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-lob.writetemporary.php
     */
    public function writeTemporary(string $data, int $lob_type = OCI_TEMP_CLOB): bool
    {
    }
}
