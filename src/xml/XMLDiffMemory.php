<?php

namespace XMLDiff;

/**
 * XMLDiff
 *
 * 
 *
 * @link http://php.net/manual/en/class.xmldiff-memory.php
 */
class Memory extends Base
{
    /**
     * diff
     *
     * Diff two XML documents
     *
     * @param string $from
     * @param string $to
     * @return string
     *
     * @link http://php.net/manual/en/xmldiff-memory.diff.php
     */
    public function diff(string $from, string $to): string
    {
    }

    /**
     * merge
     *
     * Produce merged XML document
     *
     * @param string $src
     * @param string $diff
     * @return string
     *
     * @link http://php.net/manual/en/xmldiff-memory.merge.php
     */
    public function merge(string $src, string $diff): string
    {
    }

    /* Inherited methods */
    //public function XMLDiff\Base::__construct(string $nsname)
    //abstract public function XMLDiff\Base::diff(mixed $from, mixed $to): mixed
    //abstract public function XMLDiff\Base::merge(mixed $src, mixed $diff): mixed
}
