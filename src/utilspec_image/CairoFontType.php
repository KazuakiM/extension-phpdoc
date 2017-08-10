<?php

/**
 * CairoFontType.
 * CairoFontType class is an abstract final class that contains constants used to describe the type of a given CairoFontFace or CairoScaledFont. The font types are also known as "font backends" within cairo.
 * The type of a CairoFontFace is determined by the how it is created, an example would be the CairoToyFontFace::__construct(). The CairoFontFace type can be queried with CairoFontFace::getType() or cairo_font_face_get_type()
 * The various CairoFontFace functions can be used with a font face of any type.
 * The type of a CairoScaledFont is determined by the type of the CairoFontFace passed to CairoScaledFont::__construct() or cairo_scaled_font_create(). The scaled font type can be queried with CairoScaledFont::getType() or cairo_scaled_font_get_type().
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairofonttype.php
 */
class CairoFontType
{
    const TOY = 0;
    const FT = 1;
    const WIN32 = 2;
    const QUARTZ = 3;
}
