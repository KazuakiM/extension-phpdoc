<?php

/**
 * ImagickDraw.
 *
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.imagickdraw.php
 */
class ImagickDraw
{
    /**
     * __construct.
     * The ImagickDraw constructor.
     *
     * @see http://php.net/manual/en/imagickdraw.construct.php
     */
    public function __construct()
    {
    }

    /**
     * affine.
     * Adjusts the current affine transformation matrix.
     *
     * @param array $affine
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.affine.php
     */
    public function affine(array $affine): bool
    {
    }

    /**
     * annotation.
     * Draws text on the image.
     *
     * @param float  $x
     * @param float  $y
     * @param string $text
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.annotation.php
     */
    public function annotation(float $x, float $y, string $text): bool
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
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.arc.php
     */
    public function arc(float $sx, float $sy, float $ex, float $ey, float $sd, float $ed): bool
    {
    }

    /**
     * bezier.
     * Draws a bezier curve.
     *
     * @param array $coordinates
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.bezier.php
     */
    public function bezier(array $coordinates): bool
    {
    }

    /**
     * circle.
     * Draws a circle.
     *
     * @param float $ox
     * @param float $oy
     * @param float $px
     * @param float $py
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.circle.php
     */
    public function circle(float $ox, float $oy, float $px, float $py): bool
    {
    }

    /**
     * clear.
     * Clears the ImagickDraw.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.clear.php
     */
    public function clear(): bool
    {
    }

    /**
     * clone.
     * Makes an exact copy of the specified ImagickDraw object.
     *
     * @return ImagickDraw
     *
     * @see http://php.net/manual/en/imagickdraw.clone.php
     */
    public function clone(): ImagickDraw
    {
    }

    /**
     * color.
     * Draws color on image.
     *
     * @param float $x
     * @param float $y
     * @param int   $paintMethod
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.color.php
     */
    public function color(float $x, float $y, int $paintMethod): bool
    {
    }

    /**
     * comment.
     * Adds a comment.
     *
     * @param string $comment
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.comment.php
     */
    public function comment(string $comment): bool
    {
    }

    /**
     * composite.
     * Composites an image onto the current image.
     *
     * @param int     $compose
     * @param float   $x
     * @param float   $y
     * @param float   $width
     * @param float   $height
     * @param Imagick $compositeWand
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.composite.php
     */
    public function composite(int $compose, float $x, float $y, float $width, float $height, Imagick $compositeWand): bool
    {
    }

    /**
     * destroy.
     * Frees all associated resources.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.destroy.php
     */
    public function destroy(): bool
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
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.ellipse.php
     */
    public function ellipse(float $ox, float $oy, float $rx, float $ry, float $start, float $end): bool
    {
    }

    /**
     * getClipPath.
     * Obtains the current clipping path ID.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagickdraw.getclippath.php
     */
    public function getClipPath(): string
    {
    }

    /**
     * getClipRule.
     * Returns the current polygon fill rule.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickdraw.getcliprule.php
     */
    public function getClipRule(): int
    {
    }

    /**
     * getClipUnits.
     * Returns the interpretation of clip path units.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickdraw.getclipunits.php
     */
    public function getClipUnits(): int
    {
    }

    /**
     * getFillColor.
     * Returns the fill color.
     *
     * @return ImagickPixel
     *
     * @see http://php.net/manual/en/imagickdraw.getfillcolor.php
     */
    public function getFillColor(): ImagickPixel
    {
    }

    /**
     * getFillOpacity.
     * Returns the opacity used when drawing.
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagickdraw.getfillopacity.php
     */
    public function getFillOpacity(): float
    {
    }

    /**
     * getFillRule.
     * Returns the fill rule.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickdraw.getfillrule.php
     */
    public function getFillRule(): int
    {
    }

    /**
     * getFont.
     * Returns the font.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagickdraw.getfont.php
     */
    public function getFont(): string
    {
    }

    /**
     * getFontFamily.
     * Returns the font family.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagickdraw.getfontfamily.php
     */
    public function getFontFamily(): string
    {
    }

    /**
     * getFontSize.
     * Returns the font pointsize.
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagickdraw.getfontsize.php
     */
    public function getFontSize(): float
    {
    }

    /**
     * getFontStretch.
     * Description.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickdraw.getfontstretch.php
     */
    public function getFontStretch(): int
    {
    }

    /**
     * getFontStyle.
     * Returns the font style.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickdraw.getfontstyle.php
     */
    public function getFontStyle(): int
    {
    }

    /**
     * getFontWeight.
     * Returns the font weight.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickdraw.getfontweight.php
     */
    public function getFontWeight(): int
    {
    }

    /**
     * getGravity.
     * Returns the text placement gravity.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickdraw.getgravity.php
     */
    public function getGravity(): int
    {
    }

    /**
     * getStrokeAntialias.
     * Returns the current stroke antialias setting.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.getstrokeantialias.php
     */
    public function getStrokeAntialias(): bool
    {
    }

    /**
     * getStrokeColor.
     * Returns the color used for stroking object outlines.
     *
     * @return ImagickPixel
     *
     * @see http://php.net/manual/en/imagickdraw.getstrokecolor.php
     */
    public function getStrokeColor(): ImagickPixel
    {
    }

    /**
     * getStrokeDashArray.
     * Returns an array representing the pattern of dashes and gaps used to stroke paths.
     *
     * @return array
     *
     * @see http://php.net/manual/en/imagickdraw.getstrokedasharray.php
     */
    public function getStrokeDashArray(): array
    {
    }

    /**
     * getStrokeDashOffset.
     * Returns the offset into the dash pattern to start the dash.
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagickdraw.getstrokedashoffset.php
     */
    public function getStrokeDashOffset(): float
    {
    }

    /**
     * getStrokeLineCap.
     * Returns the shape to be used at the end of open subpaths when they are stroked.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickdraw.getstrokelinecap.php
     */
    public function getStrokeLineCap(): int
    {
    }

    /**
     * getStrokeLineJoin.
     * Returns the shape to be used at the corners of paths when they are stroked.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickdraw.getstrokelinejoin.php
     */
    public function getStrokeLineJoin(): int
    {
    }

    /**
     * getStrokeMiterLimit.
     * Returns the stroke miter limit.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickdraw.getstrokemiterlimit.php
     */
    public function getStrokeMiterLimit(): int
    {
    }

    /**
     * getStrokeOpacity.
     * Returns the opacity of stroked object outlines.
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagickdraw.getstrokeopacity.php
     */
    public function getStrokeOpacity(): float
    {
    }

    /**
     * getStrokeWidth.
     * Returns the width of the stroke used to draw object outlines.
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagickdraw.getstrokewidth.php
     */
    public function getStrokeWidth(): float
    {
    }

    /**
     * getTextAlignment.
     * Returns the text alignment.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickdraw.gettextalignment.php
     */
    public function getTextAlignment(): int
    {
    }

    /**
     * getTextAntialias.
     * Returns the current text antialias setting.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.gettextantialias.php
     */
    public function getTextAntialias(): bool
    {
    }

    /**
     * getTextDecoration.
     * Returns the text decoration.
     *
     * @return int
     *
     * @see http://php.net/manual/en/imagickdraw.gettextdecoration.php
     */
    public function getTextDecoration(): int
    {
    }

    /**
     * getTextEncoding.
     * Returns the code set used for text annotations.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagickdraw.gettextencoding.php
     */
    public function getTextEncoding(): string
    {
    }

    /**
     * getTextInterlineSpacing.
     * Description.
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagickdraw.gettextinterlinespacing.php
     */
    public function getTextInterlineSpacing(): float
    {
    }

    /**
     * getTextInterwordSpacing.
     * Description.
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagickdraw.gettextinterwordspacing.php
     */
    public function getTextInterwordSpacing(): float
    {
    }

    /**
     * getTextKerning.
     * Description.
     *
     * @return float
     *
     * @see http://php.net/manual/en/imagickdraw.gettextkerning.php
     */
    public function getTextKerning(): float
    {
    }

    /**
     * getTextUnderColor.
     * Returns the text under color.
     *
     * @return ImagickPixel
     *
     * @see http://php.net/manual/en/imagickdraw.gettextundercolor.php
     */
    public function getTextUnderColor(): ImagickPixel
    {
    }

    /**
     * getVectorGraphics.
     * Returns a string containing vector graphics.
     *
     * @return string
     *
     * @see http://php.net/manual/en/imagickdraw.getvectorgraphics.php
     */
    public function getVectorGraphics(): string
    {
    }

    /**
     * line.
     * Draws a line.
     *
     * @param float $sx
     * @param float $sy
     * @param float $ex
     * @param float $ey
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.line.php
     */
    public function line(float $sx, float $sy, float $ex, float $ey): bool
    {
    }

    /**
     * matte.
     * Paints on the image's opacity channel.
     *
     * @param float $x
     * @param float $y
     * @param int   $paintMethod
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.matte.php
     */
    public function matte(float $x, float $y, int $paintMethod): bool
    {
    }

    /**
     * pathClose.
     * Adds a path element to the current path.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathclose.php
     */
    public function pathClose(): bool
    {
    }

    /**
     * pathCurveToAbsolute.
     * Draws a cubic Bezier curve.
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathcurvetoabsolute.php
     */
    public function pathCurveToAbsolute(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool
    {
    }

    /**
     * pathCurveToQuadraticBezierAbsolute.
     * Draws a quadratic Bezier curve.
     *
     * @param float $x1
     * @param float $y1
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierabsolute.php
     */
    public function pathCurveToQuadraticBezierAbsolute(float $x1, float $y1, float $x, float $y): bool
    {
    }

    /**
     * pathCurveToQuadraticBezierRelative.
     * Draws a quadratic Bezier curve.
     *
     * @param float $x1
     * @param float $y1
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierrelative.php
     */
    public function pathCurveToQuadraticBezierRelative(float $x1, float $y1, float $x, float $y): bool
    {
    }

    /**
     * pathCurveToQuadraticBezierSmoothAbsolute.
     * Draws a quadratic Bezier curve.
     *
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php
     */
    public function pathCurveToQuadraticBezierSmoothAbsolute(float $x, float $y): bool
    {
    }

    /**
     * pathCurveToQuadraticBezierSmoothRelative.
     * Draws a quadratic Bezier curve.
     *
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php
     */
    public function pathCurveToQuadraticBezierSmoothRelative(float $x, float $y): bool
    {
    }

    /**
     * pathCurveToRelative.
     * Draws a cubic Bezier curve.
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathcurvetorelative.php
     */
    public function pathCurveToRelative(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool
    {
    }

    /**
     * pathCurveToSmoothAbsolute.
     * Draws a cubic Bezier curve.
     *
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathcurvetosmoothabsolute.php
     */
    public function pathCurveToSmoothAbsolute(float $x2, float $y2, float $x, float $y): bool
    {
    }

    /**
     * pathCurveToSmoothRelative.
     * Draws a cubic Bezier curve.
     *
     * @param float $x2
     * @param float $y2
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathcurvetosmoothrelative.php
     */
    public function pathCurveToSmoothRelative(float $x2, float $y2, float $x, float $y): bool
    {
    }

    /**
     * pathEllipticArcAbsolute.
     * Draws an elliptical arc.
     *
     * @param float $rx
     * @param float $ry
     * @param float $x_axis_rotation
     * @param bool  $large_arc_flag
     * @param bool  $sweep_flag
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathellipticarcabsolute.php
     */
    public function pathEllipticArcAbsolute(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y): bool
    {
    }

    /**
     * pathEllipticArcRelative.
     * Draws an elliptical arc.
     *
     * @param float $rx
     * @param float $ry
     * @param float $x_axis_rotation
     * @param bool  $large_arc_flag
     * @param bool  $sweep_flag
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathellipticarcrelative.php
     */
    public function pathEllipticArcRelative(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y): bool
    {
    }

    /**
     * pathFinish.
     * Terminates the current path.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathfinish.php
     */
    public function pathFinish(): bool
    {
    }

    /**
     * pathLineToAbsolute.
     * Draws a line path.
     *
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathlinetoabsolute.php
     */
    public function pathLineToAbsolute(float $x, float $y): bool
    {
    }

    /**
     * pathLineToHorizontalAbsolute.
     * Draws a horizontal line path.
     *
     * @param float $x
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathlinetohorizontalabsolute.php
     */
    public function pathLineToHorizontalAbsolute(float $x): bool
    {
    }

    /**
     * pathLineToHorizontalRelative.
     * Draws a horizontal line.
     *
     * @param float $x
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathlinetohorizontalrelative.php
     */
    public function pathLineToHorizontalRelative(float $x): bool
    {
    }

    /**
     * pathLineToRelative.
     * Draws a line path.
     *
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathlinetorelative.php
     */
    public function pathLineToRelative(float $x, float $y): bool
    {
    }

    /**
     * pathLineToVerticalAbsolute.
     * Draws a vertical line.
     *
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathlinetoverticalabsolute.php
     */
    public function pathLineToVerticalAbsolute(float $y): bool
    {
    }

    /**
     * pathLineToVerticalRelative.
     * Draws a vertical line path.
     *
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathlinetoverticalrelative.php
     */
    public function pathLineToVerticalRelative(float $y): bool
    {
    }

    /**
     * pathMoveToAbsolute.
     * Starts a new sub-path.
     *
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathmovetoabsolute.php
     */
    public function pathMoveToAbsolute(float $x, float $y): bool
    {
    }

    /**
     * pathMoveToRelative.
     * Starts a new sub-path.
     *
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathmovetorelative.php
     */
    public function pathMoveToRelative(float $x, float $y): bool
    {
    }

    /**
     * pathStart.
     * Declares the start of a path drawing list.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pathstart.php
     */
    public function pathStart(): bool
    {
    }

    /**
     * point.
     * Draws a point.
     *
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.point.php
     */
    public function point(float $x, float $y): bool
    {
    }

    /**
     * polygon.
     * Draws a polygon.
     *
     * @param array $coordinates
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.polygon.php
     */
    public function polygon(array $coordinates): bool
    {
    }

    /**
     * polyline.
     * Draws a polyline.
     *
     * @param array $coordinates
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.polyline.php
     */
    public function polyline(array $coordinates): bool
    {
    }

    /**
     * pop.
     * Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pop.php
     */
    public function pop(): bool
    {
    }

    /**
     * popClipPath.
     * Terminates a clip path definition.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.popclippath.php
     */
    public function popClipPath(): bool
    {
    }

    /**
     * popDefs.
     * Terminates a definition list.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.popdefs.php
     */
    public function popDefs(): bool
    {
    }

    /**
     * popPattern.
     * Terminates a pattern definition.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.poppattern.php
     */
    public function popPattern(): bool
    {
    }

    /**
     * push.
     * Clones the current ImagickDraw and pushes it to the stack.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.push.php
     */
    public function push(): bool
    {
    }

    /**
     * pushClipPath.
     * Starts a clip path definition.
     *
     * @param string $clip_mask_id
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pushclippath.php
     */
    public function pushClipPath(string $clip_mask_id): bool
    {
    }

    /**
     * pushDefs.
     * Indicates that following commands create named elements for early processing.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pushdefs.php
     */
    public function pushDefs(): bool
    {
    }

    /**
     * pushPattern.
     * Indicates that subsequent commands up to a ImagickDraw::opPattern() command comprise the definition of a named pattern.
     *
     * @param string $pattern_id
     * @param float  $x
     * @param float  $y
     * @param float  $width
     * @param float  $height
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.pushpattern.php
     */
    public function pushPattern(string $pattern_id, float $x, float $y, float $width, float $height): bool
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
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.rectangle.php
     */
    public function rectangle(float $x1, float $y1, float $x2, float $y2): bool
    {
    }

    /**
     * render.
     * Renders all preceding drawing commands onto the image.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.render.php
     */
    public function render(): bool
    {
    }

    /**
     * resetVectorGraphics.
     * Description.
     *
     *
     * @see http://php.net/manual/en/imagickdraw.resetvectorgraphics.php
     */
    public function resetVectorGraphics(): void
    {
    }

    /**
     * rotate.
     * Applies the specified rotation to the current coordinate space.
     *
     * @param float $degrees
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.rotate.php
     */
    public function rotate(float $degrees): bool
    {
    }

    /**
     * roundRectangle.
     * Draws a rounded rectangle.
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $rx
     * @param float $ry
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.roundrectangle.php
     */
    public function roundRectangle(float $x1, float $y1, float $x2, float $y2, float $rx, float $ry): bool
    {
    }

    /**
     * scale.
     * Adjusts the scaling factor.
     *
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.scale.php
     */
    public function scale(float $x, float $y): bool
    {
    }

    /**
     * setClipPath.
     * Associates a named clipping path with the image.
     *
     * @param string $clip_mask
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setclippath.php
     */
    public function setClipPath(string $clip_mask): bool
    {
    }

    /**
     * setClipRule.
     * Set the polygon fill rule to be used by the clipping path.
     *
     * @param int $fill_rule
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setcliprule.php
     */
    public function setClipRule(int $fill_rule): bool
    {
    }

    /**
     * setClipUnits.
     * Sets the interpretation of clip path units.
     *
     * @param int $clip_units
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setclipunits.php
     */
    public function setClipUnits(int $clip_units): bool
    {
    }

    /**
     * setFillAlpha.
     * Sets the opacity to use when drawing using the fill color or fill texture.
     *
     * @param float $opacity
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setfillalpha.php
     */
    public function setFillAlpha(float $opacity): bool
    {
    }

    /**
     * setFillColor.
     * Sets the fill color to be used for drawing filled objects.
     *
     * @param ImagickPixel $fill_pixel
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setfillcolor.php
     */
    public function setFillColor(ImagickPixel $fill_pixel): bool
    {
    }

    /**
     * setFillOpacity.
     * Sets the opacity to use when drawing using the fill color or fill texture.
     *
     * @param float $fillOpacity
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setfillopacity.php
     */
    public function setFillOpacity(float $fillOpacity): bool
    {
    }

    /**
     * setFillPatternURL.
     * Sets the URL to use as a fill pattern for filling objects.
     *
     * @param string $fill_url
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setfillpatternurl.php
     */
    public function setFillPatternURL(string $fill_url): bool
    {
    }

    /**
     * setFillRule.
     * Sets the fill rule to use while drawing polygons.
     *
     * @param int $fill_rule
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setfillrule.php
     */
    public function setFillRule(int $fill_rule): bool
    {
    }

    /**
     * setFont.
     * Sets the fully-specified font to use when annotating with text.
     *
     * @param string $font_name
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setfont.php
     */
    public function setFont(string $font_name): bool
    {
    }

    /**
     * setFontFamily.
     * Sets the font family to use when annotating with text.
     *
     * @param string $font_family
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setfontfamily.php
     */
    public function setFontFamily(string $font_family): bool
    {
    }

    /**
     * setFontSize.
     * Sets the font pointsize to use when annotating with text.
     *
     * @param float $pointsize
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setfontsize.php
     */
    public function setFontSize(float $pointsize): bool
    {
    }

    /**
     * setFontStretch.
     * Sets the font stretch to use when annotating with text.
     *
     * @param int $fontStretch
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setfontstretch.php
     */
    public function setFontStretch(int $fontStretch): bool
    {
    }

    /**
     * setFontStyle.
     * Sets the font style to use when annotating with text.
     *
     * @param int $style
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setfontstyle.php
     */
    public function setFontStyle(int $style): bool
    {
    }

    /**
     * setFontWeight.
     * Sets the font weight.
     *
     * @param int $font_weight
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setfontweight.php
     */
    public function setFontWeight(int $font_weight): bool
    {
    }

    /**
     * setGravity.
     * Sets the text placement gravity.
     *
     * @param int $gravity
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setgravity.php
     */
    public function setGravity(int $gravity): bool
    {
    }

    /**
     * setResolution.
     * Description.
     *
     * @param string $x_resolution
     * @param string $y_resolution
     *
     * @see http://php.net/manual/en/imagickdraw.setresolution.php
     */
    public function setResolution(string $x_resolution, string $y_resolution): void
    {
    }

    /**
     * setStrokeAlpha.
     * Specifies the opacity of stroked object outlines.
     *
     * @param float $opacity
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setstrokealpha.php
     */
    public function setStrokeAlpha(float $opacity): bool
    {
    }

    /**
     * setStrokeAntialias.
     * Controls whether stroked outlines are antialiased.
     *
     * @param bool $stroke_antialias
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setstrokeantialias.php
     */
    public function setStrokeAntialias(bool $stroke_antialias): bool
    {
    }

    /**
     * setStrokeColor.
     * Sets the color used for stroking object outlines.
     *
     * @param ImagickPixel $stroke_pixel
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setstrokecolor.php
     */
    public function setStrokeColor(ImagickPixel $stroke_pixel): bool
    {
    }

    /**
     * setStrokeDashArray.
     * Specifies the pattern of dashes and gaps used to stroke paths.
     *
     * @param array $dashArray
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setstrokedasharray.php
     */
    public function setStrokeDashArray(array $dashArray): bool
    {
    }

    /**
     * setStrokeDashOffset.
     * Specifies the offset into the dash pattern to start the dash.
     *
     * @param float $dash_offset
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setstrokedashoffset.php
     */
    public function setStrokeDashOffset(float $dash_offset): bool
    {
    }

    /**
     * setStrokeLineCap.
     * Specifies the shape to be used at the end of open subpaths when they are stroked.
     *
     * @param int $linecap
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setstrokelinecap.php
     */
    public function setStrokeLineCap(int $linecap): bool
    {
    }

    /**
     * setStrokeLineJoin.
     * Specifies the shape to be used at the corners of paths when they are stroked.
     *
     * @param int $linejoin
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setstrokelinejoin.php
     */
    public function setStrokeLineJoin(int $linejoin): bool
    {
    }

    /**
     * setStrokeMiterLimit.
     * Specifies the miter limit.
     *
     * @param int $miterlimit
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setstrokemiterlimit.php
     */
    public function setStrokeMiterLimit(int $miterlimit): bool
    {
    }

    /**
     * setStrokeOpacity.
     * Specifies the opacity of stroked object outlines.
     *
     * @param float $stroke_opacity
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setstrokeopacity.php
     */
    public function setStrokeOpacity(float $stroke_opacity): bool
    {
    }

    /**
     * setStrokePatternURL.
     * Sets the pattern used for stroking object outlines.
     *
     * @param string $stroke_url
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setstrokepatternurl.php
     */
    public function setStrokePatternURL(string $stroke_url): bool
    {
    }

    /**
     * setStrokeWidth.
     * Sets the width of the stroke used to draw object outlines.
     *
     * @param float $stroke_width
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setstrokewidth.php
     */
    public function setStrokeWidth(float $stroke_width): bool
    {
    }

    /**
     * setTextAlignment.
     * Specifies a text alignment.
     *
     * @param int $alignment
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.settextalignment.php
     */
    public function setTextAlignment(int $alignment): bool
    {
    }

    /**
     * setTextAntialias.
     * Controls whether text is antialiased.
     *
     * @param bool $antiAlias
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.settextantialias.php
     */
    public function setTextAntialias(bool $antiAlias): bool
    {
    }

    /**
     * setTextDecoration.
     * Specifies a decoration.
     *
     * @param int $decoration
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.settextdecoration.php
     */
    public function setTextDecoration(int $decoration): bool
    {
    }

    /**
     * setTextEncoding.
     * Specifies the text code set.
     *
     * @param string $encoding
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.settextencoding.php
     */
    public function setTextEncoding(string $encoding): bool
    {
    }

    /**
     * setTextInterlineSpacing.
     * Description.
     *
     * @param float $spacing
     *
     * @see http://php.net/manual/en/imagickdraw.settextinterlinespacing.php
     */
    public function setTextInterlineSpacing(float $spacing): void
    {
    }

    /**
     * setTextInterwordSpacing.
     * Description.
     *
     * @param float $spacing
     *
     * @see http://php.net/manual/en/imagickdraw.settextinterwordspacing.php
     */
    public function setTextInterwordSpacing(float $spacing): void
    {
    }

    /**
     * setTextKerning.
     * Description.
     *
     * @param float $kerning
     *
     * @see http://php.net/manual/en/imagickdraw.settextkerning.php
     */
    public function setTextKerning(float $kerning): void
    {
    }

    /**
     * setTextUnderColor.
     * Specifies the color of a background rectangle.
     *
     * @param ImagickPixel $under_color
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.settextundercolor.php
     */
    public function setTextUnderColor(ImagickPixel $under_color): bool
    {
    }

    /**
     * setVectorGraphics.
     * Sets the vector graphics.
     *
     * @param string $xml
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setvectorgraphics.php
     */
    public function setVectorGraphics(string $xml): bool
    {
    }

    /**
     * setViewbox.
     * Sets the overall canvas size.
     *
     * @param int $x1
     * @param int $y1
     * @param int $x2
     * @param int $y2
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.setviewbox.php
     */
    public function setViewbox(int $x1, int $y1, int $x2, int $y2): bool
    {
    }

    /**
     * skewX.
     * Skews the current coordinate system in the horizontal direction.
     *
     * @param float $degrees
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.skewx.php
     */
    public function skewX(float $degrees): bool
    {
    }

    /**
     * skewY.
     * Skews the current coordinate system in the vertical direction.
     *
     * @param float $degrees
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.skewy.php
     */
    public function skewY(float $degrees): bool
    {
    }

    /**
     * translate.
     * Applies a translation to the current coordinate system.
     *
     * @param float $x
     * @param float $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/imagickdraw.translate.php
     */
    public function translate(float $x, float $y): bool
    {
    }
}
