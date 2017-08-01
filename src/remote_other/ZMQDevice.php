<?php

/**
 * ZMQDevice.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.zmqdevice.php
 */
class ZMQDevice
{
    /**
     * __construct.
     * Construct a new device.
     *
     * @param ZMQSocket $frontend
     * @param ZMQSocket $backend
     * @param ZMQSocket $listener (optional)
     *
     * @see http://php.net/manual/en/zmqdevice.construct.php
     */
    public function __construct(ZMQSocket $frontend, ZMQSocket $backend, ZMQSocket $listener)
    {
    }

    /**
     * getIdleTimeout.
     * Get the idle timeout.
     *
     * @return ZMQDevice
     *
     * @see http://php.net/manual/en/zmqdevice.getidletimeout.php
     */
    public function getIdleTimeout(): ZMQDevice
    {
    }

    /**
     * getTimerTimeout.
     * Get the timer timeout.
     *
     * @return ZMQDevice
     *
     * @see http://php.net/manual/en/zmqdevice.gettimertimeout.php
     */
    public function getTimerTimeout(): ZMQDevice
    {
    }

    /**
     * run.
     * Run the new device.
     *
     * @see http://php.net/manual/en/zmqdevice.run.php
     */
    public function run(): void
    {
    }

    /**
     * setIdleCallback.
     * Set the idle callback function.
     *
     * @param callable $cb_func
     * @param int      $timeout
     * @param mixed    $user_data (optional)
     *
     * @return ZMQDevice
     *
     * @see http://php.net/manual/en/zmqdevice.setidlecallback.php
     */
    public function setIdleCallback(callable $cb_func, int $timeout, mixed $user_data): ZMQDevice
    {
    }

    /**
     * setIdleTimeout.
     * Set the idle timeout.
     *
     * @param int $timeout
     *
     * @return ZMQDevice
     *
     * @see http://php.net/manual/en/zmqdevice.setidletimeout.php
     */
    public function setIdleTimeout(int $timeout): ZMQDevice
    {
    }

    /**
     * setTimerCallback.
     * Set the timer callback function.
     *
     * @param callable $cb_func
     * @param int      $timeout
     * @param mixed    $user_data (optional)
     *
     * @return ZMQDevice
     *
     * @see http://php.net/manual/en/zmqdevice.settimercallback.php
     */
    public function setTimerCallback(callable $cb_func, int $timeout, mixed $user_data): ZMQDevice
    {
    }

    /**
     * setTimerTimeout.
     * Set the timer timeout.
     *
     * @param int $timeout
     *
     * @return ZMQDevice
     *
     * @see http://php.net/manual/en/zmqdevice.settimertimeout.php
     */
    public function setTimerTimeout(int $timeout): ZMQDevice
    {
    }
}
