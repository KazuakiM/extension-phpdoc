<?php


/**
 * Serializable.
 *
 * Interface for customized serializing.
 * Classes that implement this interface no longer support __sleep() and __wakeup(). The method serialize is called whenever an instance needs to be serialized. This does not invoke __destruct() or have any other side effect unless programmed inside the method. When the data is unserialized the class is known and the appropriate unserialize() method is called as a constructor instead of calling __construct(). If you need to execute the standard constructor you may do so in the method.
 * Note, that when an old instance of a class that implements this interface now, which had been serialized before the class implemeted the interface, is unserialized, __wakeup() is called instead of the serialize method, which might be useful for migration purposes.
 *
 * @see http://php.net/manual/en/class.serializable.php
 */
interface Serializable
{
    /**
     * serialize.
     *
     * String representation of object
     *
     * @return string
     *
     * @see http://php.net/manual/en/serializable.serialize.php
     */
    abstract public function serialize(): string
    {
    }

    /**
     * unserialize.
     *
     * Constructs the object
     *
     * @param string $serialized
     *
     * @see http://php.net/manual/en/serializable.unserialize.php
     */
    abstract public function unserialize(string $serialized): void
    {
    }
}
