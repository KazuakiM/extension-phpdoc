<?php

/**
 * DOMDocument.
 *
 *
 *
 * @property  string $actualEncoding
 * @property  DOMConfiguration $config
 * @property  DOMDocumentType $doctype
 * @property  DOMElement $documentElement
 * @property string $documentURI
 * @property string $encoding
 * @property bool $formatOutput
 * @property  DOMImplementation $implementation
 * @property bool $preserveWhiteSpace = true
 * @property bool $recover
 * @property bool $resolveExternals
 * @property bool $standalone
 * @property bool $strictErrorChecking = true
 * @property bool $substituteEntities
 * @property bool $validateOnParse = false
 * @property string $version
 * @property  string $xmlEncoding
 * @property bool $xmlStandalone
 * @property string $xmlVersion
 *
 * @see http://php.net/manual/en/class.domdocument.php
 */
class DOMDocument extends DOMNode
{
    public $actualEncoding;
    public $config;
    public $doctype;
    public $documentElement;
    public $documentURI;
    public $encoding;
    public $formatOutput;
    public $implementation;
    public $preserveWhiteSpace = true;
    public $recover;
    public $resolveExternals;
    public $standalone;
    public $strictErrorChecking = true;
    public $substituteEntities;
    public $validateOnParse = false;
    public $version;
    public $xmlEncoding;
    public $xmlStandalone;
    public $xmlVersion;

    /**
     * __construct.
     *
     * Creates a new DOMDocument object
     *
     * @param string $version  (optional)
     * @param string $encoding (optional)
     *
     * @see http://php.net/manual/en/domdocument.construct.php
     */
    public function __construct(string $version, string $encoding)
    {
    }

    /**
     * createAttribute.
     *
     * Create new attribute
     *
     * @param string $name
     *
     * @throws DOM_INVALID_CHARACTER_ERR
     *
     * @return DOMAttr
     *
     * @see http://php.net/manual/en/domdocument.createattribute.php
     */
    public function createAttribute(string $name): DOMAttr
    {
    }

    /**
     * createAttributeNS.
     *
     * Create new attribute node with an associated namespace
     *
     * @param string $namespaceURI
     * @param string $qualifiedName
     *
     * @throws DOM_INVALID_CHARACTER_ERR
     * @throws DOM_NAMESPACE_ERR
     *
     * @return DOMAttr
     *
     * @see http://php.net/manual/en/domdocument.createattributens.php
     */
    public function createAttributeNS(string $namespaceURI, string $qualifiedName): DOMAttr
    {
    }

    /**
     * createCDATASection.
     *
     * Create new cdata node
     *
     * @param string $data
     *
     * @return DOMCDATASection
     *
     * @see http://php.net/manual/en/domdocument.createcdatasection.php
     */
    public function createCDATASection(string $data): DOMCDATASection
    {
    }

    /**
     * createComment.
     *
     * Create new comment node
     *
     * @param string $data
     *
     * @return DOMComment
     *
     * @see http://php.net/manual/en/domdocument.createcomment.php
     */
    public function createComment(string $data): DOMComment
    {
    }

    /**
     * createDocumentFragment.
     *
     * Create new document fragment
     *
     * @return DOMDocumentFragment
     *
     * @see http://php.net/manual/en/domdocument.createdocumentfragment.php
     */
    public function createDocumentFragment(): DOMDocumentFragment
    {
    }

    /**
     * createElement.
     *
     * Create new element node
     *
     * @param string $name
     * @param string $value (optional)
     *
     * @throws DOM_INVALID_CHARACTER_ERR
     *
     * @return DOMElement
     *
     * @see http://php.net/manual/en/domdocument.createelement.php
     */
    public function createElement(string $name, string $value): DOMElement
    {
    }

    /**
     * createElementNS.
     *
     * Create new element node with an associated namespace
     *
     * @param string $namespaceURI
     * @param string $qualifiedName
     * @param string $value         (optional)
     *
     * @throws DOM_INVALID_CHARACTER_ERR
     * @throws DOM_NAMESPACE_ERR
     *
     * @return DOMElement
     *
     * @see http://php.net/manual/en/domdocument.createelementns.php
     */
    public function createElementNS(string $namespaceURI, string $qualifiedName, string $value): DOMElement
    {
    }

    /**
     * createEntityReference.
     *
     * Create new entity reference node
     *
     * @param string $name
     *
     * @throws DOM_INVALID_CHARACTER_ERR
     *
     * @return DOMEntityReference
     *
     * @see http://php.net/manual/en/domdocument.createentityreference.php
     */
    public function createEntityReference(string $name): DOMEntityReference
    {
    }

    /**
     * createProcessingInstruction.
     *
     * Creates new PI node
     *
     * @param string $target
     * @param string $data   (optional)
     *
     * @throws DOM_INVALID_CHARACTER_ERR
     *
     * @return DOMProcessingInstruction
     *
     * @see http://php.net/manual/en/domdocument.createprocessinginstruction.php
     */
    public function createProcessingInstruction(string $target, string $data): DOMProcessingInstruction
    {
    }

    /**
     * createTextNode.
     *
     * Create new text node
     *
     * @param string $content
     *
     * @return DOMText
     *
     * @see http://php.net/manual/en/domdocument.createtextnode.php
     */
    public function createTextNode(string $content): DOMText
    {
    }

    /**
     * getElementById.
     *
     * Searches for an element with a certain id
     *
     * @param string $elementId
     *
     * @return DOMElement
     *
     * @see http://php.net/manual/en/domdocument.getelementbyid.php
     */
    public function getElementById(string $elementId): DOMElement
    {
    }

    /**
     * getElementsByTagName.
     *
     * Searches for all elements with given local tag name
     *
     * @param string $name
     *
     * @return DOMNodeList
     *
     * @see http://php.net/manual/en/domdocument.getelementsbytagname.php
     */
    public function getElementsByTagName(string $name): DOMNodeList
    {
    }

    /**
     * getElementsByTagNameNS.
     *
     * Searches for all elements with given tag name in specified namespace
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return DOMNodeList
     *
     * @see http://php.net/manual/en/domdocument.getelementsbytagnamens.php
     */
    public function getElementsByTagNameNS(string $namespaceURI, string $localName): DOMNodeList
    {
    }

    /**
     * importNode.
     *
     * Import node into current document
     *
     * @param DOMNode $importedNode
     * @param bool    $deep         (optional)
     *
     * @throws DOMException
     *
     * @return DOMNode
     *
     * @see http://php.net/manual/en/domdocument.importnode.php
     */
    public function importNode(DOMNode $importedNode, bool $deep): DOMNode
    {
    }

    /**
     * load.
     *
     * Load XML from a file
     *
     * @param string $filename
     * @param int    $options  = 0
     *
     * @throws E_STRICT
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/domdocument.load.php
     */
    public function load(string $filename, int $options = 0): mixed
    {
    }

    /**
     * loadHTML.
     *
     * Load HTML from a string
     *
     * @param string $source
     * @param int    $options = 0
     *
     * @throws E_STRICT
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domdocument.loadhtml.php
     */
    public function loadHTML(string $source, int $options = 0): bool
    {
    }

    /**
     * loadHTMLFile.
     *
     * Load HTML from a file
     *
     * @param string $filename
     * @param int    $options  = 0
     *
     * @throws E_STRICT
     * @throws E_WARNING
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domdocument.loadhtmlfile.php
     */
    public function loadHTMLFile(string $filename, int $options = 0): bool
    {
    }

    /**
     * loadXML.
     *
     * Load XML from a string
     *
     * @param string $source
     * @param int    $options = 0
     *
     * @throws E_STRICT
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/domdocument.loadxml.php
     */
    public function loadXML(string $source, int $options = 0): mixed
    {
    }

    /**
     * normalizeDocument.
     *
     * Normalizes the document
     *
     *
     * @see http://php.net/manual/en/domdocument.normalizedocument.php
     */
    public function normalizeDocument(): void
    {
    }

    /**
     * registerNodeClass.
     *
     * Register extended class used to create base node type
     *
     * @param string $baseclass
     * @param string $extendedclass
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domdocument.registernodeclass.php
     */
    public function registerNodeClass(string $baseclass, string $extendedclass): bool
    {
    }

    /**
     * relaxNGValidate.
     *
     * Performs relaxNG validation on the document
     *
     * @param string $filename
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domdocument.relaxngvalidate.php
     */
    public function relaxNGValidate(string $filename): bool
    {
    }

    /**
     * relaxNGValidateSource.
     *
     * Performs relaxNG validation on the document
     *
     * @param string $source
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domdocument.relaxngvalidatesource.php
     */
    public function relaxNGValidateSource(string $source): bool
    {
    }

    /**
     * save.
     *
     * Dumps the internal XML tree back into a file
     *
     * @param string $filename
     * @param int    $options  (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/domdocument.save.php
     */
    public function save(string $filename, int $options): int
    {
    }

    /**
     * saveHTML.
     *
     * Dumps the internal document into a string using HTML formatting
     *
     * @param DOMNode $node = NULL
     *
     * @return string
     *
     * @see http://php.net/manual/en/domdocument.savehtml.php
     */
    public function saveHTML(DOMNode $node = null): string
    {
    }

    /**
     * saveHTMLFile.
     *
     * Dumps the internal document into a file using HTML formatting
     *
     * @param string $filename
     *
     * @return int
     *
     * @see http://php.net/manual/en/domdocument.savehtmlfile.php
     */
    public function saveHTMLFile(string $filename): int
    {
    }

    /**
     * saveXML.
     *
     * Dumps the internal XML tree back into a string
     *
     * @param DOMNode $node    (optional)
     * @param int     $options (optional)
     *
     * @throws DOM_WRONG_DOCUMENT_ERR
     *
     * @return string
     *
     * @see http://php.net/manual/en/domdocument.savexml.php
     */
    public function saveXML(DOMNode $node, int $options): string
    {
    }

    /**
     * schemaValidate.
     *
     * Validates a document based on a schema
     *
     * @param string $filename
     * @param int    $flags    (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domdocument.schemavalidate.php
     */
    public function schemaValidate(string $filename, int $flags): bool
    {
    }

    /**
     * schemaValidateSource.
     *
     * Validates a document based on a schema
     *
     * @param string $source
     * @param int    $flags
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domdocument.schemavalidatesource.php
     */
    public function schemaValidateSource(string $source, int $flags): bool
    {
    }

    /**
     * validate.
     *
     * Validates the document based on its DTD
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domdocument.validate.php
     */
    public function validate(): bool
    {
    }

    /**
     * xinclude.
     *
     * Substitutes XIncludes in a DOMDocument Object
     *
     * @param int $options (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/domdocument.xinclude.php
     */
    public function xinclude(int $options): int
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
