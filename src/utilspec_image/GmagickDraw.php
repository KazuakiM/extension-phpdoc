<?php

/**
 * GmagickDraw.
 *
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.gmagickdraw.php
 */
class GmagickDraw
{
    /**
     * annotate.
     * Draws text on the image.
     *
     * @param float  $x
     * @param float  $y
     * @param string $text
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.annotate.php
     */
    public function annotate(float $x, float $y, string $text): GmagickDraw
    {
    }

    /**
     * arc.
     * Draws an arc.
     *
     * @param float $sx
     * @param float $sy
     * @param float $ex
     * @param float $ey
     * @param float $sd
     * @param float $ed
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.arc.php
     */
    public function arc(float $sx, float $sy, float $ex, float $ey, float $sd, float $ed): GmagickDraw
    {
    }

    /**
     * bezier.
     * Draws a bezier curve.
     *
     * @param array $coordinate_array
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.bezier.php
     */
    public function bezier(array $coordinate_array): GmagickDraw
    {
    }

    /**
     * ellipse.
     * Draws an ellipse on the image.
     *
     * @param float $ox
     * @param float $oy
     * @param float $rx
     * @param float $ry
     * @param float $start
     * @param float $end
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.ellipse.php
     */
    public function ellipse(float $ox, float $oy, float $rx, float $ry, float $start, float $end): GmagickDraw
    {
    }

    /**
     * getfillcolor.
     * Returns the fill color.
     *
     * @return GmagickPixel
     *
     * @see http://php.net/manual/en/gmagickdraw.getfillcolor.php
     */
    public function getfillcolor(): GmagickPixel
    {
    }

    /**
     * getfillopacity.
     * Returns the opacity used when drawing.
     *
     * @return float
     *
     * @see http://php.net/manual/en/gmagickdraw.getfillopacity.php
     */
    public function getfillopacity(): float
    {
    }

    /**
     * getfont.
     * Returns the font.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/gmagickdraw.getfont.php
     */
    public function getfont(): mixed
    {
    }

    /**
     * getfontsize.
     * Returns the font pointsize.
     *
     * @return float
     *
     * @see http://php.net/manual/en/gmagickdraw.getfontsize.php
     */
    public function getfontsize(): float
    {
    }

    /**
     * getfontstyle.
     * Returns the font style.
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagickdraw.getfontstyle.php
     */
    public function getfontstyle(): int
    {
    }

    /**
     * getfontweight.
     * Returns the font weight.
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagickdraw.getfontweight.php
     */
    public function getfontweight(): int
    {
    }

    /**
     * getstrokecolor.
     * Returns the color used for stroking object outlines.
     *
     * @return GmagickPixel
     *
     * @see http://php.net/manual/en/gmagickdraw.getstrokecolor.php
     */
    public function getstrokecolor(): GmagickPixel
    {
    }

    /**
     * getstrokeopacity.
     * Returns the opacity of stroked object outlines.
     *
     * @return float
     *
     * @see http://php.net/manual/en/gmagickdraw.getstrokeopacity.php
     */
    public function getstrokeopacity(): float
    {
    }

    /**
     * getstrokewidth.
     * Returns the width of the stroke used to draw object outlines.
     *
     * @return float
     *
     * @see http://php.net/manual/en/gmagickdraw.getstrokewidth.php
     */
    public function getstrokewidth(): float
    {
    }

    /**
     * gettextdecoration.
     * Returns the text decoration.
     *
     * @return int
     *
     * @see http://php.net/manual/en/gmagickdraw.gettextdecoration.php
     */
    public function gettextdecoration(): int
    {
    }

    /**
     * gettextencoding.
     * Returns the code set used for text annotations.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/gmagickdraw.gettextencoding.php
     */
    public function gettextencoding(): mixed
    {
    }

    /**
     * line.
     * The line purpose.
     *
     * @param float $sx
     * @param float $sy
     * @param float $ex
     * @param float $ey
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.line.php
     */
    public function line(float $sx, float $sy, float $ex, float $ey): GmagickDraw
    {
    }

    /**
     * point.
     * Draws a point.
     *
     * @param float $x
     * @param float $y
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.point.php
     */
    public function point(float $x, float $y): GmagickDraw
    {
    }

    /**
     * polygon.
     * Draws a polygon.
     *
     * @param array $coordinates
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.polygon.php
     */
    public function polygon(array $coordinates): GmagickDraw
    {
    }

    /**
     * polyline.
     * Draws a polyline.
     *
     * @param array $coordinate_array
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.polyline.php
     */
    public function polyline(array $coordinate_array): GmagickDraw
    {
    }

    /**
     * rectangle.
     * Draws a rectangle.
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.rectangle.php
     */
    public function rectangle(float $x1, float $y1, float $x2, float $y2): GmagickDraw
    {
    }

    /**
     * rotate.
     * Applies the specified rotation to the current coordinate space.
     *
     * @param float $degrees
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.rotate.php
     */
    public function rotate(float $degrees): GmagickDraw
    {
    }

    /**
     * roundrectangle.
     * Draws a rounded rectangle.
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $rx
     * @param float $ry
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.roundrectangle.php
     */
    public function roundrectangle(float $x1, float $y1, float $x2, float $y2, float $rx, float $ry): GmagickDraw
    {
    }

    /**
     * scale.
     * Adjusts the scaling factor.
     *
     * @param float $x
     * @param float $y
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.scale.php
     */
    public function scale(float $x, float $y): GmagickDraw
    {
    }

    /**
     * setfillcolor.
     * Sets the fill color to be used for drawing filled objects.
     *
     * @param mixed $color
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.setfillcolor.php
     */
    public function setfillcolor(mixed $color): GmagickDraw
    {
    }

    /**
     * setfillopacity.
     * The setfillopacity purpose.
     *
     * @param float $fill_opacity
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.setfillopacity.php
     */
    public function setfillopacity(float $fill_opacity): GmagickDraw
    {
    }

    /**
     * setfont.
     * Sets the fully-specified font to use when annotating with text.
     *
     * @param string $font
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.setfont.php
     */
    public function setfont(string $font): GmagickDraw
    {
    }

    /**
     * setfontsize.
     * Sets the font pointsize to use when annotating with text.
     *
     * @param float $pointsize
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.setfontsize.php
     */
    public function setfontsize(float $pointsize): GmagickDraw
    {
    }

    /**
     * setfontstyle.
     * Sets the font style to use when annotating with text.
     *
     * @param int $style
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.setfontstyle.php
     */
    public function setfontstyle(int $style): GmagickDraw
    {
    }

    /**
     * setfontweight.
     * Sets the font weight.
     *
     * @param int $weight
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.setfontweight.php
     */
    public function setfontweight(int $weight): GmagickDraw
    {
    }

    /**
     * setstrokecolor.
     * Sets the color used for stroking object outlines.
     *
     * @param mixed $color
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.setstrokecolor.php
     */
    public function setstrokecolor(mixed $color): GmagickDraw
    {
    }

    /**
     * setstrokeopacity.
     * Specifies the opacity of stroked object outlines.
     *
     * @param float $stroke_opacity
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.setstrokeopacity.php
     */
    public function setstrokeopacity(float $stroke_opacity): GmagickDraw
    {
    }

    /**
     * setstrokewidth.
     * Sets the width of the stroke used to draw object outlines.
     *
     * @param float $width
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.setstrokewidth.php
     */
    public function setstrokewidth(float $width): GmagickDraw
    {
    }

    /**
     * settextdecoration.
     * Specifies a decoration.
     *
     * @param int $decoration
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.settextdecoration.php
     */
    public function settextdecoration(int $decoration): GmagickDraw
    {
    }

    /**
     * settextencoding.
     * Specifies the text code set.
     *
     * @param string $encoding
     *
     * @return GmagickDraw
     *
     * @see http://php.net/manual/en/gmagickdraw.settextencoding.php
     */
    public function settextencoding(string $encoding): GmagickDraw
    {
    }
}
