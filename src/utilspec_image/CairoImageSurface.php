<?php

/**
 * CairoImageSurface.
 * CairoImageSurface provide the ability to render to memory buffers either allocated by cairo or by the calling code. The supported image formats are those defined in CairoFormat.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairoimagesurface.php
 */
class CairoImageSurface extends CairoSurface
{
    /**
     * __construct.
     * Creates a new CairoImageSurface.
     *
     * @param int $format
     * @param int $width
     * @param int $height
     *
     * @see http://php.net/manual/en/cairoimagesurface.construct.php
     */
    public function __construct(int $format, int $width, int $height)
    {
    }

    /**
     * createForData.
     * The createForData purpose.
     *
     * @param string $data
     * @param int    $format
     * @param int    $width
     * @param int    $height
     * @param int    $stride = -1
     *
     * @see http://php.net/manual/en/cairoimagesurface.createfordata.php
     */
    public static function createForData(string $data, int $format, int $width, int $height, int $stride = -1): void
    {
    }

    /**
     * createFromPng.
     * Creates a new CairoImageSurface form a png image file.
     *
     * @param string $file
     *
     * @return CairoImageSurface
     *
     * @see http://php.net/manual/en/cairoimagesurface.createfrompng.php
     */
    public static function createFromPng(string $file): CairoImageSurface
    {
    }

    /**
     * getData.
     * Gets the image data as string.
     *
     * @return string
     *
     * @see http://php.net/manual/en/cairoimagesurface.getdata.php
     */
    public function getData(): string
    {
    }

    /**
     * getFormat.
     * Get the image format.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairoimagesurface.getformat.php
     */
    public function getFormat(): int
    {
    }

    /**
     * getHeight.
     * Retrieves the height of the CairoImageSurface.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairoimagesurface.getheight.php
     */
    public function getHeight(): int
    {
    }

    /**
     * getStride.
     * The getStride purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairoimagesurface.getstride.php
     */
    public function getStride(): int
    {
    }

    /**
     * getWidth.
     * Retrieves the width of the CairoImageSurface.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairoimagesurface.getwidth.php
     */
    public function getWidth(): int
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
