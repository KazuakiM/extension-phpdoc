<?php

/**
 * DateTimeInterface.
 * DateTimeInterface is meant so that both DateTime and DateTimeImmutable can be type hinted for. It is not possible to implement this interface with userland classes.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.datetimeinterface.php
 */
interface DateTimeInterface
{
    /**
     * __wakeup.
     * The __wakeup handler.
     *
     * @see http://php.net/manual/en/datetime.wakeup.php
     */
    public function __wakeup();

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
    public function diff(DateTimeInterface $datetime2, bool $absolute = false): DateInterval;

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
    public function format(string $format): string;

    /**
     * getOffset.
     * Returns the timezone offset.
     *
     * @return int
     *
     * @see http://php.net/manual/en/datetime.getoffset.php
     */
    public function getOffset(): int;

    /**
     * getTimestamp.
     * Gets the Unix timestamp.
     *
     * @return int
     *
     * @see http://php.net/manual/en/datetime.gettimestamp.php
     */
    public function getTimestamp(): int;

    /**
     * getTimezone.
     * Return time zone relative to given DateTime.
     *
     * @return DateTimeZone
     *
     * @see http://php.net/manual/en/datetime.gettimezone.php
     */
    public function getTimezone(): DateTimeZone;
}
