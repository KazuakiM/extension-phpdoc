<?php

/**
 * TokyoTyrantIterator.
 * Provides an iterator for TokyoTyrant and TokyoTyrantTable objects. The iterator iterates over all keys and values in the database. TokyoTyrantIterator was added in version 0.2.0.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.tokyotyrantiterator.php
 */
class TokyoTyrantIterator implements Iterator
{
    /**
     * __construct.
     * Construct an iterator.
     *
     * @param mixed $object
     *
     * @see http://php.net/manual/en/tokyotyrantiterator.construct.php
     */
    public function __construct(mixed $object)
    {
    }

    /**
     * current.
     * Get the current value.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyrantiterator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * key.
     * Returns the current key.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyrantiterator.key.php
     */
    public function key(): mixed
    {
    }

    /**
     * next.
     * Move to next key.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/tokyotyrantiterator.next.php
     */
    public function next(): mixed
    {
    }

    /**
     * rewind.
     * Rewinds the iterator.
     *
     * @see http://php.net/manual/en/tokyotyrantiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * valid.
     * Rewinds the iterator.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tokyotyrantiterator.valid.php
     */
    public function valid(): bool
    {
    }

    /* Inherited methods */
    //public function add(string $key, number $increment, int $type = 0): number
    //public function connect(string $host, int $port = RDBDEF_PORT, array $options): TokyoTyrant
    //public function connectUri(string $uri): TokyoTyrant
    //public function __construct(string $host, int $port = RDBDEF_PORT, array $options)
    //public function copy(string $path): TokyoTyrant
    //public function ext(string $name, int $options, string $key, string $value): string
    //public function fwmKeys(string $prefix, int $max_recs): array
    //public function get(mixed $keys): mixed
    //public function getIterator(): TokyoTyrantIterator
    //public function num(): int
    //public function out(mixed $keys): TokyoTyrant
    //public function put(mixed $keys, string $value = NULL): TokyoTyrant
    //public function putCat(mixed $keys, string $value): TokyoTyrant
    //public function putKeep(mixed $keys, string $value): TokyoTyrant
    //public function putNr(mixed $keys, string $value = NULL): TokyoTyrant
    //public function putShl(string $key, string $value, int $width): mixed
    //public function restore(string $log_dir, int $timestamp, bool $check_consistency = true): mixed
    //public function setMaster(string $host, int $port, int $timestamp, bool $check_consistency = true): mixed
    //public function size(string $key): int
    //public function stat(): array
    //public function sync(): mixed
    //public function tune(float $timeout, int $options = RDBT_RECON): TokyoTyrant
    //public function vanish(): mixed
}
