<?php

/**
 * HaruAnnotation.
 * Haru PDF Annotation Class.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.haruannotation.php
 */
class HaruAnnotation
{
    /**
     * setBorderStyle.
     * Set the border style of the annotation.
     *
     * @param float $width
     * @param int   $dash_on
     * @param int   $dash_off
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/haruannotation.setborderstyle.php
     */
    public function setBorderStyle(float $width, int $dash_on, int $dash_off): bool
    {
    }

    /**
     * setHighlightMode.
     * Set the highlighting mode of the annotation.
     *
     * @param int $mode
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/haruannotation.sethighlightmode.php
     */
    public function setHighlightMode(int $mode): bool
    {
    }

    /**
     * setIcon.
     * Set the icon style of the annotation.
     *
     * @param int $icon
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/haruannotation.seticon.php
     */
    public function setIcon(int $icon): bool
    {
    }

    /**
     * setOpened.
     * Set the initial state of the annotation.
     *
     * @param bool $opened
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/haruannotation.setopened.php
     */
    public function setOpened(bool $opened): bool
    {
    }
}
