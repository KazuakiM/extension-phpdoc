<?php

/**
 * DOMEntity
 *
 * This interface represents a known entity, either parsed or unparsed, in an XML document.
 *
 * @property-read  string $publicId
 * @property-read  string $systemId
 * @property-read  string $notationName
 * @property-write string $actualEncoding
 * @property-read  string $encoding
 * @property-read  string $version
 *
 * @link http://php.net/manual/en/class.domentity.php
 */
class DOMEntity extends DOMNode
{
    public string $publicId;
    public string $systemId;
    public string $notationName;
    public string $actualEncoding;
    public string $encoding;
    public string $version;

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
