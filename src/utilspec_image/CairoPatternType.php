<?php

/**
 * CairoPatternType.
 * CairoPatternType is used to describe the type of a given pattern.
 * The type of a pattern is determined by the function used to create it. The cairo_pattern_create_rgb() and cairo_pattern_create_rgba() functions create CairoPatternType::SOLID patterns. The remaining cairo_pattern_create_* functions map to pattern types in obvious ways.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairopatterntype.php
 */
class CairoPatternType
{
    const SOLID = 0;
    const SURFACE = 1;
    const LINEAR = 2;
    const RADIAL = 3;
}
