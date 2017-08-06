<?php

/**
 * Locale.
 * A "Locale" is an identifier used to get language, culture, or regionally-specific behavior from an API. PHP locales are organized and identified the same way that the CLDR locales used by ICU (and many vendors of Unix-like operating systems, the Mac, Java, and so forth) use. Locales are identified using RFC 4646 language tags (which use hyphen, not underscore) in addition to the more traditional underscore-using identifiers. Unless otherwise noted the functions in this class are tolerant of both formats.
 * Examples of identifiers include:
 *  en-US (English, United States)
 *  zh-Hant-TW (Chinese, Traditional Script, Taiwan)
 *  fr-CA, fr-FR (French for Canada and France respectively)
 * The Locale class (and related procedural functions) are used to interact with locale identifiers--to verify that an ID is well-formed, valid, etc. The extensions used by CLDR in UAX #35 (and inherited by ICU) are valid and used wherever they would be in ICU normally.
 * Locales cannot be instantiated as objects. All of the functions/methods provided are static.
 * The null or empty string obtains the "root" locale. The "root" locale is equivalent to "en_US_POSIX" in CLDR. Language tags (and thus locale identifiers) are case insensitive. There exists a canonicalization function to make case match the specification.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.locale.php
 */
class Locale
{
    /**
     * acceptFromHttp.
     * Tries to find out best available locale based on HTTP "Accept-Language" header.
     *
     * @param string $header
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.acceptfromhttp.php
     */
    public static function acceptFromHttp(string $header): string
    {
    }

    /**
     * canonicalize.
     * Canonicalize the locale string.
     *
     * @param string $locale
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.canonicalize.php
     */
    public static function canonicalize(string $locale): string
    {
    }

    /**
     * composeLocale.
     * Returns a correctly ordered and delimited locale ID.
     *
     * @param array $subtags
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.composelocale.php
     */
    public static function composeLocale(array $subtags): string
    {
    }

    /**
     * filterMatches.
     * Checks if a language tag filter matches with locale.
     *
     * @param string $langtag
     * @param string $locale
     * @param bool   $canonicalize = false
     *
     * @return bool
     *
     * @see http://php.net/manual/en/locale.filtermatches.php
     */
    public static function filterMatches(string $langtag, string $locale, bool $canonicalize = false): bool
    {
    }

    /**
     * getAllVariants.
     * Gets the variants for the input locale.
     *
     * @param string $locale
     *
     * @return array
     *
     * @see http://php.net/manual/en/locale.getallvariants.php
     */
    public static function getAllVariants(string $locale): array
    {
    }

    /**
     * getDefault.
     * Gets the default locale value from the INTL global 'default_locale'.
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.getdefault.php
     */
    public static function getDefault(): string
    {
    }

    /**
     * getDisplayLanguage.
     * Returns an appropriately localized display name for language of the inputlocale.
     *
     * @param string $locale
     * @param string $in_locale (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.getdisplaylanguage.php
     */
    public static function getDisplayLanguage(string $locale, string $in_locale): string
    {
    }

    /**
     * getDisplayName.
     * Returns an appropriately localized display name for the input locale.
     *
     * @param string $locale
     * @param string $in_locale (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.getdisplayname.php
     */
    public static function getDisplayName(string $locale, string $in_locale): string
    {
    }

    /**
     * getDisplayRegion.
     * Returns an appropriately localized display name for region of the input locale.
     *
     * @param string $locale
     * @param string $in_locale (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.getdisplayregion.php
     */
    public static function getDisplayRegion(string $locale, string $in_locale): string
    {
    }

    /**
     * getDisplayScript.
     * Returns an appropriately localized display name for script of the input locale.
     *
     * @param string $locale
     * @param string $in_locale (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.getdisplayscript.php
     */
    public static function getDisplayScript(string $locale, string $in_locale): string
    {
    }

    /**
     * getDisplayVariant.
     * Returns an appropriately localized display name for variants of the input locale.
     *
     * @param string $locale
     * @param string $in_locale (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.getdisplayvariant.php
     */
    public static function getDisplayVariant(string $locale, string $in_locale): string
    {
    }

    /**
     * getKeywords.
     * Gets the keywords for the input locale.
     *
     * @param string $locale
     *
     * @return array
     *
     * @see http://php.net/manual/en/locale.getkeywords.php
     */
    public static function getKeywords(string $locale): array
    {
    }

    /**
     * getPrimaryLanguage.
     * Gets the primary language for the input locale.
     *
     * @param string $locale
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.getprimarylanguage.php
     */
    public static function getPrimaryLanguage(string $locale): string
    {
    }

    /**
     * getRegion.
     * Gets the region for the input locale.
     *
     * @param string $locale
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.getregion.php
     */
    public static function getRegion(string $locale): string
    {
    }

    /**
     * getScript.
     * Gets the script for the input locale.
     *
     * @param string $locale
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.getscript.php
     */
    public static function getScript(string $locale): string
    {
    }

    /**
     * lookup.
     * Searches the language tag list for the best match to the language.
     *
     * @param array  $langtag
     * @param string $locale
     * @param bool   $canonicalize = false
     * @param string $default      (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/locale.lookup.php
     */
    public static function lookup(array $langtag, string $locale, bool $canonicalize = false, string $default): string
    {
    }

    /**
     * parseLocale.
     * Returns a key-value array of locale ID subtag elements.
     *
     * @param string $locale
     *
     * @return array
     *
     * @see http://php.net/manual/en/locale.parselocale.php
     */
    public static function parseLocale(string $locale): array
    {
    }

    /**
     * setDefault.
     * sets the default runtime locale.
     *
     * @param string $locale
     *
     * @return bool
     *
     * @see http://php.net/manual/en/locale.setdefault.php
     */
    public static function setDefault(string $locale): bool
    {
    }
}
