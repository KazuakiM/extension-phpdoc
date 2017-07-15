<?php

/**
 * DOMElement
 *
 * 
 *
 * @property-read  bool $schemaTypeInfo
 * @property-read  string $tagName
 *
 * @link http://php.net/manual/en/class.domelement.php
 */
class DOMElement extends DOMNode
{
    public bool $schemaTypeInfo;
    public string $tagName;


    /**
     * __construct
     *
     * Creates a new DOMElement object
     *
     * @param string $name
     * @param string $value (optional)
     * @param string $namespaceURI (optional)
     *
     * @link http://php.net/manual/en/domelement.construct.php
     */
    public function (string $name, string $value, string $namespaceURI)
    {
    }

    /**
     * getAttribute
     *
     * Returns value of attribute
     *
     * @param string $name
     * @return string
     *
     * @link http://php.net/manual/en/domelement.getattribute.php
     */
    public function getAttribute(string $name): string
    {
    }

    /**
     * getAttributeNode
     *
     * Returns attribute node
     *
     * @param string $name
     * @return DOMAttr
     *
     * @link http://php.net/manual/en/domelement.getattributenode.php
     */
    public function getAttributeNode(string $name): DOMAttr
    {
    }

    /**
     * getAttributeNodeNS
     *
     * Returns attribute node
     *
     * @param string $namespaceURI
     * @param string $localName
     * @return DOMAttr
     *
     * @link http://php.net/manual/en/domelement.getattributenodens.php
     */
    public function getAttributeNodeNS(string $namespaceURI, string $localName): DOMAttr
    {
    }

    /**
     * getAttributeNS
     *
     * Returns value of attribute
     *
     * @param string $namespaceURI
     * @param string $localName
     * @return string
     *
     * @link http://php.net/manual/en/domelement.getattributens.php
     */
    public function getAttributeNS(string $namespaceURI, string $localName): string
    {
    }

    /**
     * getElementsByTagName
     *
     * Gets elements by tagname
     *
     * @param string $name
     * @return DOMNodeList
     *
     * @link http://php.net/manual/en/domelement.getelementsbytagname.php
     */
    public function getElementsByTagName(string $name): DOMNodeList
    {
    }

    /**
     * getElementsByTagNameNS
     *
     * Get elements by namespaceURI and localName
     *
     * @param string $namespaceURI
     * @param string $localName
     * @return DOMNodeList
     *
     * @link http://php.net/manual/en/domelement.getelementsbytagnamens.php
     */
    public function getElementsByTagNameNS(string $namespaceURI, string $localName): DOMNodeList
    {
    }

    /**
     * hasAttribute
     *
     * Checks to see if attribute exists
     *
     * @parm string $name
     * @return bool
     *
     * @link http://php.net/manual/en/domelement.hasattribute.php
     */
    public function hasAttribute(string $name): bool
    {
    }

    /**
     * hasAttributeNS
     *
     * Checks to see if attribute exists
     *
     * @param string $namespaceURI
     * @param string $localName
     * @return bool
     *
     * @link http://php.net/manual/en/domelement.hasattributens.php
     */
    public function hasAttributeNS(string $namespaceURI, string $localName): bool
    {
    }

    /**
     * removeAttribute
     *
     * Removes attribute
     *
     * @param string $name
     * @return bool
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     *
     * @link http://php.net/manual/en/domelement.removeattribute.php
     */
    public function removeAttribute(string $name): bool
    {
    }

    /**
     * removeAttributeNode
     *
     * Removes attribute
     *
     * @param DOMAttr $oldnode
     * @return bool
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     * @throws DOM_NOT_FOUND_ERROR
     *
     * @link http://php.net/manual/en/domelement.removeattributenode.php
     */
    public function removeAttributeNode(DOMAttr $oldnode): bool
    {
    }

    /**
     * removeAttributeNS
     *
     * Removes attribute
     *
     * @param string $namespaceURI
     * @param string $localName
     * @return bool
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     *
     * @link http://php.net/manual/en/domelement.removeattributens.php
     */
    public function removeAttributeNS(string $namespaceURI, string $localName): bool
    {
    }

    /**
     * setAttribute
     *
     * Adds new attribute
     *
     * @param string $name
     * @param string $value
     * @return DOMAttr
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     *
     * @link http://php.net/manual/en/domelement.setattribute.php
     */
    public function setAttribute(string $name, string $value): DOMAttr
    {
    }

    /**
     * setAttributeNode
     *
     * Adds new attribute node to element
     *
     * @param DOMAttr $attr
     * @return DOMAttr
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     *
     * @link http://php.net/manual/en/domelement.setattributenode.php
     */
    public function setAttributeNode(DOMAttr $attr): DOMAttr
    {
    }

    /**
     * setAttributeNodeNS
     *
     * Adds new attribute node to element
     *
     * @param DOMAttr $attr
     * @return DOMAttr
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     *
     * @link http://php.net/manual/en/domelement.setattributenodens.php
     */
    public function setAttributeNodeNS(DOMAttr $attr): DOMAttr
    {
    }

    /**
     * setAttributeNS
     *
     * Adds new attribute
     *
     * @param string $namespaceURI
     * @param string $qualifiedName
     * @param string $value
     * @return void
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     * @throws DOM_NAMESPACE_ERR
     *
     * @link http://php.net/manual/en/domelement.setattributens.php
     */
    public function setAttributeNS(string $namespaceURI, string $qualifiedName, string $value): void
    {
    }

    /**
     * setIdAttribute
     *
     * Declares the attribute specified by name to be of type ID
     *
     * @param string $name
     * @param bool $isId
     * @return void
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     * @throws DOM_NOT_FOUND
     *
     * @link http://php.net/manual/en/domelement.setidattribute.php
     */
    public function setIdAttribute(string $name, bool $isId): void
    {
    }

    /**
     * setIdAttributeNode
     *
     * Declares the attribute specified by node to be of type ID
     *
     * @param DOMAttr $attr
     * @param bool $isId
     * @return void
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     * @throws DOM_NOT_FOUND
     *
     * @link http://php.net/manual/en/domelement.setidattributenode.php
     */
    public function setIdAttributeNode(DOMAttr $attr, bool $isId): void
    {
    }

    /**
     * setIdAttributeNS
     *
     * Declares the attribute specified by local name and namespace URI to be of type ID
     *
     * @param string $namespaceURI
     * @param string $localName
     * @param bool $isId
     * @return void
     * @throws DOM_NO_MODIFICATION_ALLOWED_ERR
     * @throws DOM_NOT_FOUND
     *
     * @link http://php.net/manual/en/domelement.setidattributens.php
     */
    public function setIdAttributeNS(string $namespaceURI, string $localName, bool $isId): void
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
