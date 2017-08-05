<?php

/**
 * ZipArchive.
 * A file archive, compressed with Zip.
 *
 * @property int $status
 * @property int $statusSys
 * @property int $numFiles
 * @property string $filename
 * @property string $comment
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ziparchive.php
 */
class ZipArchive
{
    public $status;
    public $statusSys;
    public $numFiles;
    public $filename;
    public $comment;

    /**
     * addEmptyDir.
     * Add a new directory.
     *
     * @param string $dirname
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.addemptydir.php
     */
    public function addEmptyDir(string $dirname): bool
    {
    }

    /**
     * addFile.
     * Adds a file to a ZIP archive from the given path.
     *
     * @param string $filename
     * @param string $localname = null
     * @param int    $start     = 0
     * @param int    $length    = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.addfile.php
     */
    public function addFile(string $filename, string $localname = null, int $start = 0, int $length = 0): bool
    {
    }

    /**
     * addFromString.
     * Add a file to a ZIP archive using its contents.
     *
     * @param string $localname
     * @param string $contents
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.addfromstring.php
     */
    public function addFromString(string $localname, string $contents): bool
    {
    }

    /**
     * addGlob.
     * Add files from a directory by glob pattern.
     *
     * @param string $pattern
     * @param int    $flags   = 0
     * @param array  $options = []
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.addglob.php
     */
    public function addGlob(string $pattern, int $flags = 0, array $options = []): bool
    {
    }

    /**
     * addPattern.
     * Add files from a directory by PCRE pattern.
     *
     * @param string $pattern
     * @param string $path    = '.'
     * @param array  $options = []
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.addpattern.php
     */
    public function addPattern(string $pattern, string $path = '.', array $options = []): bool
    {
    }

    /**
     * close.
     * Close the active archive (opened or newly created).
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.close.php
     */
    public function close(): bool
    {
    }

    /**
     * deleteIndex.
     * delete an entry in the archive using its index.
     *
     * @param int $index
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.deleteindex.php
     */
    public function deleteIndex(int $index): bool
    {
    }

    /**
     * deleteName.
     * delete an entry in the archive using its name.
     *
     * @param string $name
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.deletename.php
     */
    public function deleteName(string $name): bool
    {
    }

    /**
     * extractTo.
     * Extract the archive contents.
     *
     * @param string $destination
     * @param mixed  $entries     (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.extractto.php
     */
    public function extractTo(string $destination, mixed $entries): bool
    {
    }

    /**
     * getArchiveComment.
     * Returns the Zip archive comment.
     *
     * @param int $flags (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/ziparchive.getarchivecomment.php
     */
    public function getArchiveComment(int $flags): string
    {
    }

    /**
     * getCommentIndex.
     * Returns the comment of an entry using the entry index.
     *
     * @param int $index
     * @param int $flags (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/ziparchive.getcommentindex.php
     */
    public function getCommentIndex(int $index, int $flags): string
    {
    }

    /**
     * getCommentName.
     * Returns the comment of an entry using the entry name.
     *
     * @param string $name
     * @param int    $flags (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/ziparchive.getcommentname.php
     */
    public function getCommentName(string $name, int $flags): string
    {
    }

    /**
     * getExternalAttributesIndex.
     * Retrieve the external attributes of an entry defined by its index.
     *
     * @param int $index
     * @param int &$opsys
     * @param int &$attr
     * @param int $flags  (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.getexternalattributesindex.php
     */
    public function getExternalAttributesIndex(int $index, int &$opsys, int &$attr, int $flags): bool
    {
    }

    /**
     * getExternalAttributesName.
     * Retrieve the external attributes of an entry defined by its name.
     *
     * @param string $name
     * @param int    &$opsys
     * @param int    &$attr
     * @param int    $flags  (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.getexternalattributesname.php
     */
    public function getExternalAttributesName(string $name, int &$opsys, int &$attr, int $flags): bool
    {
    }

    /**
     * getFromIndex.
     * Returns the entry contents using its index.
     *
     * @param int $index
     * @param int $length = 0
     * @param int $flags  (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/ziparchive.getfromindex.php
     */
    public function getFromIndex(int $index, int $length = 0, int $flags): string
    {
    }

    /**
     * getFromName.
     * Returns the entry contents using its name.
     *
     * @param string $name
     * @param int    $length = 0
     * @param int    $flags  (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/ziparchive.getfromname.php
     */
    public function getFromName(string $name, int $length = 0, int $flags): string
    {
    }

    /**
     * getNameIndex.
     * Returns the name of an entry using its index.
     *
     * @param int $index
     * @param int $flags (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/ziparchive.getnameindex.php
     */
    public function getNameIndex(int $index, int $flags): string
    {
    }

    /**
     * getStatusString.
     * Returns the status error message, system and/or zip messages.
     *
     * @return string
     *
     * @see http://php.net/manual/en/ziparchive.getstatusstring.php
     */
    public function getStatusString(): string
    {
    }

    /**
     * getStream.
     * Get a file handler to the entry defined by its name (read only).
     *
     * @param string $name
     *
     * @return resource
     *
     * @see http://php.net/manual/en/ziparchive.getstream.php
     */
    public function getStream(string $name): resource
    {
    }

    /**
     * locateName.
     * Returns the index of the entry in the archive.
     *
     * @param string $name
     * @param int    $flags (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/ziparchive.locatename.php
     */
    public function locateName(string $name, int $flags): int
    {
    }

    /**
     * open.
     * Open a ZIP file archive.
     *
     * @param string $filename
     * @param int    $flags    (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/ziparchive.open.php
     */
    public function open(string $filename, int $flags): mixed
    {
    }

    /**
     * renameIndex.
     * Renames an entry defined by its index.
     *
     * @param int    $index
     * @param string $newname
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.renameindex.php
     */
    public function renameIndex(int $index, string $newname): bool
    {
    }

    /**
     * renameName.
     * Renames an entry defined by its name.
     *
     * @param string $name
     * @param string $newname
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.renamename.php
     */
    public function renameName(string $name, string $newname): bool
    {
    }

    /**
     * setArchiveComment.
     * Set the comment of a ZIP archive.
     *
     * @param string $comment
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.setarchivecomment.php
     */
    public function setArchiveComment(string $comment): bool
    {
    }

    /**
     * setCommentIndex.
     * Set the comment of an entry defined by its index.
     *
     * @param int    $index
     * @param string $comment
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.setcommentindex.php
     */
    public function setCommentIndex(int $index, string $comment): bool
    {
    }

    /**
     * setCommentName.
     * Set the comment of an entry defined by its name.
     *
     * @param string $name
     * @param string $comment
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.setcommentname.php
     */
    public function setCommentName(string $name, string $comment): bool
    {
    }

    /**
     * setCompressionIndex.
     * Set the compression method of an entry defined by its index.
     *
     * @param int $index
     * @param int $comp_method
     * @param int $comp_flags  = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.setcompressionindex.php
     */
    public function setCompressionIndex(int $index, int $comp_method, int $comp_flags = 0): bool
    {
    }

    /**
     * setCompressionName.
     * Set the compression method of an entry defined by its name.
     *
     * @param string $name
     * @param int    $comp_method
     * @param int    $comp_flags  = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.setcompressionname.php
     */
    public function setCompressionName(string $name, int $comp_method, int $comp_flags = 0): bool
    {
    }

    /**
     * setEncryptionIndex.
     * Set the encryption method of an entry defined by its index.
     *
     * @param int    $index
     * @param string $method
     * @param string $password (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.setencryptionindex.php
     */
    public function setEncryptionIndex(int $index, string $method, string $password): bool
    {
    }

    /**
     * setEncryptionName.
     * Set the encryption method of an entry defined by its name.
     *
     * @param string $name
     * @param int    $method
     * @param string $password (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.setencryptionname.php
     */
    public function setEncryptionName(string $name, int $method, string $password): bool
    {
    }

    /**
     * setExternalAttributesIndex.
     * Set the external attributes of an entry defined by its index.
     *
     * @param int $index
     * @param int $opsys
     * @param int $attr
     * @param int $flags (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.setexternalattributesindex.php
     */
    public function setExternalAttributesIndex(int $index, int $opsys, int $attr, int $flags): bool
    {
    }

    /**
     * setExternalAttributesName.
     * Set the external attributes of an entry defined by its name.
     *
     * @param string $name
     * @param int    $opsys
     * @param int    $attr
     * @param int    $flags (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.setexternalattributesname.php
     */
    public function setExternalAttributesName(string $name, int $opsys, int $attr, int $flags): bool
    {
    }

    /**
     * setPassword.
     * Set the password for the active archive.
     *
     * @param string $password
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.setpassword.php
     */
    public function setPassword(string $password): bool
    {
    }

    /**
     * statIndex.
     * Get the details of an entry defined by its index.
     *
     * @param int $index
     * @param int $flags (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/ziparchive.statindex.php
     */
    public function statIndex(int $index, int $flags): array
    {
    }

    /**
     * statName.
     * Get the details of an entry defined by its name.
     *
     * @param string $name
     * @param int    $flags (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/ziparchive.statname.php
     */
    public function statName(string $name, int $flags): array
    {
    }

    /**
     * unchangeAll.
     * Undo all changes done in the archive.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.unchangeall.php
     */
    public function unchangeAll(): bool
    {
    }

    /**
     * unchangeArchive.
     * Revert all global changes done in the archive.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.unchangearchive.php
     */
    public function unchangeArchive(): bool
    {
    }

    /**
     * unchangeIndex.
     * Revert all changes done to an entry at the given index.
     *
     * @param int $index
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.unchangeindex.php
     */
    public function unchangeIndex(int $index): bool
    {
    }

    /**
     * unchangeName.
     * Revert all changes done to an entry with the given name.
     *
     * @param string $name
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ziparchive.unchangename.php
     */
    public function unchangeName(string $name): bool
    {
    }
}
