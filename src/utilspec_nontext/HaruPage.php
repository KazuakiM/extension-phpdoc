<?php

/**
 * HaruPage.
 * Haru PDF Page Class.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.harupage.php
 */
class HaruPage
{
    /**
     * arc.
     * Append an arc to the current path.
     *
     * @param float $x
     * @param float $y
     * @param float $ray
     * @param float $ang1
     * @param float $ang2
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.arc.php
     */
    public function arc(float $x, float $y, float $ray, float $ang1, float $ang2): bool
    {
    }

    /**
     * beginText.
     * Begin a text object and set the current text position to (0,0).
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.begintext.php
     */
    public function beginText(): bool
    {
    }

    /**
     * circle.
     * Append a circle to the current path.
     *
     * @param float $x
     * @param float $y
     * @param float $ray
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.circle.php
     */
    public function circle(float $x, float $y, float $ray): bool
    {
    }

    /**
     * closePath.
     * Append a straight line from the current point to the start point of the path.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.closepath.php
     */
    public function closePath(): bool
    {
    }

    /**
     * concat.
     * Concatenate current transformation matrix of the page and the specified matrix.
     *
     * @param float $a
     * @param float $b
     * @param float $c
     * @param float $d
     * @param float $x
     * @param float $y
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.concat.php
     */
    public function concat(float $a, float $b, float $c, float $d, float $x, float $y): bool
    {
    }

    /**
     * createDestination.
     * Create new HaruDestination instance.
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harupage.createdestination.php
     */
    public function createDestination(): object
    {
    }

    /**
     * createLinkAnnotation.
     * Create new HaruAnnotation instance.
     *
     * @param array  $rectangle
     * @param object $destination
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harupage.createlinkannotation.php
     */
    public function createLinkAnnotation(array $rectangle, object $destination): object
    {
    }

    /**
     * createTextAnnotation.
     * Create new HaruAnnotation instance.
     *
     * @param array  $rectangle
     * @param string $text
     * @param object $encoder   (optional)
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harupage.createtextannotation.php
     */
    public function createTextAnnotation(array $rectangle, string $text, object $encoder): object
    {
    }

    /**
     * createURLAnnotation.
     * Create and return new HaruAnnotation instance.
     *
     * @param array  $rectangle
     * @param string $url
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harupage.createurlannotation.php
     */
    public function createURLAnnotation(array $rectangle, string $url): object
    {
    }

    /**
     * curveTo2.
     * Append a Bezier curve to the current path.
     *
     * @param float $x2
     * @param float $y2
     * @param float $x3
     * @param float $y3
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.curveto2.php
     */
    public function curveTo2(float $x2, float $y2, float $x3, float $y3): bool
    {
    }

    /**
     * curveTo3.
     * Append a Bezier curve to the current path.
     *
     * @param float $x1
     * @param float $y1
     * @param float $x3
     * @param float $y3
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.curveto3.php
     */
    public function curveTo3(float $x1, float $y1, float $x3, float $y3): bool
    {
    }

    /**
     * curveTo.
     * Append a Bezier curve to the current path.
     *
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $x3
     * @param float $y3
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.curveto.php
     */
    public function curveTo(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): bool
    {
    }

    /**
     * drawImage.
     * Show image at the page.
     *
     * @param object $image
     * @param float  $x
     * @param float  $y
     * @param float  $width
     * @param float  $height
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.drawimage.php
     */
    public function drawImage(object $image, float $x, float $y, float $width, float $height): bool
    {
    }

    /**
     * ellipse.
     * Append an ellipse to the current path.
     *
     * @param float $x
     * @param float $y
     * @param float $xray
     * @param float $yray
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.ellipse.php
     */
    public function ellipse(float $x, float $y, float $xray, float $yray): bool
    {
    }

    /**
     * endPath.
     * End current path object without filling and painting operations.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.endpath.php
     */
    public function endPath(): bool
    {
    }

    /**
     * endText.
     * End current text object.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.endtext.php
     */
    public function endText(): bool
    {
    }

    /**
     * eofill.
     * Fill current path using even-odd rule.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.eofill.php
     */
    public function eofill(): bool
    {
    }

    /**
     * eoFillStroke.
     * Fill current path using even-odd rule, then paint the path.
     *
     * @param bool $close_path = false
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.eofillstroke.php
     */
    public function eoFillStroke(bool $close_path = false): bool
    {
    }

    /**
     * fill.
     * Fill current path using nonzero winding number rule.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.fill.php
     */
    public function fill(): bool
    {
    }

    /**
     * fillStroke.
     * Fill current path using nonzero winding number rule, then paint the path.
     *
     * @param bool $close_path = false
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.fillstroke.php
     */
    public function fillStroke(bool $close_path = false): bool
    {
    }

    /**
     * getCharSpace.
     * Get the current value of character spacing.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.getcharspace.php
     */
    public function getCharSpace(): float
    {
    }

    /**
     * getCMYKFill.
     * Get the current filling color.
     *
     * @throws HaruException
     *
     * @return array
     *
     * @see http://php.net/manual/en/harupage.getcmykfill.php
     */
    public function getCMYKFill(): array
    {
    }

    /**
     * getCMYKStroke.
     * Get the current stroking color.
     *
     * @throws HaruException
     *
     * @return array
     *
     * @see http://php.net/manual/en/harupage.getcmykstroke.php
     */
    public function getCMYKStroke(): array
    {
    }

    /**
     * getCurrentFont.
     * Get the currently used font.
     *
     * @throws HaruException
     *
     * @return object
     *
     * @see http://php.net/manual/en/harupage.getcurrentfont.php
     */
    public function getCurrentFont(): object
    {
    }

    /**
     * getCurrentFontSize.
     * Get the current font size.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.getcurrentfontsize.php
     */
    public function getCurrentFontSize(): float
    {
    }

    /**
     * getCurrentPos.
     * Get the current position for path painting.
     *
     * @throws HaruException
     *
     * @return array
     *
     * @see http://php.net/manual/en/harupage.getcurrentpos.php
     */
    public function getCurrentPos(): array
    {
    }

    /**
     * getCurrentTextPos.
     * Get the current position for text printing.
     *
     * @throws HaruException
     *
     * @return array
     *
     * @see http://php.net/manual/en/harupage.getcurrenttextpos.php
     */
    public function getCurrentTextPos(): array
    {
    }

    /**
     * getDash.
     * Get the current dash pattern.
     *
     * @throws HaruException
     *
     * @return array
     *
     * @see http://php.net/manual/en/harupage.getdash.php
     */
    public function getDash(): array
    {
    }

    /**
     * getFillingColorSpace.
     * Get the current filling color space.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harupage.getfillingcolorspace.php
     */
    public function getFillingColorSpace(): int
    {
    }

    /**
     * getFlatness.
     * Get the flatness of the page.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.getflatness.php
     */
    public function getFlatness(): float
    {
    }

    /**
     * getGMode.
     * Get the current graphics mode.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harupage.getgmode.php
     */
    public function getGMode(): int
    {
    }

    /**
     * getGrayFill.
     * Get the current filling color.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.getgrayfill.php
     */
    public function getGrayFill(): float
    {
    }

    /**
     * getGrayStroke.
     * Get the current stroking color.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.getgraystroke.php
     */
    public function getGrayStroke(): float
    {
    }

    /**
     * getHeight.
     * Get the height of the page.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.getheight.php
     */
    public function getHeight(): float
    {
    }

    /**
     * getHorizontalScaling.
     * Get the current value of horizontal scaling.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.gethorizontalscaling.php
     */
    public function getHorizontalScaling(): float
    {
    }

    /**
     * getLineCap.
     * Get the current line cap style.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harupage.getlinecap.php
     */
    public function getLineCap(): int
    {
    }

    /**
     * getLineJoin.
     * Get the current line join style.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harupage.getlinejoin.php
     */
    public function getLineJoin(): int
    {
    }

    /**
     * getLineWidth.
     * Get the current line width.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.getlinewidth.php
     */
    public function getLineWidth(): float
    {
    }

    /**
     * getMiterLimit.
     * Get the value of miter limit.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.getmiterlimit.php
     */
    public function getMiterLimit(): float
    {
    }

    /**
     * getRGBFill.
     * Get the current filling color.
     *
     * @throws HaruException
     *
     * @return array
     *
     * @see http://php.net/manual/en/harupage.getrgbfill.php
     */
    public function getRGBFill(): array
    {
    }

    /**
     * getRGBStroke.
     * Get the current stroking color.
     *
     * @throws HaruException
     *
     * @return array
     *
     * @see http://php.net/manual/en/harupage.getrgbstroke.php
     */
    public function getRGBStroke(): array
    {
    }

    /**
     * getStrokingColorSpace.
     * Get the current stroking color space.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harupage.getstrokingcolorspace.php
     */
    public function getStrokingColorSpace(): int
    {
    }

    /**
     * getTextLeading.
     * Get the current value of line spacing.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.gettextleading.php
     */
    public function getTextLeading(): float
    {
    }

    /**
     * getTextMatrix.
     * Get the current text transformation matrix of the page.
     *
     * @throws HaruException
     *
     * @return array
     *
     * @see http://php.net/manual/en/harupage.gettextmatrix.php
     */
    public function getTextMatrix(): array
    {
    }

    /**
     * getTextRenderingMode.
     * Get the current text rendering mode.
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harupage.gettextrenderingmode.php
     */
    public function getTextRenderingMode(): int
    {
    }

    /**
     * getTextRise.
     * Get the current value of text rising.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.gettextrise.php
     */
    public function getTextRise(): float
    {
    }

    /**
     * getTextWidth.
     * Get the width of the text using current fontsize, character spacing and word spacing.
     *
     * @param string $text
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.gettextwidth.php
     */
    public function getTextWidth(string $text): float
    {
    }

    /**
     * getTransMatrix.
     * Get the current transformation matrix of the page.
     *
     * @throws HaruException
     *
     * @return array
     *
     * @see http://php.net/manual/en/harupage.gettransmatrix.php
     */
    public function getTransMatrix(): array
    {
    }

    /**
     * getWidth.
     * Get the width of the page.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.getwidth.php
     */
    public function getWidth(): float
    {
    }

    /**
     * getWordSpace.
     * Get the current value of word spacing.
     *
     * @throws HaruException
     *
     * @return float
     *
     * @see http://php.net/manual/en/harupage.getwordspace.php
     */
    public function getWordSpace(): float
    {
    }

    /**
     * lineTo.
     * Draw a line from the current point to the specified point.
     *
     * @param float $x
     * @param float $y
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.lineto.php
     */
    public function lineTo(float $x, float $y): bool
    {
    }

    /**
     * measureText.
     * Calculate the byte length of characters which can be included on one line of the specified width.
     *
     * @param string $text
     * @param float  $width
     * @param bool   $wordwrap = false
     *
     * @throws HaruException
     *
     * @return int
     *
     * @see http://php.net/manual/en/harupage.measuretext.php
     */
    public function measureText(string $text, float $width, bool $wordwrap = false): int
    {
    }

    /**
     * moveTextPos.
     * Move text position to the specified offset.
     *
     * @param float $x
     * @param float $y
     * @param bool  $set_leading = false
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.movetextpos.php
     */
    public function moveTextPos(float $x, float $y, bool $set_leading = false): bool
    {
    }

    /**
     * moveTo.
     * Set starting point for new drawing path.
     *
     * @param float $x
     * @param float $y
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.moveto.php
     */
    public function moveTo(float $x, float $y): bool
    {
    }

    /**
     * moveToNextLine.
     * Move text position to the start of the next line.
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.movetonextline.php
     */
    public function moveToNextLine(): bool
    {
    }

    /**
     * rectangle.
     * Append a rectangle to the current path.
     *
     * @param float $x
     * @param float $y
     * @param float $width
     * @param float $height
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.rectangle.php
     */
    public function rectangle(float $x, float $y, float $width, float $height): bool
    {
    }

    /**
     * setCharSpace.
     * Set character spacing for the page.
     *
     * @param float $char_space
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setcharspace.php
     */
    public function setCharSpace(float $char_space): bool
    {
    }

    /**
     * setCMYKFill.
     * Set filling color for the page.
     *
     * @param float $c
     * @param float $m
     * @param float $y
     * @param float $k
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setcmykfill.php
     */
    public function setCMYKFill(float $c, float $m, float $y, float $k): bool
    {
    }

    /**
     * setCMYKStroke.
     * Set stroking color for the page.
     *
     * @param float $c
     * @param float $m
     * @param float $y
     * @param float $k
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setcmykstroke.php
     */
    public function setCMYKStroke(float $c, float $m, float $y, float $k): bool
    {
    }

    /**
     * setDash.
     * Set the dash pattern for the page.
     *
     * @param array $pattern
     * @param int   $phase
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setdash.php
     */
    public function setDash(array $pattern, int $phase): bool
    {
    }

    /**
     * setFlatness.
     * Set flatness for the page.
     *
     * @param float $flatness
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setflatness.php
     */
    public function setFlatness(float $flatness): bool
    {
    }

    /**
     * setFontAndSize.
     * Set font and fontsize for the page.
     *
     * @param object $font
     * @param float  $size
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setfontandsize.php
     */
    public function setFontAndSize(object $font, float $size): bool
    {
    }

    /**
     * setGrayFill.
     * Set filling color for the page.
     *
     * @param float $value
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setgrayfill.php
     */
    public function setGrayFill(float $value): bool
    {
    }

    /**
     * setGrayStroke.
     * Sets stroking color for the page.
     *
     * @param float $value
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setgraystroke.php
     */
    public function setGrayStroke(float $value): bool
    {
    }

    /**
     * setHeight.
     * Set height of the page.
     *
     * @param float $height
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setheight.php
     */
    public function setHeight(float $height): bool
    {
    }

    /**
     * setHorizontalScaling.
     * Set horizontal scaling for the page.
     *
     * @param float $scaling
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.sethorizontalscaling.php
     */
    public function setHorizontalScaling(float $scaling): bool
    {
    }

    /**
     * setLineCap.
     * Set the shape to be used at the ends of lines.
     *
     * @param int $cap
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setlinecap.php
     */
    public function setLineCap(int $cap): bool
    {
    }

    /**
     * setLineJoin.
     * Set line join style for the page.
     *
     * @param int $join
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setlinejoin.php
     */
    public function setLineJoin(int $join): bool
    {
    }

    /**
     * setLineWidth.
     * Set line width for the page.
     *
     * @param float $width
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setlinewidth.php
     */
    public function setLineWidth(float $width): bool
    {
    }

    /**
     * setMiterLimit.
     * Set the current value of the miter limit of the page.
     *
     * @param float $limit
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setmiterlimit.php
     */
    public function setMiterLimit(float $limit): bool
    {
    }

    /**
     * setRGBFill.
     * Set filling color for the page.
     *
     * @param float $r
     * @param float $g
     * @param float $b
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setrgbfill.php
     */
    public function setRGBFill(float $r, float $g, float $b): bool
    {
    }

    /**
     * setRGBStroke.
     * Set stroking color for the page.
     *
     * @param float $r
     * @param float $g
     * @param float $b
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setrgbstroke.php
     */
    public function setRGBStroke(float $r, float $g, float $b): bool
    {
    }

    /**
     * setRotate.
     * Set rotation angle of the page.
     *
     * @param int $angle
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setrotate.php
     */
    public function setRotate(int $angle): bool
    {
    }

    /**
     * setSize.
     * Set size and direction of the page.
     *
     * @param int $size
     * @param int $direction
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setsize.php
     */
    public function setSize(int $size, int $direction): bool
    {
    }

    /**
     * setSlideShow.
     * Set transition style for the page.
     *
     * @param int   $type
     * @param float $disp_time
     * @param float $trans_time
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setslideshow.php
     */
    public function setSlideShow(int $type, float $disp_time, float $trans_time): bool
    {
    }

    /**
     * setTextLeading.
     * Set text leading (line spacing) for the page.
     *
     * @param float $text_leading
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.settextleading.php
     */
    public function setTextLeading(float $text_leading): bool
    {
    }

    /**
     * setTextMatrix.
     * Set the current text transformation matrix of the page.
     *
     * @param float $a
     * @param float $b
     * @param float $c
     * @param float $d
     * @param float $x
     * @param float $y
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.settextmatrix.php
     */
    public function setTextMatrix(float $a, float $b, float $c, float $d, float $x, float $y): bool
    {
    }

    /**
     * setTextRenderingMode.
     * Set text rendering mode for the page.
     *
     * @param int $mode
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.settextrenderingmode.php
     */
    public function setTextRenderingMode(int $mode): bool
    {
    }

    /**
     * setTextRise.
     * Set the current value of text rising.
     *
     * @param float $rise
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.settextrise.php
     */
    public function setTextRise(float $rise): bool
    {
    }

    /**
     * setWidth.
     * Set width of the page.
     *
     * @param float $width
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setwidth.php
     */
    public function setWidth(float $width): bool
    {
    }

    /**
     * setWordSpace.
     * Set word spacing for the page.
     *
     * @param float $word_space
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.setwordspace.php
     */
    public function setWordSpace(float $word_space): bool
    {
    }

    /**
     * showText.
     * Print text at the current position of the page.
     *
     * @param string $text
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.showtext.php
     */
    public function showText(string $text): bool
    {
    }

    /**
     * showTextNextLine.
     * Move the current position to the start of the next line and print the text.
     *
     * @param string $text
     * @param float  $word_space = 0
     * @param float  $char_space = 0
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.showtextnextline.php
     */
    public function showTextNextLine(string $text, float $word_space = 0, float $char_space = 0): bool
    {
    }

    /**
     * stroke.
     * Paint current path.
     *
     * @param bool $close_path = false
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.stroke.php
     */
    public function stroke(bool $close_path = false): bool
    {
    }

    /**
     * textOut.
     * Print the text on the specified position.
     *
     * @param float  $x
     * @param float  $y
     * @param string $text
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.textout.php
     */
    public function textOut(float $x, float $y, string $text): bool
    {
    }

    /**
     * textRect.
     * Print the text inside the specified region.
     *
     * @param float  $left
     * @param float  $top
     * @param float  $right
     * @param float  $bottom
     * @param string $text
     * @param int    $align  = HaruPage::TALIGN_LEFT
     *
     * @throws HaruException
     *
     * @return bool
     *
     * @see http://php.net/manual/en/harupage.textrect.php
     */
    public function textRect(float $left, float $top, float $right, float $bottom, string $text, int $align = self::TALIGN_LEFT): bool
    {
    }
}
