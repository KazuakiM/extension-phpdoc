<?php

/**
 * CairoLinearGradient.
 * Create a new CairoLinearGradient along the line defined.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairolineargradient.php
 */
class CairoLinearGradient extends CairoGradientPattern
{
    /**
     * __construct.
     * The __construct purpose.
     *
     * @param float $x0
     * @param float $y0
     * @param float $x1
     * @param float $y1
     *
     * @see http://php.net/manual/en/cairolineargradient.construct.php
     */
    public function __construct(float $x0, float $y0, float $x1, float $y1)
    {
    }

    /**
     * getPoints.
     * The getPoints purpose.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairolineargradient.getpoints.php
     */
    public function getPoints(): array
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
