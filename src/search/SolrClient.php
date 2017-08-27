<?php

/**
 * SolrClient.
 * Used to send requests to a Solr server. Currently, cloning and serialization of SolrClient instances is not supported.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrclient.php
 */
final class SolrClient
{
    const SEARCH_SERVLET_TYPE = 1;
    const UPDATE_SERVLET_TYPE = 2;
    const THREADS_SERVLET_TYPE = 4;
    const PING_SERVLET_TYPE = 8;
    const TERMS_SERVLET_TYPE = 16;
    const SYSTEM_SERVLET_TYPE = 32;
    const DEFAULT_SEARCH_SERVLET = 'select';
    const DEFAULT_UPDATE_SERVLET = 'update';
    const DEFAULT_THREADS_SERVLET = 'admin/threads';
    const DEFAULT_PING_SERVLET = 'admin/ping';
    const DEFAULT_TERMS_SERVLET = 'terms';
    const DEFAULT_SYSTEM_SERVLET = 'admin/system';

    /**
     * __construct.
     * Constructor for the SolrClient object.
     *
     * @param array $clientOptions
     *
     * @throws SolrIllegalArgumentException
     *
     * @see http://php.net/manual/en/solrclient.construct.php
     */
    public function __construct(array $clientOptions)
    {
    }

    /**
     * __destruct.
     * Destructor for SolrClient.
     *
     * @see http://php.net/manual/en/solrclient.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * addDocument.
     * Adds a document to the index.
     *
     * @param SolrInputDocument $doc
     * @param bool              $overwrite    = true
     * @param int               $commitWithin = 0
     *
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @return SolrUpdateResponse
     *
     * @see http://php.net/manual/en/solrclient.adddocument.php
     */
    public function addDocument(SolrInputDocument $doc, bool $overwrite = true, int $commitWithin = 0): SolrUpdateResponse
    {
    }

    /**
     * addDocuments.
     * Adds a collection of SolrInputDocument instances to the index.
     *
     * @param array $docs
     * @param bool  $overwrite    = true
     * @param int   $commitWithin = 0
     *
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @see http://php.net/manual/en/solrclient.adddocuments.php
     */
    public function addDocuments(array $docs, bool $overwrite = true, int $commitWithin = 0): void
    {
    }

    /**
     * commit.
     * Finalizes all add/deletes made to the index.
     *
     * @param bool $softCommit     = false
     * @param bool $waitSearcher   = true
     * @param bool $expungeDeletes = false
     *
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @return SolrUpdateResponse
     *
     * @see http://php.net/manual/en/solrclient.commit.php
     */
    public function commit(bool $softCommit = false, bool $waitSearcher = true, bool $expungeDeletes = false): SolrUpdateResponse
    {
    }

    /**
     * deleteById.
     * Delete by Id.
     *
     * @param string $id
     *
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @return SolrUpdateResponse
     *
     * @see http://php.net/manual/en/solrclient.deletebyid.php
     */
    public function deleteById(string $id): SolrUpdateResponse
    {
    }

    /**
     * deleteByIds.
     * Deletes by Ids.
     *
     * @param array $ids
     *
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @return SolrUpdateResponse
     *
     * @see http://php.net/manual/en/solrclient.deletebyids.php
     */
    public function deleteByIds(array $ids): SolrUpdateResponse
    {
    }

    /**
     * deleteByQueries.
     * Removes all documents matching any of the queries.
     *
     * @param array $queries
     *
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @return SolrUpdateResponse
     *
     * @see http://php.net/manual/en/solrclient.deletebyqueries.php
     */
    public function deleteByQueries(array $queries): SolrUpdateResponse
    {
    }

    /**
     * deleteByQuery.
     * Deletes all documents matching the given query.
     *
     * @param string $query
     *
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @return SolrUpdateResponse
     *
     * @see http://php.net/manual/en/solrclient.deletebyquery.php
     */
    public function deleteByQuery(string $query): SolrUpdateResponse
    {
    }

    /**
     * getById.
     * Get Document By Id. Utilizes Solr Realtime Get (RTG).
     *
     * @param string $id
     *
     * @return SolrQueryResponse
     *
     * @see http://php.net/manual/en/solrclient.getbyid.php
     */
    public function getById(string $id): SolrQueryResponse
    {
    }

    /**
     * getByIds.
     * Get Documents by their Ids. Utilizes Solr Realtime Get (RTG).
     *
     * @param array $ids
     *
     * @return SolrQueryResponse
     *
     * @see http://php.net/manual/en/solrclient.getbyids.php
     */
    public function getByIds(array $ids): SolrQueryResponse
    {
    }

    /**
     * getDebug.
     * Returns the debug data for the last connection attempt.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrclient.getdebug.php
     */
    public function getDebug(): string
    {
    }

    /**
     * getOptions.
     * Returns the client options set internally.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrclient.getoptions.php
     */
    public function getOptions(): array
    {
    }

    /**
     * optimize.
     * Defragments the index.
     *
     * @param int  $maxSegments  = 1
     * @param bool $softCommit   = true
     * @param bool $waitSearcher = true
     *
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @return SolrUpdateResponse
     *
     * @see http://php.net/manual/en/solrclient.optimize.php
     */
    public function optimize(int $maxSegments = 1, bool $softCommit = true, bool $waitSearcher = true): SolrUpdateResponse
    {
    }

    /**
     * ping.
     * Checks if Solr server is still up.
     *
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @return SolrPingResponse
     *
     * @see http://php.net/manual/en/solrclient.ping.php
     */
    public function ping(): SolrPingResponse
    {
    }

    /**
     * query.
     * Sends a query to the server.
     *
     * @param SolrParams $query
     *
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @return SolrQueryResponse
     *
     * @see http://php.net/manual/en/solrclient.query.php
     */
    public function query(SolrParams $query): SolrQueryResponse
    {
    }

    /**
     * request.
     * Sends a raw update request.
     *
     * @param string $raw_request
     *
     * @throws SolrIllegalArgumentException
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @return SolrUpdateResponse
     *
     * @see http://php.net/manual/en/solrclient.request.php
     */
    public function request(string $raw_request): SolrUpdateResponse
    {
    }

    /**
     * rollback.
     * Rollbacks all add/deletes made to the index since the last commit.
     *
     * @return SolrUpdateResponse
     *
     * @see http://php.net/manual/en/solrclient.rollback.php
     */
    public function rollback(): SolrUpdateResponse
    {
    }

    /**
     * setResponseWriter.
     * Sets the response writer used to prepare the response from Solr.
     *
     * @param string $responseWriter
     *
     * @see http://php.net/manual/en/solrclient.setresponsewriter.php
     */
    public function setResponseWriter(string $responseWriter): void
    {
    }

    /**
     * setServlet.
     * Changes the specified servlet type to a new value.
     *
     * @param int    $type
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrclient.setservlet.php
     */
    public function setServlet(int $type, string $value): bool
    {
    }

    /**
     * system.
     * Retrieve Solr Server information.
     *
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @see http://php.net/manual/en/solrclient.system.php
     */
    public function system(): void
    {
    }

    /**
     * threads.
     * Checks the threads status.
     *
     * @throws SolrClientException
     * @throws SolrServerException
     *
     * @see http://php.net/manual/en/solrclient.threads.php
     */
    public function threads(): void
    {
    }
}
