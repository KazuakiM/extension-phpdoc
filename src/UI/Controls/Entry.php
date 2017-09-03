<?php

/**
 * UI\Controls\Entry.
 * An Entry is a text entry control, suitable for entering plain text, passwords, or search terms.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-entry.php
 */

namespace UI\Controls;

class Entry extends UI\Control
{
    const Normal = 'dummy';
    const Password = 'dummy';
    const Search = 'dummy';

    /**
     * __construct.
     * Construct a new Entry.
     *
     * @param int $type = UI\Controls\Entry::Normal
     *
     * @see http://php.net/manual/en/ui-controls-entry.construct.php
     */
    public function __construct(int $type = UI\Controls\Entry::Normal)
    {
    }

    /**
     * getText.
     * Get Text.
     *
     * @return string
     *
     * @see http://php.net/manual/en/ui-controls-entry.gettext.php
     */
    public function getText(): string
    {
    }

    /**
     * isReadOnly.
     * Detect Read Only.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-controls-entry.isreadonly.php
     */
    public function isReadOnly(): bool
    {
    }

    /**
     * setReadOnly.
     * Set Read Only.
     *
     * @param bool $readOnly
     *
     * @see http://php.net/manual/en/ui-controls-entry.setreadonly.php
     */
    public function setReadOnly(bool $readOnly): void
    {
    }

    /**
     * setText.
     * Set Text.
     *
     * @param string $text
     *
     * @see http://php.net/manual/en/ui-controls-entry.settext.php
     */
    public function setText(string $text): void
    {
    }

    /**
     * onChange.
     * Change Handler.
     *
     *
     * @see http://php.net/manual/en/ui-controls-entry.onchange.php
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
