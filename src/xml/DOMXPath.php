<?php

/**
 * DOMXPath
 *
 * 
 *
 * @property-write DOMDocument $document
 *
 * @link http://php.net/manual/en/class.domxpath.php
 */
class DOMXPath
{
    public DOMDocument $document;

    /**
     * __construct
     *
     * Creates a new DOMXPath object
     *
     * @parm DOMDocument $doc
     *
     * @link http://php.net/manual/en/domxpath.construct.php
     */
    public function __construct(DOMDocument $doc)
    {
    }

    /**
     * evaluate
     *
     * Evaluates the given XPath expression and returns a typed result if possible
     *
     * @param string $expression
     * @param DOMNode $contextnode (optional)
     * @param bool $registerNodeNS = true
     * @return mixed
     *
     * @link http://php.net/manual/en/domxpath.evaluate.php
     */
    public function evaluate(string $expression, DOMNode $contextnode, bool $registerNodeNS = true): mixed
    {
    }

    /**
     * query
     *
     * Evaluates the given XPath expression
     *
     * @param string $expression
     * @param DOMNode $contextnode (optional)
     * @param bool $registerNodeNS = true
     * @return DOMNodeList
     *
     * @link http://php.net/manual/en/domxpath.query.php
     */
    public function query(string $expression, DOMNode $contextnode, bool $registerNodeNS = true): DOMNodeList
    {
    }

    /**
     * registerNamespace
     *
     * Registers the namespace with the DOMXPath object
     *
     * @param string $prefix
     * @param string $namespaceURI
     * @return bool
     *
     * @link http://php.net/manual/en/domxpath.registernamespace.php
     */
    public function registerNamespace(string $prefix, string $namespaceURI): bool
    {
    }

    /**
     * registerPhpFunctions
     *
     * Register PHP functions as XPath functions
     *
     * @param mixed $restrict (optional)
     * @return void
     *
     * @link http://php.net/manual/en/domxpath.registerphpfunctions.php
     */
    public function registerPhpFunctions(mixed $restrict): void
    {
    }
}
