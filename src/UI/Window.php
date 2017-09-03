<?php

/**
 * UI\Window.
 * Represents a UI Window.
 *
 * @property $controls
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-window.php
 */

namespace UI;

class Window extends UI\Control
{
    protected $controls;

    /**
     * __construct.
     * Construct a new Window.
     *
     * @param string $title
     * @param Size   $size
     * @param bool   $menu  = false
     *
     * @see http://php.net/manual/en/ui-window.construct.php
     */
    public function __construct(string $title, Size $size, bool $menu = false)
    {
    }

    /**
     * add.
     * Add a Control.
     *
     * @param UI\Control $control
     *
     * @see http://php.net/manual/en/ui-window.add.php
     */
    public function add(UI\Control $control): void
    {
    }

    /**
     * error.
     * Show Error Box.
     *
     * @param string $title
     * @param string $msg
     *
     * @see http://php.net/manual/en/ui-window.error.php
     */
    public function error(string $title, string $msg): void
    {
    }

    /**
     * getSize.
     * Get Window Size.
     *
     * @return UI\Size
     *
     * @see http://php.net/manual/en/ui-window.getsize.php
     */
    public function getSize(): UI\Size
    {
    }

    /**
     * getTitle.
     * Get Title.
     *
     * @return string
     *
     * @see http://php.net/manual/en/ui-window.gettitle.php
     */
    public function getTitle(): string
    {
    }

    /**
     * hasBorders.
     * Border Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-window.hasborders.php
     */
    public function hasBorders(): bool
    {
    }

    /**
     * hasMargin.
     * Margin Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-window.hasmargin.php
     */
    public function hasMargin(): bool
    {
    }

    /**
     * isFullScreen.
     * Full Screen Detection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-window.isfullscreen.php
     */
    public function isFullScreen(): bool
    {
    }

    /**
     * msg.
     * Show Message Box.
     *
     * @param string $title
     * @param string $msg
     *
     * @see http://php.net/manual/en/ui-window.msg.php
     */
    public function msg(string $title, string $msg): void
    {
    }

    /**
     * open.
     * Open Dialog.
     *
     * @return string
     *
     * @see http://php.net/manual/en/ui-window.open.php
     */
    public function open(): string
    {
    }

    /**
     * save.
     * Save Dialog.
     *
     * @return string
     *
     * @see http://php.net/manual/en/ui-window.save.php
     */
    public function save(): string
    {
    }

    /**
     * setBorders.
     * Border Use.
     *
     * @param bool $borders
     *
     * @see http://php.net/manual/en/ui-window.setborders.php
     */
    public function setBorders(bool $borders): void
    {
    }

    /**
     * setFullScreen.
     * Full Screen Use.
     *
     * @param bool $full
     *
     * @see http://php.net/manual/en/ui-window.setfullscreen.php
     */
    public function setFullScreen(bool $full): void
    {
    }

    /**
     * setMargin.
     * Margin Use.
     *
     * @param bool $margin
     *
     * @see http://php.net/manual/en/ui-window.setmargin.php
     */
    public function setMargin(bool $margin): void
    {
    }

    /**
     * setSize.
     * Set Size.
     *
     * @param UI\Size $size
     *
     * @see http://php.net/manual/en/ui-window.setsize.php
     */
    public function setSize(UI\Size $size): void
    {
    }

    /**
     * setTitle.
     * Window Title.
     *
     * @param string $title
     *
     * @see http://php.net/manual/en/ui-window.settitle.php
     */
    public function setTitle(string $title): void
    {
    }

    /**
     * onClosing.
     * Closing Callback.
     *
     * @return int
     *
     * @see http://php.net/manual/en/ui-window.onclosing.php
     */
    protected function onClosing(): int
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
