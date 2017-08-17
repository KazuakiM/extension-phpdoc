<?php

/**
 * SWFText.
 * SWFText.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.swftext.php
 */
class SWFText
{
    /**
     * __construct.
     * Creates a new SWFText object.
     *
     * @see http://php.net/manual/en/swftext.construct.php
     */
    public function __construct()
    {
    }

    /**
     * addString.
     * Draws a string.
     *
     * @param string $string
     *
     * @see http://php.net/manual/en/swftext.addstring.php
     */
    public function addString(string $string): void
    {
    }

    /**
     * addUTF8String.
     * Writes the given text into this SWFText object at the current pen position, using the current font, height, spacing, and color.
     *
     * @param string $text
     *
     * @see http://php.net/manual/en/swftext.addutf8string.php
     */
    public function addUTF8String(string $text): void
    {
    }

    /**
     * getAscent.
     * Returns the ascent of the current font at its current size, or 0 if not available.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swftext.getascent.php
     */
    public function getAscent(): float
    {
    }

    /**
     * getDescent.
     * Returns the descent of the current font at its current size, or 0 if not available.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swftext.getdescent.php
     */
    public function getDescent(): float
    {
    }

    /**
     * getLeading.
     * Returns the leading of the current font at its current size, or 0 if not available.
     *
     * @return float
     *
     * @see http://php.net/manual/en/swftext.getleading.php
     */
    public function getLeading(): float
    {
    }

    /**
     * getUTF8Width.
     * calculates the width of the given string in this text objects current font and size.
     *
     * @param string $string
     *
     * @return float
     *
     * @see http://php.net/manual/en/swftext.getutf8width.php
     */
    public function getUTF8Width(string $string): float
    {
    }

    /**
     * getWidth.
     * Computes string's width.
     *
     * @param string $string
     *
     * @return float
     *
     * @see http://php.net/manual/en/swftext.getwidth.php
     */
    public function getWidth(string $string): float
    {
    }

    /**
     * moveTo.
     * Moves the pen.
     *
     * @param float $x
     * @param float $y
     *
     * @see http://php.net/manual/en/swftext.moveto.php
     */
    public function moveTo(float $x, float $y): void
    {
    }

    /**
     * setColor.
     * Sets the current text color.
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $a     = 255
     *
     * @see http://php.net/manual/en/swftext.setcolor.php
     */
    public function setColor(int $red, int $green, int $blue, int $a = 255): void
    {
    }

    /**
     * setFont.
     * Sets the current font.
     *
     * @param SWFFont $font
     *
     * @see http://php.net/manual/en/swftext.setfont.php
     */
    public function setFont(SWFFont $font): void
    {
    }

    /**
     * setHeight.
     * Sets the current font height.
     *
     * @param float $height
     *
     * @see http://php.net/manual/en/swftext.setheight.php
     */
    public function setHeight(float $height): void
    {
    }

    /**
     * setSpacing.
     * Sets the current font spacing.
     *
     * @param float $spacing
     *
     * @see http://php.net/manual/en/swftext.setspacing.php
     */
    public function setSpacing(float $spacing): void
    {
    }
}
