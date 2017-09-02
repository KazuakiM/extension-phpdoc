<?php

/**
 * DOMNode.
 *
 * @property  string $nodeName
 * @property string $nodeValue
 * @property  int $nodeType
 * @property  DOMNode $parentNode
 * @property  DOMNodeList $childNodes
 * @property  DOMNode $firstChild
 * @property  DOMNode $lastChild
 * @property  DOMNode $previousSibling
 * @property  DOMNode $nextSibling
 * @property  DOMNamedNodeMap $attributes
 * @property  DOMDocument $ownerDocument
 * @property  string $namespaceURI
 * @property string $prefix
 * @property  string $localName
 * @property  string $baseURI
 * @property string $textContent
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.domnode.php
 */
class DOMNode
{
    public $nodeName;
    public $nodeValue;
    public $nodeType;
    public $parentNode;
    public $childNodes;
    public $firstChild;
    public $lastChild;
    public $previousSibling;
    public $nextSibling;
    public $attributes;
    public $ownerDocument;
    public $namespaceURI;
    public $prefix;
    public $localName;
    public $baseURI;
    public $textContent;

    /**
     * appendChild.
     * Adds new child at the end of the children.
     *
     * @param DOMNode $newnode
     *
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     * @throws DOM_HIERARCHY_REQUEST_ERR
     * @throws DOM_WRONG_DOCUMENT_ERR
     *
     * @return DOMNode
     *
     * @see http://php.net/manual/en/domnode.appendchild.php
     */
    public function appendChild(DOMNode $newnode): DOMNode
    {
    }

    /**
     * C14N.
     * Canonicalize nodes to a string.
     *
     * @param bool  $exclusive     (optional)
     * @param bool  $with_comments (optional)
     * @param array $xpath         (optional)
     * @param array $ns_prefixes   (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/domnode.c14n.php
     */
    public function C14N(bool $exclusive, bool $with_comments, array $xpath, array $ns_prefixes): string
    {
    }

    /**
     * C14NFile.
     * Canonicalize nodes to a file.
     *
     * @param string $uri
     * @param bool   $exclusive     (optional)
     * @param bool   $with_comments (optional)
     * @param array  $xpath         (optional)
     * @param array  $ns_prefixes   (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/domnode.c14nfile.php
     */
    public function C14NFile(string $uri, bool $exclusive, bool $with_comments, array $xpath, array $ns_prefixes): int
    {
    }

    /**
     * cloneNode.
     * Clones a node.
     *
     * @param bool $deep
     *
     * @return DOMNode
     *
     * @see http://php.net/manual/en/domnode.clonenode.php
     */
    public function cloneNode(bool $deep): DOMNode
    {
    }

    /**
     * getLineNo.
     * Get line number for a node.
     *
     * @return int
     *
     * @see http://php.net/manual/en/domnode.getlineno.php
     */
    public function getLineNo(): int
    {
    }

    /**
     * getNodePath.
     * Get an XPath for a node.
     *
     * @return string
     *
     * @see http://php.net/manual/en/domnode.getnodepath.php
     */
    public function getNodePath(): string
    {
    }

    /**
     * hasAttributes.
     * Checks if node has attributes.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domnode.hasattributes.php
     */
    public function hasAttributes(): bool
    {
    }

    /**
     * hasChildNodes.
     * Checks if node has children.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domnode.haschildnodes.php
     */
    public function hasChildNodes(): bool
    {
    }

    /**
     * insertBefore.
     * Adds a new child before a reference node.
     *
     * @param DOMNode $newnode
     * @param DOMNode $refnode (optional)
     *
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     * @throws DOM_HIERARCHY_REQUEST_ERR
     * @throws DOM_WRONG_DOCUMENT_ERR
     * @throws DOM_NOT_FOUND
     *
     * @return DOMNode
     *
     * @see http://php.net/manual/en/domnode.insertbefore.php
     */
    public function insertBefore(DOMNode $newnode, DOMNode $refnode): DOMNode
    {
    }

    /**
     * isDefaultNamespace.
     * Checks if the specified namespaceURI is the default namespace or not.
     *
     * @param string $namespaceURI
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domnode.isdefaultnamespace.php
     */
    public function isDefaultNamespace(string $namespaceURI): bool
    {
    }

    /**
     * isSameNode.
     * Indicates if two nodes are the same node.
     *
     * @param DOMNode $node
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domnode.issamenode.php
     */
    public function isSameNode(DOMNode $node): bool
    {
    }

    /**
     * isSupported.
     * Checks if feature is supported for specified version.
     *
     * @param string $feature
     * @param string $version
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domnode.issupported.php
     */
    public function isSupported(string $feature, string $version): bool
    {
    }

    /**
     * lookupNamespaceURI.
     * Gets the namespace URI of the node based on the prefix.
     *
     * @param string $prefix
     *
     * @return string
     *
     * @see http://php.net/manual/en/domnode.lookupnamespaceuri.php
     */
    public function lookupNamespaceURI(string $prefix): string
    {
    }

    /**
     * lookupPrefix.
     * Gets the namespace prefix of the node based on the namespace URI.
     *
     * @param string $namespaceURI
     *
     * @return string
     *
     * @see http://php.net/manual/en/domnode.lookupprefix.php
     */
    public function lookupPrefix(string $namespaceURI): string
    {
    }

    /**
     * normalize.
     * Normalizes the node.
     *
     * @see http://php.net/manual/en/domnode.normalize.php
     */
    public function normalize(): void
    {
    }

    /**
     * removeChild.
     * Removes child from list of children.
     *
     * @param DOMNode $oldnode
     *
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     * @throws DOM_NOT_FOUND
     *
     * @return DOMNode
     *
     * @see http://php.net/manual/en/domnode.removechild.php
     */
    public function removeChild(DOMNode $oldnode): DOMNode
    {
    }

    /**
     * replaceChild.
     * Replaces a child.
     *
     * @param DOMNode $newnode
     * @param DOMNode $oldnode
     *
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     * @throws DOM_HIERARCHY_REQUEST_ERR
     * @throws DOM_WRONG_DOCUMENT_ERR
     * @throws DOM_NOT_FOUND
     *
     * @return DOMNode
     *
     * @see http://php.net/manual/en/domnode.replacechild.php
     */
    public function replaceChild(DOMNode $newnode, DOMNode $oldnode): DOMNode
    {
    }
}
