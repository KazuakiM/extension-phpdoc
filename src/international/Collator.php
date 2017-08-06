<?php

/**
 * Collator.
 * Provides string comparison capability with support for appropriate locale-sensitive sort orderings.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.collator.php
 */
class Collator
{
    /**
     * __construct.
     * Create a collator.
     *
     * @pram string $locale
     *
     * @see http://php.net/manual/en/collator.construct.php
     */
    public function __construct(string $locale)
    {
    }

    /**
     * asort.
     * Sort array maintaining index association.
     *
     * @pram array &$arr
     * @pram int $sort_flag (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/collator.asort.php
     */
    public function asort(array &$arr, int $sort_flag): bool
    {
    }

    /**
     * compare.
     * Compare two Unicode strings.
     *
     * @pram string $str1
     * @pram string $str2
     *
     * @return int
     *
     * @see http://php.net/manual/en/collator.compare.php
     */
    public function compare(string $str1, string $str2): int
    {
    }

    /**
     * create.
     * Create a collator.
     *
     * @pram string $locale
     *
     * @return Collator
     *
     * @see http://php.net/manual/en/collator.create.php
     */
    public static function create(string $locale): Collator
    {
    }

    /**
     * getAttribute.
     * Get collation attribute value.
     *
     * @pram int $attr
     *
     * @return int
     *
     * @see http://php.net/manual/en/collator.getattribute.php
     */
    public function getAttribute(int $attr): int
    {
    }

    /**
     * getErrorCode.
     * Get collator's last error code.
     *
     * @return int
     *
     * @see http://php.net/manual/en/collator.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * getErrorMessage.
     * Get text for collator's last error code.
     *
     * @return string
     *
     * @see http://php.net/manual/en/collator.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * getLocale.
     * Get the locale name of the collator.
     *
     * @pram int $type
     *
     * @return string
     *
     * @see http://php.net/manual/en/collator.getlocale.php
     */
    public function getLocale(int $type): string
    {
    }

    /**
     * getSortKey.
     * Get sorting key for a string.
     *
     * @pram string $str
     *
     * @return string
     *
     * @see http://php.net/manual/en/collator.getsortkey.php
     */
    public function getSortKey(string $str): string
    {
    }

    /**
     * getStrength.
     * Get current collation strength.
     *
     * @return int
     *
     * @see http://php.net/manual/en/collator.getstrength.php
     */
    public function getStrength(): int
    {
    }

    /**
     * setAttribute.
     * Set collation attribute.
     *
     * @pram int $attr
     * @pram int $val
     *
     * @return bool
     *
     * @see http://php.net/manual/en/collator.setattribute.php
     */
    public function setAttribute(int $attr, int $val): bool
    {
    }

    /**
     * setStrength.
     * Set collation strength.
     *
     * @pram int $strength
     *
     * @return bool
     *
     * @see http://php.net/manual/en/collator.setstrength.php
     */
    public function setStrength(int $strength): bool
    {
    }

    /**
     * sortWithSortKeys.
     * Sort array using specified collator and sort keys.
     *
     * @pram array &$arr
     *
     * @return bool
     *
     * @see http://php.net/manual/en/collator.sortwithsortkeys.php
     */
    public function sortWithSortKeys(array &$arr): bool
    {
    }

    /**
     * sort.
     * Sort array using specified collator.
     *
     * @pram array &$arr
     * @pram int $sort_flag (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/collator.sort.php
     */
    public function sort(array &$arr, int $sort_flag): bool
    {
    }
}
