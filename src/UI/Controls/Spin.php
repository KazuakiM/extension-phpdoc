<?php

/**
 * UI\Controls\Spin.
 * A Spin box is a text box with an up-down control which changes the integer value in the box, within a defined range.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-spin.php
 */

namespace UI\Controls;

class Spin extends UI\Control
{
    /**
     * __construct.
     * Construct a new Spin.
     *
     * @param int $min
     * @param int $max
     *
     * @see http://php.net/manual/en/ui-controls-spin.construct.php
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
     * @see http://php.net/manual/en/ui-controls-spin.getvalue.php
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
     * @see http://php.net/manual/en/ui-controls-spin.setvalue.php
     */
    public function setValue(int $value): void
    {
    }

    /**
     * onChange.
     * Change Handler.
     *
     *
     * @see http://php.net/manual/en/ui-controls-spin.onchange.php
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
