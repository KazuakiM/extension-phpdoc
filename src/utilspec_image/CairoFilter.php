<?php

/**
 * CairoFilter.
 * A CairoFilter is used to indicate what filtering should be applied when reading pixel values from patterns. See CairoPattern::setSource() or cairo_pattern_set_source() for indicating the desired filter to be used with a particular pattern.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairofilter.php
 */
class CairoFilter
{
    const FAST = 0;
    const GOOD = 1;
    const BEST = 2;
    const NEAREST = 3;
    const BILINEAR = 4;
    const GAUSSIAN = 5;
}
