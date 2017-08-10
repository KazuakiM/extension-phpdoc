<?php

/**
 * CairoStatus.
 * CairoStatus is used to indicate errors that can occur when using Cairo. In some cases it is returned directly by functions. but when using CairoContext, the last error, if any, is stored in the object and can be retrieved with CairoContext::status() or cairo_status(). New entries may be added in future versions.
 * Use Cairo::statusToString() or cairo_status_to_string() to get a human-readable representation of an error message.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.cairostatus.php
 */
class CairoStatus
{
    const SUCCESS = 0;
    const NO_MEMORY = 1;
    const INVALID_RESTORE = 2;
    const INVALID_POP_GROUP = 3;
    const NO_CURRENT_POINT = 4;
    const INVALID_MATRIX = 5;
    const INVALID_STATUS = 6;
    const null_POINTER = 7;
    const INVALID_STRING = 8;
    const INVALID_PATH_DATA = 9;
    const READ_ERROR = 10;
    const WRITE_ERROR = 11;
    const SURFACE_FINISHED = 12;
    const SURFACE_TYPE_MISMATCH = 13;
    const PATTERN_TYPE_MISMATCH = 14;
    const INVALID_CONTENT = 15;
    const INVALID_FORMAT = 16;
    const INVALID_VISUAL = 17;
    const FILE_NOT_FOUND = 18;
    const INVALID_DASH = 19;
    const INVALID_DSC_COMMENT = 20;
    const INVALID_INDEX = 21;
    const CLIP_NOT_REPRESENTABLE = 22;
    const TEMP_FILE_ERROR = 23;
    const INVALID_STRIDE = 24;
}
