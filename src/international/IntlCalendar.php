<?php

/**
 * IntlCalendar.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.intlcalendar.php
 */
class IntlCalendar
{
    const FIELD_ERA = 0;
    const FIELD_YEAR = 1;
    const FIELD_MONTH = 2;
    const FIELD_WEEK_OF_YEAR = 3;
    const FIELD_WEEK_OF_MONTH = 4;
    const FIELD_DATE = 5;
    const FIELD_DAY_OF_YEAR = 6;
    const FIELD_DAY_OF_WEEK = 7;
    const FIELD_DAY_OF_WEEK_IN_MONTH = 8;
    const FIELD_AM_PM = 9;
    const FIELD_HOUR = 10;
    const FIELD_HOUR_OF_DAY = 11;
    const FIELD_MINUTE = 12;
    const FIELD_SECOND = 13;
    const FIELD_MILLISECOND = 14;
    const FIELD_ZONE_OFFSET = 15;
    const FIELD_DST_OFFSET = 16;
    const FIELD_YEAR_WOY = 17;
    const FIELD_DOW_LOCAL = 18;
    const FIELD_EXTENDED_YEAR = 19;
    const FIELD_JULIAN_DAY = 20;
    const FIELD_MILLISECONDS_IN_DAY = 21;
    const FIELD_IS_LEAP_MONTH = 22;
    const FIELD_FIELD_COUNT = 23;
    const FIELD_DAY_OF_MONTH = 5;
    const DOW_SUNDAY = 1;
    const DOW_MONDAY = 2;
    const DOW_TUESDAY = 3;
    const DOW_WEDNESDAY = 4;
    const DOW_THURSDAY = 5;
    const DOW_FRIDAY = 6;
    const DOW_SATURDAY = 7;
    const DOW_TYPE_WEEKDAY = 0;
    const DOW_TYPE_WEEKEND = 1;
    const DOW_TYPE_WEEKEND_OFFSET = 2;
    const DOW_TYPE_WEEKEND_CEASE = 3;
    const WALLTIME_FIRST = 1;
    const WALLTIME_LAST = 0;
    const WALLTIME_NEXT_VALID = 2;

    /**
     * __construct.
     * Private constructor for disallowing instantiation.
     *
     * @see http://php.net/manual/en/intlcalendar.construct.php
     */
    private function __construct()
    {
    }

    /**
     * add.
     * Add a (signed) amount of time to a field.
     *
     * @param int $field
     * @param int $amount
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.add.php
     */
    public function add(int $field, int $amount): bool
    {
    }

    /**
     * after.
     * Whether this objectʼs time is after that of the passed object.
     *
     * @param IntlCalendar $other
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.after.php
     */
    public function after(IntlCalendar $other): bool
    {
    }

    /**
     * before.
     * Whether this objectʼs time is before that of the passed object.
     *
     * @param IntlCalendar $other
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.before.php
     */
    public function before(IntlCalendar $other): bool
    {
    }

    /**
     * clear.
     * Clear a field or all fields.
     *
     * @param int $field = null
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.clear.php
     */
    public function clear(int $field = null): bool
    {
    }

    /**
     * createInstance.
     * Create a new IntlCalendar.
     *
     * @param mixed  $timeZone = null
     * @param string $locale   = ''
     *
     * @return IntlCalendar
     *
     * @see http://php.net/manual/en/intlcalendar.createinstance.php
     */
    public static function createInstance(mixed $timeZone = null, string $locale = ''): IntlCalendar
    {
    }

    /**
     * equals.
     * time of two IntlCalendar objects for equality.
     *
     * @param IntlCalendar $other
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.equals.php
     */
    public function equals(IntlCalendar $other): bool
    {
    }

    /**
     * fieldDifference.
     * Calculate difference between given time and this objectʼs time.
     *
     * @param float $when
     * @param int   $field
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.fielddifference.php
     */
    public function fieldDifference(float $when, int $field): int
    {
    }

    /**
     * fromDateTime.
     * Create an IntlCalendar from a DateTime object or string.
     *
     * @param mixed $dateTime
     *
     * @return IntlCalendar
     *
     * @see http://php.net/manual/en/intlcalendar.fromdatetime.php
     */
    public static function fromDateTime(mixed $dateTime): IntlCalendar
    {
    }

    /**
     * get.
     * Get the value for a field.
     *
     * @param int $field
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.get.php
     */
    public function get(int $field): int
    {
    }

    /**
     * getActualMaximum.
     * The maximum value for a field, considering the objectʼs current time.
     *
     * @param int $field
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.getactualmaximum.php
     */
    public function getActualMaximum(int $field): int
    {
    }

    /**
     * getActualMinimum.
     * The minimum value for a field, considering the objectʼs current time.
     *
     * @param int $field
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.getactualminimum.php
     */
    public function getActualMinimum(int $field): int
    {
    }

    /**
     * getAvailableLocales.
     * Get array of locales for which there is data.
     *
     * @return array
     *
     * @see http://php.net/manual/en/intlcalendar.getavailablelocales.php
     */
    public static function getAvailableLocales(): array
    {
    }

    /**
     * getDayOfWeekType.
     * Tell whether a day is a weekday, weekend or a day that has a transition between the two.
     *
     * @param int $dayOfWeek
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.getdayofweektype.php
     */
    public function getDayOfWeekType(int $dayOfWeek): int
    {
    }

    /**
     * getErrorCode.
     * Get last error code on the object.
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * getErrorMessage.
     * Get last error message on the object.
     *
     * @return string
     *
     * @see http://php.net/manual/en/intlcalendar.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * getFirstDayOfWeek.
     * Get the first day of the week for the calendarʼs locale.
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.getfirstdayofweek.php
     */
    public function getFirstDayOfWeek(): int
    {
    }

    /**
     * getGreatestMinimum.
     * Get the largest local minimum value for a field.
     *
     * @param int $field
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.getgreatestminimum.php
     */
    public function getGreatestMinimum(int $field): int
    {
    }

    /**
     * getKeywordValuesForLocale.
     * Get set of locale keyword values.
     *
     * @param string $key
     * @param string $locale
     * @param bool   $commonlyUsed
     *
     * @return Iterator
     *
     * @see http://php.net/manual/en/intlcalendar.getkeywordvaluesforlocale.php
     */
    public static function getKeywordValuesForLocale(string $key, string $locale, bool $commonlyUsed): Iterator
    {
    }

    /**
     * getLeastMaximum.
     * Get the smallest local maximum for a field.
     *
     * @param int $field
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.getleastmaximum.php
     */
    public function getLeastMaximum(int $field): int
    {
    }

    /**
     * getLocale.
     * Get the locale associated with the object.
     *
     * @param int $localeType
     *
     * @return string
     *
     * @see http://php.net/manual/en/intlcalendar.getlocale.php
     */
    public function getLocale(int $localeType): string
    {
    }

    /**
     * getMaximum.
     * Get the global maximum value for a field.
     *
     * @param int $field
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.getmaximum.php
     */
    public function getMaximum(int $field): int
    {
    }

    /**
     * getMinimalDaysInFirstWeek.
     * Get minimal number of days the first week in a year or month can have.
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.getminimaldaysinfirstweek.php
     */
    public function getMinimalDaysInFirstWeek(): int
    {
    }

    /**
     * getMinimum.
     * Get the global minimum value for a field.
     *
     * @param int $field
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.getminimum.php
     */
    public function getMinimum(int $field): int
    {
    }

    /**
     * getNow.
     * Get number representing the current time.
     *
     * @return float
     *
     * @see http://php.net/manual/en/intlcalendar.getnow.php
     */
    public static function getNow(): float
    {
    }

    /**
     * getRepeatedWallTimeOption.
     * Get behavior for handling repeating wall time.
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.getrepeatedwalltimeoption.php
     */
    public function getRepeatedWallTimeOption(): int
    {
    }

    /**
     * getSkippedWallTimeOption.
     * Get behavior for handling skipped wall time.
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.getskippedwalltimeoption.php
     */
    public function getSkippedWallTimeOption(): int
    {
    }

    /**
     * getTime.
     * Get time currently represented by the object.
     *
     * @return float
     *
     * @see http://php.net/manual/en/intlcalendar.gettime.php
     */
    public function getTime(): float
    {
    }

    /**
     * getTimeZone.
     * Get the objectʼs timezone.
     *
     * @return IntlTimeZone
     *
     * @see http://php.net/manual/en/intlcalendar.gettimezone.php
     */
    public function getTimeZone(): IntlTimeZone
    {
    }

    /**
     * getType.
     * Get the calendar type.
     *
     * @return string
     *
     * @see http://php.net/manual/en/intlcalendar.gettype.php
     */
    public function getType(): string
    {
    }

    /**
     * getWeekendTransition.
     * Get time of the day at which weekend begins or ends.
     *
     * @param string $dayOfWeek
     *
     * @return int
     *
     * @see http://php.net/manual/en/intlcalendar.getweekendtransition.php
     */
    public function getWeekendTransition(string $dayOfWeek): int
    {
    }

    /**
     * inDaylightTime.
     * Whether the objectʼs time is in Daylight Savings Time.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.indaylighttime.php
     */
    public function inDaylightTime(): bool
    {
    }

    /**
     * isEquivalentTo.
     * Whether another calendar is equal but for a different time.
     *
     * @param IntlCalendar $other
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.isequivalentto.php
     */
    public function isEquivalentTo(IntlCalendar $other): bool
    {
    }

    /**
     * isLenient.
     * Whether date/time interpretation is in lenient mode.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.islenient.php
     */
    public function isLenient(): bool
    {
    }

    /**
     * isSet.
     * Whether a field is set.
     *
     * @param int $field
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.isset.php
     */
    public function isSet(int $field): bool
    {
    }

    /**
     * isWeekend.
     * Whether a certain date/time is in the weekend.
     *
     * @param float $date = null
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.isweekend.php
     */
    public function isWeekend(float $date = null): bool
    {
    }

    /**
     * roll.
     * Add value to field without carrying into more significant fields.
     *
     * @param int   $field
     * @param mixed $amountOrUpOrDown
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.roll.php
     */
    public function roll(int $field, mixed $amountOrUpOrDown): bool
    {
    }

    /**
     * set.
     * Set a time field or several common fields at once.
     *
     * @param int $year
     * @param int $month
     * @param int $dayOfMonth = null
     * @param int $hour       = null
     * @param int $minute     = null
     * @param int $second     = null
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.set.php
     */
    public function set(int $year, int $month, int $dayOfMonth = null, int $hour = null, int $minute = null, int $second = null): bool
    {
    }

    /**
     * setFirstDayOfWeek.
     * Set the day on which the week is deemed to start.
     *
     * @param int $dayOfWeek
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.setfirstdayofweek.php
     */
    public function setFirstDayOfWeek(int $dayOfWeek): bool
    {
    }

    /**
     * setLenient.
     * Set whether date/time interpretation is to be lenient.
     *
     * @param string $isLenient
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlcalendar.setlenient.php
     */
    public function setLenient(string $isLenient): ReturnType
    {
    }

    /**
     * setMinimalDaysInFirstWeek.
     * Set minimal number of days the first week in a year or month can have.
     *
     * @param int $minimalDays
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.setminimaldaysinfirstweek.php
     */
    public function setMinimalDaysInFirstWeek(int $minimalDays): bool
    {
    }

    /**
     * setRepeatedWallTimeOption.
     * Set behavior for handling repeating wall times at negative timezone offset transitions.
     *
     * @param int $wallTimeOption
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.setrepeatedwalltimeoption.php
     */
    public function setRepeatedWallTimeOption(int $wallTimeOption): bool
    {
    }

    /**
     * setSkippedWallTimeOption.
     * Set behavior for handling skipped wall times at positive timezone offset transitions.
     *
     * @param int $wallTimeOption
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.setskippedwalltimeoption.php
     */
    public function setSkippedWallTimeOption(int $wallTimeOption): bool
    {
    }

    /**
     * setTime.
     * Set the calendar time in milliseconds since the epoch.
     *
     * @param float $date
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.settime.php
     */
    public function setTime(float $date): bool
    {
    }

    /**
     * setTimeZone.
     * Set the timezone used by this calendar.
     *
     * @param mixed $timeZone
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intlcalendar.settimezone.php
     */
    public function setTimeZone(mixed $timeZone): bool
    {
    }

    /**
     * toDateTime.
     * Convert an IntlCalendar into a DateTime object.
     *
     * @return DateTime
     *
     * @see http://php.net/manual/en/intlcalendar.todatetime.php
     */
    public function toDateTime(): DateTime
    {
    }
}
