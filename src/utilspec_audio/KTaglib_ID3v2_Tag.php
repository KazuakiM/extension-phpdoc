<?php

/**
 * KTaglib_ID3v2_Tag.
 *
 * Represents and ID3v2 tag. It provides a list of ID3v2 frames and can be used to add and remove additional frames.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ktaglib-id3v2-tag.php
 */
class KTaglib_ID3v2_Tag extends KTaglib_Tag
{
    /**
     * addFrame.
     *
     * Add a frame to the ID3v2 tag
     *
     * @param KTaglib_ID3v2_Frame $frame
     *
     * @return bool
     *
     * @see http://php.net/manual/en/id3v2tag.addframe.php
     */
    public function addFrame(KTaglib_ID3v2_Frame $frame): bool
    {
    }

    /**
     * getFrameList.
     *
     * Returns an array of ID3v2 frames, associated with the ID3v2 tag
     *
     * @return array
     *
     * @see http://php.net/manual/en/id3v2tag.getframelist.php
     */
    public function getFrameList(): array
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
