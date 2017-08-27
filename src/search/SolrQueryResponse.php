<?php

/**
 * SolrQueryResponse.
 * Represents a response to a query request.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrqueryresponse.php
 */
final class SolrQueryResponse extends SolrResponse
{
    const PARSE_SOLR_OBJ = 0;
    const PARSE_SOLR_DOC = 1;

    /* Inherited methods */
    //const SolrResponse::PARSE_SOLR_OBJ = 0;
    //const SolrResponse::PARSE_SOLR_DOC = 1;
    //protected  $http_status;
    //protected  $parser_mode;
    //protected  $success;
    //protected  $http_status_message;
    //protected  $http_request_url;
    //protected  $http_raw_request_headers;
    //protected  $http_raw_request;
    //protected  $http_raw_response_headers;
    //protected  $http_raw_response;
    //protected  $http_digested_response;

    /**
     * __construct.
     * Constructor.
     *
     * @see http://php.net/manual/en/solrqueryresponse.construct.php
     */
    public function __construct()
    {
    }

    /**
     * __destruct.
     * Destructor.
     *
     * @see http://php.net/manual/en/solrqueryresponse.destruct.php
     */
    public function __destruct()
    {
    }

    /* Inherited methods */
    //public function SolrResponse::getDigestedResponse(): string
    //public function SolrResponse::getHttpStatus(): int
    //public function SolrResponse::getHttpStatusMessage(): string
    //public function SolrResponse::getRawRequest(): string
    //public function SolrResponse::getRawRequestHeaders(): string
    //public function SolrResponse::getRawResponse(): string
    //public function SolrResponse::getRawResponseHeaders(): string
    //public function SolrResponse::getRequestUrl(): string
    //public function SolrResponse::getResponse(): SolrObject
    //public function SolrResponse::setParseMode(int $parser_mode = 0): bool
    //public function SolrResponse::success(): bool
}
