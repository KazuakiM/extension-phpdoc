<?php

/**
 * HaruImage.
 * Haru PDF Image Class.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.haruimage.php
 */
class HaruImage
{
    /**
     * getBitsPerComponent.
     * Get the number of bits used to describe each color component of the image.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/haruimage.getbitspercomponent.php
     */
    public function getBitsPerComponent(): int
    {
    }

    /**
     * getColorSpace.
     * Get the name of the color space.
     *
     * @throws HaruException
     *
     * @return string
     *
     * @see http://php.net/manual/en/haruimage.getcolorspace.php
     */
    public function getColorSpace(): string
    {
    }

    /**
     * getHeight.
     * Get the height of the image.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/haruimage.getheight.php
     */
    public function getHeight(): int
    {
    }

    /**
     * getSize.
     * Get size of the image.
     *
     * @throws HaruException
     *
     * @return array
     *
     * @see http://php.net/manual/en/haruimage.getsize.php
     */
    public function getSize(): array
    {
    }

    /**
     * getWidth.
     * Get the width of the image.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/haruimage.getwidth.php
     */
    public function getWidth(): int
    {
    }

    /**
     * setColorMask.
     * Set the color mask of the image.
     *
     * @param int $rmin
     * @param int $rmax
     * @param int $gmin
     * @param int $gmax
     * @param int $bmin
     * @param int $bmax
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/haruimage.setcolormask.php
     */
    public function setColorMask(int $rmin, int $rmax, int $gmin, int $gmax, int $bmin, int $bmax): bool
    {
    }

    /**
     * setMaskImage.
     * Set the image mask.
     *
     * @param object $mask_image
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/haruimage.setmaskimage.php
     */
    public function setMaskImage(object $mask_image): bool
    {
    }
}
