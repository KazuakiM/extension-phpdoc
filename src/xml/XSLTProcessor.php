<?php

/**
 * XSLTProcessor.
 *
 *
 *
 * @see http://php.net/manual/en/class.xsltprocessor.php
 */
class XSLTProcessor
{
    /**
     *  __construct.
     *
     * Creates a new XSLTProcessor object
     *
     * @see http://php.net/manual/en/xsltprocessor.construct.php
     */
    public function __construct()
    {
    }

    /**
     * getParameter.
     *
     * Get value of a parameter
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return string
     *
     * @see http://php.net/manual/en/xsltprocessor.getparameter.php
     */
    public function getParameter(string $namespaceURI, string $localName): string
    {
    }

    /**
     * getSecurityPrefs.
     *
     * Get security preferences
     *
     * @return int
     *
     * @see http://php.net/manual/en/xsltprocessor.getsecurityprefs.php
     */
    public function getSecurityPrefs(): int
    {
    }

    /**
     * hasExsltSupport.
     *
     * Determine if PHP has EXSLT support
     *
     * @return bool
     *
     * @see http://php.net/manual/en/xsltprocessor.hasexsltsupport.php
     */
    public function hasExsltSupport(): bool
    {
    }

    /**
     * importStylesheet.
     *
     * Import stylesheet
     *
     * @param object $stylesheet
     *
     * @return bool
     *
     * @see http://php.net/manual/en/xsltprocessor.importstylesheet.php
     */
    public function importStylesheet(object $stylesheet): bool
    {
    }

    /**
     * registerPHPFunctions.
     *
     * Enables the ability to use PHP functions as XSLT functions
     *
     * @pram mixed $restrict
     *
     * @see http://php.net/manual/en/xsltprocessor.registerphpfunctions.php
     */
    public function registerPHPFunctions(mixed $restrict): void
    {
    }

    /**
     * removeParameter.
     *
     * Remove parameter
     *
     * @param string $namespaceURI
     * @param string $localName
     *
     * @return bool
     *
     * @see http://php.net/manual/en/xsltprocessor.removeparameter.php
     */
    public function removeParameter(string $namespaceURI, string $localName): bool
    {
    }

    /**
     * setParameter.
     *
     * Set value for a parameter
     *
     * @param string $namespace
     * @param string $name
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/xsltprocessor.setparameter.php
     */
    public function setParameter(string $namespace, string $name, string $value): bool
    {
    }

    /**
     * setProfiling.
     *
     * Sets profiling output file
     *
     * @param string $filename
     *
     * @return bool
     *
     * @see http://php.net/manual/en/xsltprocessor.setprofiling.php
     */
    public function setProfiling(string $filename): bool
    {
    }

    /**
     * setSecurityPrefs.
     *
     * Set security preferences
     *
     * @param int $securityPrefs
     *
     * @return int
     *
     * @see http://php.net/manual/en/xsltprocessor.setsecurityprefs.php
     */
    public function setSecurityPrefs(int $securityPrefs): int
    {
    }

    /**
     * transformToDoc.
     *
     * Transform to a DOMDocument
     *
     * @param DOMNode $doc
     *
     * @return DOMDocument
     *
     * @see http://php.net/manual/en/xsltprocessor.transformtodoc.php
     */
    public function transformToDoc(DOMNode $doc): DOMDocument
    {
    }

    /**
     * transformToURI.
     *
     * Transform to URI
     *
     * @param DOMDocument $doc
     * @param string      $uri
     *
     * @return int
     *
     * @see http://php.net/manual/en/xsltprocessor.transformtouri.php
     */
    public function transformToURI(DOMDocument $doc, string $uri): int
    {
    }

    /**
     * transformToXML.
     *
     * Transform to XML
     *
     * @param object $doc
     *
     * @return string
     *
     * @see http://php.net/manual/en/xsltprocessor.transformtoxml.php
     */
    public function transformToXML(object $doc): string
    {
    }
}
