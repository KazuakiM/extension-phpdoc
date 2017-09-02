<?php

/**
 * SolrParams.
 * Represents a collection of name-value pairs sent to the Solr server during a request.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrparams.php
 */
abstract class SolrParams implements Serializable
{
    /**
     * add.
     * This is an alias for SolrParams::addParam.
     *
     * @param string $name
     * @param string $value
     *
     * @return SolrParams
     *
     * @see http://php.net/manual/en/solrparams.add.php
     */
    final public function add(string $name, string $value): SolrParams
    {
    }

    /**
     * addParam.
     * Adds a parameter to the object.
     *
     * @param string $name
     * @param string $value
     *
     * @return SolrParams
     *
     * @see http://php.net/manual/en/solrparams.addparam.php
     */
    public function addParam(string $name, string $value): SolrParams
    {
    }

    /**
     * get.
     * This is an alias for SolrParams::getParam.
     *
     * @param string $param_name
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/solrparams.get.php
     */
    final public function get(string $param_name): mixed
    {
    }

    /**
     * getParam.
     * Returns a parameter value.
     *
     * @param string $param_name (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/solrparams.getparam.php
     */
    final public function getParam(string $param_name): mixed
    {
    }

    /**
     * getParams.
     * Returns an array of non URL-encoded parameters.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrparams.getparams.php
     */
    final public function getParams(): array
    {
    }

    /**
     * getPreparedParams.
     * Returns an array of URL-encoded parameters.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrparams.getpreparedparams.php
     */
    final public function getPreparedParams(): array
    {
    }

    /**
     * serialize.
     * Used for custom serialization.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrparams.serialize.php
     */
    final public function serialize(): string
    {
    }

    /**
     * set.
     * An alias of SolrParams::setParam.
     *
     * @param string $name
     * @param string $value
     *
     * @see http://php.net/manual/en/solrparams.set.php
     */
    final public function set(string $name, string $value): void
    {
    }

    /**
     * setParam.
     * Sets the parameter to the specified value.
     *
     * @param string $name
     * @param string $value
     *
     * @return SolrParams
     *
     * @see http://php.net/manual/en/solrparams.setparam.php
     */
    public function setParam(string $name, string $value): SolrParams
    {
    }

    /**
     * toString.
     * Returns all the name-value pair parameters in the object.
     *
     * @param bool $url_encode = false
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrparams.tostring.php
     */
    final public function toString(bool $url_encode = false): string
    {
    }

    /**
     * unserialize.
     * Used for custom serialization.
     *
     * @param string $serialized
     *
     * @see http://php.net/manual/en/solrparams.unserialize.php
     */
    final public function unserialize(string $serialized): void
    {
    }
}
