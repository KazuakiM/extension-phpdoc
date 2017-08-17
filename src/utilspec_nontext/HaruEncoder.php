<?php

/**
 * HaruEncoder.
 * Haru PDF Encoder Class.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.haruencoder.php
 */
class HaruEncoder
{
    /**
     * getByteType.
     * Get the type of the byte in the text.
     *
     * @param string $text
     * @param int    $index
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/haruencoder.getbytetype.php
     */
    public function getByteType(string $text, int $index): int
    {
    }

    /**
     * getType.
     * Get the type of the encoder.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/haruencoder.gettype.php
     */
    public function getType(): int
    {
    }

    /**
     * getUnicode.
     * Convert the specified character to unicode.
     *
     * @param int $character
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/haruencoder.getunicode.php
     */
    public function getUnicode(int $character): int
    {
    }

    /**
     * getWritingMode.
     * Get the writing mode of the encoder.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/haruencoder.getwritingmode.php
     */
    public function getWritingMode(): int
    {
    }
}
