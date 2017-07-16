<?php

/**
 * DOMCharacterData.
 *
 * Represents nodes with character data. No nodes directly correspond to this class, but other nodes do inherit from it.
 *
 * @property string $data
 * @property  int $length
 *
 * @see http://php.net/manual/en/class.domcharacterdata.php
 */
class DOMCharacterData extends DOMNode
{
    public $data;
    public $length;

    /**
     * appendData.
     *
     * Append the string to the end of the character data of the node
     *
     * @param string $data
     *
     * @see http://php.net/manual/en/domcharacterdata.appenddata.php
     */
    public function appendData(string $data): void
    {
    }

    /**
     * deleteData.
     *
     * Remove a range of characters from the node
     *
     * @param int $offset
     * @param int $count
     *
     * @throws DOM_INDEX_SIZE_ERR
     *
     * @see http://php.net/manual/en/domcharacterdata.deletedata.php
     */
    public function deleteData(int $offset, int $count): void
    {
    }

    /**
     * insertData.
     *
     * Insert a string at the specified 16-bit unit offset
     *
     * @param int    $offset
     * @param string $data
     *
     * @throws DOM_INDEX_SIZE_ERR
     *
     * @see http://php.net/manual/en/domcharacterdata.insertdata.php
     */
    public function insertData(int $offset, string $data): void
    {
    }

    /**
     * replaceData.
     *
     * Replace a substring within the DOMCharacterData node
     *
     * @param int    $offset
     * @param int    $count
     * @param string $data
     *
     * @throws DOM_INDEX_SIZE_ERR
     *
     * @see http://php.net/manual/en/domcharacterdata.replacedata.php
     */
    public function replaceData(int $offset, int $count, string $data): void
    {
    }

    /**
     * substringData.
     *
     * Extracts a range of data from the node
     *
     * @param int $offset
     * @param int $count
     *
     * @throws DOM_INDEX_SIZE_ERR
     *
     * @return string
     *
     * @see http://php.net/manual/en/domcharacterdata.substringdata.php
     */
    public function substringData(int $offset, int $count): string
    {
    }

    /* Inherited methods */
    //public function DOMNode::appendChild(DOMNode $newnode):: DOMNode
    //public function DOMNode::C14N([ bool $exclusive [, bool $with_comments [, array $xpath [, array $ns_prefixes ]]]]): string
    //public function DOMNode::C14NFile(string $uri [, bool $exclusive [, bool $with_comments [, array $xpath [, array $ns_prefixes ]]]]): int
    //public function DOMNode DOMNode::cloneNode ([ bool $deep ]): DOMNode
    //public function DOMNode::getLineNo(): int
    //public function DOMNode::getNodePath(): string
    //public function DOMNode::hasAttributes(): bool
    //public function DOMNode::hasChildNodes(): bool
    //public function DOMNode DOMNode::insertBefore(DOMNode $newnode [, DOMNode $refnode ]): DOMNode
    //public function DOMNode::isDefaultNamespace(string $namespaceURI): bool
    //public function DOMNode::isSameNode(DOMNode $node): bool
    //public function DOMNode::isSupported(string $feature, string $version): bool
    //public function DOMNode::lookupNamespaceURI(string $prefix): string
    //public function DOMNode::lookupPrefix(string $namespaceURI): string
    //public function DOMNode::normalize(): void
    //public function DOMNode DOMNode::removeChild(DOMNode $oldnode): DOMNode
    //public function DOMNode DOMNode::replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode
}
