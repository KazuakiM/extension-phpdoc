<?php

/**
 * UI\Controls\Picker.
 * A Picker represents a button which when clicked presents a native Date/Time/DateTime Picker interface to the user.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-picker.php
 */

namespace UI\Controls;

class Picker extends UI\Control
{
    const Date = 'dummy';
    const Time = 'dummy';
    const DateTime = 'dummy';

    /**
     * __construct.
     * Construct a new Picker.
     *
     * @param int $type = UI\Controls\Picker::Date
     *
     * @see http://php.net/manual/en/ui-controls-picker.construct.php
     */
    public function __construct(int $type = UI\Controls\Picker::Date)
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
