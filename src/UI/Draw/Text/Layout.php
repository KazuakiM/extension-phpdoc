<?php

/**
 * UI\Draw\Text\Layout.
 * A Text Layout represents the layout of text which will be drawn by the Pen.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-draw-text-layout.php
 */

namespace UI\Draw\Text;

class Layout
{
    /**
     * __construct.
     * Construct a new Text Layout.
     *
     * @param string            $text
     * @param UI\Draw\Text\Font $font
     * @param float             $width
     *
     * @see http://php.net/manual/en/ui-draw-text-layout.construct.php
     */
    public function __construct(string $text, UI\Draw\Text\Font $font, float $width)
    {
    }

    /**
     * setColor.
     * Set Color.
     *
     * @param UI\Draw\Color|int $color
     * @param int               $start = 0
     * @param int               $end   (optional)
     *
     * @see http://php.net/manual/en/ui-draw-text-layout.setcolor.php
     */
    public function setColor(mixed $color, int $start = 0, int $end): void
    {
    }

    /**
     * setWidth.
     * Set Width.
     *
     * @param float $width
     *
     * @see http://php.net/manual/en/ui-draw-text-layout.setwidth.php
     */
    public function setWidth(float $width): void
    {
    }
}
