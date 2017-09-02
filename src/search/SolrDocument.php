<?php

/**
 * SolrDocument.
 * Represents a Solr document retrieved from a query response.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrdocument.php
 */
final class SolrDocument implements ArrayAccess, Iterator, Serializable
{
    const SORT_DEFAULT = 1;
    const SORT_ASC = 1;
    const SORT_DESC = 2;
    const SORT_FIELD_NAME = 1;
    const SORT_FIELD_VALUE_COUNT = 2;
    const SORT_FIELD_BOOST_VALUE = 4;

    /**
     * __construct.
     * Constructor.
     *
     * @see http://php.net/manual/en/solrdocument.construct.php
     */
    public function __construct()
    {
    }

    /**
     * __destruct.
     * Destructor.
     *
     * @see http://php.net/manual/en/solrdocument.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * __clone.
     * Creates a copy of a SolrDocument object.
     *
     * @see http://php.net/manual/en/solrdocument.clone.php
     */
    public function __clone()
    {
    }

    /**
     * __get.
     * Access the field as a property.
     *
     * @param string $fieldName
     *
     * @return SolrDocumentField
     *
     * @see http://php.net/manual/en/solrdocument.get.php
     */
    public function __get(string $fieldName): SolrDocumentField
    {
    }

    /**
     * __isset.
     * Checks if a field exists.
     *
     * @param string $fieldName
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.isset.php
     */
    public function __isset(string $fieldName): bool
    {
    }

    /**
     * __set.
     * Adds another field to the document.
     *
     * @param string $fieldName
     * @param string $fieldValue
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.set.php
     */
    public function __set(string $fieldName, string $fieldValue): bool
    {
    }

    /**
     * __unset.
     * Removes a field from the document.
     *
     * @param string $fieldName
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.unset.php
     */
    public function __unset(string $fieldName): bool
    {
    }

    /**
     * addField.
     * Adds a field to the document.
     *
     * @param string $fieldName
     * @param string $fieldValue
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.addfield.php
     */
    public function addField(string $fieldName, string $fieldValue): bool
    {
    }

    /**
     * clear.
     * Drops all the fields in the document.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.clear.php
     */
    public function clear(): bool
    {
    }

    /**
     * current.
     * Retrieves the current field.
     *
     * @return SolrDocumentField
     *
     * @see http://php.net/manual/en/solrdocument.current.php
     */
    public function current(): SolrDocumentField
    {
    }

    /**
     * deleteField.
     * Removes a field from the document.
     *
     * @param string $fieldName
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.deletefield.php
     */
    public function deleteField(string $fieldName): bool
    {
    }

    /**
     * fieldExists.
     * Checks if a field exists in the document.
     *
     * @param string $fieldName
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.fieldexists.php
     */
    public function fieldExists(string $fieldName): bool
    {
    }

    /**
     * getChildDocuments.
     * Returns an array of child documents (SolrDocument).
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrdocument.getchilddocuments.php
     */
    public function getChildDocuments(): array
    {
    }

    /**
     * getChildDocumentsCount.
     * Returns the number of child documents.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrdocument.getchilddocumentscount.php
     */
    public function getChildDocumentsCount(): int
    {
    }

    /**
     * getField.
     * Retrieves a field by name.
     *
     * @param string $fieldName
     *
     * @return SolrDocumentField
     *
     * @see http://php.net/manual/en/solrdocument.getfield.php
     */
    public function getField(string $fieldName): SolrDocumentField
    {
    }

    /**
     * getFieldCount.
     * Returns the number of fields in this document.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrdocument.getfieldcount.php
     */
    public function getFieldCount(): int
    {
    }

    /**
     * getFieldNames.
     * Returns an array of fields names in the document.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrdocument.getfieldnames.php
     */
    public function getFieldNames(): array
    {
    }

    /**
     * getInputDocument.
     * Returns a SolrInputDocument equivalent of the object.
     *
     * @return SolrInputDocument
     *
     * @see http://php.net/manual/en/solrdocument.getinputdocument.php
     */
    public function getInputDocument(): SolrInputDocument
    {
    }

    /**
     * hasChildDocuments.
     * Checks whether the document has any child documents.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.haschilddocuments.php
     */
    public function hasChildDocuments(): bool
    {
    }

    /**
     * key.
     * Retrieves the current key.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrdocument.key.php
     */
    public function key(): string
    {
    }

    /**
     * merge.
     * Merges source to the current SolrDocument.
     *
     * @param SolrDocument $sourceDoc
     * @param bool         $overwrite = true
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.merge.php
     */
    public function merge(SolrDocument $sourceDoc, bool $overwrite = true): bool
    {
    }

    /**
     * next.
     * Moves the internal pointer to the next field.
     *
     * @see http://php.net/manual/en/solrdocument.next.php
     */
    public function next(): void
    {
    }

    /**
     * offsetExists.
     * Checks if a particular field exists.
     *
     * @param string $fieldName
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.offsetexists.php
     */
    public function offsetExists(string $fieldName): bool
    {
    }

    /**
     * offsetGet.
     * Retrieves a field.
     *
     * @param string $fieldName
     *
     * @return SolrDocumentField
     *
     * @see http://php.net/manual/en/solrdocument.offsetget.php
     */
    public function offsetGet(string $fieldName): SolrDocumentField
    {
    }

    /**
     * offsetSet.
     * Adds a field to the document.
     *
     * @param string $fieldName
     * @param string $fieldValue
     *
     * @see http://php.net/manual/en/solrdocument.offsetset.php
     */
    public function offsetSet(string $fieldName, string $fieldValue): void
    {
    }

    /**
     * offsetUnset.
     * Removes a field.
     *
     * @param string $fieldName
     *
     * @see http://php.net/manual/en/solrdocument.offsetunset.php
     */
    public function offsetUnset(string $fieldName): void
    {
    }

    /**
     * reset.
     * This is an alias to SolrDocument::clear().
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.reset.php
     */
    public function reset(): bool
    {
    }

    /**
     * rewind.
     * Resets the internal pointer to the beginning.
     *
     * @see http://php.net/manual/en/solrdocument.rewind.php
     */
    public function rewind(): void
    {
    }

    /**
     * serialize.
     * Used for custom serialization.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrdocument.serialize.php
     */
    public function serialize(): string
    {
    }

    /**
     * sort.
     * Sorts the fields in the document.
     *
     * @param int $sortOrderBy
     * @param int $sortDirection = SolrDocument::SORT_ASC
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.sort.php
     */
    public function sort(int $sortOrderBy, int $sortDirection = self::SORT_ASC): bool
    {
    }

    /**
     * toArray.
     * Returns an array representation of the document.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrdocument.toarray.php
     */
    public function toArray(): array
    {
    }

    /**
     * unserialize.
     * Custom serialization of SolrDocument objects.
     *
     * @param string $serialized
     *
     * @see http://php.net/manual/en/solrdocument.unserialize.php
     */
    public function unserialize(string $serialized): void
    {
    }

    /**
     * valid.
     * Checks if the current position internally is still valid.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrdocument.valid.php
     */
    public function valid(): bool
    {
    }
}
