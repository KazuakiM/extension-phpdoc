<?php

namespace XMLDiff;

/**
 * XMLDiff.
 *
 *
 *
 * @see http://php.net/manual/en/class.xmldiff-dom.php
 */
class XMLDiffDOM extends Base
{
    /**
     * diff.
     *
     * Diff two DOMDocument objects
     *
     * @param DOMDocument $from
     * @param DOMDocument $to
     *
     * @return DOMDocument
     *
     * @see http://php.net/manual/en/xmldiff-dom.diff.php
     */
    public function diff(DOMDocument $from, DOMDocument $to): DOMDocument
    {
    }

    /**
     * merge.
     *
     * Produce merged DOMDocument
     *
     * @param DOMDocument $src
     * @param DOMDocument $diff
     *
     * @return DOMDocument
     *
     * @see http://php.net/manual/en/xmldiff-dom.merge.php
     */
    public function merge(DOMDocument $src, DOMDocument $diff): DOMDocument
    {
    }

    /* Inherited methods */
    //public function XMLDiff\Base::__construct(string $nsname)
    //abstract public function XMLDiff\Base::diff(mixed $from, mixed $to): mixed
    //abstract public function XMLDiff\Base::merge(mixed $src, mixed $diff): mixed
}
