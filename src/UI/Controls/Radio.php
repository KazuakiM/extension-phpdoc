<?php

/**
 * UI\Controls\Radio.
 * A Radio is similar to the radio input type familiar from HTML.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-radio.php
 */

namespace UI\Controls;

class Radio extends UI\Control
{
    /**
     * append.
     * Append Option.
     *
     * @param string $text
     *
     * @see http://php.net/manual/en/ui-controls-radio.append.php
     */
    public function append(string $text): void
    {
    }

    /**
     * getSelected.
     * Get Selected Option.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-controls-radio.getselected.php
     */
    public function getSelected(): int
    {
    }

    /**
     * setSelected.
     * Set Selected Option.
     *
     * @param int $index
     *
     * @see http://php.net/manual/en/ui-controls-radio.setselected.php
     */
    public function setSelected(int $index): void
    {
    }

    /**
     * onSelected.
     * Selected Handler.
     *
     *
     * @see http://php.net/manual/en/ui-controls-radio.onselected.php
     */
    protected function onSelected(): void
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
