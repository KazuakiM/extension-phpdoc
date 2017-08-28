<?php

/**
 * SphinxClient.
 * The SphinxClient class provides object-oriented interface to Sphinx.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.sphinxclient.php
 */
class SphinxClient
{
    /**
     * __construct.
     * Create a new SphinxClient object.
     *
     * @see http://php.net/manual/en/sphinxclient.construct.php
     */
    public function __construct()
    {
    }

    /**
     * addQuery.
     * Add query to multi-query batch.
     *
     * @param string $query
     * @param string $index   = '*'
     * @param string $comment = ''
     *
     * @return int
     *
     * @see http://php.net/manual/en/sphinxclient.addquery.php
     */
    public function addQuery(string $query, string $index = '*', string $comment = ''): int
    {
    }

    /**
     * buildExcerpts.
     * Build text snippets.
     *
     * @param array  $docs
     * @param string $index
     * @param string $words
     * @param array  $opts  (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/sphinxclient.buildexcerpts.php
     */
    public function buildExcerpts(array $docs, string $index, string $words, array $opts): array
    {
    }

    /**
     * buildKeywords.
     * Extract keywords from query.
     *
     * @param string $query
     * @param string $index
     * @param bool   $hits
     *
     * @return array
     *
     * @see http://php.net/manual/en/sphinxclient.buildkeywords.php
     */
    public function buildKeywords(string $query, string $index, bool $hits): array
    {
    }

    /**
     * close.
     * Closes previously opened persistent connection.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.close.php
     */
    public function close(): bool
    {
    }

    /**
     * escapeString.
     * Escape special characters.
     *
     * @param string $string
     *
     * @return string
     *
     * @see http://php.net/manual/en/sphinxclient.escapestring.php
     */
    public function escapeString(string $string): string
    {
    }

    /**
     * getLastError.
     * Get the last error message.
     *
     * @return string
     *
     * @see http://php.net/manual/en/sphinxclient.getlasterror.php
     */
    public function getLastError(): string
    {
    }

    /**
     * getLastWarning.
     * Get the last warning.
     *
     * @return string
     *
     * @see http://php.net/manual/en/sphinxclient.getlastwarning.php
     */
    public function getLastWarning(): string
    {
    }

    /**
     * open.
     * Opens persistent connection to the server.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.open.php
     */
    public function open(): bool
    {
    }

    /**
     * query.
     * Execute search query.
     *
     * @param string $query
     * @param string $index   = '*'
     * @param string $comment = ''
     *
     * @return array
     *
     * @see http://php.net/manual/en/sphinxclient.query.php
     */
    public function query(string $query, string $index = '*', string $comment = ''): array
    {
    }

    /**
     * resetFilters.
     * Clear all filters.
     *
     *
     * @see http://php.net/manual/en/sphinxclient.resetfilters.php
     */
    public function resetFilters(): void
    {
    }

    /**
     * resetGroupBy.
     * Clear all group-by settings.
     *
     *
     * @see http://php.net/manual/en/sphinxclient.resetgroupby.php
     */
    public function resetGroupBy(): void
    {
    }

    /**
     * runQueries.
     * Run a batch of search queries.
     *
     * @return array
     *
     * @see http://php.net/manual/en/sphinxclient.runqueries.php
     */
    public function runQueries(): array
    {
    }

    /**
     * setArrayResult.
     * Change the format of result set array.
     *
     * @param bool $array_result = false
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setarrayresult.php
     */
    public function setArrayResult(bool $array_result = false): bool
    {
    }

    /**
     * setConnectTimeout.
     * Set connection timeout.
     *
     * @param float $timeout
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setconnecttimeout.php
     */
    public function setConnectTimeout(float $timeout): bool
    {
    }

    /**
     * setFieldWeights.
     * Set field weights.
     *
     * @param array $weights
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setfieldweights.php
     */
    public function setFieldWeights(array $weights): bool
    {
    }

    /**
     * setFilter.
     * Add new integer values set filter.
     *
     * @param string $attribute
     * @param array  $values
     * @param bool   $exclude   = false
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setfilter.php
     */
    public function setFilter(string $attribute, array $values, bool $exclude = false): bool
    {
    }

    /**
     * setFilterFloatRange.
     * Add new float range filter.
     *
     * @param string $attribute
     * @param float  $min
     * @param float  $max
     * @param bool   $exclude   = false
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setfilterfloatrange.php
     */
    public function setFilterFloatRange(string $attribute, float $min, float $max, bool $exclude = false): bool
    {
    }

    /**
     * setFilterRange.
     * Add new integer range filter.
     *
     * @param string $attribute
     * @param int    $min
     * @param int    $max
     * @param bool   $exclude   = false
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setfilterrange.php
     */
    public function setFilterRange(string $attribute, int $min, int $max, bool $exclude = false): bool
    {
    }

    /**
     * setGeoAnchor.
     * Set anchor point for a geosphere distance calculations.
     *
     * @param string $attrlat
     * @param string $attrlong
     * @param float  $latitude
     * @param float  $longitude
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setgeoanchor.php
     */
    public function setGeoAnchor(string $attrlat, string $attrlong, float $latitude, float $longitude): bool
    {
    }

    /**
     * setGroupBy.
     * Set grouping attribute.
     *
     * @param string $attribute
     * @param int    $func
     * @param string $groupsort = '@group desc'
     *
     * @see http://php.net/manual/en/sphinxclient.setgroupby.php
     */
    public function setGroupBy(string $attribute, int $func, string $groupsort = '@group desc'): bool
    {
    }

    /**
     * setGroupDistinct.
     * Set attribute name for per-group distinct values count calculations.
     *
     * @param string $attribute
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setgroupdistinct.php
     */
    public function setGroupDistinct(string $attribute): bool
    {
    }

    /**
     * setIDRange.
     * Set a range of accepted document IDs.
     *
     * @param int $min
     * @param int $max
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setidrange.php
     */
    public function setIDRange(int $min, int $max): bool
    {
    }

    /**
     * setIndexWeights.
     * Set per-index weights.
     *
     * @param array $weights
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setindexweights.php
     */
    public function setIndexWeights(array $weights): bool
    {
    }

    /**
     * setLimits.
     * Set offset and limit of the result set.
     *
     * @param int $offset
     * @param int $limit
     * @param int $max_matches = 0
     * @param int $cutoff      = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setlimits.php
     */
    public function setLimits(int $offset, int $limit, int $max_matches = 0, int $cutoff = 0): bool
    {
    }

    /**
     * setMatchMode.
     * Set full-text query matching mode.
     *
     * @param int $mode
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setmatchmode.php
     */
    public function setMatchMode(int $mode): bool
    {
    }

    /**
     * setMaxQueryTime.
     * Set maximum query time.
     *
     * @param int $qtime
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setmaxquerytime.php
     */
    public function setMaxQueryTime(int $qtime): bool
    {
    }

    /**
     * setOverride.
     * Sets temporary per-document attribute value overrides.
     *
     * @param string $attribute
     * @param int    $type
     * @param array  $values
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setoverride.php
     */
    public function setOverride(string $attribute, int $type, array $values): bool
    {
    }

    /**
     * setRankingMode.
     * Set ranking mode.
     *
     * @param int $ranker
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setrankingmode.php
     */
    public function setRankingMode(int $ranker): bool
    {
    }

    /**
     * setRetries.
     * Set retry count and delay.
     *
     * @param int $count
     * @param int $delay = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setretries.php
     */
    public function setRetries(int $count, int $delay = 0): bool
    {
    }

    /**
     * setSelect.
     * Set select clause.
     *
     * @param string $clause
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setselect.php
     */
    public function setSelect(string $clause): bool
    {
    }

    /**
     * setServer.
     * Set searchd host and port.
     *
     * @param string $server
     * @param int    $port
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setserver.php
     */
    public function setServer(string $server, int $port): bool
    {
    }

    /**
     * setSortMode.
     * Set matches sorting mode.
     *
     * @param int    $mode
     * @param string $sortby
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sphinxclient.setsortmode.php
     */
    public function setSortMode(int $mode, string $sortby): bool
    {
    }

    /**
     * status.
     * Queries searchd status.
     *
     * @return array
     *
     * @see http://php.net/manual/en/sphinxclient.status.php
     */
    public function status(): array
    {
    }

    /**
     * updateAttributes.
     * Update document attributes.
     *
     * @param string $index
     * @param array  $attributes
     * @param array  $values
     * @param bool   $mva        = false
     *
     * @return int
     *
     * @see http://php.net/manual/en/sphinxclient.updateattributes.php
     */
    public function updateAttributes(string $index, array $attributes, array $values, bool $mva = false): int
    {
    }
}
