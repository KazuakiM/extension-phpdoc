<?php

/**
 * SolrResponse.
 * Represents a response from the Solr server.
 *
 * @property int $http_status
 * @property int $parser_mode
 * @property bool $success
 * @property string $http_status_message
 * @property string $http_request_url
 * @property string $http_raw_request_headers
 * @property string $http_raw_request
 * @property string $http_raw_response_headers
 * @property string $http_raw_response
 * @property string $http_digested_response
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrresponse.php
 */
abstract class SolrResponse
{
    const PARSE_SOLR_OBJ = 0;
    const PARSE_SOLR_DOC = 1;

    protected $http_status;
    protected $parser_mode;
    protected $success;
    protected $http_status_message;
    protected $http_request_url;
    protected $http_raw_request_headers;
    protected $http_raw_request;
    protected $http_raw_response_headers;
    protected $http_raw_response;
    protected $http_digested_response;

    /**
     * getDigestedResponse.
     * Returns the XML response as serialized PHP data.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrresponse.getdigestedresponse.php
     */
    public function getDigestedResponse(): string
    {
    }

    /**
     * getHttpStatus.
     * Returns the HTTP status of the response.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrresponse.gethttpstatus.php
     */
    public function getHttpStatus(): int
    {
    }

    /**
     * getHttpStatusMessage.
     * Returns more details on the HTTP status.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrresponse.gethttpstatusmessage.php
     */
    public function getHttpStatusMessage(): string
    {
    }

    /**
     * getRawRequest.
     * Returns the raw request sent to the Solr server.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrresponse.getrawrequest.php
     */
    public function getRawRequest(): string
    {
    }

    /**
     * getRawRequestHeaders.
     * Returns the raw request headers sent to the Solr server.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrresponse.getrawrequestheaders.php
     */
    public function getRawRequestHeaders(): string
    {
    }

    /**
     * getRawResponse.
     * Returns the raw response from the server.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrresponse.getrawresponse.php
     */
    public function getRawResponse(): string
    {
    }

    /**
     * getRawResponseHeaders.
     * Returns the raw response headers from the server.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrresponse.getrawresponseheaders.php
     */
    public function getRawResponseHeaders(): string
    {
    }

    /**
     * getRequestUrl.
     * Returns the full URL the request was sent to.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrresponse.getrequesturl.php
     */
    public function getRequestUrl(): string
    {
    }

    /**
     * getResponse.
     * Returns a SolrObject representing the XML response from the server.
     *
     * @return SolrObject
     *
     * @see http://php.net/manual/en/solrresponse.getresponse.php
     */
    public function getResponse(): SolrObject
    {
    }

    /**
     * setParseMode.
     * Sets the parse mode.
     *
     * @param int $parser_mode = 0
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrresponse.setparsemode.php
     */
    public function setParseMode(int $parser_mode = 0): bool
    {
    }

    /**
     * success.
     * Was the request a success.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrresponse.success.php
     */
    public function success(): bool
    {
    }
}
