<?php

/**
 * UI\Controls\Box.
 * A Box allows the arrangement of other controls.
 *
 * @property $controls
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-box.php
 */

namespace UI\Controls;

class Box extends UI\Control
{
    const Vertical = 'dummy';
    const Horizontal = 'dummy';

    protected $controls;

    /**
     * __construct.
     * Construct a new Box.
     *
     * @param int $orientation = UI\Controls\Box::Horizontal
     *
     * @see http://php.net/manual/en/ui-controls-box.construct.php
     */
    public function __construct(int $orientation = UI\Controls\Box::Horizontal)
    {
    }

    /**
     * append.
     * Append Control.
     *
     * @param Control $control
     * @param bool    $stretchy = false
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-controls-box.append.php
     */
    public function append(Control $control, bool $stretchy = false): int
    {
    }

    /**
     * delete.
     * Delete Control.
     *
     * @param int $index
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-controls-box.delete.php
     */
    public function delete(int $index): bool
    {
    }

    /**
     * getOrientation.
     * Get Orientation.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-controls-box.getorientation.php
     */
    public function getOrientation(): int
    {
    }

    /**
     * isPadded.
     * Padding Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-controls-box.ispadded.php
     */
    public function isPadded(): bool
    {
    }

    /**
     * setPadded.
     * Set Padding.
     *
     * @param bool $padded
     *
     * @see http://php.net/manual/en/ui-controls-box.setpadded.php
     */
    public function setPadded(bool $padded): void
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
