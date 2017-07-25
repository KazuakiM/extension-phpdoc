<?php

/**
 * Generator.
 *
 * Generator objects are returned from generators.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.generator.php
 */
class Generator implements Iterator
{
    /**
     * __wakeup.
     *
     * Serialize callback
     *
     *
     * @see http://php.net/manual/en/generator.wakeup.php
     */
    public function __wakeup(): void
    {
    }

    /**
     * current.
     *
     * Get the yielded value
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/generator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * getReturn.
     *
     * Get the return value of a generator
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/generator.getreturn.php
     */
    public function getReturn(): mixed
    {
    }

    /**
     * key.
     *
     * Get the yielded key
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/generator.key.php
     */
    public function key(): mixed
    {
    }

    /**
     * next.
     *
     * Resume execution of the generator
     *
     *
     * @see http://php.net/manual/en/generator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     *
     * Rewind the iterator
     *
     *
     * @see http://php.net/manual/en/generator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * send.
     *
     * Send a value to the generator
     *
     * @param mixed $value
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/generator.send.php
     */
    public function send(mixed $value): mixed
    {
    }

    /**
     * throw.
     *
     * Throw an exception into the generator
     *
     * @param Throwable $exception
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/generator.throw.php
     */
    public function throw(Throwable $exception): mixed
    {
    }

    /**
     * valid.
     *
     * Check if the iterator has been closed
     *
     * @return bool
     *
     * @see http://php.net/manual/en/generator.valid.php
     */
    public function valid(): bool
    {
    }
}
