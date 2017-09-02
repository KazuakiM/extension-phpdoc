<?php

/**
 * IntlDateFormatter.
 * Date Formatter is a concrete class that enables locale-dependent formatting/parsing of dates using pattern strings and/or canned patterns.
 * This class represents the ICU date formatting functionality. It allows users to display dates in a localized format or to parse strings into PHP date values using pattern strings and/or canned patterns.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.intldateformatter.php
 */
class IntlDateFormatter
{
    /**
     * __construct.
     * Create a date formatter.
     *
     * @param string $locale
     * @param int    $datetype
     * @param int    $timetype
     * @param mixed  $timezone = null
     * @param mixed  $calendar = null
     * @param string $pattern  = ''
     *
     * @see http://php.net/manual/en/intldateformatter.create.php
     */
    public function __construct(string $locale, int $datetype, int $timetype, mixed $timezone = null, mixed $calendar = null, string $pattern = '')
    {
    }

    /**
     * create.
     * Create a date formatter.
     *
     * @param string $locale
     * @param int    $datetype
     * @param int    $timetype
     * @param mixed  $timezone = null
     * @param mixed  $calendar = null
     * @param string $pattern  = ''
     *
     * @return IntlDateFormatter
     *
     * @see http://php.net/manual/en/intldateformatter.create.php
     */
    public static function create(string $locale, int $datetype, int $timetype, mixed $timezone = null, mixed $calendar = null, string $pattern = ''): IntlDateFormatter
    {
    }

    /**
     * format.
     * Format the date/time value as a string.
     *
     * @param mixed $value
     *
     * @return string
     *
     * @see http://php.net/manual/en/intldateformatter.format.php
     */
    public function format(mixed $value): string
    {
    }

    /**
     * formatObject.
     * Formats an object.
     *
     * @param object $object
     * @param mixed  $format = null
     * @param string $locale = null
     *
     * @return string
     *
     * @see http://php.net/manual/en/intldateformatter.formatobject.php
     */
    public static function formatObject(object $object, mixed $format = null, string $locale = null): string
    {
    }

    /**
     * getCalendar.
     * Get the calendar type used for the IntlDateFormatter.
     *
     * @return int
     *
     * @see http://php.net/manual/en/intldateformatter.getcalendar.php
     */
    public function getCalendar(): int
    {
    }

    /**
     * getDateType.
     * Get the datetype used for the IntlDateFormatter.
     *
     * @return int
     *
     * @see http://php.net/manual/en/intldateformatter.getdatetype.php
     */
    public function getDateType(): int
    {
    }

    /**
     * getErrorCode.
     * Get the error code from last operation.
     *
     * @return int
     *
     * @see http://php.net/manual/en/intldateformatter.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * getErrorMessage.
     * Get the error text from the last operation.
     *
     * @return string
     *
     * @see http://php.net/manual/en/intldateformatter.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * getLocale.
     * Get the locale used by formatter.
     *
     * @param int $which (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/intldateformatter.getlocale.php
     */
    public function getLocale(int $which): string
    {
    }

    /**
     * getPattern.
     * Get the pattern used for the IntlDateFormatter.
     *
     * @return string
     *
     * @see http://php.net/manual/en/intldateformatter.getpattern.php
     */
    public function getPattern(): string
    {
    }

    /**
     * getTimeType.
     * Get the timetype used for the IntlDateFormatter.
     *
     * @return int
     *
     * @see http://php.net/manual/en/intldateformatter.gettimetype.php
     */
    public function getTimeType(): int
    {
    }

    /**
     * getTimeZoneId.
     * Get the timezone-id used for the IntlDateFormatter.
     *
     * @return string
     *
     * @see http://php.net/manual/en/intldateformatter.gettimezoneid.php
     */
    public function getTimeZoneId(): string
    {
    }

    /**
     * getCalendarObject.
     * Get copy of formatterʼs calendar object.
     *
     * @return IntlCalendar
     *
     * @see http://php.net/manual/en/intldateformatter.getcalendarobject.php
     */
    public function getCalendarObject(): IntlCalendar
    {
    }

    /**
     * getTimeZone.
     * Get formatterʼs timezone.
     *
     * @return IntlTimeZone
     *
     * @see http://php.net/manual/en/intldateformatter.gettimezone.php
     */
    public function getTimeZone(): IntlTimeZone
    {
    }

    /**
     * isLenient.
     * Get the lenient used for the IntlDateFormatter.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intldateformatter.islenient.php
     */
    public function isLenient(): bool
    {
    }

    /**
     * localtime.
     * Parse string to a field-based time value.
     *
     * @param string $value
     * @param int    &$position (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/intldateformatter.localtime.php
     */
    public function localtime(string $value, int &$position): array
    {
    }

    /**
     * parse.
     * Parse string to a timestamp value.
     *
     * @param string $value
     * @param int    &$position (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/intldateformatter.parse.php
     */
    public function parse(string $value, int &$position): int
    {
    }

    /**
     * setCalendar.
     * Sets the calendar type used by the formatter.
     *
     * @param mixed $which
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intldateformatter.setcalendar.php
     */
    public function setCalendar(mixed $which): bool
    {
    }

    /**
     * setLenient.
     * Set the leniency of the parser.
     *
     * @param bool $lenient
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intldateformatter.setlenient.php
     */
    public function setLenient(bool $lenient): bool
    {
    }

    /**
     * setPattern.
     * Set the pattern used for the IntlDateFormatter.
     *
     * @param string $pattern
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intldateformatter.setpattern.php
     */
    public function setPattern(string $pattern): bool
    {
    }

    /**
     * setTimeZoneId.
     * Sets the time zone to use.
     *
     * @param string $zone
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intldateformatter.settimezoneid.php
     */
    public function setTimeZoneId(string $zone): bool
    {
    }

    /**
     * setTimeZone.
     * Sets formatterʼs timezone.
     *
     * @param mixed $zone
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intldateformatter.settimezone.php
     */
    public function setTimeZone(mixed $zone): bool
    {
    }
}
