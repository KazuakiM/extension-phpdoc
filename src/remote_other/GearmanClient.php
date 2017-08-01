<?php

/**
 * GearmanClient.
 *
 * Represents a class for connecting to a Gearman job server and making requests to perform some function on provided data. The function performed must be one registered by a Gearman worker and the data passed is opaque to the job server.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.gearmanclient.php
 */
class GearmanClient
{
    /**
     * __construct.
     *
     * Create a GearmanClient instance
     *
     * @see http://php.net/manual/en/gearmanclient.construct.php
     */
    public function __construct()
    {
    }

    /**
     * addOptions.
     *
     * Add client options
     *
     * @param int $options
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.addoptions.php
     */
    public function addOptions(int $options): bool
    {
    }

    /**
     * addServer.
     *
     * Add a job server to the client
     *
     * @param string $host = '127.0.0.1'
     * @param int    $port = 4730
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.addserver.php
     */
    public function addServer(string $host = '127.0.0.1', int $port = 4730): bool
    {
    }

    /**
     * addServers.
     *
     * Add a list of job servers to the client
     *
     * @param string $servers = '127.0.0.1:4730'
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.addservers.php
     */
    public function addServers(string $servers = '127.0.0.1:4730'): bool
    {
    }

    /**
     * addTask.
     *
     * Add a task to be run in parallel
     *
     * @param string $function_name
     * @param string $workload
     * @param mixed  &$context      (optional)
     * @param string $unique        (optional)
     *
     * @return GearmanTask
     *
     * @see http://php.net/manual/en/gearmanclient.addtask.php
     */
    public function addTask(string $function_name, string $workload, mixed &$context, string $unique): GearmanTask
    {
    }

    /**
     * addTaskBackground.
     *
     * Add a background task to be run in parallel
     *
     * @param string $function_name
     * @param string $workload
     * @param mixed  &$context      (optional)
     * @param string $unique        (optional)
     *
     * @return GearmanTask
     *
     * @see http://php.net/manual/en/gearmanclient.addtaskbackground.php
     */
    public function addTaskBackground(string $function_name, string $workload, mixed &$context, string $unique): GearmanTask
    {
    }

    /**
     * addTaskHigh.
     *
     * Add a high priority task to run in parallel
     *
     * @param string $function_name
     * @param string $workload
     * @param mixed  &$context      (optional)
     * @param string $unique        (optional)
     *
     * @return GearmanTask
     *
     * @see http://php.net/manual/en/gearmanclient.addtaskhigh.php
     */
    public function addTaskHigh(string $function_name, string $workload, mixed &$context, string $unique): GearmanTask
    {
    }

    /**
     * addTaskHighBackground.
     *
     * Add a high priority background task to be run in parallel
     *
     * @param string $function_name
     * @param string $workload
     * @param mixed  &$context      (optional)
     * @param string $unique        (optional)
     *
     * @return GearmanTask
     *
     * @see http://php.net/manual/en/gearmanclient.addtaskhighbackground.php
     */
    public function addTaskHighBackground(string $function_name, string $workload, mixed &$context, string $unique): GearmanTask
    {
    }

    /**
     * addTaskLow.
     *
     * Add a low priority task to run in parallel
     *
     * @param string $function_name
     * @param string $workload
     * @param mixed  &$context      (optional)
     * @param string $unique        (optional)
     *
     * @return GearmanTask
     *
     * @see http://php.net/manual/en/gearmanclient.addtasklow.php
     */
    public function addTaskLow(string $function_name, string $workload, mixed &$context, string $unique): GearmanTask
    {
    }

    /**
     * addTaskLowBackground.
     *
     * Add a low priority background task to be run in parallel
     *
     * @param string $function_name
     * @param string $workload
     * @param mixed  &$context      (optional)
     * @param string $unique        (optional)
     *
     * @return GearmanTask
     *
     * @see http://php.net/manual/en/gearmanclient.addtasklowbackground.php
     */
    public function addTaskLowBackground(string $function_name, string $workload, mixed &$context, string $unique): GearmanTask
    {
    }

    /**
     * addTaskStatus.
     *
     * Add a task to get status
     *
     * @param string $job_handle
     * @param string &$context   (optional)
     *
     * @return GearmanTask
     *
     * @see http://php.net/manual/en/gearmanclient.addtaskstatus.php
     */
    public function addTaskStatus(string $job_handle, string &$context): GearmanTask
    {
    }

    /**
     * clearCallbacks.
     *
     * Clear all task callback functions
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.clearcallbacks.php
     */
    public function clearCallbacks(): bool
    {
    }

    /**
     * clone.
     *
     * Create a copy of a GearmanClient object
     *
     * @return GearmanClient
     *
     * @see http://php.net/manual/en/gearmanclient.clone.php
     */
    public function clone(): GearmanClient
    {
    }

    /**
     * context.
     *
     * Get the application context
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanclient.context.php
     */
    public function context(): string
    {
    }

    /**
     * data.
     *
     * Get the application data (deprecated)
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanclient.data.php
     */
    public function data(): string
    {
    }

    /**
     * do.
     *
     * Run a single task and return a result [deprecated]
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique        (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanclient.do.php
     */
    public function do(string $function_name, string $workload, string $unique): string
    {
    }

    /**
     * doBackground.
     *
     * Run a task in the background
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique        (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanclient.dobackground.php
     */
    public function doBackground(string $function_name, string $workload, string $unique): string
    {
    }

    /**
     * doHigh.
     *
     * Run a single high priority task
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique        (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanclient.dohigh.php
     */
    public function doHigh(string $function_name, string $workload, string $unique): string
    {
    }

    /**
     * doHighBackground.
     *
     * Run a high priority task in the background
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique        (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanclient.dohighbackground.php
     */
    public function doHighBackground(string $function_name, string $workload, string $unique): string
    {
    }

    /**
     * doJobHandle.
     *
     * Get the job handle for the running task
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanclient.dojobhandle.php
     */
    public function doJobHandle(): string
    {
    }

    /**
     * doLow.
     *
     * Run a single low priority task
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique        (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanclient.dolow.php
     */
    public function doLow(string $function_name, string $workload, string $unique): string
    {
    }

    /**
     * doLowBackground.
     *
     * Run a low priority task in the background
     *
     * @param string $function_name
     * @param string $workload
     * @param string $unique        (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanclient.dolowbackground.php
     */
    public function doLowBackground(string $function_name, string $workload, string $unique): string
    {
    }

    /**
     * doNormal.
     *
     * Run a single task and return a result
     *
     * @param string        $function_name
     * @param string string $workload
     * @param string        $unique        (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanclient.donormal.php
     */
    public function doNormal(string $function_name, string $workload, string $unique): string
    {
    }

    /**
     * doStatus.
     *
     * Get the status for the running task
     *
     * @return array
     *
     * @see http://php.net/manual/en/gearmanclient.dostatus.php
     */
    public function doStatus(): array
    {
    }

    /**
     * echo.
     *
     * Send data to all job servers to see if they echo it back [deprecated]
     *
     * @param string $workload
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.echo.php
     */
    public function echo(string $workload): bool
    {
    }

    /**
     * error.
     *
     * Returns an error string for the last error encountered.
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanclient.error.php
     */
    public function error(): string
    {
    }

    /**
     * getErrno.
     *
     * Get an errno value
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmanclient.geterrno.php
     */
    public function getErrno(): int
    {
    }

    /**
     * jobStatus.
     *
     * gearman_job_status — Get the status of a background job
     *
     * @param string $job_handle
     *
     * @return array
     *
     * @see http://php.net/manual/en/gearmanclient.jobstatus.php
     */
    public function jobStatus(string $job_handle): array
    {
    }

    /**
     * ping.
     *
     * Send data to all job servers to see if they echo it back
     *
     * @param string $workload
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.ping.php
     */
    public function ping(string $workload): bool
    {
    }

    /**
     * removeOptions.
     *
     * Remove client options
     *
     * @param int $options
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.removeoptions.php
     */
    public function removeOptions(int $options): bool
    {
    }

    /**
     * returnCode.
     *
     * Get the last Gearman return code
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmanclient.returncode.php
     */
    public function returnCode(): int
    {
    }

    /**
     * runTasks.
     *
     * Run a list of tasks in parallel
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.returncode.runtasksphp
     */
    public function runTasks(): bool
    {
    }

    /**
     * setClientCallback.
     *
     * Callback function when there is a data packet for a task (deprecated)
     *
     * @param callable $callback
     *
     * @see http://php.net/manual/en/gearmanclient.setclientcallback.php
     */
    public function setClientCallback(callable $callback): void
    {
    }

    /**
     * setCompleteCallback.
     *
     * Set a function to be called on task completion
     *
     * @param callable $callback
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.setcompletecallback.php
     */
    public function setCompleteCallback(callable $callback): bool
    {
    }

    /**
     * setContext.
     *
     * Set application context
     *
     * @param string $context
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.setcontext.php
     */
    public function setContext(string $context): bool
    {
    }

    /**
     * setCreatedCallback.
     *
     * Set a callback for when a task is queued
     *
     * @param string $callback
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.setcreatedcallback.php
     */
    public function setCreatedCallback(string $callback): bool
    {
    }

    /**
     * setData.
     *
     * Set application data (deprecated)
     *
     * @param string $data
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.setdata.php
     */
    public function setData(string $data): bool
    {
    }

    /**
     * setDataCallback.
     *
     * Callback function when there is a data packet for a task
     *
     * @param callable $callback
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.setdatacallback.php
     */
    public function setDataCallback(callable $callback): bool
    {
    }

    /**
     * setExceptionCallback.
     *
     * Set a callback for worker exceptions
     *
     * @param callable $callback
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.setexceptioncallback.php
     */
    public function setExceptionCallback(callable $callback): bool
    {
    }

    /**
     * setFailCallback.
     *
     * Set callback for job failure
     *
     * @param callable $callback
     *
     * @return bool
     *
     * @see Set callback for job failure
     */
    public function setFailCallback(callable $callback): bool
    {
    }

    /**
     * setOptions.
     *
     * Set client options
     *
     * @param int $options
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.setoptions.php
     */
    public function setOptions(int $options): bool
    {
    }

    /**
     * setStatusCallback.
     *
     * Set a callback for collecting task status
     *
     * @param callable $callback
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.setstatuscallback.php
     */
    public function setStatusCallback(callable $callback): bool
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
     * @see http://php.net/manual/en/gearmanclient.settimeout.php
     */
    public function setTimeout(int $timeout): bool
    {
    }

    /**
     * setWarningCallback.
     *
     * Set a callback for worker warnings
     *
     * @param callable $callback
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.setwarningcallback.php
     */
    public function setWarningCallback(callable $callback): bool
    {
    }

    /**
     * setWorkloadCallback.
     *
     * Set a callback for accepting incremental data updates
     *
     * @param callable $callback
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanclient.setworkloadcallback.php
     */
    public function setWorkloadCallback(callable $callback): bool
    {
    }

    /**
     * timeout.
     *
     * Get current socket I/O activity timeout value
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmanclient.timeout.php
     */
    public function timeout(): int
    {
    }
}
