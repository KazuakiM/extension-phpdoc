<?php

/**
 * SimpleXMLIterator.
 *
 * The SimpleXMLIterator provides recursive iteration over all nodes of a SimpleXMLElement object.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.simplexmliterator.php
 */
class SimpleXMLIterator extends SimpleXMLElement implements RecursiveIterator, Countable
{
    /**
     * current.
     *
     * Returns the current element
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/simplexmliterator.current.php
     */
    public function current(): mixed
    {
    }

    /**
     * getChildren.
     *
     * Returns the sub-elements of the current element
     *
     * @return SimpleXMLIterator
     *
     * @see http://php.net/manual/en/simplexmliterator.getchildren.php
     */
    public function getChildren(): SimpleXMLIterator
    {
    }

    /**
     * hasChildren.
     *
     * Checks whether the current element has sub elements.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/simplexmliterator.haschildren.php
     */
    public function hasChildren(): bool
    {
    }

    /**
     * key.
     *
     * Return current key
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/simplexmliterator.key.php
     */
    public function key(): mixed
    {
    }

    /**
     * next.
     *
     * Move to next element
     *
     * @see http://php.net/manual/en/simplexmliterator.next.php
     */
    public function next(): void
    {
    }

    /**
     * rewind.
     *
     * Rewind to the first element
     *
     * @see http://php.net/manual/en/simplexmliterator.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * valid.
     *
     * Check whether the current element is valid
     *
     * @return bool
     *
     * @see http://php.net/manual/en/simplexmliterator.valid.php
     */
    public function valid(): bool
    {
    }

    /* Inherited methods */
    //final public function SimpleXMLElement::__construct ( string $data [, int $options = 0 [, bool $data_is_url = false [, string $ns = "" [, bool $is_prefix = false ]]]] )
    //public function SimpleXMLElement::addAttribute ( string $name [, string $value [, string $namespace ]] ): void
    //public function SimpleXMLElement::addChild ( string $name [, string $value [, string $namespace ]] ): SimpleXMLElement
    //public function SimpleXMLElement::asXML ([ string $filename ] ): mixed
    //public function SimpleXMLElement::attributes ([ string $ns = NULL [, bool $is_prefix = false ]] ): SimpleXMLElement
    //public function SimpleXMLElement::children ([ string $ns [, bool $is_prefix = false ]] ): SimpleXMLElement
    //public function SimpleXMLElement::count ( void ): int
    //public function SimpleXMLElement::getDocNamespaces ([ bool $recursive = false [, bool $from_root = true ]] ): array
    //public function SimpleXMLElement::getName ( void ): string
    //public function SimpleXMLElement::getNamespaces ([ bool $recursive = false ] ): array
    //public function SimpleXMLElement::registerXPathNamespace ( string $prefix , string $ns ): bool
    //public function SimpleXMLElement::__toString ( void ): string
    //public function SimpleXMLElement::xpath ( string $path ): array
}
