<?php

/**
 * CairoFontFace.
 * CairoFontFace abstract class represents a particular font at a particular weight, slant, and other characteristic but no transformation or size.
 * Note: This class can not be instantiated directly, it is created by CairoContext::getFontFace() or cairo_scaled_font_get_font_face().
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairofontface.php
 */
class CairoFontFace
{
    /**
     * __construct.
     * Creates a new CairoFontFace object.
     *
     * @see http://php.net/manual/en/cairofontface.construct.php
     */
    public function __construct()
    {
    }

    /**
     * getType.
     * Retrieves the font face type.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairofontface.gettype.php
     */
    public function getType(): int
    {
    }

    /**
     * status.
     * Check for CairoFontFace errors.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairofontface.status.php
     */
    public function status(): int
    {
    }
}
