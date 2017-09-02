<?php

/**
 * CairoSvgSurface.
 * Svg specific surface class, uses the SVG (standard vector graphics) surface backend.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairosvgsurface.php
 */
class CairoSvgSurface extends CairoSurface
{
    /**
     * __construct.
     * The __construct purpose.
     *
     * @param string $file
     * @param float  $width
     * @param float  $height
     *
     * @see http://php.net/manual/en/cairosvgsurface.construct.php
     */
    public function __construct(string $file, float $width, float $height)
    {
    }

    /**
     * getVersions.
     * Used to retrieve a list of supported SVG versions.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairosvgsurface.getversions.php
     */
    public static function getVersions(): array
    {
    }

    /**
     * restrictToVersion.
     * The restrictToVersion purpose.
     *
     * @param string $version
     *
     * @see http://php.net/manual/en/cairosvgsurface.restricttoversion.php
     */
    public function restrictToVersion(string $version): void
    {
    }

    /**
     * versionToString.
     * The versionToString purpose.
     *
     * @param int $version
     *
     * @return string
     *
     * @see http://php.net/manual/en/cairosvgsurface.versiontostring.php
     */
    public static function versionToString(int $version): string
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
