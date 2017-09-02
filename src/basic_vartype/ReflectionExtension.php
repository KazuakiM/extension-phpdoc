<?php

/**
 * ReflectionExtension.
 * The ReflectionExtension class reports information about an extension.
 *
 * @property $name
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflectionextension.php
 */
class ReflectionExtension implements Reflector
{
    public $name;

    /**
     * __construct.
     * Constructs a ReflectionExtension.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/reflectionextension.construct.php
     */
    public function __construct(string $name)
    {
    }

    /**
     * __clone.
     * Clones.
     *
     * @see http://php.net/manual/en/reflectionextension.clone.php
     */
    final private function __clone()
    {
    }

    /**
     * __toString.
     * To string.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionextension.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * export.
     * Export.
     *
     * @apram string $name
     * @apram string $return = false
     *
     * @see http://php.net/manual/en/reflectionextension.export.php
     *
     * @param mixed $return
     *
     * @return string
     */
    public static function export(string $name, $return = false): string
    {
    }

    /**
     * getClasses.
     * Gets classes.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionextension.getclasses.php
     */
    public function getClasses(): array
    {
    }

    /**
     * getClassNames.
     * Gets class names.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionextension.getclassnames.php
     */
    public function getClassNames(): array
    {
    }

    /**
     * getConstants.
     * Gets constants.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionextension.getconstants.php
     */
    public function getConstants(): array
    {
    }

    /**
     * getDependencies.
     * Gets dependencies.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionextension.getdependencies.php
     */
    public function getDependencies(): array
    {
    }

    /**
     * getFunctions.
     * Gets extension functions.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionextension.getfunctions.php
     */
    public function getFunctions(): array
    {
    }

    /**
     * getINIEntries.
     * Gets extension ini entries.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionextension.getinientries.php
     */
    public function getINIEntries(): array
    {
    }

    /**
     * getName.
     * Gets extension name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionextension.getname.php
     */
    public function getName(): string
    {
    }

    /**
     * getVersion.
     * Gets extension version.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionextension.getversion.php
     */
    public function getVersion(): string
    {
    }

    /**
     * info.
     * Print extension info.
     *
     *
     * @see http://php.net/manual/en/reflectionextension.info.php
     */
    public function info(): void
    {
    }

    /**
     * isPersistent.
     * Returns whether this extension is persistent.
     *
     *
     * @see http://php.net/manual/en/reflectionextension.ispersistent.php
     */
    public function isPersistent(): void
    {
    }

    /**
     * isTemporary.
     * Returns whether this extension is temporary.
     *
     *
     * @see http://php.net/manual/en/reflectionextension.istemporary.php
     */
    public function isTemporary(): void
    {
    }
}
