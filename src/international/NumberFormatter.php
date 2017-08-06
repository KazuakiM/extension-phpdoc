<?php

/**
 * NumberFormatter.
 * Programs store and operate on numbers using a locale-independent binary representation. When displaying or printing a number it is converted to a locale-specific string. For example, the number 12345.67 is "12,345.67" in the US, "12 345,67" in France and "12.345,67" in Germany.
 * By invoking the methods provided by the NumberFormatter class, you can format numbers, currencies, and percentages according to the specified or default locale. NumberFormatter is locale-sensitive so you need to create a new NumberFormatter for each locale. NumberFormatter methods format primitive-type numbers, such as double and output the number as a locale-specific string.
 * For currencies you can use currency format type to create a formatter that returns a string with the formatted number and the appropriate currency sign. Of course, the NumberFormatter class is unaware of exchange rates so, the number output is the same regardless of the specified currency. This means that the same number has different monetary values depending on the currency locale. If the number is 9988776.65 the results will be:
 *   9 988 776,65 € in France
 *   9.988.776,65 € in Germany
 *   $9,988,776.65 in the United States
 * In order to format percentages, create a locale-specific formatter with percentage format type. With this formatter, a decimal fraction such as 0.75 is displayed as 75%.
 * For more complex formatting, like spelled-out numbers, the rule-based number formatters are used.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.numberformatter.php
 */
class NumberFormatter
{
    /**
     * __construct.
     * Create a number formatter.
     *
     * @param string $locale
     * @param int    $style
     * @param string $pattern (optional)
     *
     * @see http://php.net/manual/en/numberformatter.create.php
     */
    public function __construct(string $locale, int $style, string $pattern)
    {
    }

    /**
     * create.
     * Create a number formatter.
     *
     * @param string $locale
     * @param int    $style
     * @param string $pattern (optional)
     *
     * @return NumberFormatter
     *
     * @see http://php.net/manual/en/numberformatter.create.php
     */
    public static function create(string $locale, int $style, string $pattern): NumberFormatter
    {
    }

    /**
     * formatCurrency.
     * Format a currency value.
     *
     * @param float  $value
     * @param string $currency
     *
     * @return string
     *
     * @see http://php.net/manual/en/numberformatter.formatcurrency.php
     */
    public function formatCurrency(float $value, string $currency): string
    {
    }

    /**
     * format.
     * Format a number.
     *
     * @param number $value
     * @param int    $type  (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/numberformatter.format.php
     */
    public function format(number $value, int $type): string
    {
    }

    /**
     * getAttribute.
     * Get an attribute.
     *
     * @param int $attr
     *
     * @return int
     *
     * @see http://php.net/manual/en/numberformatter.getattribute.php
     */
    public function getAttribute(int $attr): int
    {
    }

    /**
     * getErrorCode.
     * Get formatter's last error code.
     *
     * @return int
     *
     * @see http://php.net/manual/en/numberformatter.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * getErrorMessage.
     * Get formatter's last error message.
     *
     * @return string
     *
     * @see http://php.net/manual/en/numberformatter.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * getLocale.
     * Get formatter locale.
     *
     * @param int $type (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/numberformatter.getlocale.php
     */
    public function getLocale(int $type): string
    {
    }

    /**
     * getPattern.
     * Get formatter pattern.
     *
     * @return string
     *
     * @see http://php.net/manual/en/numberformatter.getpattern.php
     */
    public function getPattern(): string
    {
    }

    /**
     * getSymbol.
     * Get a symbol value.
     *
     * @param int $attr
     *
     * @return string
     *
     * @see http://php.net/manual/en/numberformatter.getsymbol.php
     */
    public function getSymbol(int $attr): string
    {
    }

    /**
     * getTextAttribute.
     * Get a text attribute.
     *
     * @param int $attr
     *
     * @return string
     *
     * @see http://php.net/manual/en/numberformatter.gettextattribute.php
     */
    public function getTextAttribute(int $attr): string
    {
    }

    /**
     * parseCurrency.
     * Parse a currency number.
     *
     * @param string $value
     * @param string &$currency
     * @param int    &$position (optional)
     *
     * @return float
     *
     * @see http://php.net/manual/en/numberformatter.parsecurrency.php
     */
    public function parseCurrency(string $value, string &$currency, int &$position): float
    {
    }

    /**
     * parse.
     * Parse a number.
     *
     * @param string $value
     * @param int    $type      (optional)
     * @param int    &$position (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/numberformatter.parse.php
     */
    public function parse(string $value, int $type, int &$position): mixed
    {
    }

    /**
     * setAttribute.
     * Set an attribute.
     *
     * @param int $attr
     * @param int $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/numberformatter.setattribute.php
     */
    public function setAttribute(int $attr, int $value): bool
    {
    }

    /**
     * setPattern.
     * Set formatter pattern.
     *
     * @param string $pattern
     *
     * @return bool
     *
     * @see http://php.net/manual/en/numberformatter.setpattern.php
     */
    public function setPattern(string $pattern): bool
    {
    }

    /**
     * setSymbol.
     * Set a symbol value.
     *
     * @param int    $attr
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/numberformatter.setsymbol.php
     */
    public function setSymbol(int $attr, string $value): bool
    {
    }

    /**
     * setTextAttribute.
     * Set a text attribute.
     *
     * @param int    $attr
     * @param string $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/numberformatter.settextattribute.php
     */
    public function setTextAttribute(int $attr, string $value): bool
    {
    }
}
