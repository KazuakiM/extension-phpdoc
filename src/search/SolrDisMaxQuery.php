<?php

/**
 * SolrDisMaxQuery.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrdismaxquery.php
 */
class SolrDisMaxQuery extends SolrQuery implements Serializable
{
    /**
     * __construct.
     * Class Constructor.
     *
     * @param string $q (optional)
     *
     * @throws SolrIllegalArgumentException
     *
     * @see http://php.net/manual/en/solrdismaxquery.construct.php
     */
    public function __construct(string $q)
    {
    }

    /* Inherited methods */
    //const SolrQuery::ORDER_ASC = 0;
    //const SolrQuery::ORDER_DESC = 1;
    //const SolrQuery::FACET_SORT_INDEX = 0;
    //const SolrQuery::FACET_SORT_COUNT = 1;
    //const SolrQuery::TERMS_SORT_INDEX = 0;
    //const SolrQuery::TERMS_SORT_COUNT = 1;

    /**
     * addBigramPhraseField.
     * Adds a Phrase Bigram Field (pf2 parameter).
     *
     * @param string $field
     * @param string $boost
     * @param string $slop  (optional)
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.addbigramphrasefield.php
     */
    public function addBigramPhraseField(string $field, string $boost, string $slop): SolrDisMaxQuery
    {
    }

    /**
     * addBoostQuery.
     * Adds a boost query field with value and optional boost (bq parameter).
     *
     * @param string $field
     * @param string $value
     * @param string $boost (optional)
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.addboostquery.php
     */
    public function addBoostQuery(string $field, string $value, string $boost): SolrDisMaxQuery
    {
    }

    /**
     * addPhraseField.
     * Adds a Phrase Field (pf parameter).
     *
     * @param string $field
     * @param string $boost
     * @param string $slop  (optional)
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.addphrasefield.php
     */
    public function addPhraseField(string $field, string $boost, string $slop): SolrDisMaxQuery
    {
    }

    /**
     * addQueryField.
     * Add a query field with optional boost (qf parameter).
     *
     * @param string $field
     * @param string $boost (optional)
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.addqueryfield.php
     */
    public function addQueryField(string $field, string $boost): SolrDisMaxQuery
    {
    }

    /**
     * addTrigramPhraseField.
     * Adds a Trigram Phrase Field (pf3 parameter).
     *
     * @param string $field
     * @param string $boost
     * @param string $slop  (optional)
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.addtrigramphrasefield.php
     */
    public function addTrigramPhraseField(string $field, string $boost, string $slop): SolrDisMaxQuery
    {
    }

    /**
     * addUserField.
     * Adds a field to User Fields Parameter (uf).
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.adduserfield.php
     */
    public function addUserField(string $field): SolrDisMaxQuery
    {
    }

    /**
     * removeBigramPhraseField.
     * Removes phrase bigram field (pf2 parameter).
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.removebigramphrasefield.php
     */
    public function removeBigramPhraseField(string $field): SolrDisMaxQuery
    {
    }

    /**
     * removeBoostQuery.
     * Removes a boost query partial by field name (bq).
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.removeboostquery.php
     */
    public function removeBoostQuery(string $field): SolrDisMaxQuery
    {
    }

    /**
     * removePhraseField.
     * Removes a Phrase Field (pf parameter).
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.removephrasefield.php
     */
    public function removePhraseField(string $field): SolrDisMaxQuery
    {
    }

    /**
     * removeQueryField.
     * Removes a Query Field (qf parameter).
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.removequeryfield.php
     */
    public function removeQueryField(string $field): SolrDisMaxQuery
    {
    }

    /**
     * removeTrigramPhraseField.
     * Removes a Trigram Phrase Field (pf3 parameter).
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.removetrigramphrasefield.php
     */
    public function removeTrigramPhraseField(string $field): SolrDisMaxQuery
    {
    }

    /**
     * removeUserField.
     * Removes a field from The User Fields Parameter (uf).
     *
     * @param string $field
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.removeuserfield.php
     */
    public function removeUserField(string $field): SolrDisMaxQuery
    {
    }

    /**
     * setBigramPhraseFields.
     * Sets Bigram Phrase Fields and their boosts (and slops) using pf2 parameter.
     *
     * @param string $fields
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.setbigramphrasefields.php
     */
    public function setBigramPhraseFields(string $fields): SolrDisMaxQuery
    {
    }

    /**
     * setBigramPhraseSlop.
     * Sets Bigram Phrase Slop (ps2 parameter).
     *
     * @param string $slop
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.setbigramphraseslop.php
     */
    public function setBigramPhraseSlop(string $slop): SolrDisMaxQuery
    {
    }

    /**
     * setBoostFunction.
     * Sets a Boost Function (bf parameter).
     *
     * @param string $function
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.setboostfunction.php
     */
    public function setBoostFunction(string $function): SolrDisMaxQuery
    {
    }

    /**
     * setBoostQuery.
     * Directly Sets Boost Query Parameter (bq).
     *
     * @param string $q
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.setboostquery.php
     */
    public function setBoostQuery(string $q): SolrDisMaxQuery
    {
    }

    /**
     * setMinimumMatch.
     * Set Minimum "Should" Match (mm).
     *
     * @param string $value
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.setminimummatch.php
     */
    public function setMinimumMatch(string $value): SolrDisMaxQuery
    {
    }

    /**
     * setPhraseFields.
     * Sets Phrase Fields and their boosts (and slops) using pf2 parameter.
     *
     * @param string $fields
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.setphrasefields.php
     */
    public function setPhraseFields(string $fields): SolrDisMaxQuery
    {
    }

    /**
     * setPhraseSlop.
     * Sets the default slop on phrase queries (ps parameter).
     *
     * @param string $slop
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.setphraseslop.php
     */
    public function setPhraseSlop(string $slop): SolrDisMaxQuery
    {
    }

    /**
     * setQueryAlt.
     * Set Query Alternate (q.alt parameter).
     *
     * @param string $q
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.setqueryalt.php
     */
    public function setQueryAlt(string $q): SolrDisMaxQuery
    {
    }

    /**
     * setQueryPhraseSlop.
     * specifies the amount of slop permitted on phrase queries explicitly included in the user's query string (qf parameter).
     *
     * @param string $slop
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.setqueryphraseslop.php
     */
    public function setQueryPhraseSlop(string $slop): SolrDisMaxQuery
    {
    }

    /**
     * setTieBreaker.
     * Sets Tie Breaker parameter (tie parameter).
     *
     * @param string $tieBreaker
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.settiebreaker.php
     */
    public function setTieBreaker(string $tieBreaker): SolrDisMaxQuery
    {
    }

    /**
     * setTrigramPhraseFields.
     * Directly Sets Trigram Phrase Fields (pf3 parameter).
     *
     * @param string $fields
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.settrigramphrasefields.php
     */
    public function setTrigramPhraseFields(string $fields): SolrDisMaxQuery
    {
    }

    /**
     * setTrigramPhraseSlop.
     * Sets Trigram Phrase Slop (ps3 parameter).
     *
     * @param string $slop
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.settrigramphraseslop.php
     */
    public function setTrigramPhraseSlop(string $slop): SolrDisMaxQuery
    {
    }

    /**
     * setUserFields.
     * Sets User Fields parameter (uf).
     *
     * @param string $fields
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.setuserfields.php
     */
    public function setUserFields(string $fields): SolrDisMaxQuery
    {
    }

    /**
     * useDisMaxQueryParser.
     * Switch QueryParser to be DisMax Query Parser.
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.usedismaxqueryparser.php
     */
    public function useDisMaxQueryParser(): SolrDisMaxQuery
    {
    }

    /**
     * useEDisMaxQueryParser.
     * Switch QueryParser to be EDisMax.
     *
     * @return SolrDisMaxQuery
     *
     * @see http://php.net/manual/en/solrdismaxquery.useedismaxqueryparser.php
     */
    public function useEDisMaxQueryParser(): SolrDisMaxQuery
    {
    }

    /* Inherited methods */
    //public function SolrQuery::addExpandFilterQuery(string $fq): SolrQuery
    //public function SolrQuery::addExpandSortField(string $field, string $order): SolrQuery
    //public function SolrQuery::addFacetDateField(string $dateField): SolrQuery
    //public function SolrQuery::addFacetDateOther(string $value, string $field_override): SolrQuery
    //public function SolrQuery::addFacetField(string $field): SolrQuery
    //public function SolrQuery::addFacetQuery(string $facetQuery): SolrQuery
    //public function SolrQuery::addField(string $field): SolrQuery
    //public function SolrQuery::addFilterQuery(string $fq): SolrQuery
    //public function SolrQuery::addGroupField(string $value): SolrQuery
    //public function SolrQuery::addGroupFunction(string $value): SolrQuery
    //public function SolrQuery::addGroupQuery(string $value): SolrQuery
    //public function SolrQuery::addGroupSortField(string $field, int $order): SolrQuery
    //public function SolrQuery::addHighlightField(string $field): SolrQuery
    //public function SolrQuery::addMltField(string $field): SolrQuery
    //public function SolrQuery::addMltQueryField(string $field, float $boost): SolrQuery
    //public function SolrQuery::addSortField(string $field, int $order = SolrQuery::ORDER_DESC): SolrQuery
    //public function SolrQuery::addStatsFacet(string $field): SolrQuery
    //public function SolrQuery::addStatsField(string $field): SolrQuery
    //public function SolrQuery::collapse(SolrCollapseFunction $collapseFunction): SolrQuery
    //public function SolrQuery::__construct(string $q): void
    //public function SolrQuery::__destruct(): void
    //public function SolrQuery::getExpand(): bool
    //public function SolrQuery::getExpandFilterQueries(): array
    //public function SolrQuery::getExpandQuery(): array
    //public function SolrQuery::getExpandRows(): int
    //public function SolrQuery::getExpandSortFields(): array
    //public function SolrQuery::getFacet(): bool
    //public function SolrQuery::getFacetDateEnd(string $field_override): string
    //public function SolrQuery::getFacetDateFields(): array
    //public function SolrQuery::getFacetDateGap(string $field_override): string
    //public function SolrQuery::getFacetDateHardEnd(string $field_override): string
    //public function SolrQuery::getFacetDateOther(string $field_override): array
    //public function SolrQuery::getFacetDateStart(string $field_override): string
    //public function SolrQuery::getFacetFields(): array
    //public function SolrQuery::getFacetLimit(string $field_override): int
    //public function SolrQuery::getFacetMethod(string $field_override): string
    //public function SolrQuery::getFacetMinCount(string $field_override): int
    //public function SolrQuery::getFacetMissing(string $field_override): bool
    //public function SolrQuery::getFacetOffset(string $field_override): int
    //public function SolrQuery::getFacetPrefix(string $field_override): string
    //public function SolrQuery::getFacetQueries(): array
    //public function SolrQuery::getFacetSort(string $field_override): int
    //public function SolrQuery::getFields(): array
    //public function SolrQuery::getFilterQueries(): array
    //public function SolrQuery::getGroup(): bool
    //public function SolrQuery::getGroupCachePercent(): int
    //public function SolrQuery::getGroupFacet(): bool
    //public function SolrQuery::getGroupFields(): array
    //public function SolrQuery::getGroupFormat(): string
    //public function SolrQuery::getGroupFunctions(): array
    //public function SolrQuery::getGroupLimit(): int
    //public function SolrQuery::getGroupMain(): bool
    //public function SolrQuery::getGroupNGroups(): bool
    //public function SolrQuery::getGroupOffset(): int
    //public function SolrQuery::getGroupQueries(): array
    //public function SolrQuery::getGroupSortFields(): array
    //public function SolrQuery::getGroupTruncate(): bool
    //public function SolrQuery::getHighlight(): bool
    //public function SolrQuery::getHighlightAlternateField(string $field_override): string
    //public function SolrQuery::getHighlightFields(): array
    //public function SolrQuery::getHighlightFormatter(string $field_override): string
    //public function SolrQuery::getHighlightFragmenter(string $field_override): string
    //public function SolrQuery::getHighlightFragsize(string $field_override): int
    //public function SolrQuery::getHighlightHighlightMultiTerm(): bool
    //public function SolrQuery::getHighlightMaxAlternateFieldLength(string $field_override): int
    //public function SolrQuery::getHighlightMaxAnalyzedChars(): int
    //public function SolrQuery::getHighlightMergeContiguous(string $field_override): bool
    //public function SolrQuery::getHighlightRegexMaxAnalyzedChars(): int
    //public function SolrQuery::getHighlightRegexPattern(): string
    //public function SolrQuery::getHighlightRegexSlop(): float
    //public function SolrQuery::getHighlightRequireFieldMatch(): bool
    //public function SolrQuery::getHighlightSimplePost(string $field_override): string
    //public function SolrQuery::getHighlightSimplePre(string $field_override): string
    //public function SolrQuery::getHighlightSnippets(string $field_override): int
    //public function SolrQuery::getHighlightUsePhraseHighlighter(): bool
    //public function SolrQuery::getMlt(): bool
    //public function SolrQuery::getMltBoost(): bool
    //public function SolrQuery::getMltCount(): int
    //public function SolrQuery::getMltFields(): array
    //public function SolrQuery::getMltMaxNumQueryTerms(): int
    //public function SolrQuery::getMltMaxNumTokens(): int
    //public function SolrQuery::getMltMaxWordLength(): int
    //public function SolrQuery::getMltMinDocFrequency(): int
    //public function SolrQuery::getMltMinTermFrequency(): int
    //public function SolrQuery::getMltMinWordLength(): int
    //public function SolrQuery::getMltQueryFields(): array
    //public function SolrQuery::getQuery(): string
    //public function SolrQuery::getRows(): int
    //public function SolrQuery::getSortFields(): array
    //public function SolrQuery::getStart(): int
    //public function SolrQuery::getStats(): bool
    //public function SolrQuery::getStatsFacets(): array
    //public function SolrQuery::getStatsFields(): array
    //public function SolrQuery::getTerms(): bool
    //public function SolrQuery::getTermsField(): string
    //public function SolrQuery::getTermsIncludeLowerBound(): bool
    //public function SolrQuery::getTermsIncludeUpperBound(): bool
    //public function SolrQuery::getTermsLimit(): int
    //public function SolrQuery::getTermsLowerBound(): string
    //public function SolrQuery::getTermsMaxCount(): int
    //public function SolrQuery::getTermsMinCount(): int
    //public function SolrQuery::getTermsPrefix(): string
    //public function SolrQuery::getTermsReturnRaw(): bool
    //public function SolrQuery::getTermsSort(): int
    //public function SolrQuery::getTermsUpperBound(): string
    //public function SolrQuery::getTimeAllowed(): int
    //public function SolrQuery::removeExpandFilterQuery(string $fq): SolrQuery
    //public function SolrQuery::removeExpandSortField(string $field): SolrQuery
    //public function SolrQuery::removeFacetDateField(string $field): SolrQuery
    //public function SolrQuery::removeFacetDateOther(string $value, string $field_override): SolrQuery
    //public function SolrQuery::removeFacetField(string $field): SolrQuery
    //public function SolrQuery::removeFacetQuery(string $value): SolrQuery
    //public function SolrQuery::removeField(string $field): SolrQuery
    //public function SolrQuery::removeFilterQuery(string $fq): SolrQuery
    //public function SolrQuery::removeHighlightField(string $field): SolrQuery
    //public function SolrQuery::removeMltField(string $field): SolrQuery
    //public function SolrQuery::removeMltQueryField(string $queryField): SolrQuery
    //public function SolrQuery::removeSortField(string $field): SolrQuery
    //public function SolrQuery::removeStatsFacet(string $value): SolrQuery
    //public function SolrQuery::removeStatsField(string $field): SolrQuery
    //public function SolrQuery::setEchoHandler(bool $flag): SolrQuery
    //public function SolrQuery::setEchoParams(string $type): SolrQuery
    //public function SolrQuery::setExpand(bool $value): SolrQuery
    //public function SolrQuery::setExpandQuery(string $q): SolrQuery
    //public function SolrQuery::setExpandRows(int $value): SolrQuery
    //public function SolrQuery::setExplainOther(string $query): SolrQuery
    //public function SolrQuery::setFacet(bool $flag): SolrQuery
    //public function SolrQuery::setFacetDateEnd(string $value, string $field_override): SolrQuery
    //public function SolrQuery::setFacetDateGap(string $value, string $field_override): SolrQuery
    //public function SolrQuery::setFacetDateHardEnd(bool $value, string $field_override): SolrQuery
    //public function SolrQuery::setFacetDateStart(string $value, string $field_override): SolrQuery
    //public function SolrQuery::setFacetEnumCacheMinDefaultFrequency(int $frequency, string $field_override): SolrQuery
    //public function SolrQuery::setFacetLimit(int $limit, string $field_override): SolrQuery
    //public function SolrQuery::setFacetMethod(string $method, string $field_override): SolrQuery
    //public function SolrQuery::setFacetMinCount(int $mincount, string $field_override): SolrQuery
    //public function SolrQuery::setFacetMissing(bool $flag, string $field_override): SolrQuery
    //public function SolrQuery::setFacetOffset(int $offset, string $field_override): SolrQuery
    //public function SolrQuery::setFacetPrefix(string $prefix, string $field_override): SolrQuery
    //public function SolrQuery::setFacetSort(int $facetSort, string $field_override): SolrQuery
    //public function SolrQuery::setGroup(bool $value): SolrQuery
    //public function SolrQuery::setGroupCachePercent(int $percent): SolrQuery
    //public function SolrQuery::setGroupFacet(bool $value): SolrQuery
    //public function SolrQuery::setGroupFormat(string $value): SolrQuery
    //public function SolrQuery::setGroupLimit(int $value): SolrQuery
    //public function SolrQuery::setGroupMain(string $value): SolrQuery
    //public function SolrQuery::setGroupNGroups(bool $value): SolrQuery
    //public function SolrQuery::setGroupOffset(int $value): SolrQuery
    //public function SolrQuery::setGroupTruncate(bool $value): SolrQuery
    //public function SolrQuery::setHighlight(bool $flag): SolrQuery
    //public function SolrQuery::setHighlightAlternateField(string $field, string $field_override): SolrQuery
    //public function SolrQuery::setHighlightFormatter(string $formatter, string $field_override): SolrQuery
    //public function SolrQuery::setHighlightFragmenter(string $fragmenter, string $field_override): SolrQuery
    //public function SolrQuery::setHighlightFragsize(int $size, string $field_override): SolrQuery
    //public function SolrQuery::setHighlightHighlightMultiTerm(bool $flag): SolrQuery
    //public function SolrQuery::setHighlightMaxAlternateFieldLength(int $fieldLength, string $field_override): SolrQuery
    //public function SolrQuery::setHighlightMaxAnalyzedChars(int $value): SolrQuery
    //public function SolrQuery::setHighlightMergeContiguous(bool $flag, string $field_override): SolrQuery
    //public function SolrQuery::setHighlightRegexMaxAnalyzedChars(int $maxAnalyzedChars): SolrQuery
    //public function SolrQuery::setHighlightRegexPattern(string $value): SolrQuery
    //public function SolrQuery::setHighlightRegexSlop(float $factor): SolrQuery
    //public function SolrQuery::setHighlightRequireFieldMatch(bool $flag): SolrQuery
    //public function SolrQuery::setHighlightSimplePost(string $simplePost, string $field_override): SolrQuery
    //public function SolrQuery::setHighlightSimplePre(string $simplePre, string $field_override): SolrQuery
    //public function SolrQuery::setHighlightSnippets(int $value, string $field_override): SolrQuery
    //public function SolrQuery::setHighlightUsePhraseHighlighter(bool $flag): SolrQuery
    //public function SolrQuery::setMlt(bool $flag): SolrQuery
    //public function SolrQuery::setMltBoost(bool $flag): SolrQuery
    //public function SolrQuery::setMltCount(int $count): SolrQuery
    //public function SolrQuery::setMltMaxNumQueryTerms(int $value): SolrQuery
    //public function SolrQuery::setMltMaxNumTokens(int $value): SolrQuery
    //public function SolrQuery::setMltMaxWordLength(int $maxWordLength): SolrQuery
    //public function SolrQuery::setMltMinDocFrequency(int $minDocFrequency): SolrQuery
    //public function SolrQuery::setMltMinTermFrequency(int $minTermFrequency): SolrQuery
    //public function SolrQuery::setMltMinWordLength(int $minWordLength): SolrQuery
    //public function SolrQuery::setOmitHeader(bool $flag): SolrQuery
    //public function SolrQuery::setQuery(string $query): SolrQuery
    //public function SolrQuery::setRows(int $rows): SolrQuery
    //public function SolrQuery::setShowDebugInfo(bool $flag): SolrQuery
    //public function SolrQuery::setStart(int $start): SolrQuery
    //public function SolrQuery::setStats(bool $flag): SolrQuery
    //public function SolrQuery::setTerms(bool $flag): SolrQuery
    //public function SolrQuery::setTermsField(string $fieldname): SolrQuery
    //public function SolrQuery::setTermsIncludeLowerBound(bool $flag): SolrQuery
    //public function SolrQuery::setTermsIncludeUpperBound(bool $flag): SolrQuery
    //public function SolrQuery::setTermsLimit(int $limit): SolrQuery
    //public function SolrQuery::setTermsLowerBound(string $lowerBound): SolrQuery
    //public function SolrQuery::setTermsMaxCount(int $frequency): SolrQuery
    //public function SolrQuery::setTermsMinCount(int $frequency): SolrQuery
    //public function SolrQuery::setTermsPrefix(string $prefix): SolrQuery
    //public function SolrQuery::setTermsReturnRaw(bool $flag): SolrQuery
    //public function SolrQuery::setTermsSort(int $sortType): SolrQuery
    //public function SolrQuery::setTermsUpperBound(string $upperBound): SolrQuery
    //public function SolrQuery::setTimeAllowed(int $timeAllowed): SolrQuery
}
