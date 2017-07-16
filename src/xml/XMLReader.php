<?php

/**
 * XMLReader
 *
 * The XMLReader extension is an XML Pull parser. The reader acts as a cursor going forward on the document stream and stopping at each node on the way.
 *
 * @property-read  int $attributeCount
 * @property-read  string $baseURI
 * @property-read  int $depth
 * @property-read  bool $hasAttributes
 * @property-read  bool $hasValue
 * @property-read  bool $isDefault
 * @property-read  bool $isEmptyElement
 * @property-read  string $localName
 * @property-read  string $name
 * @property-read  string $namespaceURI
 * @property-read  int $nodeType
 * @property-read  string $prefix
 * @property-read  string $value
 * @property-read  string $xmlLang
 *
 * @link http://php.net/manual/en/class.xmlreader.php
 */
class XMLReader
{
    const NONE = 0;
    const ELEMENT = 1;
    const ATTRIBUTE = 2;
    const TEXT = 3;
    const CDATA = 4;
    const ENTITY_REF = 5;
    const ENTITY = 6;
    const PI = 7;
    const COMMENT = 8;
    const DOC = 9;
    const DOC_TYPE = 10;
    const DOC_FRAGMENT = 11;
    const NOTATION = 12;
    const WHITESPACE = 13;
    const SIGNIFICANT_WHITESPACE = 14;
    const END_ELEMENT = 15;
    const END_ENTITY = 16;
    const XML_DECLARATION = 17;
    const LOADDTD = 1;
    const DEFAULTATTRS = 2;
    const VALIDATE = 3;
    const SUBST_ENTITIES = 4;

    public $attributeCount;
    public $baseURI;
    public $depth;
    public $hasAttributes;
    public $hasValue;
    public $isDefault;
    public $isEmptyElement;
    public $localName;
    public $name;
    public $namespaceURI;
    public $nodeType;
    public $prefix;
    public $value;
    public $xmlLang;

    /**
     * close
     *
     * Close the XMLReader input
     *
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.close.php
     */
    public function close(): bool
    {
    }

    /**
     * expand
     *
     * Returns a copy of the current node as a DOM object
     *
     * @param DOMNode $basenode(optional)
     * @return DOMNode
     *
     * @link http://php.net/manual/en/xmlreader.expand.php
     */
    public function expand(DOMNode $basenode): DOMNode
    {
    }

    /**
     * getAttribute
     *
     * Get the value of a named attribute
     *
     * @param string $name
     * @return string
     *
     * @link http://php.net/manual/en/xmlreader.getattribute.php
     */
    public function getAttribute(string $name): string
    {
    }

    /**
     * getAttributeNo
     *
     * Get the value of an attribute by index
     *
     * @param int $index
     * @return string
     *
     * @link http://php.net/manual/en/xmlreader.getattributeno.php
     */
    public function getAttributeNo(int $index): string
    {
    }

    /**
     * getAttributeNs
     *
     * Get the value of an attribute by localname and URI
     *
     * @param string $localName
     * @param string $namespaceURI
     * @return string
     *
     * @link http://php.net/manual/en/xmlreader.getattributens.php
     */
    public function getAttributeNs(string $localName, string $namespaceURI): string
    {
    }

    /**
     * getParserProperty
     *
     * Indicates if specified property has been set
     *
     * @param int $property
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.getparserproperty.php
     */
    public function getParserProperty(int $property): bool
    {
    }

    /**
     * isValid
     *
     * Indicates if the parsed document is valid
     *
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.isvalid.php
     */
    public function isValid(): bool
    {
    }

    /**
     * lookupNamespace
     *
     * Lookup namespace for a prefix
     *
     * @param string $prefix
     * @return string
     *
     * @link http://php.net/manual/en/xmlreader.lookupnamespace.php
     */
    public function lookupNamespace(string $prefix): string
    {
    }

    /**
     * moveToAttribute
     *
     * Move cursor to a named attribute
     *
     * @param string $name
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.movetoattribute.php
     */
    public function moveToAttribute(string $name): bool
    {
    }

    /**
     * moveToAttributeNo
     *
     * Move cursor to an attribute by index
     *
     * @param int $index
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.movetoattributeno.php
     */
    public function moveToAttributeNo(int $index): bool
    {
    }

    /**
     * moveToAttributeNs
     *
     * Move cursor to a named attribute
     *
     * @param string $localName
     * @param string $namespaceURI
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.movetoattributens.php
     */
    public function moveToAttributeNs(string $localName, string $namespaceURI): bool
    {
    }

    /**
     * moveToElement
     *
     * Position cursor on the parent Element of current Attribute
     *
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.movetoelement.php
     */
    public function moveToElement(): bool
    {
    }

    /**
     * moveToFirstAttribute
     *
     * Position cursor on the first Attribute
     *
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.movetofirstattribute.php
     */
    public function moveToFirstAttribute(): bool
    {
    }

    /**
     * moveToNextAttribute
     *
     * Position cursor on the next Attribute
     *
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.movetonextattribute.php
     */
    public function moveToNextAttribute(): bool
    {
    }

    /**
     * next
     *
     * Move cursor to next node skipping all subtrees
     *
     * @param string $localname
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.next.php
     */
    public function next(string $localname): bool
    {
    }

    /**
     * open
     *
     * Set the URI containing the XML to parse
     *
     * @param string $URI
     * @param string $encoding (optional)
     * @param int $options = 0
     * @return bool
     * @throws E_STRICT
     *
     * @link http://php.net/manual/en/xmlreader.open.php
     */
    public function open(string $URI, string $encoding, int $options = 0): bool
    {
    }

    /**
     * read
     *
     * Move to next node in document
     *
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.read.php
     */
    public function read(): bool
    {
    }

    /**
     * readInnerXML
     *
     * Retrieve XML from current node
     *
     * @return string
     *
     * @link http://php.net/manual/en/xmlreader.readinnerxml.php
     */
    public function readInnerXML(): string
    {
    }

    /**
     * readOuterXML
     *
     * Retrieve XML from current node, including itself
     *
     * @return string
     *
     * @link http://php.net/manual/en/xmlreader.readouterxml.php
     */
    public function readOuterXML(): string
    {
    }

    /**
     * readString
     *
     * Reads the contents of the current node as a string
     *
     * @return string
     *
     * @link http://php.net/manual/en/xmlreader.readstring.php
     */
    public function readString(): string
    {
    }

    /**
     * setParserProperty
     *
     * Set parser options
     *
     * @param int $property
     * @param bool $value
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.setparserproperty.php
     */
    public function setParserProperty(int $property, bool $value): bool
    {
    }

    /**
     * setRelaxNGSchema
     *
     * Set the filename or URI for a RelaxNG Schema
     *
     * @param string $filename
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.setrelaxngschema.php
     */
    public function setRelaxNGSchema(string $filename): bool
    {
    }

    /**
     * setRelaxNGSchemaSource
     *
     * Set the data containing a RelaxNG Schema
     *
     * @param string $source
     * @return bool
     *
     * @link http://php.net/manual/en/xmlreader.setrelaxngschemasource.php
     */
    public function setRelaxNGSchemaSource(string $source): bool
    {
    }

    /**
     * setSchema
     *
     * Validate document against XSD
     *
     * @param string $filename
     * @return bool
     * @throws E_WARNING
     *
     * @link http://php.net/manual/en/xmlreader.setschema.php
     */
    public function setSchema(string $filename): bool
    {
    }

    /**
     * xml
     *
     * Set the data containing the XML to parse
     *
     * @param string $source
     * @param string $encoding (optional)
     * @param int $options = 0
     * @return bool
     * @throws E_STRICT
     *
     * @link http://php.net/manual/en/xmlreader.xml.php
     */
    public function xml(string $source, string $encoding, int $options = 0): bool
    {
    }
}
