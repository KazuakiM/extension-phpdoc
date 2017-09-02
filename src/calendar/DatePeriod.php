<?php

/**
 * DatePeriod.
 * Represents a date period.
 * A date period allows iteration over a set of dates and times, recurring at regular intervals, over a given period.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.dateperiod.php
 */
class DatePeriod implements Traversable
{
    const EXCLUDE_START_DATE = 1;

    /**
     * __construct.
     * Creates a new DatePeriod object.
     *
     * @parma DateTimeInterface|string $start
     * @parma DateInterval|int $interval (optional)
     * @parma DateTimeInterface|int $recurrences (optional)
     * @parma int $options (optional)
     *
     * @see http://php.net/manual/en/dateperiod.construct.php
     */
    public function __construct(mixed $start, mixed $interval, int $recurrences, int $options)
    {
    }

    /**
     * getDateInterval.
     * Gets the interval.
     *
     * @return DateInterval
     *
     * @see http://php.net/manual/en/dateperiod.getdateinterval.php
     */
    public function getDateInterval(): DateInterval
    {
    }

    /**
     * getEndDate.
     * Gets the end date.
     *
     * @return DateTimeInterface
     *
     * @see http://php.net/manual/en/dateperiod.getenddate.php
     */
    public function getEndDate(): DateTimeInterface
    {
    }

    /**
     * getStartDate.
     * Gets the start date.
     *
     * @return DateTimeInterface
     *
     * @see http://php.net/manual/en/dateperiod.getstartdate.php
     */
    public function getStartDate(): DateTimeInterface
    {
    }
}
