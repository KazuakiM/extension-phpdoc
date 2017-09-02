<?php

/**
 * CairoFormat.
 * CairoFormat enums are used to identify the memory format of the image data.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairoformat.php
 */
class CairoFormat
{
    const ARGB32 = 0;
    const RGB24 = 1;
    const A8 = 2;
    const A1 = 3;

    /**
     * strideForWidth.
     * Provides an appropiate stride to use.
     *
     * @param int $format
     * @param int $width
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairoformat.strideforwidth.php
     */
    public static function strideForWidth(int $format, int $width): int
    {
    }
}
