<?php

/**
 * UI\Draw\Text\Font\Descriptor.
 * Describes a font.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-draw-text-font-descriptor.php
 */

namespace UI\Draw\Text\Font;

class Descriptor
{
    /**
     * __construct.
     * Construct a new Font Descriptor.
     *
     * @param string $family
     * @param float  $size
     * @param int    $weight  = UI\Draw\Text\Font\Weight::Normal
     * @param int    $italic  = UI\Draw\Text\Font\Italic::Normal
     * @param int    $stretch = UI\Draw\Text\Font\Stretch::Normal
     *
     * @see http://php.net/manual/en/ui-draw-text-font-descriptor.construct.php
     */
    public function __construct(string $family, float $size, int $weight = UI\Draw\Text\Font\Weight::Normal, int $italic = UI\Draw\Text\Font\Italic::Normal, int $stretch = UI\Draw\Text\Font\Stretch::Normal)
    {
    }

    /**
     * getFamily.
     * Get Font Family.
     *
     * @return string
     *
     * @see http://php.net/manual/en/ui-draw-text-font-descriptor.getfamily.php
     */
    public function getFamily(): string
    {
    }

    /**
     * getItalic.
     * Style Detection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-draw-text-font-descriptor.getitalic.php
     */
    public function getItalic(): int
    {
    }

    /**
     * getSize.
     * Size Detection.
     *
     * @return float
     *
     * @see http://php.net/manual/en/ui-draw-text-font-descriptor.getsize.php
     */
    public function getSize(): float
    {
    }

    /**
     * getStretch.
     * Style Detection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-draw-text-font-descriptor.getstretch.php
     */
    public function getStretch(): int
    {
    }

    /**
     * getWeight.
     * Weight Detection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-draw-text-font-descriptor.getweight.php
     */
    public function getWeight(): int
    {
    }
}
