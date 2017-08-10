<?php

/**
 * CairoPsSurface.
 *
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairopssurface.php
 */
class CairoPsSurface extends CairoSurface
{
    /**
     * __construct.
     * The __construct purpose.
     *
     * @param string $file
     * @param float  $width
     * @param float  $height
     *
     * @see http://php.net/manual/en/cairopssurface.construct.php
     */
    public function __construct(string $file, float $width, float $height)
    {
    }

    /**
     * dscBeginPageSetup.
     * The dscBeginPageSetup purpose.
     *
     *
     * @see http://php.net/manual/en/cairopssurface.dscbeginpagesetup.php
     */
    public function dscBeginPageSetup(): void
    {
    }

    /**
     * dscBeginSetup.
     * The dscBeginSetup purpose.
     *
     *
     * @see http://php.net/manual/en/cairopssurface.dscbeginsetup.php
     */
    public function dscBeginSetup(): void
    {
    }

    /**
     * dscComment.
     * The dscComment purpose.
     *
     * @param string $comment
     *
     * @see http://php.net/manual/en/cairopssurface.dsccomment.php
     */
    public function dscComment(string $comment): void
    {
    }

    /**
     * getEps.
     * The getEps purpose.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/cairopssurface.geteps.php
     */
    public function getEps(): bool
    {
    }

    /**
     * getLevels.
     * The getLevels purpose.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairopssurface.getlevels.php
     */
    public static function getLevels(): array
    {
    }

    /**
     * levelToString.
     * The levelToString purpose.
     *
     * @param int $level
     *
     * @return string
     *
     * @see http://php.net/manual/en/cairopssurface.leveltostring.php
     */
    public static function levelToString(int $level): string
    {
    }

    /**
     * restrictToLevel.
     * The restrictToLevel purpose.
     *
     * @param string $level
     *
     * @see http://php.net/manual/en/cairopssurface.restricttolevel.php
     */
    public function restrictToLevel(string $level): void
    {
    }

    /**
     * setEps.
     * The setEps purpose.
     *
     * @param string $level
     *
     * @see http://php.net/manual/en/cairopssurface.seteps.php
     */
    public function setEps(string $level): void
    {
    }

    /**
     * setSize.
     * The setSize purpose.
     *
     * @param string $width
     * @param string $height
     *
     * @see http://php.net/manual/en/cairopssurface.setsize.php
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
