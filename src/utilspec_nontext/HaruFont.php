<?php

/**
 * HaruFont.
 * Haru PDF Font Class.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.harufont.php
 */
class HaruFont
{
    /**
     * getAscent.
     * Get the vertical ascent of the font.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harufont.getascent.php
     */
    public function getAscent(): int
    {
    }

    /**
     * getCapHeight.
     * Get the distance from the baseline of uppercase letters.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harufont.getcapheight.php
     */
    public function getCapHeight(): int
    {
    }

    /**
     * getDescent.
     * Get the vertical descent of the font.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harufont.getdescent.php
     */
    public function getDescent(): int
    {
    }

    /**
     * getEncodingName.
     * Get the name of the encoding.
     *
     * @throws HaruException
     *
     * @return string
     *
     * @see http://php.net/manual/en/harufont.getencodingname.php
     */
    public function getEncodingName(): string
    {
    }

    /**
     * getFontName.
     * Get the name of the font.
     *
     * @throws HaruException
     *
     * @return string
     *
     * @see http://php.net/manual/en/harufont.getfontname.php
     */
    public function getFontName(): string
    {
    }

    /**
     * getTextWidth.
     * Get the total width of the text, number of characters, number of words and number of spaces.
     *
     * @param string $text
     *
     * @throws HaruException
     *
     * @return array
     *
     * @see http://php.net/manual/en/harufont.gettextwidth.php
     */
    public function getTextWidth(string $text): array
    {
    }

    /**
     * getUnicodeWidth.
     * Get the width of the character in the font.
     *
     * @param int $character
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harufont.getunicodewidth.php
     */
    public function getUnicodeWidth(int $character): int
    {
    }

    /**
     * getXHeight.
     * Get the distance from the baseline of lowercase letters.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harufont.getxheight.php
     */
    public function getXHeight(): int
    {
    }

    /**
     * measureText.
     * Calculate the number of characters which can be included within the specified width.
     *
     * @param string $text
     * @param float  $width
     * @param float  $font_size
     * @param float  $char_space
     * @param float  $word_space
     * @param bool   $word_wrap  = false
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harufont.measuretext.php
     */
    public function measureText(string $text, float $width, float $font_size, float $char_space, float $word_space, bool $word_wrap = false): int
    {
    }
}
