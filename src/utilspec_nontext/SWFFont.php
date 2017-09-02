<?php

/**
 * SWFFont.
 * The SWFFont object represent a reference to the font definition, for us with SWFText::setFont() and SWFTextField::setFont().
 *
 * @author Kazuaki MABUCHI
 * @copyright Copyright(http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under CC by 3.0 or later(http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.swffont.php
 */
class SWFFont
{
    /**
     * __construct.
     * Loads a font definition.
     *
     * @param string $filename
     *
     * @see http://php.net/manual/en/swffont.construct.php
     */
    public function __construct(string $filename)
    {
    }

    /**
     * getAscent.
     * Returns the ascent of the font, or 0 if not available.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swffont.getascent.php
     */
    public function getAscent(): float
    {
    }

    /**
     * getDescent.
     * Returns the descent of the font, or 0 if not available.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swffont.getdescent.php
     */
    public function getDescent(): float
    {
    }

    /**
     * getLeading.
     * Returns the leading of the font, or 0 if not available.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swffont.getleading.php
     */
    public function getLeading(): float
    {
    }

    /**
     * getShape.
     * Returns the glyph shape of a char as a text string.
     *
     * @param int $code
     *
     * @return string
     *
     * @see http://php.net/manual/en/swffont.getshape.php
     */
    public function getShape(int $code): string
    {
    }

    /**
     * getUTF8Width.
     * Calculates the width of the given string in this font at full height.
     *
     * @param string $string
     *
     * @return float
     *
     * @see http://php.net/manual/en/swffont.getutf8width.php
     */
    public function getUTF8Width(string $string): float
    {
    }

    /**
     * getWidth.
     * Returns the string's width.
     *
     * @param string $string
     *
     * @return float
     *
     * @see http://php.net/manual/en/swffont.getwidth.php
     */
    public function getWidth(string $string): float
    {
    }
}
