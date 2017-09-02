<?php

/**
 * CairoHintStyle.
 * Specifies the type of hinting to do on font outlines. Hinting is the process of fitting outlines to the pixel grid in order to improve the appearance of the result. Since hinting outlines involves distorting them, it also reduces the faithfulness to the original outline shapes. Not all of the outline hinting styles are supported by all font backends.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairohintstyle.php
 */
class CairoHintStyle
{
    const STYLE_DEFAULT = 0;
    const STYLE_NONE = 1;
    const STYLE_SLIGHT = 2;
    const STYLE_MEDIUM = 3;
    const STYLE_FULL = 4;
}
