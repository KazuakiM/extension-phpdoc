<?php

/**
 * ResourceBundle.
 * Localized software products often require sets of data that are to be customized depending on current locale, e.g.: messages, labels, formatting patterns. ICU resource mechanism allows to define sets of resources that the application can load on locale basis, while accessing them in unified locale-independent fashion.
 * This class implements access to ICU resource data files. These files are binary data arrays which ICU uses to store the localized data.
 * ICU resource bundle can hold simple resources and complex resources. Complex resources are containers which can be either integer-indexed or string-indexed (just like PHP arrays). Simple resources can be of the following types: string, integer, binary data field or integer array.
 * ResourceBundle supports direct access to the data through array access pattern and iteration via foreach, as well as access via class methods. The result will be PHP value for simple resources and ResourceBundle object for complex ones. All resources are read-only.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.resourcebundle.php
 */
class ResourceBundle
{
    /**
     * __construct.
     * Create a resource bundle.
     *
     * @param string $locale
     * @param string $bundlename
     * @param bool   $fallback   (optional)
     *
     * @see http://php.net/manual/en/resourcebundle.create.php
     */
    public function __construct(string $locale, string $bundlename, bool $fallback)
    {
    }

    /**
     * count.
     * Get number of elements in the bundle.
     *
     * @return int
     *
     * @see http://php.net/manual/en/resourcebundle.count.php
     */
    public function count(): int
    {
    }

    /**
     * create.
     * Create a resource bundle.
     *
     * @param string $locale
     * @param string $bundlename
     * @param bool   $fallback   (optional)
     *
     * @return ResourceBundle
     *
     * @see http://php.net/manual/en/resourcebundle.create.php
     */
    public static function create(string $locale, string $bundlename, bool $fallback): ResourceBundle
    {
    }

    /**
     * getErrorCode.
     * Get bundle's last error code.
     *
     * @return int
     *
     * @see http://php.net/manual/en/resourcebundle.geterrorcode.php
     */
    public function getErrorCode(): int
    {
    }

    /**
     * getErrorMessage.
     * Get bundle's last error message.
     *
     * @return string
     *
     * @see http://php.net/manual/en/resourcebundle.geterrormessage.php
     */
    public function getErrorMessage(): string
    {
    }

    /**
     * get.
     * Get data from the bundle.
     *
     * @param string|int $index
     * @param bool       $fallback = true
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/resourcebundle.get.php
     */
    public function get(mixed $index, bool $fallback = true): mixed
    {
    }

    /**
     * getLocales.
     * Get supported locales.
     *
     * @param string $bundlename
     *
     * @return array
     *
     * @see http://php.net/manual/en/resourcebundle.locales.php
     */
    public function getLocales(string $bundlename): array
    {
    }
}
