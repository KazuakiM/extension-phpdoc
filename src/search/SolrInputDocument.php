<?php

/**
 * SolrInputDocument.
 * This class represents a Solr document that is about to be submitted to the Solr index.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrinputdocument.php
 */
final class SolrInputDocument
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
     * @see http://php.net/manual/en/solrinputdocument.construct.php
     */
    public function __construct()
    {
    }

    /**
     * __destruct.
     * Destructor.
     *
     * @see http://php.net/manual/en/solrinputdocument.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * __clone.
     * Creates a copy of a SolrDocument.
     *
     * @see http://php.net/manual/en/solrinputdocument.clone.php
     */
    public function __clone()
    {
    }

    /**
     * addChildDocument.
     * Adds a child document for block indexing.
     *
     * @param SolrInputDocument $child
     *
     * @see http://php.net/manual/en/solrinputdocument.addchilddocument.php
     */
    public function addChildDocument(SolrInputDocument $child): void
    {
    }

    /**
     * addChildDocuments.
     * Adds an array of child documents.
     *
     * @param array &$docs
     *
     * @throws SolrIllegalArgumentException
     * @throws SolrException
     *
     * @see http://php.net/manual/en/solrinputdocument.addchilddocuments.php
     */
    public function addChildDocuments(array &$docs): void
    {
    }

    /**
     * addField.
     * Adds a field to the document.
     *
     * @param string $fieldName
     * @param string $fieldValue
     * @param float  $fieldBoostValue = 0.0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrinputdocument.addfield.php
     */
    public function addField(string $fieldName, string $fieldValue, float $fieldBoostValue = 0.0): bool
    {
    }

    /**
     * clear.
     * Resets the input document.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrinputdocument.clear.php
     */
    public function clear(): bool
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
     * @see http://php.net/manual/en/solrinputdocument.deletefield.php
     */
    public function deleteField(string $fieldName): bool
    {
    }

    /**
     * fieldExists.
     * Checks if a field exists.
     *
     * @param string $fieldName
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrinputdocument.fieldexists.php
     */
    public function fieldExists(string $fieldName): bool
    {
    }

    /**
     * getBoost.
     * Retrieves the current boost value for the document.
     *
     * @return float
     *
     * @see http://php.net/manual/en/solrinputdocument.getboost.php
     */
    public function getBoost(): float
    {
    }

    /**
     * getChildDocuments.
     * Returns an array of child documents (SolrInputDocument).
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrinputdocument.getchilddocuments.php
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
     * @see http://php.net/manual/en/solrinputdocument.getchilddocumentscount.php
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
     * @see http://php.net/manual/en/solrinputdocument.getfield.php
     */
    public function getField(string $fieldName): SolrDocumentField
    {
    }

    /**
     * getFieldBoost.
     * Retrieves the boost value for a particular field.
     *
     * @param string $fieldName
     *
     * @return float
     *
     * @see http://php.net/manual/en/solrinputdocument.getfieldboost.php
     */
    public function getFieldBoost(string $fieldName): float
    {
    }

    /**
     * getFieldCount.
     * Returns the number of fields in the document.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrinputdocument.getfieldcount.php
     */
    public function getFieldCount(): int
    {
    }

    /**
     * getFieldNames.
     * Returns an array containing all the fields in the document.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrinputdocument.getfieldnames.php
     */
    public function getFieldNames(): array
    {
    }

    /**
     * hasChildDocuments.
     * Returns true if the document has any child documents.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrinputdocument.haschilddocuments.php
     */
    public function hasChildDocuments(): bool
    {
    }

    /**
     * merge.
     * Merges one input document into another.
     *
     * @param SolrInputDocument $sourceDoc
     * @param bool              $overwrite = true
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrinputdocument.merge.php
     */
    public function merge(SolrInputDocument $sourceDoc, bool $overwrite = true): bool
    {
    }

    /**
     * reset.
     *
     * @alias SolrInputDocument::clear
     *
     * @see http://php.net/manual/en/solrinputdocument.reset.php
     */
    public function reset(): bool
    {
    }

    /**
     * setBoost.
     * Sets the boost value for this document.
     *
     * @param float $documentBoostValue
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrinputdocument.setboost.php
     */
    public function setBoost(float $documentBoostValue): bool
    {
    }

    /**
     * setFieldBoost.
     * Sets the index-time boost value for a field.
     *
     * @param string $fieldName
     * @param float  $fieldBoostValue
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrinputdocument.setfieldboost.php
     */
    public function setFieldBoost(string $fieldName, float $fieldBoostValue): bool
    {
    }

    /**
     * sort.
     * Sorts the fields within the document.
     *
     * @param int $sortOrderBy
     * @param int $sortDirection = SolrInputDocument::SORT_ASC
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrinputdocument.sort.php
     */
    public function sort(int $sortOrderBy, int $sortDirection = self::SORT_ASC): bool
    {
    }

    /**
     * toArray.
     * Returns an array representation of the input document.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrinputdocument.toarray.php
     */
    public function toArray(): array
    {
    }
}
