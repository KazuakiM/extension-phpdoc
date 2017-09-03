<?php

/**
 * UI\Point.
 * Points are used throughout UI to represent co-ordinates on a screen, control, or area.
 *
 * @property $x
 * @property $y
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-point.php
 */

namespace UI;

final class Point
{
    public $x;
    public $y;

    /**
     * __construct.
     * Construct a new Point.
     *
     * @param float $x
     * @param float $y
     *
     * @see http://php.net/manual/en/ui-point.construct.php
     */
    public function __construct(float $x, float $y)
    {
    }

    /**
     * at.
     * Size Coercion.
     *
     * @param float|UI\Size $point
     *
     * @return UI\Point
     *
     * @see http://php.net/manual/en/ui-point.at.php
     */
    public static function at(mixed $point): UI\Point
    {
    }

    /**
     * getX.
     * Retrieves X.
     *
     * @return float
     *
     * @see http://php.net/manual/en/ui-point.getx.php
     */
    public function getX(): float
    {
    }

    /**
     * getY.
     * Retrieves Y.
     *
     * @return float
     *
     * @see http://php.net/manual/en/ui-point.gety.php
     */
    public function getY(): float
    {
    }

    /**
     * setX.
     * Set X.
     *
     * @param float $point
     *
     * @see http://php.net/manual/en/ui-point.setx.php
     */
    public function setX(float $point): void
    {
    }

    /**
     * setY.
     * Set Y.
     *
     * @param float $point
     *
     * @see http://php.net/manual/en/ui-point.sety.php
     */
    public function setY(float $point): void
    {
    }
}
