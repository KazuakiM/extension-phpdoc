<?php

/**
 * DOMNamedNodeMap.
 *
 *
 *
 * @property  int $length
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.domnamednodemap.php
 */
class DOMNamedNodeMap implements Traversable
{
    public $length;

    /**
     * getNamedItem.
     *
     * Retrieves a node specified by name
     *
     * @param string $name
     *
     * @return DOMNode
     *
     * @see http://php.net/manual/en/domnamednodemap.getnameditem.php
     */
    public function getNamedItem(string $name): DOMNode
    {
    }

    /**
     * getNamedItemNS.
     *
     * Retrieves a node specified by local name and namespace URI
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return DOMNode
     *
     * @see http://php.net/manual/en/domnamednodemap.getnameditemns.php
     */
    public function getNamedItemNS(string $namespaceURI, string $localName): DOMNode
    {
    }

    /**
     * item.
     *
     * Retrieves a node specified by index
     *
     * @param int $index
     *
     * @return DOMNode
     *
     * @see http://php.net/manual/en/domnamednodemap.item.php
     */
    public function item(int $index): DOMNode
    {
    }
}
