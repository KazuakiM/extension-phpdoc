<?php

/**
 * UI\Area.
 * An Area represents a canvas which can be used to draw, and respond to mouse and key events.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-area.php
 */

namespace UI;

class Area extends UI\Control
{
    const Ctrl = 'dummy';
    const Alt = 'dummy';
    const Shift = 'dummy';
    const Super = 'dummy';
    const Down = 'dummy';
    const Up = 'dummy';

    /**
     * redraw.
     * Redraw Area.
     *
     *
     * @see http://php.net/manual/en/ui-area.redraw.php
     */
    public function redraw(): void
    {
    }

    /**
     * scrollTo.
     * Area Scroll.
     *
     * @param UI\Point $point
     * @param UI\Size  $size
     *
     * @see http://php.net/manual/en/ui-area.scrollto.php
     */
    public function scrollTo(UI\Point $point, UI\Size $size): void
    {
    }

    /**
     * setSize.
     * Set Size.
     *
     * @param UI\Size $size
     *
     * @see http://php.net/manual/en/ui-area.setsize.php
     */
    public function setSize(UI\Size $size): void
    {
    }

    /**
     * onDraw.
     * Draw Callback.
     *
     * @param UI\Draw\Pen $pen
     * @param UI\Size     $areaSize
     * @param UI\Point    $clipPoint
     * @param UI\Size     $clipSize
     *
     * @see http://php.net/manual/en/ui-area.ondraw.php
     */
    protected function onDraw(UI\Draw\Pen $pen, UI\Size $areaSize, UI\Point $clipPoint, UI\Size $clipSize): void
    {
    }

    /**
     * onKey.
     * Key Callback.
     *
     * @param string $key
     * @param int    $ext
     * @param int    $flags
     *
     * @see http://php.net/manual/en/ui-area.onkey.php
     */
    protected function onKey(string $key, int $ext, int $flags): void
    {
    }

    /**
     * onMouse.
     * Mouse Callback.
     *
     * @param UI\Point $areaPoint
     * @param UI\Size  $areaSize
     * @param int      $flags
     *
     * @see http://php.net/manual/en/ui-area.onmouse.php
     */
    protected function onMouse(UI\Point $areaPoint, UI\Size $areaSize, int $flags): void
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
