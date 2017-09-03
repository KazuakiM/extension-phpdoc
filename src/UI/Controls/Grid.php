<?php

/**
 * UI\Controls\Grid.
 * A Grid is a control which is allows the arrangement of children into a grid.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @property $controls
 *
 * @see http://php.net/manual/en/class.ui-controls-grid.php
 */

namespace UI\Controls;

class Grid extends UI\Control
{
    const Fill = 'dummy';
    const Start = 'dummy';
    const Center = 'dummy';
    const End = 'dummy';
    const Leading = 'dummy';
    const Top = 'dummy';
    const Trailing = 'dummy';
    const Bottom = 'dummy';

    protected $controls;

    /**
     * append.
     * Append Control.
     *
     * @param UI\Control $control
     * @param int        $left
     * @param int        $top
     * @param int        $xspan
     * @param int        $yspan
     * @param bool       $hexpand
     * @param int        $halign
     * @param bool       $vexpand
     * @param int        $valign
     *
     * @see http://php.net/manual/en/ui-controls-grid.append.php
     */
    public function append(UI\Control $control, int $left, int $top, int $xspan, int $yspan, bool $hexpand, int $halign, bool $vexpand, int $valign): void
    {
    }

    /**
     * isPadded.
     * Padding Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-controls-grid.ispadded.php
     */
    public function isPadded(): bool
    {
    }

    /**
     * setPadded.
     * Set Padding.
     *
     * @param bool $padding
     *
     * @see http://php.net/manual/en/ui-controls-grid.setpadded.php
     */
    public function setPadded(bool $padding): void
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
