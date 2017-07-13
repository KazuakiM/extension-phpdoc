<?php

/**
 * DOMCdataSection
 *
 * The DOMCdataSection inherits from DOMText for textural representation of CData constructs.
 *
 * @link http://php.net/manual/en/class.domcdatasection.php
 */
class DOMCdataSection extends DOMText
{
    /**
     * __construct
     *
     * Constructs a new DOMCdataSection object
     *
     * @param string $value
     *
     * @link http://php.net/manual/en/domcdatasection.construct.php
     */
    public function __construct(string $value)

    /* Inherited methods */
    //public function DOMText::isWhitespaceInElementContent(void): bool
    //public function DOMText::splitText(int $offset): DOMText
}
