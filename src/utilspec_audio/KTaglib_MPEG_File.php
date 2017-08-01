<?php

/**
 * KTaglib_MPEG_File.
 * Represents an MPEG file. MPEG files can have ID3v1, ID3v2 tags and audio properties.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ktaglib-mpeg-file.php
 */
class KTaglib_MPEG_File
{
    /**
     * __construct.
     * Opens a new file.
     *
     * @param string $filename
     *
     * @see http://php.net/manual/en/mpegfile.construct.php
     */
    public function __construct(string $filename)
    {
    }

    /**
     * getAudioProperties.
     * Returns an object that provides access to the audio properties.
     *
     * @return KTaglib_MPEG_File
     *
     * @see http://php.net/manual/en/mpegfile.getaudioproperties.php
     */
    public function getAudioProperties(): KTaglib_MPEG_File
    {
    }

    /**
     * getID3v1Tag.
     * Returns an object representing an ID3v1 tag.
     *
     * @param bool $create = false
     *
     * @return KTaglib_ID3v1_Tag
     *
     * @see http://php.net/manual/en/mpegfile.getid3v1tag.php
     */
    public function getID3v1Tag(bool $create = false): KTaglib_ID3v1_Tag
    {
    }

    /**
     * getID3v2Tag.
     * Returns a ID3v2 object.
     *
     * @param bool $create = false
     *
     * @return KTaglib_ID3v2_Tag
     *
     * @see http://php.net/manual/en/mpegfile.getid3v2tag.php
     */
    public function getID3v2Tag(bool $create = false): KTaglib_ID3v2_Tag
    {
    }
}
