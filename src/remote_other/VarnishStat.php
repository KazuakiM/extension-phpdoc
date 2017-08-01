<?php

/**
 * VarnishStat.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.varnishstat.php
 */
class VarnishStat
{
    /**
     * __construct.
     * VarnishStat constructor.
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
     * Get the current varnish instance statistics snapshot.
     *
     * @return array
     *
     * @see http://php.net/manual/en/varnishstat.getsnapshot.php
     */
    public function getSnapshot(): array
    {
    }
}
