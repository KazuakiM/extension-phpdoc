<?php

/**
 * UI\Controls\EditableCombo.
 * An Editable Combo is a Combo which allows the user to enter custom options.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-editablecombo.php
 */

namespace UI\Controls;

class EditableCombo extends UI\Control
{
    /**
     * append.
     * Append Option.
     *
     * @param string $text
     *
     * @see http://php.net/manual/en/ui-controls-editablecombo.append.php
     */
    public function append(string $text): void
    {
    }

    /**
     * getText.
     * Get Text.
     *
     * @return string
     *
     * @see http://php.net/manual/en/ui-controls-editablecombo.gettext.php
     */
    public function getText(): string
    {
    }

    /**
     * setText.
     * Set Text.
     *
     * @param string $text
     *
     * @see http://php.net/manual/en/ui-controls-editablecombo.settext.php
     */
    public function setText(string $text): void
    {
    }

    /**
     * onChange.
     * Change Handler.
     *
     *
     * @see http://php.net/manual/en/ui-controls-editablecombo.onchange.php
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
