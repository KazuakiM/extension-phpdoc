<?php

/**
 * MessageFormatter.
 * MessageFormatter is a concrete class that enables users to produce concatenated, language-neutral messages. The methods supplied in this class are used to build all the messages that are seen by end users.
 * The MessageFormatter class assembles messages from various fragments (such as text fragments, numbers, and dates) supplied by the program. Because of the MessageFormatter class, the program does not need to know the order of the fragments. The class uses the formatting specifications for the fragments to assemble them into a message that is contained in a single string within a resource bundle. For example, MessageFormatter enables you to print the phrase "Finished printing x out of y files..." in a manner that still allows for flexibility in translation.
 * Previously, an end user message was created as a sentence and handled as a string. This procedure created problems for localizers because the sentence structure, word order, number format and so on are very different from language to language. The language-neutral way to create messages keeps each part of the message separate and provides keys to the data. Using these keys, the MessageFormatter class can concatenate the parts of the message, localize them, and display a well-formed string to the end user.
 * MessageFormatter takes a set of objects, formats them, and then inserts the formatted strings into the pattern at the appropriate places. Choice formats can be used in conjunction with MessageFormatter to handle plurals, match numbers, and select from an array of items. Typically, the message format will come from resources and the arguments will be dynamically set at runtime.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.messageformatter.php
 */
class MessageFormatter
{
    /**
     * __construct.
     * Constructs a new Message Formatter.
     *
     * @param string $locale
     * @param string $pattern
     *
     * @see http://php.net/manual/en/messageformatter.create.php
     */
    public function __construct(string $locale, string $pattern)
    {
    }

    /**
     * create.
     * Constructs a new Message Formatter.
     *
     * @param string $locale
     * @param string $pattern
     *
     * @return MessageFormatter
     *
     * @see http://php.net/manual/en/messageformatter.create.php
     */
    public static function create(string $locale, string $pattern): MessageFormatter
    {
    }

    /**
     * formatMessage.
     * Quick format message.
     *
     * @param string $locale
     * @param string $pattern
     * @param array  $args
     *
     * @return string
     *
     * @see http://php.net/manual/en/messageformatter.formatmessage.php
     */
    public static function formatMessage(string $locale, string $pattern, array $args): string
    {
    }

    /**
     * format.
     * Format the message.
     *
     * @param array $args
     *
     * @return string
     *
     * @see http://php.net/manual/en/messageformatter.format.php
     */
    public function format(array $args): string
    {
    }

    /**
     * getErrorCode.
     * Get the error code from last operation.
     *
     * @return int
     *
     * @see http://php.net/manual/en/messageformatter.geterrorcode.php
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
     * @see http://php.net/manual/en/messageformatter.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * getLocale.
     * Get the locale for which the formatter was created.
     *
     * @return string
     *
     * @see http://php.net/manual/en/messageformatter.getlocale.php
     */
    public function getLocale(): string
    {
    }

    /**
     * getPattern.
     * Get the pattern used by the formatter.
     *
     * @return string
     *
     * @see http://php.net/manual/en/messageformatter.getpattern.php
     */
    public function getPattern(): string
    {
    }

    /**
     * parseMessage.
     * Quick parse input string.
     *
     * @param string $locale
     * @param string $pattern
     * @param string $source
     *
     * @return array
     *
     * @see http://php.net/manual/en/messageformatter.parsemessage.php
     */
    public static function parseMessage(string $locale, string $pattern, string $source): array
    {
    }

    /**
     * parse.
     * Parse input string according to pattern.
     *
     * @param string $value
     *
     * @return array
     *
     * @see http://php.net/manual/en/messageformatter.parse.php
     */
    public function parse(string $value): array
    {
    }

    /**
     * setPattern.
     * Set the pattern used by the formatter.
     *
     * @param string $pattern
     *
     * @return bool
     *
     * @see http://php.net/manual/en/messageformatter.setpattern.php
     */
    public function setPattern(string $pattern): bool
    {
    }
}
