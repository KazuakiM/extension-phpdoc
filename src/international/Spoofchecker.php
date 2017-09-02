<?php

/**
 * Spoofchecker.
 * This class is provided because Unicode contains large number of characters and incorporates the varied writing systems of the world and their incorrect usage can expose programs or systems to possible security attacks using characters similarity.
 * Provided methods alllow to check whether an individual string is likely an attempt at confusing the reader (spoof detection), such as "pаypаl" spelled with Cyrillic 'а' characters.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.spoofchecker.php
 */
class Spoofchecker
{
    const SINGLE_SCRIPT_CONFUSABLE = 1;
    const MIXED_SCRIPT_CONFUSABLE = 2;
    const WHOLE_SCRIPT_CONFUSABLE = 4;
    const ANY_CASE = 8;
    const SINGLE_SCRIPT = 16;
    const INVISIBLE = 32;
    const CHAR_LIMIT = 64;

    /**
     * __construct.
     * Constructor.
     *
     * @see http://php.net/manual/en/spoofchecker.construct.php
     */
    public function __construct()
    {
    }

    /**
     * areConfusable.
     * Checks if given strings can be confused.
     *
     * @param string $str1
     * @param string $str2
     * @param string &$error (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/spoofchecker.areconfusable.php
     */
    public function areConfusable(string $str1, string $str2, string &$error): bool
    {
    }

    /**
     * isSuspicious.
     * Checks if a given text contains any suspicious characters.
     *
     * @param string $text
     * @param string &$error (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/spoofchecker.issuspicious.php
     */
    public function isSuspicious(string $text, string &$error): bool
    {
    }

    /**
     * setAllowedLocales.
     * Locales to use when running checks.
     *
     * @param string $locale_list
     *
     * @see http://php.net/manual/en/spoofchecker.setallowedlocales.php
     */
    public function setAllowedLocales(string $locale_list): void
    {
    }

    /**
     * setChecks.
     * Set the checks to run.
     *
     * @param long $checks
     *
     * @see http://php.net/manual/en/spoofchecker.setchecks.php
     */
    public function setChecks(long $checks): void
    {
    }
}
