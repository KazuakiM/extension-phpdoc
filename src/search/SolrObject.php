<?php

/**
 * SolrObject.
 * This is an object whose properties can also by accessed using the array syntax. All its properties are read-only.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrobject.php
 */
final class SolrObject implements ArrayAccess
{
    /**
     * __construct.
     * Creates Solr object.
     *
     * @see http://php.net/manual/en/solrobject.construct.php
     */
    public function __construct()
    {
    }

    /**
     * __destruct.
     * Destructor.
     *
     * @see http://php.net/manual/en/solrobject.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * getPropertyNames.
     * Returns an array of all the names of the properties.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrobject.getpropertynames.php
     */
    public function getPropertyNames(): array
    {
    }

    /**
     * offsetExists.
     * Checks if the property exists.
     *
     * @param string $property_name
     *
     * @return bool
     *
     * @see http://php.net/manual/en/solrobject.offsetexists.php
     */
    public function offsetExists(string $property_name): bool
    {
    }

    /**
     * offsetGet.
     * Used to retrieve a property.
     *
     * @param string $property_name
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/solrobject.offsetget.php
     */
    public function offsetGet(string $property_name): mixed
    {
    }

    /**
     * offsetSet.
     * Sets the value for a property.
     *
     * @param string $property_name
     * @param string $property_value
     *
     * @see http://php.net/manual/en/solrobject.offsetset.php
     */
    public function offsetSet(string $property_name, string $property_value): void
    {
    }

    /**
     * offsetUnset.
     * Unsets the value for the property.
     *
     * @param string $property_name
     *
     * @see http://php.net/manual/en/solrobject.offsetunset.php
     */
    public function offsetUnset(string $property_name): void
    {
    }
}
