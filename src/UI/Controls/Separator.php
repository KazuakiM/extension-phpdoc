<?php

/**
 * UI\Controls\Separator.
 * A Separator represents a control separator, it has no other function.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-separator.php
 */

namespace UI\Controls;

class Separator extends UI\Control
{
    const Horizontal = 'dummy';
    const Vertical = 'dummy';

    /**
     * __construct.
     * Construct a new Separator.
     *
     * @param int $type = UI\Controls\Separator::Horizontal
     *
     * @see http://php.net/manual/en/ui-controls-separator.construct.php
     */
    public function __construct(int $type = UI\Controls\Separator::Horizontal)
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
