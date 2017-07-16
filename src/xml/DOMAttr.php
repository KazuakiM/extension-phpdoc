<?php

/**
 * DOMAttr
 *
 * DOMAttr represents an attribute in the DOMElement object.
 *
 * @property-read  string     $name
 * @property-read  DOMElement $ownerElement
 * @property-read  bool       $schemaTypeInfo
 * @property-read  bool       $specified
 * @property-write string     $value
 *
 * @link http://php.net/manual/en/class.domattr.php
 */
class DOMAttr extends DOMNode
{
    public $name;
    public $ownerElement;
    public $schemaTypeInfo;
    public $specified;
    public $value;

    /**
     *  __construct
     *
     *  @param string $name
     *  @param string $value (optional)
     *
     *  @link http://php.net/manual/en/domattr.construct.php
     */
    public function __construct(string $name, string $value)
    {
    }

    /**
     * isId
     *
     * @return bool
     *
     * @link http://php.net/manual/en/domattr.isid.php
     */
    public function isId(): bool
    {
    }

    /* Inherited methods */
    //public function DOMNode::appendChild ( DOMNode $newnode ):DOMNode
    //public function DOMNode::C14N ([ bool $exclusive [, bool $with_comments [, array $xpath [, array $ns_prefixes ]]]] ):string
    //public function DOMNode::C14NFile ( string $uri [, bool $exclusive [, bool $with_comments [, array $xpath [, array $ns_prefixes ]]]] ):int
    //public function DOMNode::cloneNode ([ bool $deep ] ):DOMNode
    //public function DOMNode::getLineNo ( void ):int
    //public function DOMNode::getNodePath ( void ):string
    //public function DOMNode::hasAttributes ( void ):bool
    //public function DOMNode::hasChildNodes ( void ):bool
    //public function DOMNode::insertBefore ( DOMNode $newnode [, DOMNode $refnode ] ):DOMNode
    //public function DOMNode::isDefaultNamespace ( string $namespaceURI ):bool
    //public function DOMNode::isSameNode ( DOMNode $node ):bool
    //public function DOMNode::isSupported ( string $feature , string $version ):bool
    //public function DOMNode::lookupNamespaceURI ( string $prefix ):string
    //public function DOMNode::lookupPrefix ( string $namespaceURI ):string
    //public function DOMNode::normalize ( void ):void
    //public function DOMNode::removeChild ( DOMNode $oldnode ):DOMNode
    //public function DOMNode::replaceChild ( DOMNode $newnode , DOMNode $oldnode ):DOMNode
}
