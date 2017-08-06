<?php

/**
 * Normalizer.
 * Normalization is a process that involves transforming characters and sequences of characters into a formally-defined underlying representation. This process is most important when text needs to be compared for sorting and searching, but it is also used when storing text to ensure that the text is stored in a consistent representation.
 * The Unicode Consortium has defined a number of normalization forms reflecting the various needs of applications:
 *  Normalization Form D (NFD) - Canonical Decomposition
 *  Normalization Form C (NFC) - Canonical Decomposition followed by Canonical Composition
 *  Normalization Form KD (NFKD) - Compatibility Decomposition
 *  Normalization Form KC (NFKC) - Compatibility Decomposition followed by Canonical Composition
 * The different forms are defined in terms of a set of transformations on the text, transformations that are expressed by both an algorithm and a set of data files.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.normalizer.php
 */
class Normalizer
{
    /**
     * isNormalized.
     * Checks if the provided string is already in the specified normalization form.
     *
     * @param string $input
     * @param int    $form  = FORM_C
     *
     * @return bool
     *
     * @see http://php.net/manual/en/normalizer.isnormalized.php
     */
    public static function isNormalized(string $input, int $form = FORM_C): bool
    {
    }

    /**
     * normalize.
     * Normalizes the input provided and returns the normalized string.
     *
     * @param string $input
     * @param int    $form  = FORM_C
     *
     * @return string
     *
     * @see http://php.net/manual/en/normalizer.normalize.php
     */
    public static function normalize(string $input, int $form = FORM_C): string
    {
    }
}
