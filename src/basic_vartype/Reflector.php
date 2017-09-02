<?php

/**
 * Reflector.
 * Reflector is an interface implemented by all exportable Reflection classes.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflector.php
 */
interface Reflector
{
    /**
     * __toString.
     * To string.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflector.tostring.php
     */
    public function __toString(): string;

    /**
     * export.
     * Exports.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflector.export.php
     */
    public static function export(): string;
}
