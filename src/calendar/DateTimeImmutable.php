<?php

/**
 * DateTimeImmutable.
 * This class behaves the same as DateTime except it never modifies itself but returns a new object instead.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.datetimeimmutable.php
 */
class DateTimeImmutable implements DateTimeInterface
{
    /**
     * __construct.
     * Returns new DateTimeImmutable object.
     *
     * @param string       $time     = 'now'
     * @param DateTimeZone $timezone = null
     *
     * @see http://php.net/manual/en/datetimeimmutable.construct.php
     */
    public function __construct(string $time = 'now', DateTimeZone $timezone = null)
    {
    }

    /**
     * __set_state.
     * The __set_state handler.
     *
     * @param array $array
     *
     * @return DateTimeImmutable
     *
     * @see http://php.net/manual/en/datetimeimmutable.set-state.php
     */
    public static function __set_state(array $array): DateTimeImmutable
    {
    }

    /**
     * __wakeup.
     * The __wakeup handler.
     *
     * @see http://php.net/manual/en/datetime.wakeup.php
     */
    public function __wakeup()
    {
    }

    /**
     * add.
     * Adds an amount of days, months, years, hours, minutes and seconds.
     *
     * @param DateInterval $interval
     *
     * @return DateTimeImmutable
     *
     * @see http://php.net/manual/en/datetimeimmutable.add.php
     */
    public function add(DateInterval $interval): DateTimeImmutable
    {
    }

    /**
     * createFromFormat.
     * Parses a time string according to a specified format.
     *
     * @param string       $format
     * @param string       $time
     * @param DateTimeZone $timezone (optional)
     *
     * @return DateTimeImmutable
     *
     * @see http://php.net/manual/en/datetimeimmutable.createfromformat.php
     */
    public static function createFromFormat(string $format, string $time, DateTimeZone $timezone): DateTimeImmutable
    {
    }

    /**
     * createFromMutable.
     * Returns new DateTimeImmutable object encapsulating the given DateTime object.
     *
     * @param DateTime $datetime
     *
     * @return DateTimeImmutable
     *
     * @see http://php.net/manual/en/datetimeimmutable.createfrommutable.php
     */
    public static function createFromMutable(DateTime $datetime): DateTimeImmutable
    {
    }

    /**
     * getLastErrors.
     * Returns the warnings and errors.
     *
     * @return array
     *
     * @see http://php.net/manual/en/datetimeimmutable.getlasterrors.php
     */
    public static function getLastErrors(): array
    {
    }

    /**
     * modify.
     * Creates a new object with modified timestamp.
     *
     * @param string $modify
     *
     * @return DateTimeImmutable
     *
     * @see http://php.net/manual/en/datetimeimmutable.modify.php
     */
    public function modify(string $modify): DateTimeImmutable
    {
    }

    /**
     * setDate.
     * Sets the date.
     *
     * @param int $year
     * @param int $month
     * @param int $day
     *
     * @return DateTimeImmutable
     *
     * @see http://php.net/manual/en/datetimeimmutable.setdate.php
     */
    public function setDate(int $year, int $month, int $day): DateTimeImmutable
    {
    }

    /**
     * setISODate.
     * Sets the ISO date.
     *
     * @param int $year
     * @param int $week
     * @param int $day  = 1
     *
     * @return DateTimeImmutable
     *
     * @see http://php.net/manual/en/datetimeimmutable.setisodate.php
     */
    public function setISODate(int $year, int $week, int $day = 1): DateTimeImmutable
    {
    }

    /**
     * setTime.
     * Sets the time.
     *
     * @param int $hour
     * @param int $minute
     * @param int $second = 0
     *
     * @return DateTimeImmutable
     *
     * @see http://php.net/manual/en/datetimeimmutable.settime.php
     */
    public function setTime(int $hour, int $minute, int $second = 0): DateTimeImmutable
    {
    }

    /**
     * setTimestamp.
     * Sets the date and time based on an Unix timestamp.
     *
     * @param int $unixtimestamp
     *
     * @return DateTimeImmutable
     *
     * @see http://php.net/manual/en/datetimeimmutable.settimestamp.php
     */
    public function setTimestamp(int $unixtimestamp): DateTimeImmutable
    {
    }

    /**
     * setTimezone.
     * Sets the time zone.
     *
     * @param DateTimeZone $timezone
     *
     * @return DateTimeImmutable
     *
     * @see http://php.net/manual/en/datetimeimmutable.settimezone.php
     */
    public function setTimezone(DateTimeZone $timezone): DateTimeImmutable
    {
    }

    /**
     * sub.
     * Subtracts an amount of days, months, years, hours, minutes and seconds.
     *
     * @param DateInterval $interval
     *
     * @return DateTimeImmutable
     *
     * @see http://php.net/manual/en/datetimeimmutable.sub.php
     */
    public function sub(DateInterval $interval): DateTimeImmutable
    {
    }

    /**
     * diff.
     * Returns the difference between two DateTime objects.
     *
     * @param DateTimeInterface $datetime2
     * @param bool              $absolute  = false
     *
     * @return DateInterval
     *
     * @see http://php.net/manual/en/datetime.diff.php
     */
    public function diff(DateTimeInterface $datetime2, bool $absolute = false): DateInterval
    {
    }

    /**
     * format.
     * Returns date formatted according to given format.
     *
     * @param string $format
     *
     * @return string
     *
     * @see http://php.net/manual/en/datetime.format.php
     */
    public function format(string $format): string
    {
    }

    /**
     * getOffset.
     * Returns the timezone offset.
     *
     * @return int
     *
     * @see http://php.net/manual/en/datetime.getoffset.php
     */
    public function getOffset(): int
    {
    }

    /**
     * getTimestamp.
     * Gets the Unix timestamp.
     *
     * @return int
     *
     * @see http://php.net/manual/en/datetime.gettimestamp.php
     */
    public function getTimestamp(): int
    {
    }

    /**
     * getTimezone.
     * Return time zone relative to given DateTime.
     *
     * @return DateTimeZone
     *
     * @see http://php.net/manual/en/datetime.gettimezone.php
     */
    public function getTimezone(): DateTimeZone
    {
    }
}
