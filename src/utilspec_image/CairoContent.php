<?php

/**
 * CairoContent.
 * CairoContent is used to describe the content that a surface will contain, whether color information, alpha information (translucence vs. opacity), or both.
 * Note: The large values here are designed to keep CairoContent values distinct from CairoContent values so that the implementation can detect the error if users confuse the two types.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairocontent.php
 */
class CairoContent
{
    const COLOR = 4096;
    const ALPHA = 8192;
    const COLOR_ALPHA = 12288;
}
