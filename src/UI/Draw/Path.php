<?php

/**
 * UI\Draw\Path.
 * A Draw Path guides a Draw Pen, telling the Pen where to draw on an Area.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-draw-path.php
 */

namespace UI\Draw;

class Path
{
    const Winding = 'dummy';
    const Alternate = 'dummy';

    /**
     * __construct.
     * Construct a new Path.
     *
     * @param int $mode = UI\Draw\Path::Winding
     *
     * @see http://php.net/manual/en/ui-draw-path.construct.php
     */
    public function __construct(int $mode = UI\Draw\Path::Winding)
    {
    }

    /**
     * addRectangle.
     * Draw a Rectangle.
     *
     * @param UI\Point $point
     * @param UI\Size  $size
     *
     * @see http://php.net/manual/en/ui-draw-path.addrectangle.php
     */
    public function addRectangle(UI\Point $point, UI\Size $size): void
    {
    }

    /**
     * arcTo.
     * Draw an Arc.
     *
     * @param UI\Point $point
     * @param float    $radius
     * @param float    $angle
     * @param float    $sweep
     * @param float    $negative
     *
     * @see http://php.net/manual/en/ui-draw-path.arcto.php
     */
    public function arcTo(UI\Point $point, float $radius, float $angle, float $sweep, float $negative): void
    {
    }

    /**
     * bezierTo.
     * Draw Bezier Curve.
     *
     * @param UI\Point $point
     * @param float    $radius
     * @param float    $angle
     * @param float    $sweep
     * @param float    $negative
     *
     * @see http://php.net/manual/en/ui-draw-path.bezierto.php
     */
    public function bezierTo(UI\Point $point, float $radius, float $angle, float $sweep, float $negative): void
    {
    }

    /**
     * closeFigure.
     * Close Figure.
     *
     *
     * @see http://php.net/manual/en/ui-draw-path.closefigure.php
     */
    public function closeFigure(): void
    {
    }

    /**
     * end.
     * Finalize Path.
     *
     *
     * @see http://php.net/manual/en/ui-draw-path.end.php
     */
    public function end(): void
    {
    }

    /**
     * lineTo.
     * Draw a Line.
     *
     * @param UI\Point $point
     * @param float    $radius
     * @param float    $angle
     * @param float    $sweep
     * @param float    $negative
     *
     * @see http://php.net/manual/en/ui-draw-path.lineto.php
     */
    public function lineTo(UI\Point $point, float $radius, float $angle, float $sweep, float $negative): void
    {
    }

    /**
     * newFigure.
     * Draw Figure.
     *
     * @param UI\Point $point
     *
     * @see http://php.net/manual/en/ui-draw-path.newfigure.php
     */
    public function newFigure(UI\Point $point): void
    {
    }

    /**
     * newFigureWithArc.
     * Draw Figure with Arc.
     *
     * @param UI\Point $point
     * @param float    $radius
     * @param float    $angle
     * @param float    $sweep
     * @param float    $negative
     *
     * @see http://php.net/manual/en/ui-draw-path.newfigurewitharc.php
     */
    public function newFigureWithArc(UI\Point $point, float $radius, float $angle, float $sweep, float $negative): void
    {
    }
}
