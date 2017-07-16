<?php

/**
 * DOMNodeList.
 *
 *
 *
 * @property  int $length
 *
 * @see http://php.net/manual/en/class.domnodelist.php
 */
class DOMNodeList implements Traversable
{
    public $length;

    /**
     * item.
     *
     * Retrieves a node specified by index
     *
     * @param int $index
     *
     * @return DOMElement
     *
     * @see http://php.net/manual/en/domnodelist.item.php
     */
    public function item(int $index): DOMElement
    {
    }
}
