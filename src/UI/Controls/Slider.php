<?php

/**
 * UI\Controls\Slider.
 * A Slider is a control which represents a range, and a current value in the range. The sliding element of the control (sometimes called the "thumb") reflects the value, and can be adjusted within the range.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-slider.php
 */

namespace UI\Controls;

class Slider extends UI\Control
{
    /**
     * __construct.
     * Construct a new Slider.
     *
     * @param int $min
     * @param int $max
     *
     * @see http://php.net/manual/en/ui-controls-slider.construct.php
     */
    public function __construct(int $min, int $max)
    {
    }

    /**
     * getValue.
     * Get Value.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-controls-slider.getvalue.php
     */
    public function getValue(): int
    {
    }

    /**
     * setValue.
     * Set Value.
     *
     * @param int $value
     *
     * @see http://php.net/manual/en/ui-controls-slider.setvalue.php
     */
    public function setValue(int $value): void
    {
    }

    /**
     * onChange.
     * Change Handler.
     *
     *
     * @see http://php.net/manual/en/ui-controls-slider.onchange.php
     */
    protected function onChange(): void
    {
    }

    /* Inherited methods */
    //public function UI\Control::destroy(): void
    //public function UI\Control::disable(): void
    //public function UI\Control::enable(): void
    //public function UI\Control::getParent(): UI\Control
    //public function UI\Control::getTopLevel(): int
    //public function UI\Control::hide(): void
    //public function UI\Control::isEnabled(): bool
    //public function UI\Control::isVisible(): bool
    //public function UI\Control::setParent(UI\Control $parent): void
    //public function UI\Control::show(): void
}
