<?php

/**
 * IntlRuleBasedBreakIterator.
 * A subclass of IntlBreakIterator that encapsulates ICU break iterators whose behavior is specified using a set of rules. This is the most common kind of break iterators.
 * These rules are described in the » ICU Boundary Analysis User Guide.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.intlrulebasedbreakiterator.php
 */
class IntlRuleBasedBreakIterator extends IntlBreakIterator implements Traversable
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
     * Create iterator from ruleset.
     *
     * @param string $rules
     * @param string $areCompiled (optional)
     *
     * @see http://php.net/manual/en/intlrulebasedbreakiterator.construct.php
     */
    public function __construct(string $rules, string $areCompiled)
    {
    }

    /**
     * getBinaryRules.
     * Get the binary form of compiled rules.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlrulebasedbreakiterator.getbinaryrules.php
     */
    public function getBinaryRules(): ReturnType
    {
    }

    /**
     * getRules.
     * Get the rule set used to create this object.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlrulebasedbreakiterator.getrules.php
     */
    public function getRules(): ReturnType
    {
    }

    /**
     * getRuleStatus.
     * Get the largest status value from the break rules that determined the current break position.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlrulebasedbreakiterator.getrulestatus.php
     */
    public function getRuleStatus(): ReturnType
    {
    }

    /**
     * getRuleStatusVec.
     * Get the status values from the break rules that determined the current break position.
     *
     * @return ReturnType
     *
     * @see http://php.net/manual/en/intlrulebasedbreakiterator.getrulestatusvec.php
     */
    public function getRuleStatusVec(): ReturnType
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
