<?php

/**
 * GearmanJob.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.gearmanjob.php
 */
class GearmanJob
{
    /**
     * __construct.
     * Create a GearmanJob instance.
     *
     * @see http://php.net/manual/en/gearmanjob.construct.php
     */
    public function __construct()
    {
    }

    /**
     * complete.
     * Send the result and complete status (deprecated).
     *
     * @param string $result
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.complete.php
     */
    public function complete(string $result): bool
    {
    }

    /**
     * data.
     * Send data for a running job (deprecated).
     *
     * @param string $data
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.data.php
     */
    public function data(string $data): bool
    {
    }

    /**
     * exception.
     * Send exception for running job (deprecated).
     *
     * @param string $exception
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.exception.php
     */
    public function exception(string $exception): bool
    {
    }

    /**
     * fail.
     * Send fail status (deprecated).
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.fail.php
     */
    public function fail(): bool
    {
    }

    /**
     * functionName.
     * Get function name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanjob.functionname.php
     */
    public function functionName(): string
    {
    }

    /**
     * handle.
     * Get the job handle.
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanjob.handle.php
     */
    public function handle(): string
    {
    }

    /**
     * returnCode.
     * Get last return code.
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmanjob.returncode.php
     */
    public function returnCode(): int
    {
    }

    /**
     * sendComplete.
     * Send the result and complete status.
     *
     * @param string $result
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.sendcomplete.php
     */
    public function sendComplete(string $result): bool
    {
    }

    /**
     * sendData.
     * Send data for a running job.
     *
     * @param string $data
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.senddata.php
     */
    public function sendData(string $data): bool
    {
    }

    /**
     * sendException.
     * Send exception for running job (exception).
     *
     * @param string $exception
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.sendexception.php
     */
    public function sendException(string $exception): bool
    {
    }

    /**
     * sendFail.
     * Send fail status.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.sendfail.php
     */
    public function sendFail(): bool
    {
    }

    /**
     * sendStatus.
     * Send status.
     *
     * @param int $numerator
     * @param int $denominator
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.sendstatus.php
     */
    public function sendStatus(int $numerator, int $denominator): bool
    {
    }

    /**
     * sendWarning.
     * Send a warning.
     *
     * @param string $warning
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.sendwarning.php
     */
    public function sendWarning(string $warning): bool
    {
    }

    /**
     * setReturn.
     * Set a return value.
     *
     * @param int $gearman_return_t
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.setreturn.php
     */
    public function setReturn(int $gearman_return_t): bool
    {
    }

    /**
     * status.
     * Send status (deprecated).
     *
     * @param int $numerator
     * @param int $denominator
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.status.php
     */
    public function status(int $numerator, int $denominator): bool
    {
    }

    /**
     * unique.
     * Get the unique identifier.
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanjob.unique.php
     */
    public function unique(): string
    {
    }

    /**
     * warning.
     * Send a warning (deprecated).
     *
     * @param string $warning
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gearmanjob.warning.php
     */
    public function warning(string $warning): bool
    {
    }

    /**
     * workload.
     * Get workload.
     *
     * @return string
     *
     * @see http://php.net/manual/en/gearmanjob.workload.php
     */
    public function workload(): string
    {
    }

    /**
     * workloadSize.
     * Get size of work load.
     *
     * @return int
     *
     * @see http://php.net/manual/en/gearmanjob.workloadsize.php
     */
    public function workloadSize(): int
    {
    }
}
