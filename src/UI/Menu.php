<?php

/**
 * UI\Menu.
 * Menus must be constructed before the first Window, and can be shown on any Window.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-menu.php
 */

namespace UI;

class Menu
{
    /**
     * __construct.
     * Construct a new Menu.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/ui-menu.construct.php
     */
    public function __construct(string $name)
    {
    }

    /**
     * append.
     * Append Menu Item.
     *
     * @param string $name
     * @param string $type = UI\MenuItem::class
     *
     * @return UI\MenuItem
     *
     * @see http://php.net/manual/en/ui-menu.append.php
     */
    public function append(string $name, string $type = UI\MenuItem::class): UI\MenuItem
    {
    }

    /**
     * appendAbout.
     * Append About Menu Item.
     *
     * @param string $type = UI\MenuItem::class
     *
     * @return UI\MenuItem
     *
     * @see http://php.net/manual/en/ui-menu.appendabout.php
     */
    public function appendAbout(string $type = UI\MenuItem::class): UI\MenuItem
    {
    }

    /**
     * appendCheck.
     * Append Checkable Menu Item.
     *
     * @param string $name
     * @param string $type = UI\MenuItem::class
     *
     * @return UI\MenuItem
     *
     * @see http://php.net/manual/en/ui-menu.appendcheck.php
     */
    public function appendCheck(string $name, string $type = UI\MenuItem::class): UI\MenuItem
    {
    }

    /**
     * appendPreferences.
     * Append Preferences Menu Item.
     *
     * @param string $type = UI\MenuItem::class
     *
     * @return UI\MenuItem
     *
     * @see http://php.net/manual/en/ui-menu.appendpreferences.php
     */
    public function appendPreferences(string $type = UI\MenuItem::class): UI\MenuItem
    {
    }

    /**
     * appendQuit.
     * Append Quit Menu Item.
     *
     * @param string $type = UI\MenuItem::class
     *
     * @return UI\MenuItem
     *
     * @see http://php.net/manual/en/ui-menu.appendquit.php
     */
    public function appendQuit(string $type = UI\MenuItem::class): UI\MenuItem
    {
    }

    /**
     * appendSeparator.
     * Append Menu Item Separator.
     *
     *
     * @see http://php.net/manual/en/ui-menu.appendseparator.php
     */
    public function appendSeparator(): void
    {
    }
}
