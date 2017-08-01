<?php

/**
 * KTaglib_ID3v2_Frame.
 *
 * The base class for ID3v2 frames. ID3v2 tags are separated in various specialized frames. Some frames can exists multiple times.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ktaglib-id3v2-frame.php
 */
class KTaglib_ID3v2_Frame extends KTaglib_Tag
{
    /**
     * __toString.
     *
     * Returns a string representation of the frame
     *
     * @return string
     *
     * @see http://php.net/manual/en/id3v2frame.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * getSize.
     *
     * Returns the size of the frame in bytes
     *
     * @return int
     *
     * @see http://php.net/manual/en/id3v2frame.getsize.php
     */
    public function getSize(): int
    {
    }

    /* Inherited methods */
    //public function getAlbum(): string
    //public function getArtist(): string
    //public function getComment(): string
    //public function getGenre(): string
    //public function getTitle(): string
    //public function getTrack(): int
    //public function getYear(): int
    //public function isEmpty(): bool
}
