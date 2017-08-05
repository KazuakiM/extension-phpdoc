<?php

/**
 * DateInterval.
 * Represents a date interval.
 * A date interval stores either a fixed amount of time (in years, months, days, hours etc) or a relative time string in the format that DateTime's constructor supports.
 *
 * @property int $y
 * @property int $m
 * @property int $d
 * @property int $h
 * @property int $i
 * @property int $s
 * @property float $f
 * @property int $invert
 * @property mixed $days
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.dateinterval.php
 */
class DateInterval
{
    public $y;
    public $m;
    public $d;
    public $h;
    public $i;
    public $s;
    public $f;
    public $invert;
    public $days;

    /**
     * __construct.
     * Creates a new DateInterval object.
     *
     * @param string $interval_spec
     *
     * @throws Exception
     *
     * @see http://php.net/manual/en/dateinterval.construct.php
     */
    public function __construct(string $interval_spec)
    {
    }

    /**
     * createFromDateString.
     * Sets up a DateInterval from the relative parts of the string.
     *
     * @param string $time
     *
     * @return DateInterval
     *
     * @see http://php.net/manual/en/dateinterval.createfromdatestring.php
     */
    public static function createFromDateString(string $time): DateInterval
    {
    }

    /**
     * format.
     * Formats the interval.
     *
     * @param string $format
     *
     * @return string
     *
     * @see http://php.net/manual/en/dateinterval.format.php
     */
    public function format(string $format): string
    {
    }
}
