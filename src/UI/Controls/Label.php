<?php

/**
 * UI\Controls\Label.
 * A Label is a single line of text, meant to identify, for the user, some element of the interface.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-label.php
 */

namespace UI\Controls;

class Label extends UI\Control
{
    /**
     * __construct.
     * Construct a new Label.
     *
     * @param string $text
     *
     * @see http://php.net/manual/en/ui-controls-label.construct.php
     */
    public function __construct(string $text)
    {
    }

    /**
     * getText.
     * Get Text.
     *
     * @return string
     *
     * @see http://php.net/manual/en/ui-controls-label.gettext.php
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
     * @see http://php.net/manual/en/ui-controls-label.settext.php
     */
    public function setText(string $text): void
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
