<?php

/**
 * SolrCollapseFunction.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrcollapsefunction.php
 */
class SolrCollapseFunction
{
    const nullPOLICY_IGNORE = ignore;
    const nullPOLICY_EXPAND = expand;
    const nullPOLICY_COLLAPSE = collapse;

    /**
     * __construct.
     * Constructor.
     *
     * @param string $field (optional)
     *
     * @see http://php.net/manual/en/solrcollapsefunction.construct.php
     */
    public function __construct(string $field)
    {
    }

    /**
     * __toString.
     * Returns a string representing the constructed collapse function.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrcollapsefunction.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * getField.
     * Returns the field that is being collapsed on.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrcollapsefunction.getfield.php
     */
    public function getField(): string
    {
    }

    /**
     * getHint.
     * Returns collapse hint.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrcollapsefunction.gethint.php
     */
    public function getHint(): string
    {
    }

    /**
     * getMax.
     * Returns max parameter.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrcollapsefunction.getmax.php
     */
    public function getMax(): string
    {
    }

    /**
     * getMin.
     * Returns min parameter.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrcollapsefunction.getmin.php
     */
    public function getMin(): string
    {
    }

    /**
     * getNullPolicy.
     * Returns null policy.
     *
     * @return string
     *
     * @see http://php.net/manual/en/solrcollapsefunction.getnullpolicy.php
     */
    public function getNullPolicy(): string
    {
    }

    /**
     * getSize.
     * Returns size parameter.
     *
     * @return int
     *
     * @see http://php.net/manual/en/solrcollapsefunction.getsize.php
     */
    public function getSize(): int
    {
    }

    /**
     * setField.
     * Sets the field to collapse on.
     *
     * @param string $fieldName
     *
     * @return SolrCollapseFunction
     *
     * @see http://php.net/manual/en/solrcollapsefunction.setfield.php
     */
    public function setField(string $fieldName): SolrCollapseFunction
    {
    }

    /**
     * setHint.
     * Sets collapse hint.
     *
     * @param string $hint
     *
     * @return SolrCollapseFunction
     *
     * @see http://php.net/manual/en/solrcollapsefunction.sethint.php
     */
    public function setHint(string $hint): SolrCollapseFunction
    {
    }

    /**
     * setMax.
     * Selects the group heads by the max value of a numeric field or function query.
     *
     * @param string $max
     *
     * @return SolrCollapseFunction
     *
     * @see http://php.net/manual/en/solrcollapsefunction.setmax.php
     */
    public function setMax(string $max): SolrCollapseFunction
    {
    }

    /**
     * setMin.
     * Sets the initial size of the collapse data structures when collapsing on a numeric field only.
     *
     * @param string $min
     *
     * @return SolrCollapseFunction
     *
     * @see http://php.net/manual/en/solrcollapsefunction.setmin.php
     */
    public function setMin(string $min): SolrCollapseFunction
    {
    }

    /**
     * setNullPolicy.
     * Sets the NULL Policy.
     *
     * @param string $nullPolicy
     *
     * @return SolrCollapseFunction
     *
     * @see http://php.net/manual/en/solrcollapsefunction.setnullpolicy.php
     */
    public function setNullPolicy(string $nullPolicy): SolrCollapseFunction
    {
    }

    /**
     * setSize.
     * Sets the initial size of the collapse data structures when collapsing on a numeric field only.
     *
     * @param int $size
     *
     * @return SolrCollapseFunction
     *
     * @see http://php.net/manual/en/solrcollapsefunction.setsize.php
     */
    public function setSize(int $size): SolrCollapseFunction
    {
    }
}
