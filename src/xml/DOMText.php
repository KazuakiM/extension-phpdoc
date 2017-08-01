<?php

/**
 * DOMText.
 * The DOMText class inherits from DOMCharacterData and represents the textual content of a DOMElement or DOMAttr.
 *
 * @property  string $wholeText
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.domtext.php
 */
class DOMText extends DOMCharacterData
{
    public $wholeText;

    /**
     * __construct.
     * Creates a new DOMText object.
     *
     * @param string $value
     *
     * @see http://php.net/manual/en/domtext.construct.php
     */
    public function __construct(string $value)
    {
    }

    /**
     * isWhitespaceInElementContent.
     * Indicates whether this text node contains whitespace.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domtext.iswhitespaceinelementcontent.php
     */
    public function isWhitespaceInElementContent(): bool
    {
    }

    /**
     * splitText.
     * Breaks this node into two nodes at the specified offset.
     *
     * @param int $offset
     *
     * @return DOMText
     *
     * @see http://php.net/manual/en/domtext.splittext.php
     */
    public function splitText(int $offset): DOMText
    {
    }

    /* Inherited methods */
    //public function DOMNode::appendChild(DOMNode $newnode): DOMNode
    //public function DOMNode::C14N([ bool $exclusive [, bool $with_comments [, array $xpath [, array $ns_prefixes ]]]]): string
    //public function DOMNode::C14NFile(string $uri [, bool $exclusive [, bool $with_comments [, array $xpath [, array $ns_prefixes ]]]]): int
    //public function DOMNode::cloneNode([ bool $deep ]): DOMNode
    //public function DOMNode::getLineNo(): int
    //public function DOMNode::getNodePath(): string
    //public function DOMNode::hasAttributes(): bool
    //public function DOMNode::hasChildNodes(): bool
    //public function DOMNode::insertBefore(DOMNode $newnode [, DOMNode $refnode ]): DOMNode
    //public function DOMNode::isDefaultNamespace(string $namespaceURI): bool
    //public function DOMNode::isSameNode(DOMNode $node): bool
    //public function DOMNode::isSupported(string $feature, string $version): bool
    //public function DOMNode::lookupNamespaceURI(string $prefix): string
    //public function DOMNode::lookupPrefix(string $namespaceURI): string
    //public function DOMNode::normalize(): void
    //public function DOMNode::removeChild(DOMNode $oldnode): DOMNode
    //public function DOMNode::replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode
}
