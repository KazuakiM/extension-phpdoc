<?php

/**
 * ImagickPixel.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.imagickpixel.php
 */
class ImagickPixel
{
    /**
     * __construct.
     * The ImagickPixel constructor.
     *
     * @param string $color (optional)
     *
     * @see http://php.net/manual/en/imagickpixel.construct.php
     */
    public function __construct(string $color)
    {
    }

    /**
     * clear.
     * Clears resources associated with this object.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixel.clear.php
     */
    public function clear(): bool
    {
    }

    /**
     * destroy.
     * Deallocates resources associated with this object.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixel.destroy.php
     */
    public function destroy(): bool
    {
    }

    /**
     * getColor.
     * Returns the color.
     *
     * @param bool $normalized = false
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagickpixel.getcolor.php
     */
    public function getColor(bool $normalized = false): array
    {
    }

    /**
     * getColorAsString.
     * Returns the color as a string.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagickpixel.getcolorasstring.php
     */
    public function getColorAsString(): string
    {
    }

    /**
     * getColorCount.
     * Returns the color count associated with this color.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickpixel.getcolorcount.php
     */
    public function getColorCount(): int
    {
    }

    /**
     * getColorQuantum.
     * Description.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/imagickpixel.getcolorquantum.php
     */
    public function getColorQuantum(): mixed
    {
    }

    /**
     * getColorValue.
     * Gets the normalized value of the provided color channel.
     *
     * @param int $color
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagickpixel.getcolorvalue.php
     */
    public function getColorValue(int $color): float
    {
    }

    /**
     * getColorValueQuantum.
     * Description.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/imagickpixel.getcolorvaluequantum.php
     */
    public function getColorValueQuantum(): mixed
    {
    }

    /**
     * getHSL.
     * Returns the normalized HSL color of the ImagickPixel object.
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagickpixel.gethsl.php
     */
    public function getHSL(): array
    {
    }

    /**
     * getIndex.
     * Description.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickpixel.getindex.php
     */
    public function getIndex(): int
    {
    }

    /**
     * isPixelSimilar.
     * Check the distance between this color and another.
     *
     * @param ImagickPixel $color
     * @param float        $fuzz
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixel.ispixelsimilar.php
     */
    public function isPixelSimilar(ImagickPixel $color, float $fuzz): bool
    {
    }

    /**
     * isPixelSimilarQuantum.
     * Description.
     *
     * @param string $color
     * @param string $fuzz  (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixel.ispixelsimilarquantum.php
     */
    public function isPixelSimilarQuantum(string $color, string $fuzz): bool
    {
    }

    /**
     * isSimilar.
     * Check the distance between this color and another.
     *
     * @param ImagickPixel $color
     * @param float        $fuzz
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixel.issimilar.php
     */
    public function isSimilar(ImagickPixel $color, float $fuzz): bool
    {
    }

    /**
     * setColor.
     * Sets the color.
     *
     * @param string $color
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixel.setcolor.php
     */
    public function setColor(string $color): bool
    {
    }

    /**
     * setColorCount.
     * Description.
     *
     * @param string $colorCount
     *
     * @see http://php.net/manual/en/imagickpixel.setcolorcount.php
     */
    public function setColorCount(string $colorCount): void
    {
    }

    /**
     * setColorValue.
     * Sets the normalized value of one of the channels.
     *
     * @param int   $color
     * @param float $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixel.setcolorvalue.php
     */
    public function setColorValue(int $color, float $value): bool
    {
    }

    /**
     * setColorValueQuantum.
     * Description.
     *
     * @param int   $color
     * @param mixed $value
     *
     * @see http://php.net/manual/en/imagickpixel.setcolorvaluequantum.php
     */
    public function setColorValueQuantum(int $color, mixed $value): void
    {
    }

    /**
     * setHSL.
     * Sets the normalized HSL color.
     *
     * @param float $hue
     * @param float $saturation
     * @param float $luminosity
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixel.sethsl.php
     */
    public function setHSL(float $hue, float $saturation, float $luminosity): bool
    {
    }

    /**
     * setIndex.
     * Description.
     *
     * @param int $index
     *
     * @see http://php.net/manual/en/imagickpixel.setindex.php
     */
    public function setIndex(int $index): void
    {
    }
}
