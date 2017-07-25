<?php

/**
 * DOMImplementation.
 *
 * The DOMImplementation interface provides a number of methods for performing operations that are independent of any particular instance of the document object model.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.domimplementation.php
 */
class DOMImplementation
{
    /**
     *  __construct.
     *
     * Creates a new DOMImplementation object
     *
     *  @see http://php.net/manual/en/domimplementation.construct.php
     */
    public function __construct()
    {
    }

    /**
     * createDocument.
     *
     * Creates a DOMDocument object of the specified type with its document element
     *
     * @param string          $namespaceURI  = null
     * @param string          $qualifiedName = null
     * @param DOMDocumentType $doctype       = null
     *
     * @throws DOM_WRONG_DOCUMENT_ERR
     * @throws DOM_NAMESPACE_ERR
     *
     * @return DOMDocument
     *
     * @see http://php.net/manual/en/domimplementation.createdocument.php
     */
    public function createDocument(string $namespaceURI = null, string $qualifiedName = null, DOMDocumentType $doctype = null): DOMDocument
    {
    }

    /**
     * createDocumentType.
     *
     * Creates an empty DOMDocumentType object
     *
     * @param string $qualifiedName = null
     * @param string $publicId      = null
     * @param string $systemId      = null
     *
     * @throws DOM_NAMESPACE_ERR
     *
     * @return DOMDocumentType
     *
     * @see http://php.net/manual/en/domimplementation.createdocumenttype.php
     */
    public function createDocumentType(string $qualifiedName = null, string $publicId = null, string $systemId = null): DOMDocumentType
    {
    }

    /**
     * hasFeature.
     *
     * Test if the DOM implementation implements a specific feature
     *
     * @param string $feature
     * @param string $version
     *
     * @throws E_STRICT
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domimplementation.hasfeature.php
     */
    public function hasFeature(string $feature, string $version): bool
    {
    }
}
