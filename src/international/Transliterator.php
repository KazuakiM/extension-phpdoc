<?php

/**
 * Transliterator.
 * Transliterator provides transliteration of strings.
 *
 * @property string $id
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.transliterator.php
 */
class Transliterator
{
    const FORWARD = 0;
    const REVERSE = 1;

    public $id;

    /**
     * __construct.
     * Private constructor to deny instantiation.
     *
     * @see http://php.net/manual/en/transliterator.construct.php
     */
    public function __construct()
    {
    }

    /**
     * create.
     * Create a transliterator.
     *
     * @param string $id
     * @param int    $direction (optional)
     *
     * @return Transliterator
     *
     * @see http://php.net/manual/en/transliterator.create.php
     */
    public static function create(string $id, int $direction): Transliterator
    {
    }

    /**
     * createFromRules.
     * Create transliterator from rules.
     *
     * @param string $rules
     * @param string $direction (optional)
     *
     * @return Transliterator
     *
     * @see http://php.net/manual/en/transliterator.createfromrules.php
     */
    public static function createFromRules(string $rules, string $direction): Transliterator
    {
    }

    /**
     * createInverse.
     * Create an inverse transliterator.
     *
     * @return Transliterator
     *
     * @see http://php.net/manual/en/transliterator.createinverse.php
     */
    public function createInverse(): Transliterator
    {
    }

    /**
     * getErrorCode.
     * Get last error code.
     *
     * @return int
     *
     * @see http://php.net/manual/en/transliterator.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * getErrorMessage.
     * Get last error message.
     *
     * @return string
     *
     * @see http://php.net/manual/en/transliterator.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * listIDs.
     * Get transliterator IDs.
     *
     * @return array
     *
     * @see http://php.net/manual/en/transliterator.listids.php
     */
    public static function listIDs(): array
    {
    }

    /**
     * transliterate.
     * Transliterate a string.
     *
     * @param string $subject
     * @param int    $start   (optional)
     * @param int    $end     (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/transliterator.transliterate.php
     */
    public function transliterate(string $subject, int $start, int $end): string
    {
    }
}
