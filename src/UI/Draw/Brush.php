<?php

/**
 * UI\Draw\Brush.
 * Represents a solid color brush.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-draw-brush.php
 */

namespace UI\Draw;

class Brush
{
    /**
     * __construct.
     * Construct a new Brush.
     *
     * @param UI\Draw\Color|int $color
     *
     * @see http://php.net/manual/en/ui-draw-brush.construct.php
     */
    public function __construct(mixed $color)
    {
    }

    /**
     * getColor.
     * Get Color.
     *
     * @return UI\Draw\Color
     *
     * @see http://php.net/manual/en/ui-draw-brush.getcolor.php
     */
    public function getColor(): UI\Draw\Color
    {
    }

    /**
     * setColor.
     * Set Color.
     *
     * @param UI\Draw\Color|int $color
     *
     * @see http://php.net/manual/en/ui-draw-brush.setcolor.php
     */
    public function setColor(UI\Draw\Color $color): void
    {
    }
}
