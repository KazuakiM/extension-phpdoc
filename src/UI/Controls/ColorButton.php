<?php

/**
 * UI\Controls\ColorButton.
 * A Color Button is a button which displays a color picker when clicked.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-colorbutton.php
 */

namespace UI\Controls;

class ColorButton extends UI\Control
{
    /**
     * getColor.
     * Get Color.
     *
     * @return UI\Color
     *
     * @see http://php.net/manual/en/ui-controls-colorbutton.getcolor.php
     */
    public function getColor(): UI\Color
    {
    }

    /**
     * setColor.
     * Set Color.
     *
     * @param UI\Draw\Color|int $color
     *
     * @see http://php.net/manual/en/ui-controls-colorbutton.setcolor.php
     */
    public function setColor(mixed $color): void
    {
    }

    /**
     * onChange.
     * Change Handler.
     *
     *
     * @see http://php.net/manual/en/ui-controls-colorbutton.onchange.php
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
