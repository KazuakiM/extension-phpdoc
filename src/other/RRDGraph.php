<?php

/**
 * RRDGraph.
 *
 * Class for exporting data from RRD database to image file.
 *
 * @see http://php.net/manual/en/class.rrdgraph.php
 */
class RRDGraph
{
    /**
     * __construct.
     *
     * Creates new RRDGraph instance
     *
     * @param string $path
     *
     * @see http://php.net/manual/en/rrdgraph.construct.php
     */
    public function __construct(string $path)
    {
    }

    /**
     * save.
     *
     * Saves the result of query into image
     *
     * @return array
     *
     * @see http://php.net/manual/en/rrdgraph.save.php
     */
    public function save(): array
    {
    }

    /**
     * saveVerbose.
     *
     * Saves the RRD database query into image and returns the verbose information about generated graph.
     *
     * @return array
     *
     * @see http://php.net/manual/en/rrdgraph.saveverbose.php
     */
    public function saveVerbose(): array
    {
    }

    /**
     * setOptions.
     *
     * Sets the options for rrd graph export
     *
     * @param array $options
     *
     * @see http://php.net/manual/en/rrdgraph.setoptions.php
     */
    public function setOptions(array $options): void
    {
    }
}
