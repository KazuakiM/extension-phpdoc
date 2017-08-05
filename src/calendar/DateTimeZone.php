<?php

/**
 * DateTimeZone.
 * Representation of time zone.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.datetimezone.php
 */
class DateTimeZone
{
    const AFRICA = 1;
    const AMERICA = 2;
    const ANTARCTICA = 4;
    const ARCTIC = 8;
    const ASIA = 16;
    const ATLANTIC = 32;
    const AUSTRALIA = 64;
    const EUROPE = 128;
    const INDIAN = 256;
    const PACIFIC = 512;
    const UTC = 1024;
    const ALL = 2047;
    const ALL_WITH_BC = 4095;
    const PER_COUNTRY = 4096;

    /**
     * __construct.
     * Creates new DateTimeZone object.
     *
     * @param string $timezone
     *
     * @throws Exception
     *
     * @see http://php.net/manual/en/datetimezone.construct.php
     */
    public function __construct(string $timezone)
    {
    }

    /**
     * getLocation.
     * Returns location information for a timezone.
     *
     * @return array
     *
     * @see http://php.net/manual/en/datetimezone.getlocation.php
     */
    public function getLocation(): array
    {
    }

    /**
     * getName.
     * Returns the name of the timezone.
     *
     * @return string
     *
     * @see http://php.net/manual/en/datetimezone.getname.php
     */
    public function getName(): string
    {
    }

    /**
     * getOffset.
     * Returns the timezone offset from GMT.
     *
     * @param DateTime $datetime
     *
     * @return int
     *
     * @see http://php.net/manual/en/datetimezone.getoffset.php
     */
    public function getOffset(DateTime $datetime): int
    {
    }

    /**
     * getTransitions.
     * Returns all transitions for the timezone.
     *
     * @param int $timestamp_begin (optional)
     * @param int $timestamp_end   (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/datetimezone.gettransitions.php
     */
    public function getTransitions(int $timestamp_begin, int $timestamp_end): array
    {
    }

    /**
     * listAbbreviations.
     * Returns associative array containing dst, offset and the timezone name.
     *
     * @return array
     *
     * @see http://php.net/manual/en/datetimezone.listabbreviations.php
     */
    public static function listAbbreviations(): array
    {
    }

    /**
     * listIdentifiers.
     * Returns a numerically indexed array containing all defined timezone identifiers.
     *
     * @param int    $what    = ALL
     * @param string $country = null
     *
     * @return array
     *
     * @see http://php.net/manual/en/datetimezone.listidentifiers.php
     */
    public static function listIdentifiers(int $what = ALL, string $country = null): array
    {
    }
}
