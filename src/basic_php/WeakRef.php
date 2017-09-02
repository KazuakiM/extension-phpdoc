<?php

/**
 * WeakRef.
 * The WeakRef class provides a gateway to objects without preventing the garbage collector from freeing those objects. It also provides a way to turn a weak reference into a strong one.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.weakref.php
 */
class WeakRef
{
    /**
     * __construct.
     * Constructs a new weak reference.
     *
     * @param object $object
     *
     * @see http://php.net/manual/en/weakref.construct.php
     */
    public function __construct(object $object)
    {
    }

    /**
     * acquire.
     * Acquires a strong reference on that object.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/weakref.acquire.php
     */
    public function acquire(): bool
    {
    }

    /**
     * get.
     * Returns the object pointed to by the weak reference.
     *
     * @return object
     *
     * @see http://php.net/manual/en/weakref.get.php
     */
    public function get(): object
    {
    }

    /**
     * release.
     * Releases a previously acquired reference.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/weakref.release.php
     */
    public function release(): bool
    {
    }

    /**
     * valid.
     * Checks whether the object referenced still exists.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/weakref.valid.php
     */
    public function valid(): bool
    {
    }
}
