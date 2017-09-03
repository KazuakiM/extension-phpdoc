<?php

/**
 * UI\Controls\MultilineEntry.
 * A Multiline Entry is a text entry control able to hold multiple lines of text, with or without wrapping.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-multilineentry.php
 */

namespace UI\Controls;

class MultilineEntry extends UI\Control
{
    const Wrap = 'dummy';
    const NoWrap = 'dummy';

    /**
     * __construct.
     * Construct a new Multiline Entry.
     *
     * @param int $type (optional)
     *
     * @see http://php.net/manual/en/ui-controls-multilineentry.construct.php
     */
    public function __construct(int $type)
    {
    }

    /**
     * append.
     * Append Text.
     *
     * @param string $text
     *
     * @see http://php.net/manual/en/ui-controls-multilineentry.append.php
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
     * @see http://php.net/manual/en/ui-controls-multilineentry.gettext.php
     */
    public function getText(): string
    {
    }

    /**
     * isReadOnly.
     * Read Only Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-controls-multilineentry.isreadonly.php
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
     * @see http://php.net/manual/en/ui-controls-multilineentry.setreadonly.php
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
     * @see http://php.net/manual/en/ui-controls-multilineentry.settext.php
     */
    public function setText(string $text): void
    {
    }

    /**
     * onChange.
     * Change Handler.
     *
     *
     * @see http://php.net/manual/en/ui-controls-multilineentry.onchange.php
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
