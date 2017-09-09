<?php

/**
 * UI\Draw\Brush\Gradient.
 * Abstract for gradient brushes.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-draw-brush-gradient.php
 */

namespace UI\Draw\Brush;

abstract class Gradient extends UI\Draw\Brush
{
    /**
     * addStop.
     * Stop Manipulation.
     *
     * @param float             $position
     * @param UI\Draw\Color|int $color
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-draw-brush-gradient.addstop.php
     */
    public function addStop(float $position, mixed $color): int
    {
    }

    /**
     * delStop.
     * Stop Manipulation.
     *
     * @param int $index
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-draw-brush-gradient.delstop.php
     */
    public function delStop(int $index): int
    {
    }

    /**
     * setStop.
     * Stop Manipulation.
     *
     * @param int               $index
     * @param float             $position
     * @param UI\Draw\Color|int $color
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-draw-brush-gradient.setstop.php
     */
    public function setStop(int $index, float $position, mixed $color): bool
    {
    }

    /* Inherited methods */
    //public function UI\Draw\Brush::getColor(): UI\Draw\Color
    //public function UI\Draw\Brush::setColor(UI\Draw\Color $color): void
    //public function UI\Draw\Brush::setColor(int $color): void
}
