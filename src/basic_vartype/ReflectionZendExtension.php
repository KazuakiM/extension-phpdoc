<?php

/**
 * ReflectionZendExtension.
 *
 *
 * @property $name
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflectionzendextension.php
 */
class ReflectionZendExtension implements Reflector
{
    public $name;

    /**
     * __construct.
     * Constructor.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/reflectionzendextension.construct.php
     */
    public function __construct(string $name)
    {
    }

    /**
     * __clone.
     * Clone handler.
     *
     * @see http://php.net/manual/en/reflectionzendextension.clone.php
     */
    final private function __clone()
    {
    }

    /**
     * __toString.
     * To string handler.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionzendextension.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * export.
     * Export.
     *
     * @param string $name
     * @param string $return (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionzendextension.export.php
     */
    public static function export(string $name, string $return): string
    {
    }

    /**
     * getAuthor.
     * Gets author.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionzendextension.getauthor.php
     */
    public function getAuthor(): string
    {
    }

    /**
     * getCopyright.
     * Gets copyright.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionzendextension.getcopyright.php
     */
    public function getCopyright(): string
    {
    }

    /**
     * getName.
     * Gets name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionzendextension.getname.php
     */
    public function getName(): string
    {
    }

    /**
     * getURL.
     * Gets URL.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionzendextension.geturl.php
     */
    public function getURL(): string
    {
    }

    /**
     * getVersion.
     * Gets version.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionzendextension.getversion.php
     */
    public function getVersion(): string
    {
    }
}
