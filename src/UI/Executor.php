<?php

/**
 * UI\Executor.
 * This facility schedules repetitive execution of a callback, useful for animations and other such activities.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.ui-executor.php
 */

namespace UI;

abstract class Executor
{
    /**
     * __construct.
     * Construct a new Executor.
     *
     * @param int $seconds
     * @param int $microseconds
     *
     * @see http://php.net/manual/en/ui-executor.construct.php
     */
    public function __construct(int $seconds, int $microseconds)
    {
    }

    /**
     * kill.
     * Stop Executor.
     *
     *
     * @see http://php.net/manual/en/ui-executor.kill.php
     */
    public function kill(): void
    {
    }

    /**
     * setInterval.
     * Interval Manipulation.
     *
     * @param int $seconds
     * @param int $microseconds
     *
     * @return bool
     *
     * @see http://php.net/manual/en/ui-executor.setinterval.php
     */
    public function setInterval(int $seconds, int $microseconds): bool
    {
    }

    /**
     * onExecute.
     * Execution Callback.
     *
     *
     * @see http://php.net/manual/en/ui-executor.onexecute.php
     */
    protected function onExecute(): void
    {
    }
}
