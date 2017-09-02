<?php

/**
 * IntlTimeZone.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.intltimezone.php
 */
class IntlTimeZone
{
    const DISPLAY_SHORT = 1;
    const DISPLAY_LONG = 2;

    /**
     * countEquivalentIDs.
     * Get the number of IDs in the equivalency group that includes the given ID.
     *
     * @param string $zoneId
     *
     * @return int
     *
     * @see http://php.net/manual/en/intltimezone.countequivalentids.php
     */
    public static function countEquivalentIDs(string $zoneId): int
    {
    }

    /**
     * createDefault.
     * Create a new copy of the default timezone for this host.
     *
     * @return IntlTimeZone
     *
     * @see http://php.net/manual/en/intltimezone.createdefault.php
     */
    public static function createDefault(): IntlTimeZone
    {
    }

    /**
     * createEnumeration.
     * Get an enumeration over time zone IDs associated with the given country or offset.
     *
     * @param mixed $countryOrRawOffset (optional)
     *
     * @return IntlIterator
     *
     * @see http://php.net/manual/en/intltimezone.createenumeration.php
     */
    public static function createEnumeration(mixed $countryOrRawOffset): IntlIterator
    {
    }

    /**
     * createTimeZone.
     * Create a timezone object for the given ID.
     *
     * @param string $zoneId
     *
     * @return IntlTimeZone
     *
     * @see http://php.net/manual/en/intltimezone.createtimezone.php
     */
    public static function createTimeZone(string $zoneId): IntlTimeZone
    {
    }

    /**
     * fromDateTimeZone.
     * Create a timezone object from DateTimeZone.
     *
     * @param DateTimeZone $zoneId
     *
     * @return IntlTimeZone
     *
     * @see http://php.net/manual/en/intltimezone.fromdatetimezone.php
     */
    public static function fromDateTimeZone(DateTimeZone $zoneId): IntlTimeZone
    {
    }

    /**
     * getCanonicalID.
     * Get the canonical system timezone ID or the normalized custom time zone ID for the given time zone ID.
     *
     * @param string $zoneId
     * @param bool   &$isSystemID (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/intltimezone.getcanonicalid.php
     */
    public static function getCanonicalID(string $zoneId, bool &$isSystemID): string
    {
    }

    /**
     * getDisplayName.
     * Get a name of this time zone suitable for presentation to the user.
     *
     * @param bool   $isDaylight (optional)
     * @param int    $style      (optional)
     * @param string $locale     (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/intltimezone.getdisplayname.php
     */
    public function getDisplayName(bool $isDaylight, int $style, string $locale): string
    {
    }

    /**
     * getDSTSavings.
     * Get the amount of time to be added to local standard time to get local wall clock time.
     *
     * @return int
     *
     * @see http://php.net/manual/en/intltimezone.getdstsavings.php
     */
    public function getDSTSavings(): int
    {
    }

    /**
     * getEquivalentID.
     * Get an ID in the equivalency group that includes the given ID.
     *
     * @param string $zoneId
     * @param int    $index
     *
     * @return string
     *
     * @see http://php.net/manual/en/intltimezone.getequivalentid.php
     */
    public static function getEquivalentID(string $zoneId, int $index): string
    {
    }

    /**
     * getErrorCode.
     * Get last error code on the object.
     *
     * @return int
     *
     * @see http://php.net/manual/en/intltimezone.geterrorcode.php
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
     * @see http://php.net/manual/en/intltimezone.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * getGMT.
     * Create GMT (UTC) timezone.
     *
     * @return IntlTimeZone
     *
     * @see http://php.net/manual/en/intltimezone.getgmt.php
     */
    public static function getGMT(): IntlTimeZone
    {
    }

    /**
     * getID.
     * Get timezone ID.
     *
     * @return string
     *
     * @see http://php.net/manual/en/intltimezone.getid.php
     */
    public function getID(): string
    {
    }

    /**
     * getOffset.
     * Get the time zone raw and GMT offset for the given moment in time.
     *
     * @param float $date
     * @param bool  $local
     * @param int   &$rawOffset
     * @param int   &$dstOffset
     *
     * @return int
     *
     * @see http://php.net/manual/en/intltimezone.getoffset.php
     */
    public function getOffset(float $date, bool $local, int &$rawOffset, int &$dstOffset): int
    {
    }

    /**
     * getRawOffset.
     * Get the raw GMT offset (before taking daylight savings time into account.
     *
     * @return int
     *
     * @see http://php.net/manual/en/intltimezone.getrawoffset.php
     */
    public function getRawOffset(): int
    {
    }

    /**
     * getTZDataVersion.
     * Get the timezone data version currently used by ICU.
     *
     * @return string
     *
     * @see http://php.net/manual/en/intltimezone.gettzdataversion.php
     */
    public static function getTZDataVersion(): string
    {
    }

    /**
     * hasSameRules.
     * Check if this zone has the same rules and offset as another zone.
     *
     * @param IntlTimeZone $otherTimeZone
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intltimezone.hassamerules.php
     */
    public function hasSameRules(IntlTimeZone $otherTimeZone): bool
    {
    }

    /**
     * toDateTimeZone.
     * Convert to DateTimeZone object.
     *
     * @return DateTimeZone
     *
     * @see http://php.net/manual/en/intltimezone.todatetimezone.php
     */
    public function toDateTimeZone(): DateTimeZone
    {
    }

    /**
     * useDaylightTime.
     * Check if this time zone uses daylight savings time.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/intltimezone.usedaylighttime.php
     */
    public function useDaylightTime(): bool
    {
    }
}
