<?php

/**
 * UI\Control.
 * This is the closed base class for all UI Controls.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-control.php
 */

namespace UI;

final class Control
{
    /**
     * destroy.
     * Destroy Control.
     *
     *
     * @see http://php.net/manual/en/ui-control.destroy.php
     */
    public function destroy(): void
    {
    }

    /**
     * disable.
     * Disable Control.
     *
     *
     * @see http://php.net/manual/en/ui-control.disable.php
     */
    public function disable(): void
    {
    }

    /**
     * enable.
     * Enable Control.
     *
     *
     * @see http://php.net/manual/en/ui-control.enable.php
     */
    public function enable(): void
    {
    }

    /**
     * getParent.
     * Get Parent Control.
     *
     * @return UI\Control
     *
     * @see http://php.net/manual/en/ui-control.getparent.php
     */
    public function getParent(): UI\Control
    {
    }

    /**
     * getTopLevel.
     * Get Top Level.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-control.gettoplevel.php
     */
    public function getTopLevel(): int
    {
    }

    /**
     * hide.
     * Hide Control.
     *
     *
     * @see http://php.net/manual/en/ui-control.hide.php
     */
    public function hide(): void
    {
    }

    /**
     * isEnabled.
     * Determine if Control is enabled.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-control.isenabled.php
     */
    public function isEnabled(): bool
    {
    }

    /**
     * isVisible.
     * Determine if Control is visible.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-control.isvisible.php
     */
    public function isVisible(): bool
    {
    }

    /**
     * setParent.
     * Set Parent Control.
     *
     * @param UI\Control $parent
     *
     * @see http://php.net/manual/en/ui-control.setparent.php
     */
    public function setParent(UI\Control $parent): void
    {
    }

    /**
     * show.
     * Control Show.
     *
     *
     * @see http://php.net/manual/en/ui-control.show.php
     */
    public function show(): void
    {
    }
}
