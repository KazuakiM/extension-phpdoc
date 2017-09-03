<?php

/**
 * UI\Controls\Tab.
 * A Tab can contain many pages of Controls, each with a title, each selectable by the user.
 *
 * @property $controls
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-controls-tab.php
 */

namespace UI\Controls;

class Tab extends UI\Control
{
    protected $controls;

    /**
     * append.
     * Append Page.
     *
     * @param string     $name
     * @param UI\Control $control
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-controls-tab.append.php
     */
    public function append(string $name, UI\Control $control): int
    {
    }

    /**
     * delete.
     * Delete Page.
     *
     * @param int $index
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-controls-tab.delete.php
     */
    public function delete(int $index): bool
    {
    }

    /**
     * hasMargin.
     * Margin Detection.
     *
     * @param int $page
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-controls-tab.hasmargin.php
     */
    public function hasMargin(int $page): bool
    {
    }

    /**
     * insertAt.
     * Insert Page.
     *
     * @param string     $name
     * @param int        $page
     * @param UI\Control $control
     *
     * @see http://php.net/manual/en/ui-controls-tab.insertat.php
     */
    public function insertAt(string $name, int $page, UI\Control $control): void
    {
    }

    /**
     * pages.
     * Page Count.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-controls-tab.pages.php
     */
    public function pages(): int
    {
    }

    /**
     * setMargin.
     * Set Margin.
     *
     * @param int  $page
     * @param bool $margin
     *
     * @see http://php.net/manual/en/ui-controls-tab.setmargin.php
     */
    public function setMargin(int $page, bool $margin): void
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
