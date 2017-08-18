<?php

/**
 * SyncEvent.
 * A cross-platform, native implementation of named and unnamed event objects. Both automatic and manual event objects are supported.
 * An event object waits, without polling, for the object to be fired/set. One instance waits on the event object while another instance fires/sets the event. Event objects are useful wherever a long-running process would otherwise poll a resource (e.g. checking to see if uploaded data needs to be processed).
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.syncevent.php
 */
class SyncEvent
{
    /**
     * __construct.
     * Constructs a new SyncEvent object.
     *
     * @param string $name
     * @param bool   $manual  = false
     * @param bool   $prefire = false
     *
     * @see http://php.net/manual/en/syncevent.construct.php
     */
    public function __construct(string $name, bool $manual = false, bool $prefire = false)
    {
    }

    /**
     * fire.
     * Fires/sets the event.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncevent.fire.php
     */
    public function fire(): bool
    {
    }

    /**
     * reset.
     * Resets a manual event.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncevent.reset.php
     */
    public function reset(): bool
    {
    }

    /**
     * wait.
     * Waits for the event to be fired/set.
     *
     * @param int $wait = -1
     *
     * @return bool
     *
     * @see http://php.net/manual/en/syncevent.wait.php
     */
    public function wait(int $wait = -1): bool
    {
    }
}
