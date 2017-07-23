<?php

/**
 * VarnishStat.
 *
 *
 *
 * @see http://php.net/manual/en/class.varnishstat.php
 */
class VarnishStat
{
    /**
     * __construct.
     *
     * VarnishStat constructor
     *
     * @param array $args (optional)
     *
     * @see http://php.net/manual/en/varnishstat.construct.php
     */
    public function __construct(array $args)
    {
    }

    /**
     * getSnapshot.
     *
     * Get the current varnish instance statistics snapshot
     *
     * @return array
     *
     * @see http://php.net/manual/en/varnishstat.getsnapshot.php
     */
    public function getSnapshot(): array
    {
    }
}
