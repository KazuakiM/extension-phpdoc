<?php

/**
 * HRTime\PerformanceCounter.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.hrtime-performancecounter.php
 */

namespace HRTime;

class PerformanceCounter
{
    /**
     * getFrequency.
     * Timer frequency in ticks per second.
     *
     * @return int
     *
     * @see http://php.net/manual/en/hrtime-performancecounter.getfrequency.php
     */
    public static function getFrequency(): int
    {
    }

    /**
     * getTicks.
     * Current ticks from the system.
     *
     * @return int
     *
     * @see http://php.net/manual/en/hrtime-performancecounter.getticks.php
     */
    public static function getTicks(): int
    {
    }

    /**
     * getTicksSince.
     * Ticks elapsed since the given value.
     *
     * @param int $start
     *
     * @return int
     *
     * @see http://php.net/manual/en/hrtime-performancecounter.gettickssince.php
     */
    public static function getTicksSince(int $start): int
    {
    }
}
