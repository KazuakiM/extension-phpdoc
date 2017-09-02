<?php

/**
 * RegexIterator.
 * This iterator can be used to filter another iterator based on a regular expression.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.regexiterator.php
 */
class RegexIterator extends FilterIterator
{
    const MATCH = 0;
    const GET_MATCH = 1;
    const ALL_MATCHES = 2;
    const SPLIT = 3;
    const REPLACE = 4;
    const USE_KEY = 1;

    /**
     * __construct.
     * Create a new RegexIterator.
     *
     * @param Iterator $iterator
     * @param string   $regex
     * @param int      $mode       = self::MATCH
     * @param int      $flags      = 0
     * @param int      $preg_flags = 0
     *
     * @throws InvalidArgumentException
     *
     * @see http://php.net/manual/en/regexiterator.construct.php
     */
    public function __construct(Iterator $iterator, string $regex, int $mode = self::MATCH, int $flags = 0, int $preg_flags = 0)
    {
    }

    /**
     * accept.
     * Get accept status.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/regexiterator.accept.php
     */
    public function accept(): bool
    {
    }

    /**
     * getFlags.
     * Get flags.
     *
     * @return int
     *
     * @see http://php.net/manual/en/regexiterator.getflags.php
     */
    public function getFlags(): int
    {
    }

    /**
     * getMode.
     * Returns operation mode.
     *
     * @return int
     *
     * @see http://php.net/manual/en/regexiterator.getmode.php
     */
    public function getMode(): int
    {
    }

    /**
     * getPregFlags.
     * Returns the regular expression flags.
     *
     * @return int
     *
     * @see http://php.net/manual/en/regexiterator.getpregflags.php
     */
    public function getPregFlags(): int
    {
    }

    /**
     * getRegex.
     * Returns current regular expression.
     *
     * @return string
     *
     * @see http://php.net/manual/en/regexiterator.getregex.php
     */
    public function getRegex(): string
    {
    }

    /**
     * setFlags.
     * Sets the flags.
     *
     * @param int $flags
     *
     * @see http://php.net/manual/en/regexiterator.setflags.php
     */
    public function setFlags(int $flags): void
    {
    }

    /**
     * setMode.
     * Sets the operation mode.
     *
     * @param int $mode
     *
     * @see http://php.net/manual/en/regexiterator.setmode.php
     */
    public function setMode(int $mode): void
    {
    }

    /**
     * setPregFlags.
     * Sets the regular expression flags.
     *
     * @param int $preg_flags
     *
     * @see http://php.net/manual/en/regexiterator.setpregflags.php
     */
    public function setPregFlags(int $preg_flags): void
    {
    }

    /* Inherited methods */
    //public function bool FilterIterator::accept(): abstract
    //public function __construct(Iterator $iterator): FilterIterator::
    //public function FilterIterator::current(): mixed
    //public function FilterIterator::getInnerIterator(): Iterator
    //public function FilterIterator::key(): mixed
    //public function FilterIterator::next(): void
    //public function FilterIterator::rewind(): void
    //public function FilterIterator::valid(): bool
}
