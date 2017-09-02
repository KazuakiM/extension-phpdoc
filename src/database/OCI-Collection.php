<?php

/**
 * OCI-Collection.
 * OCI8 Collection functionality.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.OCI-Collection.php
 */
//class OCI-Collection
class OCICollection
{
    /**
     * append.
     * Appends element to the collection.
     *
     * @param mixed $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-collection.append.php
     */
    public function append(mixed $value): bool
    {
    }

    /**
     * assign.
     * Assigns a value to the collection from another existing collection.
     *
     * @param OCI-Collection $from
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-collection.assign.php
     */
    //public function assign(OCI-Collection $from): bool
    public function assign(OCICollection $from): bool
    {
    }

    /**
     * assignElem.
     * Assigns a value to the element of the collection.
     *
     * @param int   $index
     * @param mixed $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-collection.assignelem.php
     */
    public function assignElem(int $index, mixed $value): bool
    {
    }

    /**
     * free.
     * Frees the resources associated with the collection object.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-collection.free.php
     */
    public function free(): bool
    {
    }

    /**
     * getElem.
     * Returns value of the element.
     *
     * @param int $index
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/oci-collection.getelem.php
     */
    public function getElem(int $index): mixed
    {
    }

    /**
     * max.
     * Returns the maximum number of elements in the collection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/oci-collection.max.php
     */
    public function max(): int
    {
    }

    /**
     * size.
     * Returns size of the collection.
     *
     * @return int
     *
     * @see http://php.net/manual/en/oci-collection.size.php
     */
    public function size(): int
    {
    }

    /**
     * trim.
     * Trims elements from the end of the collection.
     *
     * @param int $num
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oci-collection.trim.php
     */
    public function trim(int $num): bool
    {
    }
}
