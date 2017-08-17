<?php

/**
 * SWFFill.
 * The SWFFill object allows you to transform (scale, skew, rotate) bitmap and gradient fills.
 * swffill objects are created by the SWFShape::addFill() method.
 *
 * @copyright Copyright(http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under CC by 3.0 or later(http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.swffill.php
 */
class SWFFill
{
    /**
     * moveTo.
     * Moves fill origin.
     *
     * @param float $x
     * @param float $y
     *
     * @see http://php.net/manual/en/swffill.moveto.php
     */
    public function moveTo(float $x, float $y): void
    {
    }

    /**
     * rotateTo.
     * Sets fill's rotation.
     *
     * @param float $angle
     *
     * @see http://php.net/manual/en/swffill.rotateto.php
     */
    public function rotateTo(float $angle): void
    {
    }

    /**
     * scaleTo.
     * Sets fill's scale.
     *
     * @param float $x
     * @param float $y (optional)
     *
     * @see http://php.net/manual/en/swffill.scaleto.php
     */
    public function scaleTo(float $x, float $y): void
    {
    }

    /**
     * skewXTo.
     * Sets fill x-skew.
     *
     * @param float $x
     *
     * @see http://php.net/manual/en/swffill.skewxto.php
     */
    public function skewXTo(float $x): void
    {
    }

    /**
     * skewYTo.
     * Sets fill y-skew.
     *
     * @param float $y
     *
     * @see http://php.net/manual/en/swffill.skewyto.php
     */
    public function skewYTo(float $y): void
    {
    }
}
