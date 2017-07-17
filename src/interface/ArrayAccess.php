<?php


/**
 * ArrayAccess.
 *
 * Interface to provide accessing objects as arrays.
 *
 * @see http://php.net/manual/en/class.arrayaccess.php
 */
interface ArrayAccess
{
    /**
     * offsetExists.
     *
     * Whether an offset exists
     *
     * @param mixed $offset
     *
     * @return bool
     *
     * @see http://php.net/manual/en/arrayaccess.offsetexists.php
     */
    abstract public function offsetExists(mixed $offset): boolean
    {
    }

    /**
     * offsetGet.
     *
     * Offset to retrieve
     *
     * @param mixed $offset
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/arrayaccess.offsetget.php
     */
    abstract public function offsetGet(mixed $offset): mixed
    {
    }

    /**
     * offsetSet.
     *
     * Assign a value to the specified offset
     *
     * @param mixed $offset
     * @param mixed $value
     *
     * @see http://php.net/manual/en/arrayaccess.offsetset.php
     */
    abstract public function offsetSet(mixed $offset, mixed $value): void
    {
    }

    /**
     * offsetUnset.
     *
     * Unset an offset
     *
     * @param mixed $offset
     *
     * @see http://php.net/manual/en/arrayaccess.offsetunset.php
     */
    abstract public function offsetUnset(mixed $offset): void
    {
    }
}
