<?php

/**
 * DOMNodeList.
 *
 * @property  int $length
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.domnodelist.php
 */
class DOMNodeList implements Traversable
{
    public $length;

    /**
     * item.
     * Retrieves a node specified by index.
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
