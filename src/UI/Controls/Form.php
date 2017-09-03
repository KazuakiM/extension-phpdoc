<?php

/**
 * UI\Controls\Form.
 * A Form is a control which allows the arrangement of other controls into a familiar layout (the form).
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @property $controls
 *
 * @see http://php.net/manual/en/class.ui-controls-form.php
 */

namespace UI\Controls;

class Form extends UI\Control
{
    protected $controls;

    /**
     * append.
     * Append Control.
     *
     * @param string     $label
     * @param UI\Control $control
     * @param bool       $stretchy = false
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-controls-form.append.php
     */
    public function append(string $label, UI\Control $control, bool $stretchy = false): int
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
     * @see http://php.net/manual/en/ui-controls-form.delete.php
     */
    public function delete(int $index): bool
    {
    }

    /**
     * isPadded.
     * Padding Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-controls-form.ispadded.php
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
     * @see http://php.net/manual/en/ui-controls-form.setpadded.php
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
