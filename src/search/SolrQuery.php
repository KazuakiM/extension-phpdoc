<?php

/**
 * SolrQuery.
 * Represents a collection of name-value pairs sent to the Solr server during a request.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrquery.php
 */
class SolrQuery extends SolrModifiableParams implements Serializable
{
    const ORDER_ASC = 0;
    const ORDER_DESC = 1;
    const FACET_SORT_INDEX = 0;
    const FACET_SORT_COUNT = 1;
    const TERMS_SORT_INDEX = 0;
    const TERMS_SORT_COUNT = 1;

    /**
     * __construct.
     * Constructor.
     *
     * @param string $q (optional)
     *
     * @throws SolrIllegalArgumentException
     *
     * @see http://php.net/manual/en/solrquery.construct.php
     */
    public function __construct(string $q)
    {
    }

    /**
     * __destruct.
     * Destructor.
     *
     * @see http://php.net/manual/en/solrquery.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * addExpandFilterQuery.
     * Overrides main filter query, determines which documents to include in the main group.
     *
     * @param string $fq
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addexpandfilterquery.php
     */
    public function addExpandFilterQuery(string $fq): SolrQuery
    {
    }

    /**
     * addExpandSortField.
     * Orders the documents within the expanded groups (expand.sort parameter).
     *
     * @param string $field
     * @param string $order (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addexpandsortfield.php
     */
    public function addExpandSortField(string $field, string $order): SolrQuery
    {
    }

    /**
     * addFacetDateField.
     * Maps to facet.date.
     *
     * @param string $dateField
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addfacetdatefield.php
     */
    public function addFacetDateField(string $dateField): SolrQuery
    {
    }

    /**
     * addFacetDateOther.
     * Adds another facet.date.other parameter.
     *
     * @param string $value
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addfacetdateother.php
     */
    public function addFacetDateOther(string $value, string $field_override): SolrQuery
    {
    }

    /**
     * addFacetField.
     * Adds another field to the facet.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addfacetfield.php
     */
    public function addFacetField(string $field): SolrQuery
    {
    }

    /**
     * addFacetQuery.
     * Adds a facet query.
     *
     * @param string $facetQuery
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addfacetquery.php
     */
    public function addFacetQuery(string $facetQuery): SolrQuery
    {
    }

    /**
     * addField.
     * Specifies which fields to return in the result.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addfield.php
     */
    public function addField(string $field): SolrQuery
    {
    }

    /**
     * addFilterQuery.
     * Specifies a filter query.
     *
     * @param string $fq
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addfilterquery.php
     */
    public function addFilterQuery(string $fq): SolrQuery
    {
    }

    /**
     * addGroupField.
     * Add a field to be used to group results.
     *
     * @param string $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addgroupfield.php
     */
    public function addGroupField(string $value): SolrQuery
    {
    }

    /**
     * addGroupFunction.
     * Allows grouping results based on the unique values of a function query (group.func parameter).
     *
     * @param string $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addgroupfunction.php
     */
    public function addGroupFunction(string $value): SolrQuery
    {
    }

    /**
     * addGroupQuery.
     * Allows grouping of documents that match the given query.
     *
     * @param string $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addgroupquery.php
     */
    public function addGroupQuery(string $value): SolrQuery
    {
    }

    /**
     * addGroupSortField.
     * Add a group sort field (group.sort parameter).
     *
     * @param string $field
     * @param int    $order (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addgroupsortfield.php
     */
    public function addGroupSortField(string $field, int $order): SolrQuery
    {
    }

    /**
     * addHighlightField.
     * Maps to hl.fl.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addhighlightfield.php
     */
    public function addHighlightField(string $field): SolrQuery
    {
    }

    /**
     * addMltField.
     * Sets a field to use for similarity.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addmltfield.php
     */
    public function addMltField(string $field): SolrQuery
    {
    }

    /**
     * addMltQueryField.
     * Maps to mlt.qf.
     *
     * @param string $field
     * @param float  $boost
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addmltqueryfield.php
     */
    public function addMltQueryField(string $field, float $boost): SolrQuery
    {
    }

    /**
     * addSortField.
     * Used to control how the results should be sorted.
     *
     * @param string $field
     * @param int    $order = SolrQuery::ORDER_DESC
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addsortfield.php
     */
    public function addSortField(string $field, int $order = self::ORDER_DESC): SolrQuery
    {
    }

    /**
     * addStatsFacet.
     * Requests a return of sub results for values within the given facet.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addstatsfacet.php
     */
    public function addStatsFacet(string $field): SolrQuery
    {
    }

    /**
     * addStatsField.
     * Maps to stats.field parameter.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.addstatsfield.php
     */
    public function addStatsField(string $field): SolrQuery
    {
    }

    /**
     * collapse.
     * Collapses the result set to a single document per group.
     *
     * @param SolrCollapseFunction $collapseFunction
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.collapse.php
     */
    public function collapse(SolrCollapseFunction $collapseFunction): SolrQuery
    {
    }

    /**
     * getExpand.
     * Returns true if group expanding is enabled.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.getexpand.php
     */
    public function getExpand(): bool
    {
    }

    /**
     * getExpandFilterQueries.
     * Returns the expand filter queries.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getexpandfilterqueries.php
     */
    public function getExpandFilterQueries(): array
    {
    }

    /**
     * getExpandQuery.
     * Returns the expand query expand.q parameter.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getexpandquery.php
     */
    public function getExpandQuery(): array
    {
    }

    /**
     * getExpandRows.
     * Returns The number of rows to display in each group (expand.rows).
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getexpandrows.php
     */
    public function getExpandRows(): int
    {
    }

    /**
     * getExpandSortFields.
     * Returns an array of fields.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getexpandsortfields.php
     */
    public function getExpandSortFields(): array
    {
    }

    /**
     * getFacet.
     * Returns the value of the facet parameter.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.getfacet.php
     */
    public function getFacet(): bool
    {
    }

    /**
     * getFacetDateEnd.
     * Returns the value for the facet.date.end parameter.
     *
     * @param string $field_override (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.getfacetdateend.php
     */
    public function getFacetDateEnd(string $field_override): string
    {
    }

    /**
     * getFacetDateFields.
     * Returns all the facet.date fields.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getfacetdatefields.php
     */
    public function getFacetDateFields(): array
    {
    }

    /**
     * getFacetDateGap.
     * Returns the value of the facet.date.gap parameter.
     *
     * @param string $field_override (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.getfacetdategap.php
     */
    public function getFacetDateGap(string $field_override): string
    {
    }

    /**
     * getFacetDateHardEnd.
     * Returns the value of the facet.date.hardend parameter.
     *
     * @param string $field_override (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.getfacetdatehardend.php
     */
    public function getFacetDateHardEnd(string $field_override): string
    {
    }

    /**
     * getFacetDateOther.
     * Returns the value for the facet.date.other parameter.
     *
     * @param string $field_override (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getfacetdateother.php
     */
    public function getFacetDateOther(string $field_override): array
    {
    }

    /**
     * getFacetDateStart.
     * Returns the lower bound for the first date range for all date faceting on this field.
     *
     * @param string $field_override (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.getfacetdatestart.php
     */
    public function getFacetDateStart(string $field_override): string
    {
    }

    /**
     * getFacetFields.
     * Returns all the facet fields.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getfacetfields.php
     */
    public function getFacetFields(): array
    {
    }

    /**
     * getFacetLimit.
     * Returns the maximum number of constraint counts that should be returned for the facet fields.
     *
     * @param string $field_override (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getfacetlimit.php
     */
    public function getFacetLimit(string $field_override): int
    {
    }

    /**
     * getFacetMethod.
     * Returns the value of the facet.method parameter.
     *
     * @param string $field_override (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.getfacetmethod.php
     */
    public function getFacetMethod(string $field_override): string
    {
    }

    /**
     * getFacetMinCount.
     * Returns the minimum counts for facet fields should be included in the response.
     *
     * @param string $field_override (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getfacetmincount.php
     */
    public function getFacetMinCount(string $field_override): int
    {
    }

    /**
     * getFacetMissing.
     * Returns the current state of the facet.missing parameter.
     *
     * @param string $field_override (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.getfacetmissing.php
     */
    public function getFacetMissing(string $field_override): bool
    {
    }

    /**
     * getFacetOffset.
     * Returns an offset into the list of constraints to be used for pagination.
     *
     * @param string $field_override (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getfacetoffset.php
     */
    public function getFacetOffset(string $field_override): int
    {
    }

    /**
     * getFacetPrefix.
     * Returns the facet prefix.
     *
     * @param string $field_override (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.getfacetprefix.php
     */
    public function getFacetPrefix(string $field_override): string
    {
    }

    /**
     * getFacetQueries.
     * Returns all the facet queries.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getfacetqueries.php
     */
    public function getFacetQueries(): array
    {
    }

    /**
     * getFacetSort.
     * Returns the facet sort type.
     *
     * @param string $field_override (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getfacetsort.php
     */
    public function getFacetSort(string $field_override): int
    {
    }

    /**
     * getFields.
     * Returns the list of fields that will be returned in the response.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getfields.php
     */
    public function getFields(): array
    {
    }

    /**
     * getFilterQueries.
     * Returns an array of filter queries.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getfilterqueries.php
     */
    public function getFilterQueries(): array
    {
    }

    /**
     * getGroup.
     * Returns true if grouping is enabled.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.getgroup.php
     */
    public function getGroup(): bool
    {
    }

    /**
     * getGroupCachePercent.
     * Returns group cache percent value.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getgroupcachepercent.php
     */
    public function getGroupCachePercent(): int
    {
    }

    /**
     * getGroupFacet.
     * Returns the group.facet parameter value.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.getgroupfacet.php
     */
    public function getGroupFacet(): bool
    {
    }

    /**
     * getGroupFields.
     * Returns group fields (group.field parameter values).
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getgroupfields.php
     */
    public function getGroupFields(): array
    {
    }

    /**
     * getGroupFormat.
     * Returns the group.format value.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.getgroupformat.php
     */
    public function getGroupFormat(): string
    {
    }

    /**
     * getGroupFunctions.
     * Returns group functions (group.func parameter values).
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getgroupfunctions.php
     */
    public function getGroupFunctions(): array
    {
    }

    /**
     * getGroupLimit.
     * Returns the group.limit value.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getgrouplimit.php
     */
    public function getGroupLimit(): int
    {
    }

    /**
     * getGroupMain.
     * Returns the group.main value.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.getgroupmain.php
     */
    public function getGroupMain(): bool
    {
    }

    /**
     * getGroupNGroups.
     * Returns the group.ngroups value.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.getgroupngroups.php
     */
    public function getGroupNGroups(): bool
    {
    }

    /**
     * getGroupOffset.
     * Returns the group.offset value.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getgroupoffset.php
     */
    public function getGroupOffset(): int
    {
    }

    /**
     * getGroupQueries.
     * Returns all the group.query parameter values.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getgroupqueries.php
     */
    public function getGroupQueries(): array
    {
    }

    /**
     * getGroupSortFields.
     * Returns the group.sort value.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getgroupsortfields.php
     */
    public function getGroupSortFields(): array
    {
    }

    /**
     * getGroupTruncate.
     * Returns the group.truncate value.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.getgrouptruncate.php
     */
    public function getGroupTruncate(): bool
    {
    }

    /**
     * getHighlight.
     * Returns the state of the hl parameter.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.gethighlight.php
     */
    public function getHighlight(): bool
    {
    }

    /**
     * getHighlightAlternateField.
     * Returns the highlight field to use as backup or default.
     *
     * @param string $field_override (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.gethighlightalternatefield.php
     */
    public function getHighlightAlternateField(string $field_override): string
    {
    }

    /**
     * getHighlightFields.
     * Returns all the fields that Solr should generate highlighted snippets for.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.gethighlightfields.php
     */
    public function getHighlightFields(): array
    {
    }

    /**
     * getHighlightFormatter.
     * Returns the formatter for the highlighted output.
     *
     * @param string $field_override (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.gethighlightformatter.php
     */
    public function getHighlightFormatter(string $field_override): string
    {
    }

    /**
     * getHighlightFragmenter.
     * Returns the text snippet generator for highlighted text.
     *
     * @param string $field_override (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.gethighlightfragmenter.php
     */
    public function getHighlightFragmenter(string $field_override): string
    {
    }

    /**
     * getHighlightFragsize.
     * Returns the number of characters of fragments to consider for highlighting.
     *
     * @param string $field_override (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.gethighlightfragsize.php
     */
    public function getHighlightFragsize(string $field_override): int
    {
    }

    /**
     * getHighlightHighlightMultiTerm.
     * Returns whether or not to enable highlighting for range/wildcard/fuzzy/prefix queries.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.gethighlighthighlightmultiterm.php
     */
    public function getHighlightHighlightMultiTerm(): bool
    {
    }

    /**
     * getHighlightMaxAlternateFieldLength.
     * Returns the maximum number of characters of the field to return.
     *
     * @param string $field_override (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.gethighlightmaxalternatefieldlength.php
     */
    public function getHighlightMaxAlternateFieldLength(string $field_override): int
    {
    }

    /**
     * getHighlightMaxAnalyzedChars.
     * Returns the maximum number of characters into a document to look for suitable snippets.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.gethighlightmaxanalyzedchars.php
     */
    public function getHighlightMaxAnalyzedChars(): int
    {
    }

    /**
     * getHighlightMergeContiguous.
     * Returns whether or not the collapse contiguous fragments into a single fragment.
     *
     * @param string $field_override (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.gethighlightmergecontiguous.php
     */
    public function getHighlightMergeContiguous(string $field_override): bool
    {
    }

    /**
     * getHighlightRegexMaxAnalyzedChars.
     * Returns the maximum number of characters from a field when using the regex fragmenter.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.gethighlightregexmaxanalyzedchars.php
     */
    public function getHighlightRegexMaxAnalyzedChars(): int
    {
    }

    /**
     * getHighlightRegexPattern.
     * Returns the regular expression for fragmenting.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.gethighlightregexpattern.php
     */
    public function getHighlightRegexPattern(): string
    {
    }

    /**
     * getHighlightRegexSlop.
     * Returns the deviation factor from the ideal fragment size.
     *
     * @return float
     *
     * @see http://php.net/manual/en/solrquery.gethighlightregexslop.php
     */
    public function getHighlightRegexSlop(): float
    {
    }

    /**
     * getHighlightRequireFieldMatch.
     * Returns if a field will only be highlighted if the query matched in this particular field.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.gethighlightrequirefieldmatch.php
     */
    public function getHighlightRequireFieldMatch(): bool
    {
    }

    /**
     * getHighlightSimplePost.
     * Returns the text which appears after a highlighted term.
     *
     * @param string $field_override (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.gethighlightsimplepost.php
     */
    public function getHighlightSimplePost(string $field_override): string
    {
    }

    /**
     * getHighlightSimplePre.
     * Returns the text which appears before a highlighted term.
     *
     * @param string $field_override (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.gethighlightsimplepre.php
     */
    public function getHighlightSimplePre(string $field_override): string
    {
    }

    /**
     * getHighlightSnippets.
     * Returns the maximum number of highlighted snippets to generate per field.
     *
     * @param string $field_override (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.gethighlightsnippets.php
     */
    public function getHighlightSnippets(string $field_override): int
    {
    }

    /**
     * getHighlightUsePhraseHighlighter.
     * Returns the state of the hl.usePhraseHighlighter parameter.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.gethighlightusephrasehighlighter.php
     */
    public function getHighlightUsePhraseHighlighter(): bool
    {
    }

    /**
     * getMlt.
     * Returns whether or not MoreLikeThis results should be enabled.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.getmlt.php
     */
    public function getMlt(): bool
    {
    }

    /**
     * getMltBoost.
     * Returns whether or not the query will be boosted by the interesting term relevance.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.getmltboost.php
     */
    public function getMltBoost(): bool
    {
    }

    /**
     * getMltCount.
     * Returns the number of similar documents to return for each result.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getmltcount.php
     */
    public function getMltCount(): int
    {
    }

    /**
     * getMltFields.
     * Returns all the fields to use for similarity.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getmltfields.php
     */
    public function getMltFields(): array
    {
    }

    /**
     * getMltMaxNumQueryTerms.
     * Returns the maximum number of query terms that will be included in any generated query.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getmltmaxnumqueryterms.php
     */
    public function getMltMaxNumQueryTerms(): int
    {
    }

    /**
     * getMltMaxNumTokens.
     * Returns the maximum number of tokens to parse in each document field that is not stored with TermVector support.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getmltmaxnumtokens.php
     */
    public function getMltMaxNumTokens(): int
    {
    }

    /**
     * getMltMaxWordLength.
     * Returns the maximum word length above which words will be ignored.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getmltmaxwordlength.php
     */
    public function getMltMaxWordLength(): int
    {
    }

    /**
     * getMltMinDocFrequency.
     * Returns the treshold frequency at which words will be ignored which do not occur in at least this many docs.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getmltmindocfrequency.php
     */
    public function getMltMinDocFrequency(): int
    {
    }

    /**
     * getMltMinTermFrequency.
     * Returns the frequency below which terms will be ignored in the source document.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getmltmintermfrequency.php
     */
    public function getMltMinTermFrequency(): int
    {
    }

    /**
     * getMltMinWordLength.
     * Returns the minimum word length below which words will be ignored.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getmltminwordlength.php
     */
    public function getMltMinWordLength(): int
    {
    }

    /**
     * getMltQueryFields.
     * Returns the query fields and their boosts.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getmltqueryfields.php
     */
    public function getMltQueryFields(): array
    {
    }

    /**
     * getQuery.
     * Returns the main query.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.getquery.php
     */
    public function getQuery(): string
    {
    }

    /**
     * getRows.
     * Returns the maximum number of documents.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getrows.php
     */
    public function getRows(): int
    {
    }

    /**
     * getSortFields.
     * Returns all the sort fields.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getsortfields.php
     */
    public function getSortFields(): array
    {
    }

    /**
     * getStart.
     * Returns the offset in the complete result set.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.getstart.php
     */
    public function getStart(): int
    {
    }

    /**
     * getStats.
     * Returns whether or not stats is enabled.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.getstats.php
     */
    public function getStats(): bool
    {
    }

    /**
     * getStatsFacets.
     * Returns all the stats facets that were set.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getstatsfacets.php
     */
    public function getStatsFacets(): array
    {
    }

    /**
     * getStatsFields.
     * Returns all the statistics fields.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrquery.getstatsfields.php
     */
    public function getStatsFields(): array
    {
    }

    /**
     * getTerms.
     * Returns whether or not the TermsComponent is enabled.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.getterms.php
     */
    public function getTerms(): bool
    {
    }

    /**
     * getTermsField.
     * Returns the field from which the terms are retrieved.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.gettermsfield.php
     */
    public function getTermsField(): string
    {
    }

    /**
     * getTermsIncludeLowerBound.
     * Returns whether or not to include the lower bound in the result set.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.gettermsincludelowerbound.php
     */
    public function getTermsIncludeLowerBound(): bool
    {
    }

    /**
     * getTermsIncludeUpperBound.
     * Returns whether or not to include the upper bound term in the result set.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.gettermsincludeupperbound.php
     */
    public function getTermsIncludeUpperBound(): bool
    {
    }

    /**
     * getTermsLimit.
     * Returns the maximum number of terms Solr should return.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.gettermslimit.php
     */
    public function getTermsLimit(): int
    {
    }

    /**
     * getTermsLowerBound.
     * Returns the term to start at.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.gettermslowerbound.php
     */
    public function getTermsLowerBound(): string
    {
    }

    /**
     * getTermsMaxCount.
     * Returns the maximum document frequency.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.gettermsmaxcount.php
     */
    public function getTermsMaxCount(): int
    {
    }

    /**
     * getTermsMinCount.
     * Returns the minimum document frequency to return in order to be included.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.gettermsmincount.php
     */
    public function getTermsMinCount(): int
    {
    }

    /**
     * getTermsPrefix.
     * Returns the term prefix.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.gettermsprefix.php
     */
    public function getTermsPrefix(): string
    {
    }

    /**
     * getTermsReturnRaw.
     * Whether or not to return raw characters.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrquery.gettermsreturnraw.php
     */
    public function getTermsReturnRaw(): bool
    {
    }

    /**
     * getTermsSort.
     * Returns an integer indicating how terms are sorted.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.gettermssort.php
     */
    public function getTermsSort(): int
    {
    }

    /**
     * getTermsUpperBound.
     * Returns the term to stop at.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrquery.gettermsupperbound.php
     */
    public function getTermsUpperBound(): string
    {
    }

    /**
     * getTimeAllowed.
     * Returns the time in milliseconds allowed for the query to finish.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrquery.gettimeallowed.php
     */
    public function getTimeAllowed(): int
    {
    }

    /**
     * removeExpandFilterQuery.
     * Removes an expand filter query.
     *
     * @param string $fq
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removeexpandfilterquery.php
     */
    public function removeExpandFilterQuery(string $fq): SolrQuery
    {
    }

    /**
     * removeExpandSortField.
     * Removes an expand sort field from the expand.sort parameter.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removeexpandsortfield.php
     */
    public function removeExpandSortField(string $field): SolrQuery
    {
    }

    /**
     * removeFacetDateField.
     * Removes one of the facet date fields.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removefacetdatefield.php
     */
    public function removeFacetDateField(string $field): SolrQuery
    {
    }

    /**
     * removeFacetDateOther.
     * Removes one of the facet.date.other parameters.
     *
     * @param string $value
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removefacetdateother.php
     */
    public function removeFacetDateOther(string $value, string $field_override): SolrQuery
    {
    }

    /**
     * removeFacetField.
     * Removes one of the facet.date parameters.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removefacetfield.php
     */
    public function removeFacetField(string $field): SolrQuery
    {
    }

    /**
     * removeFacetQuery.
     * Removes one of the facet.query parameters.
     *
     * @param string $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removefacetquery.php
     */
    public function removeFacetQuery(string $value): SolrQuery
    {
    }

    /**
     * removeField.
     * Removes a field from the list of fields.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removefield.php
     */
    public function removeField(string $field): SolrQuery
    {
    }

    /**
     * removeFilterQuery.
     * Removes a filter query.
     *
     * @param string $fq
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removefilterquery.php
     */
    public function removeFilterQuery(string $fq): SolrQuery
    {
    }

    /**
     * removeHighlightField.
     * Removes one of the fields used for highlighting.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removehighlightfield.php
     */
    public function removeHighlightField(string $field): SolrQuery
    {
    }

    /**
     * removeMltField.
     * Removes one of the moreLikeThis fields.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removemltfield.php
     */
    public function removeMltField(string $field): SolrQuery
    {
    }

    /**
     * removeMltQueryField.
     * Removes one of the moreLikeThis query fields.
     *
     * @param string $queryField
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removemltqueryfield.php
     */
    public function removeMltQueryField(string $queryField): SolrQuery
    {
    }

    /**
     * removeSortField.
     * Removes one of the sort fields.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removesortfield.php
     */
    public function removeSortField(string $field): SolrQuery
    {
    }

    /**
     * removeStatsFacet.
     * Removes one of the stats.facet parameters.
     *
     * @param string $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removestatsfacet.php
     */
    public function removeStatsFacet(string $value): SolrQuery
    {
    }

    /**
     * removeStatsField.
     * Removes one of the stats.field parameters.
     *
     * @param string $field
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.removestatsfield.php
     */
    public function removeStatsField(string $field): SolrQuery
    {
    }

    /**
     * setEchoHandler.
     * Toggles the echoHandler parameter.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setechohandler.php
     */
    public function setEchoHandler(bool $flag): SolrQuery
    {
    }

    /**
     * setEchoParams.
     * Determines what kind of parameters to include in the response.
     *
     * @param string $type
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setechoparams.php
     */
    public function setEchoParams(string $type): SolrQuery
    {
    }

    /**
     * setExpand.
     * Enables/Disables the Expand Component.
     *
     * @param bool $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setexpand.php
     */
    public function setExpand(bool $value): SolrQuery
    {
    }

    /**
     * setExpandQuery.
     * Sets the expand.q parameter.
     *
     * @param string $q
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setexpandquery.php
     */
    public function setExpandQuery(string $q): SolrQuery
    {
    }

    /**
     * setExpandRows.
     * Sets the number of rows to display in each group (expand.rows). Server Default 5.
     *
     * @param int $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setexpandrows.php
     */
    public function setExpandRows(int $value): SolrQuery
    {
    }

    /**
     * setExplainOther.
     * Sets the explainOther common query parameter.
     *
     * @param string $query
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setexplainother.php
     */
    public function setExplainOther(string $query): SolrQuery
    {
    }

    /**
     * setFacet.
     * Maps to the facet parameter. Enables or disables facetting.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacet.php
     */
    public function setFacet(bool $flag): SolrQuery
    {
    }

    /**
     * setFacetDateEnd.
     * Maps to facet.date.end.
     *
     * @param string $value
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacetdateend.php
     */
    public function setFacetDateEnd(string $value, string $field_override): SolrQuery
    {
    }

    /**
     * setFacetDateGap.
     * Maps to facet.date.gap.
     *
     * @param string $value
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacetdategap.php
     */
    public function setFacetDateGap(string $value, string $field_override): SolrQuery
    {
    }

    /**
     * setFacetDateHardEnd.
     * Maps to facet.date.hardend.
     *
     * @param bool   $value
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacetdatehardend.php
     */
    public function setFacetDateHardEnd(bool $value, string $field_override): SolrQuery
    {
    }

    /**
     * setFacetDateStart.
     * Maps to facet.date.start.
     *
     * @param string $value
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacetdatestart.php
     */
    public function setFacetDateStart(string $value, string $field_override): SolrQuery
    {
    }

    /**
     * setFacetEnumCacheMinDefaultFrequency.
     * Sets the minimum document frequency used for determining term count.
     *
     * @param int    $frequency
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacetenumcachemindefaultfrequency.php
     */
    public function setFacetEnumCacheMinDefaultFrequency(int $frequency, string $field_override): SolrQuery
    {
    }

    /**
     * setFacetLimit.
     * Maps to facet.limit.
     *
     * @param int    $limit
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacetlimit.php
     */
    public function setFacetLimit(int $limit, string $field_override): SolrQuery
    {
    }

    /**
     * setFacetMethod.
     * Specifies the type of algorithm to use when faceting a field.
     *
     * @param string $method
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacetmethod.php
     */
    public function setFacetMethod(string $method, string $field_override): SolrQuery
    {
    }

    /**
     * setFacetMinCount.
     * Maps to facet.mincount.
     *
     * @param int    $mincount
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacetmincount.php
     */
    public function setFacetMinCount(int $mincount, string $field_override): SolrQuery
    {
    }

    /**
     * setFacetMissing.
     * Maps to facet.missing.
     *
     * @param bool   $flag
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacetmissing.php
     */
    public function setFacetMissing(bool $flag, string $field_override): SolrQuery
    {
    }

    /**
     * setFacetOffset.
     * Sets the offset into the list of constraints to allow for pagination.
     *
     * @param int    $offset
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacetoffset.php
     */
    public function setFacetOffset(int $offset, string $field_override): SolrQuery
    {
    }

    /**
     * setFacetPrefix.
     * Specifies a string prefix with which to limits the terms on which to facet.
     *
     * @param string $prefix
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacetprefix.php
     */
    public function setFacetPrefix(string $prefix, string $field_override): SolrQuery
    {
    }

    /**
     * setFacetSort.
     * Determines the ordering of the facet field constraints.
     *
     * @param int    $facetSort
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setfacetsort.php
     */
    public function setFacetSort(int $facetSort, string $field_override): SolrQuery
    {
    }

    /**
     * setGroup.
     * Enable/Disable result grouping (group parameter).
     *
     * @param bool $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setgroup.php
     */
    public function setGroup(bool $value): SolrQuery
    {
    }

    /**
     * setGroupCachePercent.
     * Enables caching for result grouping.
     *
     * @param int $percent
     *
     * @throws SolrIllegalArgumentException
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setgroupcachepercent.php
     */
    public function setGroupCachePercent(int $percent): SolrQuery
    {
    }

    /**
     * setGroupFacet.
     * Sets group.facet parameter.
     *
     * @param bool $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setgroupfacet.php
     */
    public function setGroupFacet(bool $value): SolrQuery
    {
    }

    /**
     * setGroupFormat.
     * Sets the group format, result structure (group.format parameter).
     *
     * @param string $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setgroupformat.php
     */
    public function setGroupFormat(string $value): SolrQuery
    {
    }

    /**
     * setGroupLimit.
     * Specifies the number of results to return for each group. The server default value is 1.
     *
     * @param int $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setgrouplimit.php
     */
    public function setGroupLimit(int $value): SolrQuery
    {
    }

    /**
     * setGroupMain.
     * If true, the result of the first field grouping command is used as the main result list in the response, using group.format=simple.
     *
     * @param string $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setgroupmain.php
     */
    public function setGroupMain(string $value): SolrQuery
    {
    }

    /**
     * setGroupNGroups.
     * If true, Solr includes the number of groups that have matched the query in the results.
     *
     * @param bool $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setgroupngroups.php
     */
    public function setGroupNGroups(bool $value): SolrQuery
    {
    }

    /**
     * setGroupOffset.
     * Sets the group.offset parameter.
     *
     * @param int $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setgroupoffset.php
     */
    public function setGroupOffset(int $value): SolrQuery
    {
    }

    /**
     * setGroupTruncate.
     * If true, facet counts are based on the most relevant document of each group matching the query.
     *
     * @param bool $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setgrouptruncate.php
     */
    public function setGroupTruncate(bool $value): SolrQuery
    {
    }

    /**
     * setHighlight.
     * Enables or disables highlighting.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlight.php
     */
    public function setHighlight(bool $flag): SolrQuery
    {
    }

    /**
     * setHighlightAlternateField.
     * Specifies the backup field to use.
     *
     * @param string $field
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightalternatefield.php
     */
    public function setHighlightAlternateField(string $field, string $field_override): SolrQuery
    {
    }

    /**
     * setHighlightFormatter.
     * Specify a formatter for the highlight output.
     *
     * @param string $formatter
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightformatter.php
     */
    public function setHighlightFormatter(string $formatter, string $field_override): SolrQuery
    {
    }

    /**
     * setHighlightFragmenter.
     * Sets a text snippet generator for highlighted text.
     *
     * @param string $fragmenter
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightfragmenter.php
     */
    public function setHighlightFragmenter(string $fragmenter, string $field_override): SolrQuery
    {
    }

    /**
     * setHighlightFragsize.
     * The size of fragments to consider for highlighting.
     *
     * @param int    $size
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightfragsize.php
     */
    public function setHighlightFragsize(int $size, string $field_override): SolrQuery
    {
    }

    /**
     * setHighlightHighlightMultiTerm.
     * Use SpanScorer to highlight phrase terms.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlighthighlightmultiterm.php
     */
    public function setHighlightHighlightMultiTerm(bool $flag): SolrQuery
    {
    }

    /**
     * setHighlightMaxAlternateFieldLength.
     * Sets the maximum number of characters of the field to return.
     *
     * @param int    $fieldLength
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightmaxalternatefieldlength.php
     */
    public function setHighlightMaxAlternateFieldLength(int $fieldLength, string $field_override): SolrQuery
    {
    }

    /**
     * setHighlightMaxAnalyzedChars.
     * Specifies the number of characters into a document to look for suitable snippets.
     *
     * @param int $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightmaxanalyzedchars.php
     */
    public function setHighlightMaxAnalyzedChars(int $value): SolrQuery
    {
    }

    /**
     * setHighlightMergeContiguous.
     * Whether or not to collapse contiguous fragments into a single fragment.
     *
     * @param bool   $flag
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightmergecontiguous.php
     */
    public function setHighlightMergeContiguous(bool $flag, string $field_override): SolrQuery
    {
    }

    /**
     * setHighlightRegexMaxAnalyzedChars.
     * Specify the maximum number of characters to analyze.
     *
     * @param int $maxAnalyzedChars
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightregexmaxanalyzedchars.php
     */
    public function setHighlightRegexMaxAnalyzedChars(int $maxAnalyzedChars): SolrQuery
    {
    }

    /**
     * setHighlightRegexPattern.
     * Specify the regular expression for fragmenting.
     *
     * @param string $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightregexpattern.php
     */
    public function setHighlightRegexPattern(string $value): SolrQuery
    {
    }

    /**
     * setHighlightRegexSlop.
     * Sets the factor by which the regex fragmenter can stray from the ideal fragment size.
     *
     * @param float $factor
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightregexslop.php
     */
    public function setHighlightRegexSlop(float $factor): SolrQuery
    {
    }

    /**
     * setHighlightRequireFieldMatch.
     * Require field matching during highlighting.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightrequirefieldmatch.php
     */
    public function setHighlightRequireFieldMatch(bool $flag): SolrQuery
    {
    }

    /**
     * setHighlightSimplePost.
     * Sets the text which appears after a highlighted term.
     *
     * @param string $simplePost
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightsimplepost.php
     */
    public function setHighlightSimplePost(string $simplePost, string $field_override): SolrQuery
    {
    }

    /**
     * setHighlightSimplePre.
     * Sets the text which appears before a highlighted term.
     *
     * @param string $simplePre
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightsimplepre.php
     */
    public function setHighlightSimplePre(string $simplePre, string $field_override): SolrQuery
    {
    }

    /**
     * setHighlightSnippets.
     * Sets the maximum number of highlighted snippets to generate per field.
     *
     * @param int    $value
     * @param string $field_override (optional)
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightsnippets.php
     */
    public function setHighlightSnippets(int $value, string $field_override): SolrQuery
    {
    }

    /**
     * setHighlightUsePhraseHighlighter.
     * Whether to highlight phrase terms only when they appear within the query phrase.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.sethighlightusephrasehighlighter.php
     */
    public function setHighlightUsePhraseHighlighter(bool $flag): SolrQuery
    {
    }

    /**
     * setMlt.
     * Enables or disables moreLikeThis.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setmlt.php
     */
    public function setMlt(bool $flag): SolrQuery
    {
    }

    /**
     * setMltBoost.
     * Set if the query will be boosted by the interesting term relevance.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setmltboost.php
     */
    public function setMltBoost(bool $flag): SolrQuery
    {
    }

    /**
     * setMltCount.
     * Set the number of similar documents to return for each result.
     *
     * @param int $count
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setmltcount.php
     */
    public function setMltCount(int $count): SolrQuery
    {
    }

    /**
     * setMltMaxNumQueryTerms.
     * Sets the maximum number of query terms included.
     *
     * @param int $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setmltmaxnumqueryterms.php
     */
    public function setMltMaxNumQueryTerms(int $value): SolrQuery
    {
    }

    /**
     * setMltMaxNumTokens.
     * Specifies the maximum number of tokens to parse.
     *
     * @param int $value
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setmltmaxnumtokens.php
     */
    public function setMltMaxNumTokens(int $value): SolrQuery
    {
    }

    /**
     * setMltMaxWordLength.
     * Sets the maximum word length.
     *
     * @param int $maxWordLength
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setmltmaxwordlength.php
     */
    public function setMltMaxWordLength(int $maxWordLength): SolrQuery
    {
    }

    /**
     * setMltMinDocFrequency.
     * Sets the mltMinDoc frequency.
     *
     * @param int $minDocFrequency
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setmltmindocfrequency.php
     */
    public function setMltMinDocFrequency(int $minDocFrequency): SolrQuery
    {
    }

    /**
     * setMltMinTermFrequency.
     * Sets the frequency below which terms will be ignored in the source docs.
     *
     * @param int $minTermFrequency
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setmltmintermfrequency.php
     */
    public function setMltMinTermFrequency(int $minTermFrequency): SolrQuery
    {
    }

    /**
     * setMltMinWordLength.
     * Sets the minimum word length.
     *
     * @param int $minWordLength
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setmltminwordlength.php
     */
    public function setMltMinWordLength(int $minWordLength): SolrQuery
    {
    }

    /**
     * setOmitHeader.
     * Exclude the header from the returned results.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setomitheader.php
     */
    public function setOmitHeader(bool $flag): SolrQuery
    {
    }

    /**
     * setQuery.
     * Sets the search query.
     *
     * @param string $query
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setquery.php
     */
    public function setQuery(string $query): SolrQuery
    {
    }

    /**
     * setRows.
     * Specifies the maximum number of rows to return in the result.
     *
     * @param int $rows
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setrows.php
     */
    public function setRows(int $rows): SolrQuery
    {
    }

    /**
     * setShowDebugInfo.
     * Flag to show debug information.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setshowdebuginfo.php
     */
    public function setShowDebugInfo(bool $flag): SolrQuery
    {
    }

    /**
     * setStart.
     * Specifies the number of rows to skip.
     *
     * @param int $start
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setstart.php
     */
    public function setStart(int $start): SolrQuery
    {
    }

    /**
     * setStats.
     * Enables or disables the Stats component.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setstats.php
     */
    public function setStats(bool $flag): SolrQuery
    {
    }

    /**
     * setTerms.
     * Enables or disables the TermsComponent.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.setterms.php
     */
    public function setTerms(bool $flag): SolrQuery
    {
    }

    /**
     * setTermsField.
     * Sets the name of the field to get the Terms from.
     *
     * @param string $fieldname
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.settermsfield.php
     */
    public function setTermsField(string $fieldname): SolrQuery
    {
    }

    /**
     * setTermsIncludeLowerBound.
     * Include the lower bound term in the result set.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.settermsincludelowerbound.php
     */
    public function setTermsIncludeLowerBound(bool $flag): SolrQuery
    {
    }

    /**
     * setTermsIncludeUpperBound.
     * Include the upper bound term in the result set.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.settermsincludeupperbound.php
     */
    public function setTermsIncludeUpperBound(bool $flag): SolrQuery
    {
    }

    /**
     * setTermsLimit.
     * Sets the maximum number of terms to return.
     *
     * @param int $limit
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.settermslimit.php
     */
    public function setTermsLimit(int $limit): SolrQuery
    {
    }

    /**
     * setTermsLowerBound.
     * Specifies the Term to start from.
     *
     * @param string $lowerBound
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.settermslowerbound.php
     */
    public function setTermsLowerBound(string $lowerBound): SolrQuery
    {
    }

    /**
     * setTermsMaxCount.
     * Sets the maximum document frequency.
     *
     * @param int $frequency
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.settermsmaxcount.php
     */
    public function setTermsMaxCount(int $frequency): SolrQuery
    {
    }

    /**
     * setTermsMinCount.
     * Sets the minimum document frequency.
     *
     * @param int $frequency
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.settermsmincount.php
     */
    public function setTermsMinCount(int $frequency): SolrQuery
    {
    }

    /**
     * setTermsPrefix.
     * Restrict matches to terms that start with the prefix.
     *
     * @param string $prefix
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.settermsprefix.php
     */
    public function setTermsPrefix(string $prefix): SolrQuery
    {
    }

    /**
     * setTermsReturnRaw.
     * Return the raw characters of the indexed term.
     *
     * @param bool $flag
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.settermsreturnraw.php
     */
    public function setTermsReturnRaw(bool $flag): SolrQuery
    {
    }

    /**
     * setTermsSort.
     * Specifies how to sort the returned terms.
     *
     * @param int $sortType
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.settermssort.php
     */
    public function setTermsSort(int $sortType): SolrQuery
    {
    }

    /**
     * setTermsUpperBound.
     * Sets the term to stop at.
     *
     * @param string $upperBound
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.settermsupperbound.php
     */
    public function setTermsUpperBound(string $upperBound): SolrQuery
    {
    }

    /**
     * setTimeAllowed.
     * The time allowed for search to finish.
     *
     * @param int $timeAllowed
     *
     * @return SolrQuery
     *
     * @see http://php.net/manual/en/solrquery.settimeallowed.php
     */
    public function setTimeAllowed(int $timeAllowed): SolrQuery
    {
    }

    /* Inherited methods */
    //public function SolrModifiableParams::__construct(): void
    //public function SolrModifiableParams::__destruct(): void
}
