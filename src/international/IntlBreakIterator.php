<?php

/**
 * IntlBreakIterator.
 * A “break iterator” is an ICU object that exposes methods for locating boundaries in text (e.g. word or sentence boundaries). The PHP IntlBreakIterator serves as the base class for all types of ICU break iterators. Where extra functionality is available, the intl extension may expose the ICU break iterator with suitable subclasses, such as IntlRuleBasedBreakIterator or IntlCodePointBreaIterator.
 * This class implements Traversable. Traversing an IntlBreakIterator yields non-negative integer values representing the successive locations of the text boundaries, expressed as UTF-8 code units (byte) counts, taken from the beggining of the text (which has the location 0). The keys yielded by the iterator simply form the sequence of natural numbers {0, 1, 2, …}.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.intlbreakiterator.php
 */
class IntlBreakIterator implements Traversable
{
    const DONE = -1;
    const WORD_NONE = 0;
    const WORD_NONE_LIMIT = 100;
    const WORD_NUMBER = 100;
    const WORD_NUMBER_LIMIT = 200;
    const WORD_LETTER = 200;
    const WORD_LETTER_LIMIT = 300;
    const WORD_KANA = 300;
    const WORD_KANA_LIMIT = 400;
    const WORD_IDEO = 400;
    const WORD_IDEO_LIMIT = 500;
    const LINE_SOFT = 0;
    const LINE_SOFT_LIMIT = 100;
    const LINE_HARD = 100;
    const LINE_HARD_LIMIT = 200;
    const SENTENCE_TERM = 0;
    const SENTENCE_TERM_LIMIT = 100;
    const SENTENCE_SEP = 100;
    const SENTENCE_SEP_LIMIT = 200;

    /**
     * __construct.
     * Private constructor for disallowing instantiation.
     *
     * @see http://php.net/manual/en/intlbreakiterator.construct.php
     */
    private function __construct()
    {
    }

    /**
     * createCharacterInstance.
     * Create break iterator for boundaries of combining character sequences.
     *
     * @param string $locale (optional)
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.createcharacterinstance.php
     */
    public static function createCharacterInstance(string $locale): ReturnType
    {
    }

    /**
     * createCodePointInstance.
     * Create break iterator for boundaries of code points.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.createcodepointinstance.php
     */
    public static function createCodePointInstance(): ReturnType
    {
    }

    /**
     * createLineInstance.
     * Create break iterator for logically possible line breaks.
     *
     * @param string $locale (optional)
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.createlineinstance.php
     */
    public static function createLineInstance(string $locale): ReturnType
    {
    }

    /**
     * createSentenceInstance.
     * Create break iterator for sentence breaks.
     *
     * @param string $locale (optional)
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.createsentenceinstance.php
     */
    public static function createSentenceInstance(string $locale): ReturnType
    {
    }

    /**
     * createTitleInstance.
     * Create break iterator for title-casing breaks.
     *
     * @param string $locale (optional)
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.createtitleinstance.php
     */
    public static function createTitleInstance(string $locale): ReturnType
    {
    }

    /**
     * createWordInstance.
     * Create break iterator for word breaks.
     *
     * @param string $locale (optional)
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.createwordinstance.php
     */
    public static function createWordInstance(string $locale): ReturnType
    {
    }

    /**
     * current.
     * Get index of current position.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.current.php
     */
    public function current(): ReturnType
    {
    }

    /**
     * first.
     * Set position to the first character in the text.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.first.php
     */
    public function first(): ReturnType
    {
    }

    /**
     * following.
     * Advance the iterator to the first boundary following specified offset.
     *
     * @param string $offset
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.following.php
     */
    public function following(string $offset): ReturnType
    {
    }

    /**
     * getErrorCode.
     * Get last error code on the object.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.geterrorcode.php
     */
    public function getErrorCode(): ReturnType
    {
    }

    /**
     * getErrorMessage.
     * Get last error message on the object.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.geterrormessage.php
     */
    public function getErrorMessage(): ReturnType
    {
    }

    /**
     * getLocale.
     * Get the locale associated with the object.
     *
     * @param string $locale_type
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.getlocale.php
     */
    public function getLocale(string $locale_type): ReturnType
    {
    }

    /**
     * getPartsIterator.
     * Create iterator for navigating fragments between boundaries.
     *
     * @param string $key_type (optional)
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.getpartsiterator.php
     */
    public function getPartsIterator(string $key_type): ReturnType
    {
    }

    /**
     * getText.
     * Get the text being scanned.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.gettext.php
     */
    public function getText(): ReturnType
    {
    }

    /**
     * isBoundary.
     * Tell whether an offset is a boundaryʼs offset.
     *
     * @param string $offset
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.isboundary.php
     */
    public function isBoundary(string $offset): ReturnType
    {
    }

    /**
     * last.
     * Set the iterator position to index beyond the last character.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.last.php
     */
    public function last(): ReturnType
    {
    }

    /**
     * next.
     * Advance the iterator the next boundary.
     *
     * @param string $offset (optional)
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.next.php
     */
    public function next(string $offset): ReturnType
    {
    }

    /**
     * preceding.
     * Set the iterator position to the first boundary before an offset.
     *
     * @param string $offset
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.preceding.php
     */
    public function preceding(string $offset): ReturnType
    {
    }

    /**
     * previous.
     * Set the iterator position to the boundary immediately before the current.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.previous.php
     */
    public function previous(): ReturnType
    {
    }

    /**
     * setText.
     * Set the text being scanned.
     *
     * @param string $text
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlbreakiterator.settext.php
     */
    public function setText(string $text): ReturnType
    {
    }
}
