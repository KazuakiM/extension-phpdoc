<?php

/**
 * SplEnum.
 * SplEnum gives the ability to emulate and create enumeration objects natively in PHP.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.splenum.php
 */
class SplEnum extends SplType
{
    const __default = null;

    /**
     * getConstList.
     * Returns all consts (possible values) as an array.
     *
     * @param bool $include_default = false
     *
     * @return array
     *
     * @see http://php.net/manual/en/splenum.getconstlist.php
     */
    public function getConstList(bool $include_default = false): array
    {
    }

    /* Inherited methods */
    //public function __construct(mixed $initial_value, bool $strict)
}
