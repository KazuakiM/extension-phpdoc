<?php

/**
 * DOMXPath.
 *
 *
 *
 * @property DOMDocument $document
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.domxpath.php
 */
class DOMXPath
{
    public $document;

    /**
     * __construct.
     *
     * Creates a new DOMXPath object
     *
     * @parm DOMDocument $doc
     *
     * @see http://php.net/manual/en/domxpath.construct.php
     */
    public function __construct(DOMDocument $doc)
    {
    }

    /**
     * evaluate.
     *
     * Evaluates the given XPath expression and returns a typed result if possible
     *
     * @param string  $expression
     * @param DOMNode $contextnode    (optional)
     * @param bool    $registerNodeNS = true
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/domxpath.evaluate.php
     */
    public function evaluate(string $expression, DOMNode $contextnode, bool $registerNodeNS = true): mixed
    {
    }

    /**
     * query.
     *
     * Evaluates the given XPath expression
     *
     * @param string  $expression
     * @param DOMNode $contextnode    (optional)
     * @param bool    $registerNodeNS = true
     *
     * @return DOMNodeList
     *
     * @see http://php.net/manual/en/domxpath.query.php
     */
    public function query(string $expression, DOMNode $contextnode, bool $registerNodeNS = true): DOMNodeList
    {
    }

    /**
     * registerNamespace.
     *
     * Registers the namespace with the DOMXPath object
     *
     * @param string $prefix
     * @param string $namespaceURI
     *
     * @return bool
     *
     * @see http://php.net/manual/en/domxpath.registernamespace.php
     */
    public function registerNamespace(string $prefix, string $namespaceURI): bool
    {
    }

    /**
     * registerPhpFunctions.
     *
     * Register PHP functions as XPath functions
     *
     * @param mixed $restrict (optional)
     *
     * @see http://php.net/manual/en/domxpath.registerphpfunctions.php
     */
    public function registerPhpFunctions(mixed $restrict): void
    {
    }
}
