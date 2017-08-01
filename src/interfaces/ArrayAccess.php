<?php


/**
 * ArrayAccess.
 * Interface to provide accessing objects as arrays.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.arrayaccess.php
 */
interface ArrayAccess
{
    /**
     * offsetExists.
     * Whether an offset exists.
     *
     * @param mixed $offset
     *
     * @return bool
     *
     * @see http://php.net/manual/en/arrayaccess.offsetexists.php
     */
    public function offsetExists(mixed $offset): bool;

    /**
     * offsetGet.
     * Offset to retrieve.
     *
     * @param mixed $offset
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/arrayaccess.offsetget.php
     */
    public function offsetGet(mixed $offset): mixed;

    /**
     * offsetSet.
     * Assign a value to the specified offset.
     *
     * @param mixed $offset
     * @param mixed $value
     *
     * @see http://php.net/manual/en/arrayaccess.offsetset.php
     */
    public function offsetSet(mixed $offset, mixed $value): void;

    /**
     * offsetUnset.
     * Unset an offset.
     *
     * @param mixed $offset
     *
     * @see http://php.net/manual/en/arrayaccess.offsetunset.php
     */
    public function offsetUnset(mixed $offset): void;
}
