<?php

/**
 * HaruDestination.
 * Haru PDF Destination Class.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.harudestination.php
 */
class HaruDestination
{
    /**
     * setFit.
     * Set the appearance of the page to fit the window.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudestination.setfit.php
     */
    public function setFit(): bool
    {
    }

    /**
     * setFitB.
     * Set the appearance of the page to fit the bounding box of the page within the window.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudestination.setfitb.php
     */
    public function setFitB(): bool
    {
    }

    /**
     * setFitBH.
     * Set the appearance of the page to fit the width of the bounding box.
     *
     * @param float $top
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudestination.setfitbh.php
     */
    public function setFitBH(float $top): bool
    {
    }

    /**
     * setFitBV.
     * Set the appearance of the page to fit the height of the boudning box.
     *
     * @param float $left
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudestination.setfitbv.php
     */
    public function setFitBV(float $left): bool
    {
    }

    /**
     * setFitH.
     * Set the appearance of the page to fit the window width.
     *
     * @param float $top
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudestination.setfith.php
     */
    public function setFitH(float $top): bool
    {
    }

    /**
     * setFitR.
     * Set the appearance of the page to fit the specified rectangle.
     *
     * @param float $left
     * @param float $bottom
     * @param float $right
     * @param float $top
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudestination.setfitr.php
     */
    public function setFitR(float $left, float $bottom, float $right, float $top): bool
    {
    }

    /**
     * setFitV.
     * Set the appearance of the page to fit the window height.
     *
     * @param
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudestination.setfitv.php
     */
    public function setFitV(float $left): bool
    {
    }

    /**
     * setXYZ.
     * Set the appearance of the page.
     *
     * @param float $left
     * @param float $top
     * @param float $zoom
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harudestination.setxyz.php
     */
    public function setXYZ(float $left, float $top, float $zoom): bool
    {
    }
}
