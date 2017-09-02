<?php

/**
 * RecursiveRegexIterator.
 * This recursive iterator can filter another recursive iterator via a regular expression.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.recursiveregexiterator.php
 */
class RecursiveRegexIterator extends RegexIterator implements RecursiveIterator
{
    /**
     * __construct.
     * Creates a new RecursiveRegexIterator.
     *
     * @param RecursiveIterator $iterator
     * @param string            $regex
     * @param int               $mode       = self::MATCH
     * @param int               $flags      = 0
     * @param int               $preg_flags = 0
     *
     * @see http://php.net/manual/en/recursiveregexiterator.construct.php
     */
    public function __construct(RecursiveIterator $iterator, string $regex, int $mode = self::MATCH, int $flags = 0, int $preg_flags = 0)
    {
    }

    /**
     * getChildren.
     * Returns an iterator for the current entry.
     *
     * @throws InvalidArgumentException
     *
     * @return RecursiveRegexIterator
     *
     * @see http://php.net/manual/en/recursiveregexiterator.getchildren.php
     */
    public function getChildren(): RecursiveRegexIterator
    {
    }

    /**
     * hasChildren.
     * Returns whether an iterator can be obtained for the current entry.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/recursiveregexiterator.haschildren.php
     */
    public function hasChildren(): bool
    {
    }

    /* Inherited methods */
    //public function RecursiveIterator::getChildren(): RecursiveIterator
    //public function RecursiveIterator::hasChildren(): bool
    //public function RegexIterator::accept(): bool
    //public function RegexIterator::getFlags(): int
    //public function RegexIterator::getMode(): int
    //public function RegexIterator::getPregFlags(): int
    //public function RegexIterator::getRegex(): string
    //public function RegexIterator::setFlags(int $flags): void
    //public function RegexIterator::setMode(int $mode): void
    //public function RegexIterator::setPregFlags(int $preg_flags): void
}
