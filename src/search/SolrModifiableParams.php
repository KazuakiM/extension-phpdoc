<?php

/**
 * SolrModifiableParams.
 * Represents a collection of name-value pairs sent to the Solr server during a request.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrmodifiableparams.php
 */
class SolrModifiableParams extends SolrParams implements Serializable
{
    /**
     * __construct.
     * Constructor.
     *
     * @see http://php.net/manual/en/solrmodifiableparams.construct.php
     */
    public function __construct()
    {
    }

    /**
     * __destruct.
     * Destructor.
     *
     * @see http://php.net/manual/en/solrmodifiableparams.destruct.php
     */
    public function __destruct()
    {
    }

    /* Inherited methods */
    //final public function SolrParams::add(string $name, string $value): SolrParams
    //public function SolrParams::addParam(string $name, string $value): SolrParams
    //final public function SolrParams::get(string $param_name): mixed
    //final public function SolrParams::getParam(string $param_name): mixed
    //final public function SolrParams::getParams(): array
    //final public function SolrParams::getPreparedParams(): array
    //final public function SolrParams::serialize(): string
    //final public function SolrParams::set(string $name, string $value): void
    //public function SolrParams::setParam(string $name, string $value): SolrParams
    //final public function SolrParams::toString(bool $url_encode = false): string
    //final public function SolrParams::unserialize(string $serialized): void
}
