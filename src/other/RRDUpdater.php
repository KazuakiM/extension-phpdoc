<?php

/**
 * RRDUpdater.
 *
 * Class for updating RDD database file.
 *
 * @see http://php.net/manual/en/class.rrdupdater.php
 */
class RRDUpdater
{
    /**
     * __construct.
     *
     * Creates new RRDUpdater instance
     *
     * @param string $path
     *
     * @see http://php.net/manual/en/rrdupdater.construct.php
     */
    public function __construct(string $path)
    {
    }

    /**
     * update.
     *
     * Update the RRD database file
     *
     * @param array  $values
     * @param string $time   = time()
     *
     * @return bool
     *
     * @see http://php.net/manual/en/rrdupdater.update.php
     */
    public function update(array $values, string $time = time()): bool
    {
    }
}
