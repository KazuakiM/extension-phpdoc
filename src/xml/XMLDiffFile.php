<?php

namespace XMLDiff;

/**
 * XMLDiff.
 *
 *
 *
 * @see http://php.net/manual/en/class.xmldiff-file.php
 */
class XMLDiffFile extends Base
{
    /**
     * diff.
     *
     * Diff two XML files
     *
     * @param string $from
     * @param string $to
     *
     * @return string
     *
     * @see http://php.net/manual/en/xmldiff-file.diff.php
     */
    public function diff(string $from, string $to): string
    {
    }

    /**
     * merge.
     *
     * Produce merged XML document
     *
     * @param string $src
     * @param string $diff
     *
     * @return string
     *
     * @see http://php.net/manual/en/xmldiff-file.merge.php
     */
    public function merge(string $src, string $diff): string
    {
    }

    /* Inherited methods */
    //public function XMLDiff\Base::__construct(string $nsname)
    //abstract public function XMLDiff\Base::diff(mixed $from, mixed $to): mixed
    //abstract public function XMLDiff\Base::merge(mixed $src, mixed $diff): mixed
}
