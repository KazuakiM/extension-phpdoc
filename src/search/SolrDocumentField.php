<?php

/**
 * SolrDocumentField.
 * This represents a field in a Solr document. All its properties are read-only.
 *
 * @property string $name
 * @property float $boost
 * @property array $values
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrdocumentfield.php
 */
final class SolrDocumentField
{
    public $name;
    public $boost;
    public $values;

    /**
     * __construct.
     * Constructor.
     *
     * @see http://php.net/manual/en/solrdocumentfield.construct.php
     */
    public function __construct()
    {
    }

    /**
     * __destruct.
     * Destructor.
     *
     * @see http://php.net/manual/en/solrdocumentfield.destruct.php
     */
    public function __destruct()
    {
    }
}
