<?php

/**
 * CairoContext.
 * Context is the main object used when drawing with cairo. To draw with cairo, you create a CairoContext, set the target CairoSurface, and drawing options for the CairoContext, create shapes with functions . like CairoContext::moveTo() and CairoContext::lineTo(), and then draw shapes with CairoContext::stroke() or CairoContext::fill(). Contexts can be pushed to a stack via CairoContext::save(). They may then safely be changed, without loosing the current state. Use CairoContext::restore() to restore to the saved state.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairocontext.php
 */
class CairoContext
{
    /**
     * __construct.
     * Creates a new CairoContext.
     *
     * @param CairoSurface $surface
     *
     * @see http://php.net/manual/en/cairocontext.construct.php
     */
    public function __construct(CairoSurface $surface)
    {
    }

    /**
     * appendPath.
     * Appends a path to current path.
     *
     * @param CairoPath $path
     *
     * @see http://php.net/manual/en/cairocontext.appendpath.php
     */
    public function appendPath(CairoPath $path): void
    {
    }

    /**
     * arc.
     * Adds a circular arc.
     *
     * @param float $x
     * @param float $y
     * @param float $radius
     * @param float $angle1
     * @param float $angle2
     *
     * @see http://php.net/manual/en/cairocontext.arc.php
     */
    public function arc(float $x, float $y, float $radius, float $angle1, float $angle2): void
    {
    }

    /**
     * arcNegative.
     * Adds a negative arc.
     *
     * @param float $x
     * @param float $y
     * @param float $radius
     * @param float $angle1
     * @param float $angle2
     *
     * @see http://php.net/manual/en/cairocontext.arcnegative.php
     */
    public function arcNegative(float $x, float $y, float $radius, float $angle1, float $angle2): void
    {
    }

    /**
     * clip.
     * Establishes a new clip region.
     *
     * @see http://php.net/manual/en/cairocontext.clip.php
     */
    public function clip(): void
    {
    }

    /**
     * clipExtents.
     * Computes the area inside the current clip.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.clipextents.php
     */
    public function clipExtents(): array
    {
    }

    /**
     * clipPreserve.
     * Establishes a new clip region from the current clip.
     *
     * @see http://php.net/manual/en/cairocontext.clippreserve.php
     */
    public function clipPreserve(): void
    {
    }

    /**
     * clipRectangleList.
     * Retrieves the current clip as a list of rectangles.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.cliprectanglelist.php
     */
    public function clipRectangleList(): array
    {
    }

    /**
     * closePath.
     * Closes the current path.
     *
     * @see http://php.net/manual/en/cairocontext.closepath.php
     */
    public function closePath(): void
    {
    }

    /**
     * copyPage.
     * Emits the current page.
     *
     * @see http://php.net/manual/en/cairocontext.copypage.php
     */
    public function copyPage(): void
    {
    }

    /**
     * copyPath.
     * Creates a copy of the current path.
     *
     * @return CairoPath
     *
     * @see http://php.net/manual/en/cairocontext.copypath.php
     */
    public function copyPath(): CairoPath
    {
    }

    /**
     * copyPathFlat.
     * Gets a flattened copy of the current path.
     *
     * @return CairoPath
     *
     * @see http://php.net/manual/en/cairocontext.copypathflat.php
     */
    public function copyPathFlat(): CairoPath
    {
    }

    /**
     * curveTo.
     * Adds a curve.
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $x3
     * @param float $y3
     *
     * @see http://php.net/manual/en/cairocontext.curveto.php
     */
    public function curveTo(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): void
    {
    }

    /**
     * deviceToUser.
     * Transform a coordinate.
     *
     * @param float $x
     * @param float $y
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.devicetouser.php
     */
    public function deviceToUser(float $x, float $y): array
    {
    }

    /**
     * deviceToUserDistance.
     * Transform a distance.
     *
     * @param float $x
     * @param float $y
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.devicetouserdistance.php
     */
    public function deviceToUserDistance(float $x, float $y): array
    {
    }

    /**
     * fill.
     * Fills the current path.
     *
     * @see http://php.net/manual/en/cairocontext.fill.php
     */
    public function fill(): void
    {
    }

    /**
     * fillExtents.
     * Computes the filled area.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.fillextents.php
     */
    public function fillExtents(): array
    {
    }

    /**
     * fillPreserve.
     * Fills and preserve the current path.
     *
     * @see http://php.net/manual/en/cairocontext.fillpreserve.php
     */
    public function fillPreserve(): void
    {
    }

    /**
     * fontExtents.
     * Get the font extents.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.fontextents.php
     */
    public function fontExtents(): array
    {
    }

    /**
     * getAntialias.
     * Retrives the current antialias mode.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairocontext.getantialias.php
     */
    public function getAntialias(): int
    {
    }

    /**
     * getCurrentPoint.
     * The getCurrentPoint purpose.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.getcurrentpoint.php
     */
    public function getCurrentPoint(): array
    {
    }

    /**
     * getDash.
     * The getDash purpose.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.getdash.php
     */
    public function getDash(): array
    {
    }

    /**
     * getDashCount.
     * The getDashCount purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairocontext.getdashcount.php
     */
    public function getDashCount(): int
    {
    }

    /**
     * getFillRule.
     * The getFillRule purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairocontext.getfillrule.php
     */
    public function getFillRule(): int
    {
    }

    /**
     * getFontFace.
     * The getFontFace purpose.
     *
     * @see http://php.net/manual/en/cairocontext.getfontface.php
     */
    public function getFontFace(): void
    {
    }

    /**
     * getFontMatrix.
     * The getFontMatrix purpose.
     *
     * @see http://php.net/manual/en/cairocontext.getfontmatrix.php
     */
    public function getFontMatrix(): void
    {
    }

    /**
     * getFontOptions.
     * The getFontOptions purpose.
     *
     * @see http://php.net/manual/en/cairocontext.getfontoptions.php
     */
    public function getFontOptions(): void
    {
    }

    /**
     * getGroupTarget.
     * The getGroupTarget purpose.
     *
     * @see http://php.net/manual/en/cairocontext.getgrouptarget.php
     */
    public function getGroupTarget(): void
    {
    }

    /**
     * getLineCap.
     * The getLineCap purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairocontext.getlinecap.php
     */
    public function getLineCap(): int
    {
    }

    /**
     * getLineJoin.
     * The getLineJoin purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairocontext.getlinejoin.php
     */
    public function getLineJoin(): int
    {
    }

    /**
     * getLineWidth.
     * The getLineWidth purpose.
     *
     * @return float
     *
     * @see http://php.net/manual/en/cairocontext.getlinewidth.php
     */
    public function getLineWidth(): float
    {
    }

    /**
     * getMatrix.
     * The getMatrix purpose.
     *
     * @see http://php.net/manual/en/cairocontext.getmatrix.php
     */
    public function getMatrix(): void
    {
    }

    /**
     * getMiterLimit.
     * The getMiterLimit purpose.
     *
     * @return float
     *
     * @see http://php.net/manual/en/cairocontext.getmiterlimit.php
     */
    public function getMiterLimit(): float
    {
    }

    /**
     * getOperator.
     * The getOperator purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairocontext.getoperator.php
     */
    public function getOperator(): int
    {
    }

    /**
     * getScaledFont.
     * The getScaledFont purpose.
     *
     * @see http://php.net/manual/en/cairocontext.getscaledfont.php
     */
    public function getScaledFont(): void
    {
    }

    /**
     * getSource.
     * The getSource purpose.
     *
     * @see http://php.net/manual/en/cairocontext.getsource.php
     */
    public function getSource(): void
    {
    }

    /**
     * getTarget.
     * The getTarget purpose.
     *
     * @see http://php.net/manual/en/cairocontext.gettarget.php
     */
    public function getTarget(): void
    {
    }

    /**
     * getTolerance.
     * The getTolerance purpose.
     *
     * @return float
     *
     * @see http://php.net/manual/en/cairocontext.gettolerance.php
     */
    public function getTolerance(): float
    {
    }

    /**
     * glyphPath.
     * The glyphPath purpose.
     *
     * @param array $glyphs
     *
     * @see http://php.net/manual/en/cairocontext.glyphpath.php
     */
    public function glyphPath(array $glyphs): void
    {
    }

    /**
     * hasCurrentPoint.
     * The hasCurrentPoint purpose.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/cairocontext.hascurrentpoint.php
     */
    public function hasCurrentPoint(): bool
    {
    }

    /**
     * identityMatrix.
     * The identityMatrix purpose.
     *
     * @see http://php.net/manual/en/cairocontext.identitymatrix.php
     */
    public function identityMatrix(): void
    {
    }

    /**
     * inFill.
     * The inFill purpose.
     *
     * @param string $x
     * @param string $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/cairocontext.infill.php
     */
    public function inFill(string $x, string $y): bool
    {
    }

    /**
     * inStroke.
     * The inStroke purpose.
     *
     * @param string $x
     * @param string $y
     *
     * @return bool
     *
     * @see http://php.net/manual/en/cairocontext.instroke.php
     */
    public function inStroke(string $x, string $y): bool
    {
    }

    /**
     * lineTo.
     * The lineTo purpose.
     *
     * @param string $x
     * @param string $y
     *
     * @see http://php.net/manual/en/cairocontext.lineto.php
     */
    public function lineTo(string $x, string $y): void
    {
    }

    /**
     * mask.
     * The mask purpose.
     *
     * @param string $pattern
     *
     * @see http://php.net/manual/en/cairocontext.mask.php
     */
    public function mask(string $pattern): void
    {
    }

    /**
     * maskSurface.
     * The maskSurface purpose.
     *
     * @param string $surface
     * @param string $x       (optional)
     * @param string $y       (optional)
     *
     * @see http://php.net/manual/en/cairocontext.masksurface.php
     */
    public function maskSurface(string $surface, string $x, string $y): void
    {
    }

    /**
     * moveTo.
     * The moveTo purpose.
     *
     * @param string $x
     * @param string $y
     *
     * @see http://php.net/manual/en/cairocontext.moveto.php
     */
    public function moveTo(string $x, string $y): void
    {
    }

    /**
     * newPath.
     * The newPath purpose.
     *
     * @see http://php.net/manual/en/cairocontext.newpath.php
     */
    public function newPath(): void
    {
    }

    /**
     * newSubPath.
     * The newSubPath purpose.
     *
     * @see http://php.net/manual/en/cairocontext.newsubpath.php
     */
    public function newSubPath(): void
    {
    }

    /**
     * paint.
     * The paint purpose.
     *
     * @see http://php.net/manual/en/cairocontext.paint.php
     */
    public function paint(): void
    {
    }

    /**
     * paintWithAlpha.
     * The paintWithAlpha purpose.
     *
     * @param string $alpha
     *
     * @see http://php.net/manual/en/cairocontext.paintwithalpha.php
     */
    public function paintWithAlpha(string $alpha): void
    {
    }

    /**
     * pathExtents.
     * The pathExtents purpose.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.pathextents.php
     */
    public function pathExtents(): array
    {
    }

    /**
     * popGroup.
     * The popGroup purpose.
     *
     * @see http://php.net/manual/en/cairocontext.popgroup.php
     */
    public function popGroup(): void
    {
    }

    /**
     * popGroupToSource.
     * The popGroupToSource purpose.
     *
     * @see http://php.net/manual/en/cairocontext.popgrouptosource.php
     */
    public function popGroupToSource(): void
    {
    }

    /**
     * pushGroup.
     * The pushGroup purpose.
     *
     * @see http://php.net/manual/en/cairocontext.pushgroup.php
     */
    public function pushGroup(): void
    {
    }

    /**
     * pushGroupWithContent.
     * The pushGroupWithContent purpose.
     *
     * @param string $content
     *
     * @see http://php.net/manual/en/cairocontext.pushgroupwithcontent.php
     */
    public function pushGroupWithContent(string $content): void
    {
    }

    /**
     * rectangle.
     * The rectangle purpose.
     *
     * @param string $x
     * @param string $y
     * @param string $width
     * @param string $height
     *
     * @see http://php.net/manual/en/cairocontext.rectangle.php
     */
    public function rectangle(string $x, string $y, string $width, string $height): void
    {
    }

    /**
     * relCurveTo.
     * The relCurveTo purpose.
     *
     * @param string $x1
     * @param string $y1
     * @param string $x2
     * @param string $y2
     * @param string $x3
     * @param string $y3
     *
     * @see http://php.net/manual/en/cairocontext.relcurveto.php
     */
    public function relCurveTo(string $x1, string $y1, string $x2, string $y2, string $x3, string $y3): void
    {
    }

    /**
     * relLineTo.
     * The relLineTo purpose.
     *
     * @param string $x
     * @param string $y
     *
     * @see http://php.net/manual/en/cairocontext.rellineto.php
     */
    public function relLineTo(string $x, string $y): void
    {
    }

    /**
     * relMoveTo.
     * The relMoveTo purpose.
     *
     * @param string $x
     * @param string $y
     *
     * @see http://php.net/manual/en/cairocontext.relmoveto.php
     */
    public function relMoveTo(string $x, string $y): void
    {
    }

    /**
     * resetClip.
     * The resetClip purpose.
     *
     * @see http://php.net/manual/en/cairocontext.resetclip.php
     */
    public function resetClip(): void
    {
    }

    /**
     * restore.
     * The restore purpose.
     *
     * @see http://php.net/manual/en/cairocontext.restore.php
     */
    public function restore(): void
    {
    }

    /**
     * rotate.
     * The rotate purpose.
     *
     * @param string $angle
     *
     * @see http://php.net/manual/en/cairocontext.rotate.php
     */
    public function rotate(string $angle): void
    {
    }

    /**
     * save.
     * The save purpose.
     *
     * @see http://php.net/manual/en/cairocontext.save.php
     */
    public function save(): void
    {
    }

    /**
     * scale.
     * The scale purpose.
     *
     * @param string $x
     * @param string $y
     *
     * @see http://php.net/manual/en/cairocontext.scale.php
     */
    public function scale(string $x, string $y): void
    {
    }

    /**
     * selectFontFace.
     * The selectFontFace purpose.
     *
     * @param string $family
     * @param string $slant  (optional)
     * @param string $weight (optional)
     *
     * @see http://php.net/manual/en/cairocontext.selectfontface.php
     */
    public function selectFontFace(string $family, string $slant, string $weight): void
    {
    }

    /**
     * setAntialias.
     * The setAntialias purpose.
     *
     * @param string $antialias (optional)
     *
     * @see http://php.net/manual/en/cairocontext.setantialias.php
     */
    public function setAntialias(string $antialias): void
    {
    }

    /**
     * setDash.
     * The setDash purpose.
     *
     * @param string $dashes
     * @param string $offset (optional)
     *
     * @see http://php.net/manual/en/cairocontext.setdash.php
     */
    public function setDash(string $dashes, string $offset): void
    {
    }

    /**
     * setFillRule.
     * The setFillRule purpose.
     *
     * @param string $setting
     *
     * @see http://php.net/manual/en/cairocontext.setfillrule.php
     */
    public function setFillRule(string $setting): void
    {
    }

    /**
     * setFontFace.
     * The setFontFace purpose.
     *
     * @param CairoFontFace $fontface
     *
     * @see http://php.net/manual/en/cairocontext.setfontface.php
     */
    public function setFontFace(CairoFontFace $fontface): void
    {
    }

    /**
     * setFontMatrix.
     * The setFontMatrix purpose.
     *
     * @param string $matrix
     *
     * @see http://php.net/manual/en/cairocontext.setfontmatrix.php
     */
    public function setFontMatrix(string $matrix): void
    {
    }

    /**
     * setFontOptions.
     * The setFontOptions purpose.
     *
     * @param string $fontoptions
     *
     * @see http://php.net/manual/en/cairocontext.setfontoptions.php
     */
    public function setFontOptions(string $fontoptions): void
    {
    }

    /**
     * setFontSize.
     * The setFontSize purpose.
     *
     * @param string $size
     *
     * @see http://php.net/manual/en/cairocontext.setfontsize.php
     */
    public function setFontSize(string $size): void
    {
    }

    /**
     * setLineCap.
     * The setLineCap purpose.
     *
     * @param string $setting
     *
     * @see http://php.net/manual/en/cairocontext.setlinecap.php
     */
    public function setLineCap(string $setting): void
    {
    }

    /**
     * setLineJoin.
     * The setLineJoin purpose.
     *
     * @param string $setting
     *
     * @see http://php.net/manual/en/cairocontext.setlinejoin.php
     */
    public function setLineJoin(string $setting): void
    {
    }

    /**
     * setLineWidth.
     * The setLineWidth purpose.
     *
     * @param string $width
     *
     * @see http://php.net/manual/en/cairocontext.setlinewidth.php
     */
    public function setLineWidth(string $width): void
    {
    }

    /**
     * setMatrix.
     * The setMatrix purpose.
     *
     * @param string $matrix
     *
     * @see http://php.net/manual/en/cairocontext.setmatrix.php
     */
    public function setMatrix(string $matrix): void
    {
    }

    /**
     * setMiterLimit.
     * The setMiterLimit purpose.
     *
     * @param string $limit
     *
     * @see http://php.net/manual/en/cairocontext.setmiterlimit.php
     */
    public function setMiterLimit(string $limit): void
    {
    }

    /**
     * setOperator.
     * The setOperator purpose.
     *
     * @param string $setting
     *
     * @see http://php.net/manual/en/cairocontext.setoperator.php
     */
    public function setOperator(string $setting): void
    {
    }

    /**
     * setScaledFont.
     * The setScaledFont purpose.
     *
     * @param string $scaledfont
     *
     * @see http://php.net/manual/en/cairocontext.setscaledfont.php
     */
    public function setScaledFont(string $scaledfont): void
    {
    }

    /**
     * setSource.
     * The setSource purpose.
     *
     * @param string $pattern
     *
     * @see http://php.net/manual/en/cairocontext.setsource.php
     */
    public function setSource(string $pattern): void
    {
    }

    /**
     * setSourceRGB.
     * The setSourceRGB purpose.
     *
     * @param string $red
     * @param string $green
     * @param string $blue
     *
     * @see http://php.net/manual/en/cairocontext.setsourcergb.php
     */
    public function setSourceRGB(string $red, string $green, string $blue): void
    {
    }

    /**
     * setSourceRGBA.
     * The setSourceRGBA purpose.
     *
     * @param string $red
     * @param string $green
     * @param string $blue
     * @param string $alpha
     *
     * @see http://php.net/manual/en/cairocontext.setsourcergba.php
     */
    public function setSourceRGBA(string $red, string $green, string $blue, string $alpha): void
    {
    }

    /**
     * setSourceSurface.
     * The setSourceSurface purpose.
     *
     * @param string $surface
     * @param string $x       (optional)
     * @param string $y       (optional)
     *
     * @see http://php.net/manual/en/cairocontext.setsourcesurface.php
     */
    public function setSourceSurface(string $surface, string $x, string $y): void
    {
    }

    /**
     * setTolerance.
     * The setTolerance purpose.
     *
     * @param string $tolerance
     *
     * @see http://php.net/manual/en/cairocontext.settolerance.php
     */
    public function setTolerance(string $tolerance): void
    {
    }

    /**
     * showPage.
     * The showPage purpose.
     *
     * @see http://php.net/manual/en/cairocontext.showpage.php
     */
    public function showPage(): void
    {
    }

    /**
     * showText.
     * The showText purpose.
     *
     * @param string $text
     *
     * @see http://php.net/manual/en/cairocontext.showtext.php
     */
    public function showText(string $text): void
    {
    }

    /**
     * status.
     * The status purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairocontext.status.php
     */
    public function status(): int
    {
    }

    /**
     * stroke.
     * The stroke purpose.
     *
     * @see http://php.net/manual/en/cairocontext.stroke.php
     */
    public function stroke(): void
    {
    }

    /**
     * strokeExtents.
     * The strokeExtents purpose.
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.strokeextents.php
     */
    public function strokeExtents(): array
    {
    }

    /**
     * strokePreserve.
     * The strokePreserve purpose.
     *
     * @see http://php.net/manual/en/cairocontext.strokepreserve.php
     */
    public function strokePreserve(): void
    {
    }

    /**
     * textExtents.
     * The textExtents purpose.
     *
     * @param string $text
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.textextents.php
     */
    public function textExtents(string $text): array
    {
    }

    /**
     * textPath.
     * The textPath purpose.
     *
     * @param string $string
     *
     * @see http://php.net/manual/en/cairocontext.textpath.php
     */
    public function textPath(string $string): void
    {
    }

    /**
     * transform.
     * The transform purpose.
     *
     * @param string $matrix
     *
     * @see http://php.net/manual/en/cairocontext.transform.php
     */
    public function transform(string $matrix): void
    {
    }

    /**
     * translate.
     * The translate purpose.
     *
     * @param string $x
     * @param string $y
     *
     * @see http://php.net/manual/en/cairocontext.translate.php
     */
    public function translate(string $x, string $y): void
    {
    }

    /**
     * userToDevice.
     * The userToDevice purpose.
     *
     * @param string $x
     * @param string $y
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.usertodevice.php
     */
    public function userToDevice(string $x, string $y): array
    {
    }

    /**
     * userToDeviceDistance.
     * The userToDeviceDistance purpose.
     *
     * @param string $x
     * @param string $y
     *
     * @return array
     *
     * @see http://php.net/manual/en/cairocontext.usertodevicedistance.php
     */
    public function userToDeviceDistance(string $x, string $y): array
    {
    }
}
