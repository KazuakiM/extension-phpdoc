<?php

/**
 * DOMNodeList
 *
 * 
 *
 * @property-read  int $length
 *
 * @link http://php.net/manual/en/class.domnodelist.php
 */
class DOMNodeList implements Traversable {

    public $length;


    /**
     * item
     *
     * Retrieves a node specified by index
     *
     * @param int $index
     * @return DOMElement
     *
     * @link http://php.net/manual/en/domnodelist.item.php
     */
    public function item(int $index): DOMElement
    {
    }
}
