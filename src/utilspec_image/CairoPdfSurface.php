<?php

/**
 * CairoPdfSurface.
 *
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairopdfsurface.php
 */
class CairoPdfSurface extends CairoSurface
{
    /**
     * __construct.
     * The __construct purpose.
     *
     * @param string $file
     * @param float  $width
     * @param float  $height
     *
     * @see http://php.net/manual/en/cairopdfsurface.construct.php
     */
    public function __construct(string $file, float $width, float $height)
    {
    }

    /**
     * setSize.
     * The setSize purpose.
     *
     * @param string $width
     * @param string $height
     *
     * @see http://php.net/manual/en/cairopdfsurface.setsize.php
     */
    public function setSize(string $width, string $height): void
    {
    }

    /* Inherited methods */
    //public function __construct()
    //public function copyPage(): void
    //public function createSimilar(CairoSurface $other, int $content, string $width, string $height): void
    //public function finish(): void
    //public function flush(): void
    //public function getContent(): int
    //public function getDeviceOffset(): array
    //public function getFontOptions(): void
    //public function getType(): int
    //public function markDirty(): void
    //public function markDirtyRectangle(string $x, string $y, string $width, string $height): void
    //public function setDeviceOffset(string $x, string $y): void
    //public function setFallbackResolution(string $x, string $y): void
    //public function showPage(): void
    //public function status(): int
    //public function writeToPng(string $file): void
}
