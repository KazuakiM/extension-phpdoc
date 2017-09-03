<?php

/**
 * UI\Controls\Check.
 * A Check is a labelled checkable box.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-check.php
 */

namespace UI\Controls;

class Check extends UI\Control
{
    /**
     * __construct.
     * Construct a new Check.
     *
     * @param string $text
     *
     * @see http://php.net/manual/en/ui-controls-check.construct.php
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
     * @see http://php.net/manual/en/ui-controls-check.gettext.php
     */
    public function getText(): string
    {
    }

    /**
     * isChecked.
     * Checked Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-controls-check.ischecked.php
     */
    public function isChecked(): bool
    {
    }

    /**
     * setChecked.
     * Set Checked.
     *
     * @param bool $checked
     *
     * @see http://php.net/manual/en/ui-controls-check.setchecked.php
     */
    public function setChecked(bool $checked): void
    {
    }

    /**
     * setText.
     * Set Text.
     *
     * @param string $text
     *
     * @see http://php.net/manual/en/ui-controls-check.settext.php
     */
    public function setText(string $text): void
    {
    }

    /**
     * onToggle.
     * Toggle Callback.
     *
     *
     * @see http://php.net/manual/en/ui-controls-check.ontoggle.php
     */
    protected function onToggle(): void
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
