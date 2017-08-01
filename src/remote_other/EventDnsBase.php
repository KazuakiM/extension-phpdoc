<?php

/**
 * EventDnsBase.
 * Represents Libevent's DNS base structure. Used to resolve DNS asyncronously, parse configuration files like resolv.conf etc.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.eventdnsbase.php
 */
final class EventDnsBase
{
    const OPTION_SEARCH = 1;
    const OPTION_NAMESERVERS = 2;
    const OPTION_MISC = 4;
    const OPTION_HOSTSFILE = 8;
    const OPTIONS_ALL = 15;

    /**
     * __construct.
     * Constructs EventDnsBase object.
     *
     * @param EventBase $base
     * @param bool      $initialize
     *
     * @see http://php.net/manual/en/eventdnsbase.construct.php
     */
    public function __construct(EventBase $base, bool $initialize)
    {
    }

    /**
     * addNameserverIp.
     * Adds a nameserver to the DNS base.
     *
     * @param string $ip
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventdnsbase.addnameserverip.php
     */
    public function addNameserverIp(string $ip): bool
    {
    }

    /**
     * addSearch.
     * Adds a domain to the list of search domains.
     *
     * @param string $domain
     *
     * @see http://php.net/manual/en/eventdnsbase.addsearch.php
     */
    public function addSearch(string $domain): void
    {
    }

    /**
     * clearSearch.
     * Removes all current search suffixes.
     *
     * @see http://php.net/manual/en/eventdnsbase.clearsearch.php
     */
    public function clearSearch(): void
    {
    }

    /**
     * countNameservers.
     * Gets the number of configured nameservers.
     *
     * @return int
     *
     * @see http://php.net/manual/en/eventdnsbase.countnameservers.php
     */
    public function countNameservers(): int
    {
    }

    /**
     * loadHosts.
     * Loads a hosts file (in the same format as /etc/hosts) from hosts file.
     *
     * @param string $hosts
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventdnsbase.loadhosts.php
     */
    public function loadHosts(string $hosts): bool
    {
    }

    /**
     * parseResolvConf.
     * Scans the resolv.conf-formatted file.
     *
     * @param int    $flags
     * @param string $filename
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventdnsbase.parseresolvconf.php
     */
    public function parseResolvConf(int $flags, string $filename): bool
    {
    }

    /**
     * setOption.
     * Set the value of a configuration option.
     *
     * @param string $option
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventdnsbase.setoption.php
     */
    public function setOption(string $option, string $value): bool
    {
    }

    /**
     * setSearchNdots.
     * Set the 'ndots' parameter for searches.
     *
     * @param int $ndots
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventdnsbase.setsearchndots.php
     */
    public function setSearchNdots(int $ndots): bool
    {
    }
}
