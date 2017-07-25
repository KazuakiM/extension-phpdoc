<?php

/**
 * CURLFile.
 *
 * CURLFile should be used to upload a file with CURLOPT_POSTFIELDS.
 *
 * @property string $name
 * @property string $mime
 * @property string $postname
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.curlfile.php
 */
class CURLFile
{
    public $name;
    public $mime;
    public $postname;

    /**
     * __construct.
     *
     * curl_file_create — Create a CURLFile object
     *
     * @param string $filename
     * @param string $mimetype (optional)
     * @param string $postname (optional)
     *
     * @see http://php.net/manual/en/curlfile.construct.php
     */
    public function __construct(string $filename, string $mimetype, string $postname)
    {
    }

    /**
     * __wakeup.
     *
     * Unserialization handler
     *
     *
     * @see http://php.net/manual/en/curlfile.wakeup.php
     */
    public function __wakeup(): void
    {
    }

    /**
     * getFilename.
     *
     * Get file name
     *
     * @return string
     *
     * @see http://php.net/manual/en/curlfile.getfilename.php
     */
    public function getFilename(): string
    {
    }

    /**
     * getMimeType.
     *
     * Get MIME type
     *
     * @return string
     *
     * @see http://php.net/manual/en/curlfile.getmimetype.php
     */
    public function getMimeType(): string
    {
    }

    /**
     * getPostFilename.
     *
     * Get file name for POST
     *
     * @return string
     *
     * @see http://php.net/manual/en/curlfile.getpostfilename.php
     */
    public function getPostFilename(): string
    {
    }

    /**
     * setMimeType.
     *
     * Set MIME type
     *
     * @param string $mime
     *
     * @see http://php.net/manual/en/curlfile.setmimetype.php
     */
    public function setMimeType(string $mime): void
    {
    }

    /**
     * setPostFilename.
     *
     * Set file name for POST
     *
     * @param string $postname
     *
     * @see http://php.net/manual/en/curlfile.setpostfilename.php
     */
    public function setPostFilename(string $postname): void
    {
    }
}
