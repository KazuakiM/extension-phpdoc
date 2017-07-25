<?php

/**
 * DOMComment.
 *
 * Represents comment nodes, characters delimited by <!-- and -->.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.domcomment.php
 */
class DOMComment extends DOMCharacterData
{
    /**
     * __construct.
     *
     * Creates a new DOMComment object
     *
     * @param string $vale (optional)
     *
     * @see http://php.net/manual/en/domcomment.construct.php
     */
    public function __construct(string $value)
    {
    }

    /* Inherited methods */
    //public function DOMCharacterData::appendData(string $data): void
    //public function DOMCharacterData::deleteData(int $offset, int $count): void
    //public function DOMCharacterData::insertData(int $offset, string $data): void
    //public function DOMCharacterData::replaceData(int $offset, int $count, string $data): void
    //public function DOMCharacterData::substringData(int $offset, int $count): string
    //public function DOMNode::appendChild(DOMNode $newnode): DOMNode
    //public function DOMNode::C14N([ bool $exclusive [, bool $with_comments [, array $xpath [, array $ns_prefixes ]]]]): string
    //public function DOMNode::C14NFile(string $uri [, bool $exclusive [, bool $with_comments [, array $xpath [, array $ns_prefixes ]]]]): int
    //public function DOMNode::cloneNode ([ bool $deep ]): DOMNode
    //public function DOMNode::getLineNo(void): int
    //public function DOMNode::getNodePath(void): string
    //public function DOMNode::hasAttributes(void): bool
    //public function DOMNode::hasChildNodes(void): bool
    //public function DOMNode::insertBefore(DOMNode $newnode [, DOMNode $refnode ]): DOMNode
    //public function DOMNode::isDefaultNamespace(string $namespaceURI): bool
    //public function DOMNode::isSameNode(DOMNode $node): bool
    //public function DOMNode::isSupported(string $feature, string $version): bool
    //public function DOMNode::lookupNamespaceURI(string $prefix): string
    //public function DOMNode::lookupPrefix(string $namespaceURI): string
    //public function DOMNode::normalize(void): void
    //public function DOMNode::removeChild(DOMNode $oldnode): DOMNode
    //public function DOMNode::replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode
}
