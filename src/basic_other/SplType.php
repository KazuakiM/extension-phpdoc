<?php

/**
 * SplType.
 * Parent class for all SPL types.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.spltype.php
 */
abstract class SplType
{
    const __default = null;

    /**
     * __construct.
     * Creates a new value of some type.
     *
     * @param mixed $initial_value (optional)
     * @param bool  $strict        (optional)
     *
     * @throws UnexpectedValueException
     *
     * @see http://php.net/manual/en/spltype.construct.php
     */
    public function __construct(mixed $initial_value, bool $strict)
    {
    }
}
