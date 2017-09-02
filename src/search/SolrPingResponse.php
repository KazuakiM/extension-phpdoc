<?php

/**
 * SolrPingResponse.
 * Represents a response to a ping request to the server.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrpingresponse.php
 */
final class SolrPingResponse extends SolrResponse
{
    const PARSE_SOLR_OBJ = 0;
    const PARSE_SOLR_DOC = 1;

    /**
     * __construct.
     * Constructor.
     *
     * @see http://php.net/manual/en/solrpingresponse.construct.php
     */
    public function __construct()
    {
    }

    /**
     * __destruct.
     * Destructor.
     *
     * @see http://php.net/manual/en/solrpingresponse.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * getResponse.
     * Returns the response from the server.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrpingresponse.getresponse.php
     */
    public function getResponse(): string
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
