<?php

/**
 * tidyNode.
 * An HTML node in an HTML file, as detected by tidy.
 *
 * @property string $value
 * @property string $name
 * @property int $type
 * @property int $line
 * @property int $column
 * @property bool $proprietary
 * @property int $id
 * @property array $attribute
 * @property array $child
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.tidynode.php
 */
class tidyNode
{
    public $value;
    public $name;
    public $type;
    public $line;
    public $column;
    public $proprietary;
    public $id;
    public $attribute;
    public $child;

    /**
     * getParent.
     * Returns the parent node of the current node.
     *
     * @return tidyNode
     *
     * @see http://php.net/manual/en/tidynode.getparent.php
     */
    public function getParent(): tidyNode
    {
    }

    /**
     * hasChildren.
     * Checks if a node has children.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidynode.haschildren.php
     */
    public function hasChildren(): bool
    {
    }

    /**
     * hasSiblings.
     * Checks if a node has siblings.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidynode.hassiblings.php
     */
    public function hasSiblings(): bool
    {
    }

    /**
     * isAsp.
     * Checks if this node is ASP.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidynode.isasp.php
     */
    public function isAsp(): bool
    {
    }

    /**
     * isComment.
     * Checks if a node represents a comment.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidynode.iscomment.php
     */
    public function isComment(): bool
    {
    }

    /**
     * isHtml.
     * Checks if a node is part of a HTML document.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidynode.ishtml.php
     */
    public function isHtml(): bool
    {
    }

    /**
     * isJste.
     * Checks if this node is JSTE.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidynode.isjste.php
     */
    public function isJste(): bool
    {
    }

    /**
     * isPhp.
     * Checks if a node is PHP.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidynode.isphp.php
     */
    public function isPhp(): bool
    {
    }

    /**
     * isText.
     * Checks if a node represents text (no markup).
     *
     * @return bool
     *
     * @see http://php.net/manual/en/tidynode.istext.php
     */
    public function isText(): bool
    {
    }
}
