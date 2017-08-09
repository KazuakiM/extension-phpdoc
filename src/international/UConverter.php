<?php

/**
 * UConverter.
 *
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.uconverter.php
 */
class UConverter
{
    const REASON_UNASSIGNED = 0;
    const REASON_ILLEGAL = 1;
    const REASON_IRREGULAR = 2;
    const REASON_RESET = 3;
    const REASON_CLOSE = 4;
    const REASON_CLONE = 5;
    const UNSUPPORTED_CONVERTER = -1;
    const SBCS = 0;
    const DBCS = 1;
    const MBCS = 2;
    const LATIN_1 = 3;
    const UTF8 = 4;
    const UTF16_BigEndian = 5;
    const UTF16_LittleEndian = 6;
    const UTF32_BigEndian = 7;
    const UTF32_LittleEndian = 8;
    const EBCDIC_STATEFUL = 9;
    const ISO_2022 = 10;
    const LMBCS_1 = 11;
    const LMBCS_2 = 12;
    const LMBCS_3 = 13;
    const LMBCS_4 = 14;
    const LMBCS_5 = 15;
    const LMBCS_6 = 16;
    const LMBCS_8 = 17;
    const LMBCS_11 = 18;
    const LMBCS_16 = 19;
    const LMBCS_17 = 20;
    const LMBCS_18 = 21;
    const LMBCS_19 = 22;
    const LMBCS_LAST = 22;
    const HZ = 23;
    const SCSU = 24;
    const ISCII = 25;
    const US_ASCII = 26;
    const UTF7 = 27;
    const BOCU1 = 28;
    const UTF16 = 29;
    const UTF32 = 30;
    const CESU8 = 31;
    const IMAP_MAILBOX = 32;

    /**
     * __construct.
     * Create UConverter object.
     *
     * @param string $destination_encoding (optional)
     * @param string $source_encoding      (optional)
     *
     * @see http://php.net/manual/en/uconverter.construct.php
     */
    public function __construct(string $destination_encoding, string $source_encoding)
    {
    }

    /**
     * convert.
     * Convert string from one charset to another.
     *
     * @param string $str
     * @param bool   $reverse (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/uconverter.convert.php
     */
    public function convert(string $str, bool $reverse): string
    {
    }

    /**
     * fromUCallback.
     * Default "from" callback function.
     *
     * @param int    $reason
     * @param string $source
     * @param string $codePoint
     * @param int    &$error
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/uconverter.fromucallback.php
     */
    public function fromUCallback(int $reason, string $source, string $codePoint, int &$error): mixed
    {
    }

    /**
     * getAliases.
     * Get the aliases of the given name.
     *
     * @param string $name (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/uconverter.getaliases.php
     */
    public static function getAliases(string $name): array
    {
    }

    /**
     * getAvailable.
     * Get the available canonical converter names.
     *
     * @return array
     *
     * @see http://php.net/manual/en/uconverter.getavailable.php
     */
    public static function getAvailable(): array
    {
    }

    /**
     * getDestinationEncoding.
     * Get the destination encoding.
     *
     * @return string
     *
     * @see http://php.net/manual/en/uconverter.getdestinationencoding.php
     */
    public function getDestinationEncoding(): string
    {
    }

    /**
     * getDestinationType.
     * Get the destination converter type.
     *
     * @return int
     *
     * @see http://php.net/manual/en/uconverter.getdestinationtype.php
     */
    public function getDestinationType(): int
    {
    }

    /**
     * getErrorCode.
     * Get last error code on the object.
     *
     * @return int
     *
     * @see http://php.net/manual/en/uconverter.geterrorcode.php
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
     * @see http://php.net/manual/en/uconverter.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * getSourceEncoding.
     * Get the source encoding.
     *
     * @return string
     *
     * @see http://php.net/manual/en/uconverter.getsourceencoding.php
     */
    public function getSourceEncoding(): string
    {
    }

    /**
     * getSourceType.
     * Get the source convertor type.
     *
     * @return int
     *
     * @see http://php.net/manual/en/uconverter.getsourcetype.php
     */
    public function getSourceType(): int
    {
    }

    /**
     * getStandards.
     * Get standards associated to converter names.
     *
     * @return array
     *
     * @see http://php.net/manual/en/uconverter.getstandards.php
     */
    public static function getStandards(): array
    {
    }

    /**
     * getSubstChars.
     * Get substitution chars.
     *
     * @return string
     *
     * @see http://php.net/manual/en/uconverter.getsubstchars.php
     */
    public function getSubstChars(): string
    {
    }

    /**
     * reasonText.
     * Get string representation of the callback reason.
     *
     * @param int $reason
     *
     * @return string
     *
     * @see http://php.net/manual/en/uconverter.reasontext.php
     */
    public static function reasonText(int $reason): string
    {
    }

    /**
     * setDestinationEncoding.
     * Set the destination encoding.
     *
     * @param string $encoding
     *
     * @see http://php.net/manual/en/uconverter.setdestinationencoding.php
     */
    public function setDestinationEncoding(string $encoding): void
    {
    }

    /**
     * setSourceEncoding.
     * Set the source encoding.
     *
     * @param string $encoding
     *
     * @see http://php.net/manual/en/uconverter.setsourceencoding.php
     */
    public function setSourceEncoding(string $encoding): void
    {
    }

    /**
     * setSubstChars.
     * Set the substitution chars.
     *
     * @param string $chars
     *
     * @see http://php.net/manual/en/uconverter.setsubstchars.php
     */
    public function setSubstChars(string $chars): void
    {
    }

    /**
     * toUCallback.
     * Default "to" callback function.
     *
     * @param int    $reason
     * @param string $source
     * @param string $codeUnits
     * @param int    &$error
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/uconverter.toucallback.php
     */
    public function toUCallback(int $reason, string $source, string $codeUnits, int &$error): mixed
    {
    }

    /**
     * transcode.
     * Convert string from one charset to another.
     *
     * @param string $str
     * @param string $toEncoding
     * @param string $fromEncoding
     * @param array  $options      (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/uconverter.transcode.php
     */
    public static function transcode(string $str, string $toEncoding, string $fromEncoding, array $options): string
    {
    }
}
