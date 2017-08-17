<?php

/**
 * SWFSprite.
 * An SWFSprite is also known as a "movie clip", this allows one to create objects which are animated in their own timelines. Hence, the sprite has most of the same methods as the movie.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.swfsprite.php
 */
class SWFSprite
{
    /**
     * __construct.
     * Creates a movie clip (a sprite).
     *
     * @see http://php.net/manual/en/swfsprite.construct.php
     */
    public function __construct()
    {
    }

    /**
     * add.
     * Adds an object to a sprite.
     *
     * @param object $object
     *
     * @see http://php.net/manual/en/swfsprite.add.php
     */
    public function add(object $object): void
    {
    }

    /**
     * labelFrame.
     * Labels frame.
     *
     * @param string $label
     *
     * @see http://php.net/manual/en/swfsprite.labelframe.php
     */
    public function labelFrame(string $label): void
    {
    }

    /**
     * nextFrame.
     * Moves to the next frame of the animation.
     *
     *
     * @see http://php.net/manual/en/swfsprite.nextframe.php
     */
    public function nextFrame(): void
    {
    }

    /**
     * remove.
     * Removes an object to a sprite.
     *
     * @param object $object
     *
     * @see http://php.net/manual/en/swfsprite.remove.php
     */
    public function remove(object $object): void
    {
    }

    /**
     * setFrames.
     * Sets the total number of frames in the animation.
     *
     * @param int $number
     *
     * @see http://php.net/manual/en/swfsprite.setframes.php
     */
    public function setFrames(int $number): void
    {
    }

    /**
     * startSound.
     * Description.
     *
     * @param SWFSound $sount
     *
     * @return SWFSoundInstance
     *
     * @see http://php.net/manual/en/swfsprite.startsound.php
     */
    public function startSound(SWFSound $sount): SWFSoundInstance
    {
    }

    /**
     * stopSound.
     * Description.
     *
     * @param SWFSound $sount
     *
     * @see http://php.net/manual/en/swfsprite.stopsound.php
     */
    public function stopSound(SWFSound $sount): void
    {
    }
}
