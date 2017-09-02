<?php

/**
 * ImagickPixelIterator.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.imagickpixeliterator.php
 */
class ImagickPixelIterator
{
    /**
     * __construct.
     * The ImagickPixelIterator constructor.
     *
     * @param Imagick $wand
     *
     * @see http://php.net/manual/en/imagickpixeliterator.construct.php
     */
    public function __construct(Imagick $wand)
    {
    }

    /**
     * clear.
     * Clear resources associated with a PixelIterator.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixeliterator.clear.php
     */
    public function clear(): bool
    {
    }

    /**
     * destroy.
     * Deallocates resources associated with a PixelIterator.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixeliterator.destroy.php
     */
    public function destroy(): bool
    {
    }

    /**
     * getCurrentIteratorRow.
     * Returns the current row of ImagickPixel objects.
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagickpixeliterator.getcurrentiteratorrow.php
     */
    public function getCurrentIteratorRow(): array
    {
    }

    /**
     * getIteratorRow.
     * Returns the current pixel iterator row.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickpixeliterator.getiteratorrow.php
     */
    public function getIteratorRow(): int
    {
    }

    /**
     * getNextIteratorRow.
     * Returns the next row of the pixel iterator.
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagickpixeliterator.getnextiteratorrow.php
     */
    public function getNextIteratorRow(): array
    {
    }

    /**
     * getPreviousIteratorRow.
     * Returns the previous row.
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagickpixeliterator.getpreviousiteratorrow.php
     */
    public function getPreviousIteratorRow(): array
    {
    }

    /**
     * newPixelIterator.
     * Returns a new pixel iterator.
     *
     * @param Imagick $wand
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixeliterator.newpixeliterator.php
     */
    public function newPixelIterator(Imagick $wand): bool
    {
    }

    /**
     * newPixelRegionIterator.
     * Returns a new pixel iterator.
     *
     * @param Imagick $wand
     * @param int     $x
     * @param int     $y
     * @param int     $columns
     * @param int     $rows
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixeliterator.newpixelregioniterator.php
     */
    public function newPixelRegionIterator(Imagick $wand, int $x, int $y, int $columns, int $rows): bool
    {
    }

    /**
     * resetIterator.
     * Resets the pixel iterator.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixeliterator.resetiterator.php
     */
    public function resetIterator(): bool
    {
    }

    /**
     * setIteratorFirstRow.
     * Sets the pixel iterator to the first pixel row.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixeliterator.setiteratorfirstrow.php
     */
    public function setIteratorFirstRow(): bool
    {
    }

    /**
     * setIteratorLastRow.
     * Sets the pixel iterator to the last pixel row.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixeliterator.setiteratorlastrow.php
     */
    public function setIteratorLastRow(): bool
    {
    }

    /**
     * setIteratorRow.
     * Set the pixel iterator row.
     *
     * @param int $row
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixeliterator.setiteratorrow.php
     */
    public function setIteratorRow(int $row): bool
    {
    }

    /**
     * syncIterator.
     * Syncs the pixel iterator.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickpixeliterator.synciterator.php
     */
    public function syncIterator(): bool
    {
    }
}
