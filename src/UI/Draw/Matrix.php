<?php

/**
 * UI\Draw\Matrix.
 *
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-draw-matrix.php
 */

namespace UI\Draw;

class Matrix
{
    /**
     * invert.
     * Invert Matrix.
     *
     *
     * @see http://php.net/manual/en/ui-draw-matrix.invert.php
     */
    public function invert(): void
    {
    }

    /**
     * isInvertible.
     * Invertible Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-draw-matrix.isinvertible.php
     */
    public function isInvertible(): bool
    {
    }

    /**
     * multiply.
     * Multiply Matrix.
     *
     * @param UI\Draw\Matrix $matrix
     *
     * @return UI\Draw\Matrix
     *
     * @see http://php.net/manual/en/ui-draw-matrix.multiply.php
     */
    public function multiply(UI\Draw\Matrix $matrix): UI\Draw\Matrix
    {
    }

    /**
     * rotate.
     * Rotate Matrix.
     *
     * @param UI\Point $point
     * @param float    $amount
     *
     * @see http://php.net/manual/en/ui-draw-matrix.rotate.php
     */
    public function rotate(UI\Point $point, float $amount): void
    {
    }

    /**
     * scale.
     * Scale Matrix.
     *
     * @param UI\Point $center
     * @param UI\Point $point
     *
     * @see http://php.net/manual/en/ui-draw-matrix.scale.php
     */
    public function scale(UI\Point $center, UI\Point $point): void
    {
    }

    /**
     * skew.
     * Skew Matrix.
     *
     * @param UI\Point $point
     * @param UI\Point $amount
     *
     * @see http://php.net/manual/en/ui-draw-matrix.skew.php
     */
    public function skew(UI\Point $point, UI\Point $amount): void
    {
    }

    /**
     * translate.
     * Translate Matrix.
     *
     * @param UI\Point $point
     *
     * @see http://php.net/manual/en/ui-draw-matrix.translate.php
     */
    public function translate(UI\Point $point): void
    {
    }
}
