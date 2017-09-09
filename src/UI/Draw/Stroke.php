<?php

/**
 * UI\Draw\Stroke.
 * Holds the configuration for the Pen to perform a stroke.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-draw-stroke.php
 */

namespace UI\Draw;

class Stroke
{
    /**
     * __construct.
     * Construct a new Stroke.
     *
     * @param int   $cap        = UI\Draw\Line\Cap::Flat
     * @param int   $join       = UI\Draw\Line\Join::Miter
     * @param float $thickness  = 1
     * @param float $miterLimit = 10
     *
     * @see http://php.net/manual/en/ui-draw-stroke.construct.php
     */
    public function __construct(int $cap = UI\Draw\Line\Cap::Flat, int $join = UI\Draw\Line\Join::Miter, float $thickness = 1, float $miterLimit = 10)
    {
    }

    /**
     * getCap.
     * Get Line Cap.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-draw-stroke.getcap.php
     */
    public function getCap(): int
    {
    }

    /**
     * getJoin.
     * Get Line Join.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-draw-stroke.getjoin.php
     */
    public function getJoin(): int
    {
    }

    /**
     * getMiterLimit.
     * Get Miter Limit.
     *
     * @return float
     *
     * @see http://php.net/manual/en/ui-draw-stroke.getmiterlimit.php
     */
    public function getMiterLimit(): float
    {
    }

    /**
     * getThickness.
     * Get Thickness.
     *
     * @return float
     *
     * @see http://php.net/manual/en/ui-draw-stroke.getthickness.php
     */
    public function getThickness(): float
    {
    }

    /**
     * setCap.
     * Set Line Cap.
     *
     * @param int $cap
     *
     * @see http://php.net/manual/en/ui-draw-stroke.setcap.php
     */
    public function setCap(int $cap): void
    {
    }

    /**
     * setJoin.
     * Set Line Join.
     *
     * @param int $join
     *
     * @see http://php.net/manual/en/ui-draw-stroke.setjoin.php
     */
    public function setJoin(int $join): void
    {
    }

    /**
     * setMiterLimit.
     * Set Miter Limit.
     *
     * @param float $limit
     *
     * @see http://php.net/manual/en/ui-draw-stroke.setmiterlimit.php
     */
    public function setMiterLimit(float $limit): void
    {
    }

    /**
     * setThickness.
     * Set Thickness.
     *
     * @param float $thickness
     *
     * @see http://php.net/manual/en/ui-draw-stroke.setthickness.php
     */
    public function setThickness(float $thickness): void
    {
    }
}
