<?php

/**
 * DOMNamedNodeMap
 *
 * 
 *
 * @property-read  int $length
 *
 * @link http://php.net/manual/en/class.domnamednodemap.php
 */
class DOMNamedNodeMap implements Traversable
{
    public int $length;

    /**
     * getNamedItem
     *
     * Retrieves a node specified by name
     *
     * @param string $name
     * @return DOMNode
     *
     * @link http://php.net/manual/en/domnamednodemap.getnameditem.php
     */
    public function getNamedItem(string $name): DOMNode
    {
    }

    /**
     * getNamedItemNS
     *
     * Retrieves a node specified by local name and namespace URI
     *
     * @param string $namespaceURI
     * @param string $localName
     * @return DOMNode
     *
     * @link http://php.net/manual/en/domnamednodemap.getnameditemns.php
     */
    public function getNamedItemNS(string $namespaceURI, string $localName): DOMNode
    {
    }

    /**
     * item
     *
     * Retrieves a node specified by index
     *
     * @param int $index
     * @return DOMNode
     *
     * @link http://php.net/manual/en/domnamednodemap.item.php
     */
    public function item(int $index): DOMNode
    {
    }
}
