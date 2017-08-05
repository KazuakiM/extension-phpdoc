<?php

/**
 * DateTime.
 * Representation of date and time.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.datetime.php
 */
class DateTime implements DateTimeInterface
{
    const ATOM = 'Y-m-d\TH:i:sP';
    const COOKIE = 'l, d-M-Y H:i:s T';
    const ISO8601 = 'Y-m-d\TH:i:sO';
    const RFC822 = 'D, d M y H:i:s O';
    const RFC850 = 'l, d-M-y H:i:s T';
    const RFC1036 = 'D, d M y H:i:s O';
    const RFC1123 = 'D, d M Y H:i:s O';
    const RFC2822 = 'D, d M Y H:i:s O';
    const RFC3339 = 'Y-m-d\TH:i:sP';
    const RSS = 'D, d M Y H:i:s O';
    const W3C = 'Y-m-d\TH:i:sP';

    /**
     * __construct.
     * Returns new DateTime object.
     *
     * @param string       $time     = 'now'
     * @param DateTimeZone $timezone = null
     *
     * @throws Exception
     *
     * @see http://php.net/manual/en/datetime.construct.php
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
     * @return DateTime
     *
     * @see http://php.net/manual/en/datetime.set-state.php
     */
    public static function __set_state(array $array): DateTime
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
     * Adds an amount of days, months, years, hours, minutes and seconds to a DateTime object.
     *
     * @param DateInterval $interval
     *
     * @return DateTime
     *
     * @see http://php.net/manual/en/datetime.add.php
     */
    public function add(DateInterval $interval): DateTime
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
     * @return DateTime
     *
     * @see http://php.net/manual/en/datetime.createfromformat.php
     */
    public static function createFromFormat(string $format, string $time, DateTimeZone $timezone): DateTime
    {
    }

    /**
     * getLastErrors.
     * Returns the warnings and errors.
     *
     * @return array
     *
     * @see http://php.net/manual/en/datetime.getlasterrors.php
     */
    public static function getLastErrors(): array
    {
    }

    /**
     * modify.
     * Alters the timestamp.
     *
     * @param string $modify
     *
     * @return DateTime
     *
     * @see http://php.net/manual/en/datetime.modify.php
     */
    public function modify(string $modify): DateTime
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
     * @return DateTime
     *
     * @see http://php.net/manual/en/datetime.setdate.php
     */
    public function setDate(int $year, int $month, int $day): DateTime
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
     * @return DateTime
     *
     * @see http://php.net/manual/en/datetime.setisodate.php
     */
    public function setISODate(int $year, int $week, int $day = 1): DateTime
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
     * @return DateTime
     *
     * @see http://php.net/manual/en/datetime.settime.php
     */
    public function setTime(int $hour, int $minute, int $second = 0): DateTime
    {
    }

    /**
     * setTimestamp.
     * Sets the date and time based on an Unix timestamp.
     *
     * @param int $unixtimestamp
     *
     * @return DateTime
     *
     * @see http://php.net/manual/en/datetime.settimestamp.php
     */
    public function setTimestamp(int $unixtimestamp): DateTime
    {
    }

    /**
     * setTimezone.
     * Sets the time zone for the DateTime object.
     *
     * @param DateTimeZone $timezone
     *
     * @return DateTime
     *
     * @see http://php.net/manual/en/datetime.settimezone.php
     */
    public function setTimezone(DateTimeZone $timezone): DateTime
    {
    }

    /**
     * sub.
     * Subtracts an amount of days, months, years, hours, minutes and seconds from a DateTime object.
     *
     * @param DateInterval $interval
     *
     * @return DateTime
     *
     * @see http://php.net/manual/en/datetime.sub.php
     */
    public function sub(DateInterval $interval): DateTime
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
