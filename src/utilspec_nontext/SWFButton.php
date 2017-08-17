<?php

/**
 * SWFButton.
 * SWFButton.
 *
 * @copyright Copyright(http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under CC by 3.0 or later(http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.swfbutton.php
 */
class SWFButton
{
    /**
     * __construct.
     * Creates a new Button.
     *
     * @see http://php.net/manual/en/swfbutton.construct.php
     */
    public function __construct()
    {
    }

    /**
     * setUp.
     * Alias for addShape(shape, SWFBUTTON_UP).
     *
     * @param SWFShape $shape
     *
     * @see http://php.net/manual/en/swfbutton.setup.php
     */
    public function setUp(SWFShape $shape): void
    {
    }

    /**
     * addAction.
     * Adds an action.
     *
     * @param SWFAction $action
     * @param int       $flags
     *
     * @see http://php.net/manual/en/swfbutton.addaction.php
     */
    public function addAction(SWFAction $action, int $flags): void
    {
    }

    /**
     * addASound.
     * Associates a sound with a button transition.
     *
     * @param SWFSound $sound
     * @param int      $flags
     *
     * @return SWFSoundInstance
     *
     * @see http://php.net/manual/en/swfbutton.addasound.php
     */
    public function addASound(SWFSound $sound, int $flags): SWFSoundInstance
    {
    }

    /**
     * addShape.
     * Adds a shape to a button.
     *
     * @param SWFShape $shape
     * @param int      $flags
     *
     * @see http://php.net/manual/en/swfbutton.addshape.php
     */
    public function addShape(SWFShape $shape, int $flags): void
    {
    }

    /**
     * setAction.
     * Sets the action.
     *
     * @param SWFAction $action
     *
     * @see http://php.net/manual/en/swfbutton.setaction.php
     */
    public function setAction(SWFAction $action): void
    {
    }

    /**
     * setDown.
     * Alias for addShape(shape, SWFBUTTON_DOWN).
     *
     * @param SWFShape $shape
     *
     * @see http://php.net/manual/en/swfbutton.setdown.php
     */
    public function setDown(SWFShape $shape): void
    {
    }

    /**
     * setHit.
     * Alias for addShape(shape, SWFBUTTON_HIT).
     *
     * @param SWFShape $shape
     *
     * @see http://php.net/manual/en/swfbutton.sethit.php
     */
    public function setHit(SWFShape $shape): void
    {
    }

    /**
     * setMenu.
     * enable track as menu button behaviour.
     *
     * @param int $flag
     *
     * @see http://php.net/manual/en/swfbutton.setmenu.php
     */
    public function setMenu(int $flag): void
    {
    }

    /**
     * setOver.
     * Alias for addShape(shape, SWFBUTTON_OVER).
     *
     * @param SWFShape $shape
     *
     * @see http://php.net/manual/en/swfbutton.setover.php
     */
    public function setOver(SWFShape $shape): void
    {
    }
}
