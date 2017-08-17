<?php

/**
 * SWFShape.
 * SWFShape.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.swfshape.php
 */
class SWFShape
{
    /**
     * __construct.
     * Creates a new shape object.
     *
     * @see http://php.net/manual/en/swfshape.construct.php
     */
    public function __construct()
    {
    }

    /**
     * addFill.
     * Adds a solid fill to the shape.
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     * @param int $alpha = 255
     *
     * @return SWFFill
     *
     * @see http://php.net/manual/en/swfshape.addfill.php
     */
    public function addFill(int $red, int $green, int $blue, int $alpha = 255): SWFFill
    {
    }

    /**
     * drawArc.
     * Draws an arc of radius r centered at the current location, from angle startAngle to angle endAngle measured clockwise from 12 o'clock.
     *
     * @param float $r
     * @param float $startAngle
     * @param float $endAngle
     *
     * @see http://php.net/manual/en/swfshape.drawarc.php
     */
    public function drawArc(float $r, float $startAngle, float $endAngle): void
    {
    }

    /**
     * drawCircle.
     * Draws a circle of radius r centered at the current location, in a counter-clockwise fashion.
     *
     * @param float $r
     *
     * @see http://php.net/manual/en/swfshape.drawcircle.php
     */
    public function drawCircle(float $r): void
    {
    }

    /**
     * drawCubic.
     * Draws a cubic bezier curve using the current position and the three given points as control points.
     *
     * @param float $bx
     * @param float $by
     * @param float $cx
     * @param float $cy
     * @param float $dx
     * @param float $dy
     *
     * @return int
     *
     * @see http://php.net/manual/en/swfshape.drawcubic.php
     */
    public function drawCubic(float $bx, float $by, float $cx, float $cy, float $dx, float $dy): int
    {
    }

    /**
     * drawCubicTo.
     * Draws a cubic bezier curve using the current position and the three given points as control points.
     *
     * @param float $bx
     * @param float $by
     * @param float $cx
     * @param float $cy
     * @param float $dx
     * @param float $dy
     *
     * @return int
     *
     * @see http://php.net/manual/en/swfshape.drawcubicto.php
     */
    public function drawCubicTo(float $bx, float $by, float $cx, float $cy, float $dx, float $dy): int
    {
    }

    /**
     * drawCurve.
     * Draws a curve (relative).
     *
     * @param float $controldx
     * @param float $controldy
     * @param float $anchordx
     * @param float $anchordy
     * @param float $targetdx  (optional)
     * @param float $targetdy  (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/swfshape.drawcurve.php
     */
    public function drawCurve(float $controldx, float $controldy, float $anchordx, float $anchordy, float $targetdx, float $targetdy): int
    {
    }

    /**
     * drawCurveTo.
     * Draws a curve.
     *
     * @param float $controlx
     * @param float $controly
     * @param float $anchorx
     * @param float $anchory
     * @param float $targetx  (optional)
     * @param float $targety  (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/swfshape.drawcurveto.php
     */
    public function drawCurveTo(float $controlx, float $controly, float $anchorx, float $anchory, float $targetx, float $targety): int
    {
    }

    /**
     * drawGlyph.
     * Draws the first character in the given string into the shape using the glyph definition from the given font.
     *
     * @param SWFFont $font
     * @param string  $character
     * @param int     $size      (optional)
     *
     * @see http://php.net/manual/en/swfshape.drawglyph.php
     */
    public function drawGlyph(SWFFont $font, string $character, int $size): void
    {
    }

    /**
     * drawLine.
     * Draws a line (relative).
     *
     * @param float $dx
     * @param float $dy
     *
     * @see http://php.net/manual/en/swfshape.drawline.php
     */
    public function drawLine(float $dx, float $dy): void
    {
    }

    /**
     * drawLineTo.
     * Draws a line.
     *
     * @param float $x
     * @param float $y
     *
     * @see http://php.net/manual/en/swfshape.drawlineto.php
     */
    public function drawLineTo(float $x, float $y): void
    {
    }

    /**
     * movePen.
     * Moves the shape's pen (relative).
     *
     * @param float $dx
     * @param float $dy
     *
     * @see http://php.net/manual/en/swfshape.movepen.php
     */
    public function movePen(float $dx, float $dy): void
    {
    }

    /**
     * movePenTo.
     * Moves the shape's pen.
     *
     * @param float $x
     * @param float $y
     *
     * @see http://php.net/manual/en/swfshape.movepento.php
     */
    public function movePenTo(float $x, float $y): void
    {
    }

    /**
     * setLeftFill.
     * Sets left rasterizing color.
     *
     * @param SWFGradient $fill
     *
     * @see http://php.net/manual/en/swfshape.setleftfill.php
     */
    public function setLeftFill(SWFGradient $fill): void
    {
    }

    /**
     * setLine.
     * Sets the shape's line style.
     *
     * @param SWFShape $shape
     *
     * @see http://php.net/manual/en/swfshape.setline.php
     */
    public function setLine(SWFShape $shape): void
    {
    }

    /**
     * setRightFill.
     * Sets right rasterizing color.
     *
     * @param SWFGradient $fill
     *
     * @see http://php.net/manual/en/swfshape.setrightfill.php
     */
    public function setRightFill(SWFGradient $fill): void
    {
    }
}
