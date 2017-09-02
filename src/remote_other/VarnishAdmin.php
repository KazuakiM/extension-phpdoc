<?php

/**
 * VarnishAdmin.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.varnishadmin.php
 */
class VarnishAdmin
{
    /**
     * __construct.
     * VarnishAdmin constructor.
     *
     * @param array $args (optional)
     *
     * @see http://php.net/manual/en/varnishadmin.construct.php
     */
    public function __construct(array $args)
    {
    }

    /**
     * auth.
     * Authenticate on a varnish instance.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/varnishadmin.auth.php
     */
    public function auth(): bool
    {
    }

    /**
     * ban.
     * Ban URLs using a VCL expression.
     *
     * @param string $vcl_regex
     *
     * @return int
     *
     * @see http://php.net/manual/en/varnishadmin.ban.php
     */
    public function ban(string $vcl_regex): int
    {
    }

    /**
     * banUrl.
     * Ban an URL using a VCL expression.
     *
     * @param string $vcl_regex
     *
     * @return int
     *
     * @see http://php.net/manual/en/varnishadmin.banurl.php
     */
    public function banUrl(string $vcl_regex): int
    {
    }

    /**
     * clearPanic.
     * Clear varnish instance panic messages.
     *
     * @return int
     *
     * @see http://php.net/manual/en/varnishadmin.clearpanic.php
     */
    public function clearPanic(): int
    {
    }

    /**
     * connect.
     * Connect to a varnish instance administration interface.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/varnishadmin.connect.php
     */
    public function connect(): bool
    {
    }

    /**
     * disconnect.
     * Disconnect from a varnish instance administration interface.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/varnishadmin.disconnect.php
     */
    public function disconnect(): bool
    {
    }

    /**
     * getPanic.
     * Get the last panic message on a varnish instance.
     *
     * @return string
     *
     * @see http://php.net/manual/en/varnishadmin.getpanic.php
     */
    public function getPanic(): string
    {
    }

    /**
     * getParams.
     * Fetch current varnish instance configuration parameters.
     *
     * @return array
     *
     * @see http://php.net/manual/en/varnishadmin.getparams.php
     */
    public function getParams(): array
    {
    }

    /**
     * isRunning.
     * Check if the varnish slave process is currently running.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/varnishadmin.isrunning.php
     */
    public function isRunning(): bool
    {
    }

    /**
     * setCompat.
     * Set the class compat configuration param.
     *
     * @param int $compat
     *
     * @see http://php.net/manual/en/varnishadmin.setcompat.php
     */
    public function setCompat(int $compat): void
    {
    }

    /**
     * setHost.
     * Set the class host configuration param.
     *
     * @param string $host
     *
     * @see http://php.net/manual/en/varnishadmin.sethost.php
     */
    public function setHost(string $host): void
    {
    }

    /**
     * setIdent.
     * Set the class ident configuration param.
     *
     * @param string $ident
     *
     * @see http://php.net/manual/en/varnishadmin.setident.php
     */
    public function setIdent(string $ident): void
    {
    }

    /**
     * setParam.
     * Set configuration param on the current varnish instance.
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return int
     *
     * @see http://php.net/manual/en/varnishadmin.setparam.php
     */
    public function setParam(string $name, mixed $value): int
    {
    }

    /**
     * setPort.
     * Set the class port configuration param.
     *
     * @param int $port
     *
     * @see http://php.net/manual/en/varnishadmin.setport.php
     */
    public function setPort(int $port): void
    {
    }

    /**
     * setSecret.
     * Set the class secret configuration param.
     *
     * @param string $secret
     *
     * @see http://php.net/manual/en/varnishadmin.setsecret.php
     */
    public function setSecret(string $secret): void
    {
    }

    /**
     * setTimeout.
     * Set the class timeout configuration param.
     *
     * @param int $timeout
     *
     * @see http://php.net/manual/en/varnishadmin.settimeout.php
     */
    public function setTimeout(int $timeout): void
    {
    }

    /**
     * start.
     * Start varnish worker process.
     *
     * @return int
     *
     * @see http://php.net/manual/en/varnishadmin.start.php
     */
    public function start(): int
    {
    }

    /**
     * stop.
     * Stop varnish worker process.
     *
     * @return int
     *
     * @see http://php.net/manual/en/varnishadmin.stop.php
     */
    public function stop(): int
    {
    }
}
