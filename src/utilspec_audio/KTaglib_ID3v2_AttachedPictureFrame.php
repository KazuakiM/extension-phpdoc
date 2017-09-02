<?php

/**
 * KTaglib_ID3v2_AttachedPictureFrame.
 * Represents an ID3v2 frame that can hold a picture.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ktaglib-id3v2-attachedpictureframe.php
 */
class KTaglib_ID3v2_AttachedPictureFrame extends KTaglib_ID3v2_Frame
{
    /**
     * getDescription.
     * Returns a description for the picture in a picture frame.
     *
     * @return string
     *
     * @see http://php.net/manual/en/id3v2attachedpictureframe.getdescription.php
     */
    public function getDescription(): string
    {
    }

    /**
     * getMimeType.
     * Returns the mime type of the picture.
     *
     * @return string
     *
     * @see http://php.net/manual/en/id3v2attachedpictureframe.getmimetype.php
     */
    public function getMimeType(): string
    {
    }

    /**
     * setMimeType.
     * Set's the mime type of the picture.
     *
     * @param string $type
     *
     * @return string
     *
     * @see http://php.net/manual/en/id3v2attachedpictureframe.setmimetype.php
     */
    public function setMimeType(string $type): string
    {
    }

    /**
     * getType.
     * Returns the type of the image.
     *
     * @return int
     *
     * @see http://php.net/manual/en/id3v2attachedpictureframe.gettype.php
     */
    public function getType(): int
    {
    }

    /**
     * savePicture.
     * Saves the picture to a file.
     *
     * @param string $filename
     *
     * @return bool
     *
     * @see http://php.net/manual/en/id3v2attachedpictureframe.savepicture.php
     */
    public function savePicture(string $filename): bool
    {
    }

    /**
     * setPicture.
     * Sets the frame picture to the given image.
     *
     * @param string $filename
     *
     * @see http://php.net/manual/en/id3v2attachedpictureframe.setpicture.php
     */
    public function setPicture(string $filename): void
    {
    }

    /**
     * setType.
     * Set the type of the image.
     *
     * @param int $type
     *
     * @see http://php.net/manual/en/id3v2attachedpictureframe.settype.php
     */
    public function setType(int $type): void
    {
    }

    /* Inherited methods */
    //public function getSize(): int
    //public function __toString(): string
    //public function getAlbum(): string
    //public function getArtist(): string
    //public function getComment(): string
    //public function getGenre(): string
    //public function getTitle(): string
    //public function getTrack(): int
    //public function getYear(): int
    //public function isEmpty(): bool
}
