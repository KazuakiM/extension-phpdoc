<?php

/**
 * UI\Draw\Brush\RadialGradient.
 *
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-draw-brush-radialgradient.php
 */

namespace UI\Draw\Brush;

class RadialGradient extends UI\Draw\Brush\Gradient
{
    /**
     * __construct.
     * Construct a new Radial Gradient.
     *
     * @param UI\Point $start
     * @param UI\Point $outer
     * @param float    $radius
     *
     * @see http://php.net/manual/en/ui-draw-brush-radialgradient.construct.php
     */
    public function __construct(UI\Point $start, UI\Point $outer, float $radius)
    {
    }

    /* Inherited methods */
    //public function UI\Draw\Brush\Gradient::addStop(float $position, UI\Draw\Color $color): int
    //public function UI\Draw\Brush\Gradient::addStop(float $position, int $color): int
    //public function UI\Draw\Brush\Gradient::delStop(int $index): int
    //public function UI\Draw\Brush\Gradient::setStop(int $index, float $position, UI\Draw\Color $color): bool
    //public function UI\Draw\Brush\Gradient::setStop(int $index, float $position, int $color): bool
}
