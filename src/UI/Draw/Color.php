<?php

/**
 * UI\Draw\Color.
 * Represents RGBA colours, individual channels are accessible via public properties.
 *
 * @property $r
 * @property $g
 * @property $b
 * @property $a
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-draw-color.php
 */

namespace UI\Draw;

class Color
{
    const Red = 'dummy';
    const Green = 'dummy';
    const Blue = 'dummy';
    const Alpha = 'dummy';

    public $r;
    public $g;
    public $b;
    public $a;

    /**
     * __construct.
     * Construct new Color.
     *
     * @param UI\Draw\Color|int $color (optional)
     *
     * @see http://php.net/manual/en/ui-draw-color.construct.php
     */
    public function __construct(mixed $color)
    {
    }

    /**
     * getChannel.
     * Color Manipulation.
     *
     * @param int $channel
     *
     * @return float
     *
     * @see http://php.net/manual/en/ui-draw-color.getchannel.php
     */
    public function getChannel(int $channel): float
    {
    }

    /**
     * setChannel.
     * Color Manipulation.
     *
     * @param int   $channel
     * @param float $value
     *
     * @see http://php.net/manual/en/ui-draw-color.setchannel.php
     */
    public function setChannel(int $channel, float $value): void
    {
    }
}
