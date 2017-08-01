<?php

/**
 * EventConfig.
 * Represents configuration structure which could be used in construction of the EventBase .
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.eventconfig.php
 */
final class EventConfig
{
    const FEATURE_ET = 1;
    const FEATURE_O1 = 2;
    const FEATURE_FDS = 4;

    /**
     * __construct.
     * Constructs EventConfig object.
     *
     * @see http://php.net/manual/en/eventconfig.construct.php
     */
    public function __construct()
    {
    }

    /**
     * avoidMethod.
     * Tells libevent to avoid specific event method.
     *
     * @param string $method
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventconfig.avoidmethod.php
     */
    public function avoidMethod(string $method): bool
    {
    }

    /**
     * requireFeatures.
     * Enters a required event method feature that the application demands.
     *
     * @param int $feature
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventconfig.requirefeatures.php
     */
    public function requireFeatures(int $feature): bool
    {
    }

    /**
     * setMaxDispatchInterval.
     * Prevents priority inversion.
     *
     * @param int $max_interval
     * @param int $max_callbacks
     * @param int $min_priority
     *
     * @see http://php.net/manual/en/eventconfig.setmaxdispatchinterval.php
     */
    public function setMaxDispatchInterval(int $max_interval, int $max_callbacks, int $min_priority): void
    {
    }
}
