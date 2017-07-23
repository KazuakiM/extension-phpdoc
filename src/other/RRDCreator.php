<?php

/**
 * RRDCreator.
 *
 * Class for creation of RRD database file.
 *
 * @see http://php.net/manual/en/class.rrdcreator.php
 */
class RRDCreator
{
    /**
     * __construct.
     *
     * Creates new RRDCreator instance
     *
     * @param string $path
     * @param string $startTime (optional)
     * @param int    $step      = 0 (optional)
     *
     * @see http://php.net/manual/en/rrdcreator.construct.php
     */
    public function __construct(string $path, string $startTime, int $step = 0)
    {
    }

    /**
     * addArchive.
     *
     * Adds RRA - archive of data values for each data source.
     *
     * @param string $description
     *
     * @see http://php.net/manual/en/rrdcreator.addarchive.php
     */
    public function addArchive(string $description): void
    {
    }

    /**
     * addDataSource.
     *
     * Adds data source definition for RRD database.
     *
     * @param string $description
     *
     * @see http://php.net/manual/en/rrdcreator.adddatasource.php
     */
    public function addDataSource(string $description): void
    {
    }

    /**
     * save.
     *
     * Saves the RRD database to a file
     *
     * @return bool
     *
     * @see http://php.net/manual/en/rrdcreator.save.php
     */
    public function save(): bool
    {
    }
}
