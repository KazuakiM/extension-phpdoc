<?php

/**
 * UI\Controls\Progress.
 * A Progress control is a familiar Progress bar: It represents progress as a percentage, with a possible range of 0 to 100 (inclusive).
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-progress.php
 */

namespace UI\Controls;

class Progress extends UI\Control
{
    /**
     * getValue.
     * Get Value.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-controls-progress.getvalue.php
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
     * @see http://php.net/manual/en/ui-controls-progress.setvalue.php
     */
    public function setValue(int $value): void
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
