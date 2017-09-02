<?php

/**
 * Reflection.
 * The reflection class.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflection.php
 */
class Reflection
{
    /**
     * export.
     * Exports.
     *
     * @param Reflector $reflector
     * @param bool      $return    = false
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflection.export.php
     */
    public static function export(Reflector $reflector, bool $return = false): string
    {
    }

    /**
     * getModifierNames.
     * Gets modifier names.
     *
     * @param int $modifiers
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflection.getmodifiernames.php
     */
    public static function getModifierNames(int $modifiers): array
    {
    }
}
