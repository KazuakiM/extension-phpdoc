<?php

/**
 * UI\Controls\Group.
 * A Group is a titled container for child controls.
 *
 * @property $controls
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-group.php
 */

namespace UI\Controls;

class Group extends UI\Control
{
    protected $controls;

    /**
     * __construct.
     * Construct a new Group.
     *
     * @param string $title
     *
     * @see http://php.net/manual/en/ui-controls-group.construct.php
     */
    public function __construct(string $title)
    {
    }

    /**
     * append.
     * Append Control.
     *
     * @param UI\Control $control
     *
     * @see http://php.net/manual/en/ui-controls-group.append.php
     */
    public function append(UI\Control $control): void
    {
    }

    /**
     * getTitle.
     * Get Title.
     *
     * @return string
     *
     * @see http://php.net/manual/en/ui-controls-group.gettitle.php
     */
    public function getTitle(): string
    {
    }

    /**
     * hasMargin.
     * Margin Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-controls-group.hasmargin.php
     */
    public function hasMargin(): bool
    {
    }

    /**
     * setMargin.
     * Set Margin.
     *
     * @param bool $margin
     *
     * @see http://php.net/manual/en/ui-controls-group.setmargin.php
     */
    public function setMargin(bool $margin): void
    {
    }

    /**
     * setTitle.
     * Set Title.
     *
     * @param string $title
     *
     * @see http://php.net/manual/en/ui-controls-group.settitle.php
     */
    public function setTitle(string $title): void
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
