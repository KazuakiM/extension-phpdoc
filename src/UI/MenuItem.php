<?php

/**
 * UI\MenuItem.
 * Menu Items should only be created by the Menu.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-menuitem.php
 */

namespace UI;

class MenuItem
{
    /**
     * disable.
     * Disable Menu Item.
     *
     *
     * @see http://php.net/manual/en/ui-menuitem.disable.php
     */
    public function disable(): void
    {
    }

    /**
     * enable.
     * Enable Menu Item.
     *
     *
     * @see http://php.net/manual/en/ui-menuitem.enable.php
     */
    public function enable(): void
    {
    }

    /**
     * isChecked.
     * Detect Checked.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-menuitem.ischecked.php
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
     * @see http://php.net/manual/en/ui-menuitem.setchecked.php
     */
    public function setChecked(bool $checked): void
    {
    }

    /**
     * onClick.
     * On Click Callback.
     *
     *
     * @see http://php.net/manual/en/ui-menuitem.onclick.php
     */
    protected function onClick(): void
    {
    }
}
