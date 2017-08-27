<?php

/**
 * SolrUtils.
 * Contains utility methods for retrieving the current extension version and preparing query phrases.
 * Also contains method for escaping query strings and parsing XML responses.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrutils.php
 */
abstract class SolrUtils
{
    /**
     * digestXmlResponse.
     *
     *
     * @param string $xmlresponse
     * @param int    $parse_mode  = 0
     *
     * @return SolrObject
     *
     * @see http://php.net/manual/en/solrutils.digestxmlresponse.php
     */
    public static function digestXmlResponse(string $xmlresponse, int $parse_mode = 0): SolrObject
    {
    }

    /**
     * escapeQueryChars.
     *
     *
     * @param string $str
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrutils.escapequerychars.php
     */
    public static function escapeQueryChars(string $str): string
    {
    }

    /**
     * getSolrVersion.
     *
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrutils.getsolrversion.php
     */
    public static function getSolrVersion(): string
    {
    }

    /**
     * queryPhrase.
     *
     *
     * @param string $str
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrutils.queryphrase.php
     */
    public static function queryPhrase(string $str): string
    {
    }
}
