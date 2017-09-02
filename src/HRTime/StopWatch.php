<?php

/**
 * HRTime\StopWatch.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.hrtime-stopwatch.php
 */

namespace HRTime;

class StopWatch extends HRTime\PerformanceCounter
{
    /**
     * getElapsedTicks.
     * Get elapsed ticks for all intervals.
     *
     * @return int
     *
     * @see http://php.net/manual/en/hrtime-stopwatch.getelapsedticks.php
     */
    public function getElapsedTicks(): int
    {
    }

    /**
     * getElapsedTime.
     * Get elapsed time for all intervals.
     *
     * @param int $unit (optional)
     *
     * @return float
     *
     * @see http://php.net/manual/en/hrtime-stopwatch.getelapsedtime.php
     */
    public function getElapsedTime(int $unit): float
    {
    }

    /**
     * getLastElapsedTicks.
     * Get elapsed ticks for the last interval.
     *
     * @return int
     *
     * @see http://php.net/manual/en/hrtime-stopwatch.getlastelapsedticks.php
     */
    public function getLastElapsedTicks(): int
    {
    }

    /**
     * getLastElapsedTime.
     * Get elapsed time for the last interval.
     *
     * @param int $unit (optional)
     *
     * @return float
     *
     * @see http://php.net/manual/en/hrtime-stopwatch.getlastelapsedtime.php
     */
    public function getLastElapsedTime(int $unit): float
    {
    }

    /**
     * isRunning.
     * Whether the measurement is running.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/hrtime-stopwatch.isrunning.php
     */
    public function isRunning(): bool
    {
    }

    /**
     * start.
     * Start time measurement.
     *
     * @see http://php.net/manual/en/hrtime-stopwatch.start.php
     */
    public function start(): void
    {
    }

    /**
     * stop.
     * Stop time measurement.
     *
     * @see http://php.net/manual/en/hrtime-stopwatch.stop.php
     */
    public function stop(): void
    {
    }

    /* Inherited methods */
    //public static function HRTime\getFrequency(): int
    //public static function HRTime\getTicks(): int
    //public static function HRTime\getTicksSince(int $start): int
}
