<?php

/**
 * GmagickPixel.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.gmagickpixel.php
 */
class GmagickPixel
{
    /**
     * __construct.
     * The GmagickPixel constructor.
     *
     * @param string $color (optional)
     *
     * @see http://php.net/manual/en/gmagickpixel.construct.php
     */
    public function __construct(string $color)
    {
    }

    /**
     * getcolor.
     * Returns the color.
     *
     * @param bool $as_array        = false
     * @param bool $normalize_array = false
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/gmagickpixel.getcolor.php
     */
    public function getcolor(bool $as_array = false, bool $normalize_array = false): mixed
    {
    }

    /**
     * getcolorcount.
     * Returns the color count associated with this color.
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagickpixel.getcolorcount.php
     */
    public function getcolorcount(): int
    {
    }

    /**
     * getcolorvalue.
     * Gets the normalized value of the provided color channel.
     *
     * @param int $color
     *
     * @return float
     *
     * @see http://php.net/manual/en/gmagickpixel.getcolorvalue.php
     */
    public function getcolorvalue(int $color): float
    {
    }

    /**
     * setcolor.
     * Sets the color.
     *
     * @param string $color
     *
     * @return GmagickPixel
     *
     * @see http://php.net/manual/en/gmagickpixel.setcolor.php
     */
    public function setcolor(string $color): GmagickPixel
    {
    }

    /**
     * setcolorvalue.
     * Sets the normalized value of one of the channels.
     *
     * @param int   $color
     * @param float $value
     *
     * @return GmagickPixel
     *
     * @see http://php.net/manual/en/gmagickpixel.setcolorvalue.php
     */
    public function setcolorvalue(int $color, float $value): GmagickPixel
    {
    }
}
