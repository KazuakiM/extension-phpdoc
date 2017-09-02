<?php

/**
 * MultipleIterator.
 * An Iterator that sequentially iterates over all attached iterators.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.multipleiterator.php
 */
class MultipleIterator implements Iterator
{
    const MIT_NEED_ANY = 0;
    const MIT_NEED_ALL = 1;
    const MIT_KEYS_NUMERIC = 0;
    const MIT_KEYS_ASSOC = 2;

    /**
     * __construct.
     * Constructs a new MultipleIterator.
     *
     * @param int $flags = MultipleIterator::MIT_NEED_ALL|MultipleIterator::MIT_KEYS_NUMERIC
     *
     * @see http://php.net/manual/en/multipleiterator.construct.php
     */
    public function __construct(int $flags = self::MIT_NEED_ALL | self::MIT_KEYS_NUMERIC)
    {
    }

    /**
     * attachIterator.
     * Attaches iterator information.
     *
     * @param Iterator $iterator
     * @param string   $infos    (optional)
     *
     * @throws IllegalValueException
     *
     * @see http://php.net/manual/en/multipleiterator.attachiterator.php
     */
    public function attachIterator(Iterator $iterator, string $infos): void
    {
    }

    /**
     * containsIterator.
     * Checks if an iterator is attached.
     *
     * @param Iterator $iterator
     *
     * @return bool
     *
     * @see http://php.net/manual/en/multipleiterator.containsiterator.php
     */
    public function containsIterator(Iterator $iterator): bool
    {
    }

    /**
     * countIterators.
     * Gets the number of attached iterator instances.
     *
     * @return int
     *
     * @see http://php.net/manual/en/multipleiterator.countiterators.php
     */
    public function countIterators(): int
    {
    }

    /**
     * current.
     * Gets the registered iterator instances.
     *
     * @throws RuntimeException
     * @throws IllegalValueException
     *
     * @return array
     *
     * @see http://php.net/manual/en/multipleiterator.current.php
     */
    public function current(): array
    {
    }

    /**
     * detachIterator.
     * Detaches an iterator.
     *
     * @param Iterator $iterator
     *
     * @see http://php.net/manual/en/multipleiterator.detachiterator.php
     */
    public function detachIterator(Iterator $iterator): void
    {
    }

    /**
     * getFlags.
     * Gets the flag information.
     *
     * @return int
     *
     * @see http://php.net/manual/en/multipleiterator.getflags.php
     */
    public function getFlags(): int
    {
    }

    /**
     * key.
     * Gets the registered iterator instances.
     *
     * @throws LogicException
     *
     * @return array
     *
     * @see http://php.net/manual/en/multipleiterator.key.php
     */
    public function key(): array
    {
    }

    /**
     * next.
     * Moves all attached iterator instances forward.
     *
     * @see http://php.net/manual/en/multipleiterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     * Rewinds all attached iterator instances.
     *
     * @see http://php.net/manual/en/multipleiterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * setFlags.
     * Sets flags.
     *
     * @param int $flags
     *
     * @see http://php.net/manual/en/multipleiterator.setflags.php
     */
    public function setFlags(int $flags): void
    {
    }

    /**
     * valid.
     * Checks the validity of sub iterators.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/multipleiterator.valid.php
     */
    public function valid(): bool
    {
    }
}
