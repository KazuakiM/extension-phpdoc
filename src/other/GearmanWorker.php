<?php

/**
 * GearmanWorker.
 *
 * 
 *
 * @see http://php.net/manual/en/class.gearmanworker.php
 */
class GearmanWorker
{
    /**
     * addFunction.
     *
     * Register and add callback function
     *
     * @param string $function_name
     * @param callable $function
     * @param mixed &$context (optional)
     * @param int $timeout (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.addfunction.php
     */
    public function addFunction(string $function_name, callable $function, mixed &$context, int $timeout): bool
    {
    }

    /**
     * addOptions.
     *
     * Add worker options
     *
     * @param int $option
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.addoptions.php
     */
    public function addOptions(int $option): bool
    {
    }

    /**
     * addServer.
     *
     * Add a job server
     *
     * @param string $host = '127.0.0.1'
     * @param int $port = 4730
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.addserver.php
     */
    public function addServer(string $host = '127.0.0.1', int $port = 4730): bool
    {
    }

    /**
     * addServers.
     *
     * Add job servers
     *
     * @param string $servers = '127.0.0.1:4730'
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.addservers.php
     */
    public function addServers(string $servers = '127.0.0.1:4730'): bool
    {
    }

    /**
     * clone.
     *
     * Create a copy of the worker
     *
     * @return void
     *
     * @see http://php.net/manual/en/gearmanworker.clone.php
     */
    public function clone(): void
    {
    }

    /**
     * __construct.
     *
     * Create a GearmanWorker instance
     *
     * @see http://php.net/manual/en/gearmanworker.construct.php
     */
    public function __construct()
    {
    }

    /**
     * echo.
     *
     * Test job server response
     *
     * @param string $workload
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.echo.php
     */
    public function echo(string $workload): bool
    {
    }

    /**
     * error.
     *
     * Get the last error encountered
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanworker.error.php
     */
    public function error(): string
    {
    }

    /**
     * getErrno.
     *
     * Get errno
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmanworker.geterrno.php
     */
    public function getErrno(): int
    {
    }

    /**
     * options.
     *
     * Get worker options
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmanworker.options.php
     */
    public function options(): int
    {
    }

    /**
     * register.
     *
     * Register a function with the job server
     *
     * @param string $function_name
     * @param int $timeout (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.register.php
     */
    public function register(string $function_name, int $timeout): bool
    {
    }

    /**
     * removeOptions.
     *
     * Remove worker options
     *
     * @param int $option
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.removeoptions.php
     */
    public function removeOptions(int $option): bool
    {
    }

    /**
     * returnCode.
     *
     * Get last Gearman return code
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmanworker.returncode.php
     */
    public function returnCode(): int
    {
    }

    /**
     * setId.
     *
     * Give the worker an identifier so it can be tracked when asking gearmand for the list of available workers.
     *
     * @param string $id
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.setid.php
     */
    public function setId(string $id): bool
    {
    }

    /**
     * setOptions.
     *
     * Set worker options
     *
     * @param int $option
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.setoptions.php
     */
    public function setOptions(int $option): bool
    {
    }

    /**
     * setTimeout.
     *
     * Set socket I/O activity timeout
     *
     * @param int $timeout
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.settimeout.php
     */
    public function setTimeout(int $timeout): bool
    {
    }

    /**
     * timeout.
     *
     * Get socket I/O activity timeout
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmanworker.timeout.php
     */
    public function timeout(): int
    {
    }

    /**
     * unregister.
     *
     * Unregister a function name with the job servers
     *
     * @param string $function_name
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.unregister.php
     */
    public function unregister(string $function_name): bool
    {
    }

    /**
     * unregisterAll.
     *
     * Unregister all function names with the job servers
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.unregisterall.php
     */
    public function unregisterAll(): bool
    {
    }

    /**
     * wait.
     *
     * Wait for activity from one of the job servers
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.wait.php
     */
    public function wait(): bool
    {
    }

    /**
     * work.
     *
     * Wait for and perform jobs
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanworker.work.php
     */
    public function work(): bool
    {
    }
}
