<?php

/**
 * CairoGradientPattern.
 * CairoGradientPattern is an abstract base class from which other Pattern classes derive. It cannot be instantiated directly.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairogradientpattern.php
 */
class CairoGradientPattern extends CairoPattern
{
    /**
     * addColorStopRgb.
     * The addColorStopRgb purpose.
     *
     * @param string $offset
     * @param string $red
     * @param string $green
     * @param string $blue
     *
     * @see http://php.net/manual/en/cairogradientpattern.addcolorstoprgb.php
     */
    public function addColorStopRgb(string $offset, string $red, string $green, string $blue): void
    {
    }

    /**
     * addColorStopRgba.
     * The addColorStopRgba purpose.
     *
     * @param string $offset
     * @param string $red
     * @param string $green
     * @param string $blue
     * @param string $alpha
     *
     * @see http://php.net/manual/en/cairogradientpattern.addcolorstoprgba.php
     */
    public function addColorStopRgba(string $offset, string $red, string $green, string $blue, string $alpha): void
    {
    }

    /**
     * getColorStopCount.
     * The getColorStopCount purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairogradientpattern.getcolorstopcount.php
     */
    public function getColorStopCount(): int
    {
    }

    /**
     * getColorStopRgba.
     * The getColorStopRgba purpose.
     *
     * @param string $index
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairogradientpattern.getcolorstoprgba.php
     */
    public function getColorStopRgba(string $index): array
    {
    }

    /**
     * getExtend.
     * The getExtend purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairogradientpattern.getextend.php
     */
    public function getExtend(): int
    {
    }

    /**
     * setExtend.
     * The setExtend purpose.
     *
     * @param int $extend
     *
     * @see http://php.net/manual/en/cairogradientpattern.setextend.php
     */
    public function setExtend(int $extend): void
    {
    }

    /* Inherited methods */
    //public function __construct()
    //public function getMatrix(): void
    //public function getType(): int
    //public function setMatrix(string $matrix): void
    //public function status(): int
}
