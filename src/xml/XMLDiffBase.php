<?php

namespace XMLDiff;

/**
 * XMLDiff.
 *
 * Base abstract class for all the comparsion classes in the extension.
 *
 * @see http://php.net/manual/en/class.xmldiff-base.php
 */
abstract class XMLDiffBase
{
    /**
     * __construct.
     *
     * Constructor
     *
     * @param string $nsname
     *
     * @see http://php.net/manual/en/xmldiff-base.construct.php
     */
    public function __construct(string $nsname)
    {
    }

    /**
     * diff.
     *
     * Produce diff of two XML documents
     *
     * @param mixed $from
     * @param mixed $to
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/xmldiff-base.diff.php
     */
    public function diff(mixed $from, mixed $to): mixed
    {
    }

    /**
     * merge.
     *
     * Produce new XML document based on diff
     *
     * @param mixed $src
     * @param mixed $diff
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/xmldiff-base.merge.php
     */
    public function merge(mixed $src, mixed $diff): mixed
    {
    }
}