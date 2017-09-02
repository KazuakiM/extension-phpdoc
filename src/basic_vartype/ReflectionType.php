<?php

/**
 * ReflectionType.
 * The ReflectionType class reports information about a function's return type.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflectiontype.php
 */
class ReflectionType
{
    /**
     * __toString.
     * To string.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectiontype.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * allowsNull.
     * Checks if null is allowed.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectiontype.allowsnull.php
     */
    public function allowsNull(): bool
    {
    }

    /**
     * isBuiltin.
     * Checks if it is a built-in type.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectiontype.isbuiltin.php
     */
    public function isBuiltin(): bool
    {
    }
}
