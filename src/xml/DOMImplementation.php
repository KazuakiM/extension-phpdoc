<?php

/**
 * DOMImplementation
 *
 * The DOMImplementation interface provides a number of methods for performing operations that are independent of any particular instance of the document object model.
 *
 * @link http://php.net/manual/en/class.domimplementation.php
 */
class DOMImplementation {

    /**
     *  __construct
     *
     * Creates a new DOMImplementation object
     *
     *  @link http://php.net/manual/en/domimplementation.construct.php
     */
    public function __construct()
    {
    }

    /**
     * createDocument
     *
     * Creates a DOMDocument object of the specified type with its document element
     *
     * @param string $namespaceURI = null
     * @param string $qualifiedName = null
     * @param DOMDocumentType $doctype = null
     * @return DOMDocument
     * @throws DOM_WRONG_DOCUMENT_ERR
     * @throws DOM_NAMESPACE_ERR
     *
     * @link http://php.net/manual/en/domimplementation.createdocument.php
     */
    public function createDocument(string $namespaceURI = null, string $qualifiedName = null, DOMDocumentType $doctype = null): DOMDocument
    {
    }

    /**
     * createDocumentType
     *
     * Creates an empty DOMDocumentType object
     *
     * @param string $qualifiedName = null
     * @param string $publicId = null
     * @param string $systemId = null
     * @return DOMDocumentType
     * @throws DOM_NAMESPACE_ERR
     *
     * @link http://php.net/manual/en/domimplementation.createdocumenttype.php
     */
    public function createDocumentType(string $qualifiedName = null, string $publicId = null, string $systemId = null): DOMDocumentType
    {
    }

    /**
     * hasFeature
     *
     * Test if the DOM implementation implements a specific feature
     *
     * @param string $feature
     * @param string $version
     * @return bool
     * @throws E_STRICT
     *
     * @link http://php.net/manual/en/domimplementation.hasfeature.php
     */
    public function hasFeature(string $feature, string $version): bool
    {
    }
}
