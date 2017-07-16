<?php

/**
 * libXMLError
 *
 * Contains various information about errors thrown by libxml. The error codes are described within the official [xmlError API documentation](http://www.xmlsoft.org/html/libxml-xmlerror.html).
 *
 * @property-write int $level
 * @property-write int $code
 * @property-write int $column
 * @property-write string $message
 * @property-write string $file
 * @property-write int $line
 *
 * @link http://php.net/manual/en/class.libxmlerror.php
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
