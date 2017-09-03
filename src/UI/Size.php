<?php

/**
 * UI\Size.
 * Sizes are used throughout UI to represent the size of a screen, control, or area.
 *
 * @property $width
 * @property $height
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-size.php
 */

namespace UI;

final class Size
{
    public $width;
    public $height;

    /**
     * __construct.
     * Construct a new Size.
     *
     * @param float $width
     * @param float $height
     *
     * @see http://php.net/manual/en/ui-size.construct.php
     */
    public function __construct(float $width, float $height)
    {
    }

    /**
     * getHeight.
     * Retrieves Height.
     *
     * @return float
     *
     * @see http://php.net/manual/en/ui-size.getheight.php
     */
    public function getHeight(): float
    {
    }

    /**
     * getWidth.
     * Retrives Width.
     *
     * @return float
     *
     * @see http://php.net/manual/en/ui-size.getwidth.php
     */
    public function getWidth(): float
    {
    }

    /**
     * of.
     * Point Coercion.
     *
     * @param float|UI\Point $size
     *
     * @return UI\Size
     *
     * @see http://php.net/manual/en/ui-size.of.php
     */
    public static function of(mixed $size): UI\Size
    {
    }

    /**
     * setHeight.
     * Set Height.
     *
     * @param float $size
     *
     * @see http://php.net/manual/en/ui-size.setheight.php
     */
    public function setHeight(float $size): void
    {
    }

    /**
     * setWidth.
     * Set Width.
     *
     * @param float $size
     *
     * @see http://php.net/manual/en/ui-size.setwidth.php
     */
    public function setWidth(float $size): void
    {
    }
}
