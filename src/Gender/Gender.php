<?php

/**
 * Gender\Gender.
 *
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.gender.php
 */

namespace Gender;

class Gender
{
    const IS_FEMALE = 70;
    const IS_MOSTLY_FEMALE = 102;
    const IS_MALE = 77;
    const IS_MOSTLY_MALE = 109;
    const IS_UNISEX_NAME = 63;
    const IS_A_COUPLE = 67;
    const NAME_NOT_FOUND = 32;
    const ERROR_IN_NAME = 69;
    const ANY_COUNTRY = 0;
    const BRITAIN = 1;
    const IRELAND = 2;
    const USA = 3;
    const SPAIN = 4;
    const PORTUGAL = 5;
    const ITALY = 6;
    const MALTA = 7;
    const FRANCE = 8;
    const BELGIUM = 9;
    const LUXEMBOURG = 10;
    const NETHERLANDS = 11;
    const GERMANY = 12;
    const EAST_FRISIA = 13;
    const AUSTRIA = 14;
    const SWISS = 15;
    const ICELAND = 16;
    const DENMARK = 17;
    const NORWAY = 18;
    const SWEDEN = 19;
    const FINLAND = 20;
    const ESTONIA = 21;
    const LATVIA = 22;
    const LITHUANIA = 23;
    const POLAND = 24;
    const CZECH_REP = 25;
    const SLOVAKIA = 26;
    const HUNGARY = 27;
    const ROMANIA = 28;
    const BULGARIA = 29;
    const BOSNIA = 30;
    const CROATIA = 31;
    const KOSOVO = 32;
    const MACEDONIA = 33;
    const MONTENEGRO = 34;
    const SERBIA = 35;
    const SLOVENIA = 36;
    const ALBANIA = 37;
    const GREECE = 38;
    const RUSSIA = 39;
    const BELARUS = 40;
    const MOLDOVA = 41;
    const UKRAINE = 42;
    const ARMENIA = 43;
    const AZERBAIJAN = 44;
    const GEORGIA = 45;
    const KAZAKH_UZBEK = 46;
    const TURKEY = 47;
    const ARABIA = 48;
    const ISRAEL = 49;
    const CHINA = 50;
    const INDIA = 51;
    const JAPAN = 52;
    const KOREA = 53;

    /**
     * __construct.
     * Construct the Gender object.
     *
     * @param string $dsn (optional)
     *
     * @see http://php.net/manual/en/gender-gender.construct.php
     */
    public function __construct(string $dsn)
    {
    }

    /**
     * connect.
     * Connect to an external name dictionary.
     *
     * @param string $dsn
     *
     * @return bool
     *
     * @see http://php.net/manual/en/gender-gender.connect.php
     */
    public function connect(string $dsn): bool
    {
    }

    /**
     * country.
     * Get textual country representation.
     *
     * @param int $country
     *
     * @return array
     *
     * @see http://php.net/manual/en/gender-gender.country.php
     */
    public function country(int $country): array
    {
    }

    /**
     * get.
     * Get gender of a name.
     *
     * @param string $name
     * @param int    $country (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/gender-gender.get.php
     */
    public function get(string $name, int $country): int
    {
    }

    /**
     * isNick.
     * Check if the name0 is an alias of the name1.
     *
     * @param string $name0
     * @param string $name1
     * @param int    $country (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/gender-gender.isnick.php
     */
    public function isNick(string $name0, string $name1, int $country): array
    {
    }

    /**
     * similarNames.
     * Get similar names.
     *
     * @param string $name
     * @param int    $country (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/gender-gender.similarnames.php
     */
    public function similarNames(string $name, int $country): array
    {
    }
}
