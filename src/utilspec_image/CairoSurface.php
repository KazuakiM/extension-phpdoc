<?php

/**
 * CairoSurface.
 * This is the base-class for all other Surface types. CairoSurface is the abstract type representing all different drawing targets that cairo can render to. The actual drawings are performed using a CairoContext.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairosurface.php
 */
class CairoSurface
{
    /**
     * __construct.
     * The __construct purpose.
     *
     * @see http://php.net/manual/en/cairosurface.construct.php
     */
    public function __construct()
    {
    }

    /**
     * copyPage.
     * The copyPage purpose.
     *
     *
     * @see http://php.net/manual/en/cairosurface.copypage.php
     */
    public function copyPage(): void
    {
    }

    /**
     * createSimilar.
     * The createSimilar purpose.
     *
     * @param CairoSurface $other
     * @param int          $content
     * @param string       $width
     * @param string       $height
     *
     * @see http://php.net/manual/en/cairosurface.createsimilar.php
     */
    public function createSimilar(CairoSurface $other, int $content, string $width, string $height): void
    {
    }

    /**
     * finish.
     * The finish purpose.
     *
     *
     * @see http://php.net/manual/en/cairosurface.finish.php
     */
    public function finish(): void
    {
    }

    /**
     * flush.
     * The flush purpose.
     *
     *
     * @see http://php.net/manual/en/cairosurface.flush.php
     */
    public function flush(): void
    {
    }

    /**
     * getContent.
     * The getContent purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairosurface.getcontent.php
     */
    public function getContent(): int
    {
    }

    /**
     * getDeviceOffset.
     * The getDeviceOffset purpose.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairosurface.getdeviceoffset.php
     */
    public function getDeviceOffset(): array
    {
    }

    /**
     * getFontOptions.
     * The getFontOptions purpose.
     *
     *
     * @see http://php.net/manual/en/cairosurface.getfontoptions.php
     */
    public function getFontOptions(): void
    {
    }

    /**
     * getType.
     * The getType purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairosurface.gettype.php
     */
    public function getType(): int
    {
    }

    /**
     * markDirty.
     * The markDirty purpose.
     *
     *
     * @see http://php.net/manual/en/cairosurface.markdirty.php
     */
    public function markDirty(): void
    {
    }

    /**
     * markDirtyRectangle.
     * The markDirtyRectangle purpose.
     *
     * @param string $x
     * @param string $y
     * @param string $width
     * @param string $height
     *
     * @see http://php.net/manual/en/cairosurface.markdirtyrectangle.php
     */
    public function markDirtyRectangle(string $x, string $y, string $width, string $height): void
    {
    }

    /**
     * setDeviceOffset.
     * The setDeviceOffset purpose.
     *
     * @param string $x
     * @param string $y
     *
     * @see http://php.net/manual/en/cairosurface.setdeviceoffset.php
     */
    public function setDeviceOffset(string $x, string $y): void
    {
    }

    /**
     * setFallbackResolution.
     * The setFallbackResolution purpose.
     *
     * @param string $x
     * @param string $y
     *
     * @see http://php.net/manual/en/cairosurface.setfallbackresolution.php
     */
    public function setFallbackResolution(string $x, string $y): void
    {
    }

    /**
     * showPage.
     * The showPage purpose.
     *
     *
     * @see http://php.net/manual/en/cairosurface.showpage.php
     */
    public function showPage(): void
    {
    }

    /**
     * status.
     * The status purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairosurface.status.php
     */
    public function status(): int
    {
    }

    /**
     * writeToPng.
     * The writeToPng purpose.
     *
     * @param string $file
     *
     * @see http://php.net/manual/en/cairosurface.writetopng.php
     */
    public function writeToPng(string $file): void
    {
    }
}
