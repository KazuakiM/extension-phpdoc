<?php

/**
 * CairoRadialGradient.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairoradialgradient.php
 */
class CairoRadialGradient extends CairoGradientPattern
{
    /**
     * __construct.
     * The __construct purpose.
     *
     * @param float $x0
     * @param float $y0
     * @param float $r0
     * @param float $x1
     * @param float $y1
     * @param float $r1
     *
     * @see http://php.net/manual/en/cairoradialgradient.construct.php
     */
    public function __construct(float $x0, float $y0, float $r0, float $x1, float $y1, float $r1)
    {
    }

    /**
     * getCircles.
     * The getCircles purpose.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairoradialgradient.getcircles.php
     */
    public function getCircles(): array
    {
    }

    /* Inherited methods */
    //public function addColorStopRgb(string $offset, string $red, string $green, string $blue): void
    //public function addColorStopRgba(string $offset, string $red, string $green, string $blue, string $alpha): void
    //public function getColorStopCount(): int
    //public function getColorStopRgba(string $index): array
    //public function getExtend(): int
    //public function setExtend(int $extend): void
}
