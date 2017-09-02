<?php

/**
 * IntlCodePointBreakIterator.
 * This break iterator identifies the boundaries between UTF-8 code points.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.intlcodepointbreakiterator.php
 */
class IntlCodePointBreakIterator extends IntlBreakIterator implements Traversable
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
     * getLastCodePoint.
     * Get last code point passed over after advancing or receding the iterator.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlcodepointbreakiterator.getlastcodepoint.php
     */
    public function getLastCodePoint(): ReturnType
    {
    }

    /* Inherited methods */
    //private function __construct()
    //public static function createCharacterInstance(string $locale): ReturnType
    //public static function createCodePointInstance(): ReturnType
    //public static function createLineInstance(string $locale): ReturnType
    //public static function createSentenceInstance(string $locale): ReturnType
    //public static function createTitleInstance(string $locale): ReturnType
    //public static function createWordInstance(string $locale): ReturnType
    //public function current(): ReturnType
    //public function first(): ReturnType
    //public function following(string $offset): ReturnType
    //public function getErrorCode(): ReturnType
    //public function intl_get_error_code(): ReturnType
    //public function getErrorMessage(): ReturnType
    //public function intl_get_error_message(): ReturnType
    //public function getLocale(string $locale_type): ReturnType
    //public function getPartsIterator(string $key_type): ReturnType
    //public function getText(): ReturnType
    //public function isBoundary(string $offset): ReturnType
    //public function last(): ReturnType
    //public function next(string $offset): ReturnType
    //public function preceding(string $offset): ReturnType
    //public function previous(): ReturnType
    //public function setText(string $text): ReturnType
}
