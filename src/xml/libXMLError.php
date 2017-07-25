<?php

/**
 * libXMLError.
 *
 * Contains various information about errors thrown by libxml. The error codes are described within the official [xmlError API documentation](http://www.xmlsoft.org/html/libxml-xmlerror.html).
 *
 * @property int $level
 * @property int $code
 * @property int $column
 * @property string $message
 * @property string $file
 * @property int $line
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.libxmlerror.php
 */
class libXMLError
{
    public $level;
    public $code;
    public $column;
    public $message;
    public $file;
    public $line;
}
