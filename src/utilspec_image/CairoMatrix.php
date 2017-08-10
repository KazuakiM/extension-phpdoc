<?php

/**
 * CairoMatrix.
 * Matrices are used throughout cairo to convert between different coordinate spaces.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairomatrix.php
 */
class CairoMatrix
{
    /**
     * __construct.
     * Creates a new CairoMatrix object.
     *
     * @param float $xx = 1.0
     * @param float $yx = 0.0
     * @param float $xy = 0.0
     * @param float $yy = 1.0
     * @param float $x0 = 0.0
     * @param float $y0 = 0.0
     *
     * @see http://php.net/manual/en/cairomatrix.construct.php
     */
    public function __construct(float $xx = 1.0, float $yx = 0.0, float $xy = 0.0, float $yy = 1.0, float $x0 = 0.0, float $y0 = 0.0)
    {
    }

    /**
     * initIdentity.
     * Creates a new identity matrix.
     *
     *
     * @see http://php.net/manual/en/cairomatrix.initidentity.php
     */
    public static function initIdentity(): void
    {
    }

    /**
     * initRotate.
     * Creates a new rotated matrix.
     *
     * @param float $radians
     *
     * @see http://php.net/manual/en/cairomatrix.initrotate.php
     */
    public static function initRotate(float $radians): void
    {
    }

    /**
     * initScale.
     * Creates a new scaling matrix.
     *
     * @param float $sx
     * @param float $sy
     *
     * @see http://php.net/manual/en/cairomatrix.initscale.php
     */
    public static function initScale(float $sx, float $sy): void
    {
    }

    /**
     * initTranslate.
     * Creates a new translation matrix.
     *
     * @param float $tx
     * @param float $ty
     *
     * @see http://php.net/manual/en/cairomatrix.inittranslate.php
     */
    public static function initTranslate(float $tx, float $ty): void
    {
    }

    /**
     * invert.
     * The invert purpose.
     *
     *
     * @see http://php.net/manual/en/cairomatrix.invert.php
     */
    public function invert(): void
    {
    }

    /**
     * multiply.
     * The multiply purpose.
     *
     * @param CairoMatrix $matrix1
     * @param CairoMatrix $matrix2
     *
     * @return CairoMatrix
     *
     * @see http://php.net/manual/en/cairomatrix.multiply.php
     */
    public static function multiply(CairoMatrix $matrix1, CairoMatrix $matrix2): CairoMatrix
    {
    }

    /**
     * rotate.
     * The rotate purpose.
     *
     * @param string $sx
     * @param string $sy
     *
     * @see http://php.net/manual/en/cairomatrix.rotate.php
     */
    public function rotate(string $sx, string $sy): void
    {
    }

    /**
     * scale.
     * Applies scaling to a matrix.
     *
     * @param float $sx
     * @param float $sy
     *
     * @see http://php.net/manual/en/cairomatrix.scale.php
     */
    public function scale(float $sx, float $sy): void
    {
    }

    /**
     * transformDistance.
     * The transformDistance purpose.
     *
     * @param string $dx
     * @param string $dy
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairomatrix.transformdistance.php
     */
    public function transformDistance(string $dx, string $dy): array
    {
    }

    /**
     * transformPoint.
     * The transformPoint purpose.
     *
     * @param string $dx
     * @param string $dy
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairomatrix.transformpoint.php
     */
    public function transformPoint(string $dx, string $dy): array
    {
    }

    /**
     * translate.
     * The translate purpose.
     *
     * @param string $tx
     * @param string $ty
     *
     * @see http://php.net/manual/en/cairomatrix.translate.php
     */
    public function translate(string $tx, string $ty): void
    {
    }
}
