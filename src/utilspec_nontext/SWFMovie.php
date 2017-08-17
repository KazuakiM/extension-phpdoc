<?php

/**
 * SWFMovie.
 * SWFMovie is a movie object representing an SWF movie.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.swfmovie.php
 */
class SWFMovie
{
    /**
     * __construct.
     * Creates a new movie object, representing an SWF version 4 movie.
     *
     * @param int $version (optional)
     *
     * @see http://php.net/manual/en/swfmovie.construct.php
     */
    public function __construct(int $version)
    {
    }

    /**
     * add.
     * Adds any type of data to a movie.
     *
     * @param object $instance
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/swfmovie.add.php
     */
    public function add(object $instance): mixed
    {
    }

    /**
     * addExport.
     * Description.
     *
     * @param SWFCharacter $char
     * @param string       $name
     *
     * @see http://php.net/manual/en/swfmovie.addexport.php
     */
    public function addExport(SWFCharacter $char, string $name): void
    {
    }

    /**
     * addFont.
     * Description.
     *
     * @param SWFFont $font
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/swfmovie.addfont.php
     */
    public function addFont(SWFFont $font): mixed
    {
    }

    /**
     * importChar.
     * Description.
     *
     * @param string $libswf
     * @param string $name
     *
     * @return SWFSprite
     *
     * @see http://php.net/manual/en/swfmovie.importchar.php
     */
    public function importChar(string $libswf, string $name): SWFSprite
    {
    }

    /**
     * importFont.
     * Description.
     *
     * @param string $libswf
     * @param string $name
     *
     * @return SWFFontChar
     *
     * @see http://php.net/manual/en/swfmovie.importfont.php
     */
    public function importFont(string $libswf, string $name): SWFFontChar
    {
    }

    /**
     * labelFrame.
     * Labels a frame.
     *
     * @param string $label
     *
     * @see http://php.net/manual/en/swfmovie.labelframe.php
     */
    public function labelFrame(string $label): void
    {
    }

    /**
     * nextFrame.
     * Moves to the next frame of the animation.
     *
     *
     * @see http://php.net/manual/en/swfmovie.nextframe.php
     */
    public function nextFrame(): void
    {
    }

    /**
     * output.
     * Dumps your lovingly prepared movie out.
     *
     * @param int $compression (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/swfmovie.output.php
     */
    public function output(int $compression): int
    {
    }

    /**
     * remove.
     * Removes the object instance from the display list.
     *
     * @param object $instance
     *
     * @see http://php.net/manual/en/swfmovie.remove.php
     */
    public function remove(object $instance): void
    {
    }

    /**
     * save.
     * Saves the SWF movie in a file.
     *
     * @param string $filename
     * @param int    $compression = -1
     *
     * @return int
     *
     * @see http://php.net/manual/en/swfmovie.save.php
     */
    public function save(string $filename, int $compression = -1): int
    {
    }

    /**
     * saveToFile.
     * Description.
     *
     * @param resource $x
     * @param int      $compression = -1
     *
     * @return int
     *
     * @see http://php.net/manual/en/swfmovie.savetofile.php
     */
    public function saveToFile(resource $x, int $compression = -1): int
    {
    }

    /**
     * setbackground.
     * Sets the background color.
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     *
     * @see http://php.net/manual/en/swfmovie.setbackground.php
     */
    public function setbackground(int $red, int $green, int $blue): void
    {
    }

    /**
     * setDimension.
     * Sets the movie's width and height.
     *
     * @param float $width
     * @param float $height
     *
     * @see http://php.net/manual/en/swfmovie.setdimension.php
     */
    public function setDimension(float $width, float $height): void
    {
    }

    /**
     * setFrames.
     * Sets the total number of frames in the animation.
     *
     * @param int $number
     *
     * @see http://php.net/manual/en/swfmovie.setframes.php
     */
    public function setFrames(int $number): void
    {
    }

    /**
     * setRate.
     * Sets the animation's frame rate.
     *
     * @param float $rate
     *
     * @see http://php.net/manual/en/swfmovie.setrate.php
     */
    public function setRate(float $rate): void
    {
    }

    /**
     * startSound.
     * Description.
     *
     * @param SWFSound $sound
     *
     * @return SWFSoundInstance
     *
     * @see http://php.net/manual/en/swfmovie.startsound.php
     */
    public function startSound(SWFSound $sound): SWFSoundInstance
    {
    }

    /**
     * stopSound.
     * Description.
     *
     * @param SWFSound $sound
     *
     * @see http://php.net/manual/en/swfmovie.stopsound.php
     */
    public function stopSound(SWFSound $sound): void
    {
    }

    /**
     * streamMP3.
     * Streams a MP3 file.
     *
     * @param mixed $mp3file
     * @param float $skip    = 0
     *
     * @return int
     *
     * @see http://php.net/manual/en/swfmovie.streammp3.php
     */
    public function streamMP3(mixed $mp3file, float $skip = 0): int
    {
    }

    /**
     * writeExports.
     * Description.
     *
     *
     * @see http://php.net/manual/en/swfmovie.writeexports.php
     */
    public function writeExports(): void
    {
    }
}
