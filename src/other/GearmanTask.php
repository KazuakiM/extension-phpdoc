<?php

/**
 * GearmanTask.
 *
 * 
 *
 * @see http://php.net/manual/en/class.gearmantask.php
 */
class GearmanTask
{
    /**
     * __construct.
     *
     * Create a GearmanTask instance
     *
     * @see http://php.net/manual/en/gearmantask.construct.php
     */
    public function __construct()
    {
    }

    /**
     * create.
     *
     * Create a task (deprecated)
     *
     * @return GearmanTask
     *
     * @see http://php.net/manual/en/gearmantask.create.php
     */
    public function create(): GearmanTask
    {
    }

    /**
     * data.
     *
     * Get data returned for a task
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmantask.data.php
     */
    public function data(): string
    {
    }

    /**
     * dataSize.
     *
     * Get the size of returned data
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmantask.datasize.php
     */
    public function dataSize(): int
    {
    }

    /**
     * function.
     *
     * Get associated function name (deprecated)
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmantask.function.php
     */
    public function function(): string
    {
    }

    /**
     * functionName.
     *
     * Get associated function name
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmantask.functionname.php
     */
    public function functionName(): string
    {
    }

    /**
     * isKnown.
     *
     * Determine if task is known
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmantask.isknown.php
     */
    public function isKnown(): bool
    {
    }

    /**
     * isRunning.
     *
     * Test whether the task is currently running
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmantask.isrunning.php
     */
    public function isRunning(): bool
    {
    }

    /**
     * jobHandle.
     *
     * gearman_job_handle — Get the job handle
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmantask.jobhandle.php
     */
    public function jobHandle(): string
    {
    }

    /**
     * recvData.
     *
     * Read work or result data into a buffer for a task
     *
     * @param int $data_len
     *
     * @return array
     *
     * @see http://php.net/manual/en/gearmantask.recvdata.php
     */
    public function recvData(int $data_len): array
    {
    }

    /**
     * returnCode.
     *
     * Get the last return code
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmantask.returncode.php
     */
    public function returnCode(): int
    {
    }

    /**
     * sendData.
     *
     * Send data for a task (deprecated)
     *
     * @param string $data
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmantask.senddata.php
     */
    public function sendData(string $data): int
    {
    }

    /**
     * sendWorkload.
     *
     * Send data for a task
     *
     * @param string $data
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmantask.sendworkload.php
     */
    public function sendWorkload(string $data): int
    {
    }

    /**
     * taskDenominator.
     *
     * Get completion percentage denominator
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmantask.taskdenominator.php
     */
    public function taskDenominator(): int
    {
    }

    /**
     * taskNumerator.
     *
     * Get completion percentage numerator
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmantask.tasknumerator.php
     */
    public function taskNumerator(): int
    {
    }

    /**
     * unique.
     *
     * Get the unique identifier for a task
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmantask.unique.php
     */
    public function unique(): string
    {
    }

    /**
     * uuid.
     *
     * Get the unique identifier for a task (deprecated)
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmantask.uuid.php
     */
    public function uuid(): string
    {
    }
}
