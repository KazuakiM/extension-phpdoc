<?php

/**
 * CairoFontOptions.
 * An opaque structure holding all options that are used when rendering fonts.
 * Individual features of a cairo_font_options_t can be set or accessed using functions named cairo_font_options_set_feature_name and cairo_font_options_get_feature_name, like cairo_font_options_set_antialias() and cairo_font_options_get_antialias().
 * New features may be added to CairoFontOptions in the future. For this reason CairoFontOptions::copy(), CairoFontOptions::equal(), CairoFontOptions::merge(), CairoFontOptions::hash() (cairo_font_options_copy(), cairo_font_options_equal(), cairo_font_options_merge(), and cairo_font_options_hash() in procedural way) should be used to copy, check for equality, merge, or compute a hash value of CairoFontOptions objects.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://www.php.net/manual/en/class.cairofontoptions.php
 */
class CairoFontOptions
{
    /**
     * __construct.
     * The __construct purpose.
     *
     * @see http://php.net/manual/en/cairofontoptions.construct.php
     */
    public function __construct()
    {
    }

    /**
     * equal.
     * The equal purpose.
     *
     * @param string $other
     *
     * @return bool
     *
     * @see http://php.net/manual/en/cairofontoptions.equal.php
     */
    public function equal(string $other): bool
    {
    }

    /**
     * getAntialias.
     * The getAntialias purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairofontoptions.getantialias.php
     */
    public function getAntialias(): int
    {
    }

    /**
     * getHintMetrics.
     * The getHintMetrics purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairofontoptions.gethintmetrics.php
     */
    public function getHintMetrics(): int
    {
    }

    /**
     * getHintStyle.
     * The getHintStyle purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairofontoptions.gethintstyle.php
     */
    public function getHintStyle(): int
    {
    }

    /**
     * getSubpixelOrder.
     * The getSubpixelOrder purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairofontoptions.getsubpixelorder.php
     */
    public function getSubpixelOrder(): int
    {
    }

    /**
     * hash.
     * The hash purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairofontoptions.hash.php
     */
    public function hash(): int
    {
    }

    /**
     * merge.
     * The merge purpose.
     *
     * @param string $other
     *
     * @see http://php.net/manual/en/cairofontoptions.merge.php
     */
    public function merge(string $other): void
    {
    }

    /**
     * setAntialias.
     * The setAntialias purpose.
     *
     * @param string $antialias
     *
     * @see http://php.net/manual/en/cairofontoptions.setantialias.php
     */
    public function setAntialias(string $antialias): void
    {
    }

    /**
     * setHintMetrics.
     * The setHintMetrics purpose.
     *
     * @param string $hint_metrics
     *
     * @see http://php.net/manual/en/cairofontoptions.sethintmetrics.php
     */
    public function setHintMetrics(string $hint_metrics): void
    {
    }

    /**
     * setHintStyle.
     * The setHintStyle purpose.
     *
     * @param string $hint_style
     *
     * @see http://php.net/manual/en/cairofontoptions.sethintstyle.php
     */
    public function setHintStyle(string $hint_style): void
    {
    }

    /**
     * setSubpixelOrder.
     * The setSubpixelOrder purpose.
     *
     * @param string $subpixel_order
     *
     * @see http://php.net/manual/en/cairofontoptions.setsubpixelorder.php
     */
    public function setSubpixelOrder(string $subpixel_order): void
    {
    }

    /**
     * status.
     * The status purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/cairofontoptions.status.php
     */
    public function status(): int
    {
    }
}
