<?php

/**
 * ReflectionClassConstant.
 * The ReflectionClassConstant class reports information about a class constant.
 *
 * @property $name
 * @property $class
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflectionclassconstant.php
 */
class ReflectionClassConstant implements Reflector
{
    public $name;
    public $class;

    /**
     * __construct.
     * Constructs a ReflectionClassConstant.
     *
     * @param mixed  $class
     * @param string $name
     *
     * @throws Exception
     *
     * @see http://php.net/manual/en/reflectionclassconstant.construct.php
     */
    public function __construct(mixed $class, string $name)
    {
    }

    /**
     * __toString.
     * Returns the string representation of the ReflectionClassConstant object.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionclassconstant.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * export.
     * Export.
     *
     * @param mixed  $class
     * @param string $name
     * @param bool   $return (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionclassconstant.export.php
     */
    public static function export(mixed $class, string $name, bool $return): string
    {
    }

    /**
     * getDeclaringClass.
     * Gets declaring class.
     *
     * @return ReflectionClass
     *
     * @see http://php.net/manual/en/reflectionclassconstant.getdeclaringclass.php
     */
    public function getDeclaringClass(): ReflectionClass
    {
    }

    /**
     * getDocComment.
     * Gets doc comments.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionclassconstant.getdoccomment.php
     */
    public function getDocComment(): string
    {
    }

    /**
     * getModifiers.
     * Gets the class constant modifiers.
     *
     * @return int
     *
     * @see http://php.net/manual/en/reflectionclassconstant.getmodifiers.php
     */
    public function getModifiers(): int
    {
    }

    /**
     * getValue.
     * Gets value.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/reflectionclassconstant.getvalue.php
     */
    public function getValue(): mixed
    {
    }

    /**
     * isPrivate.
     * Checks if class constant is private.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclassconstant.isprivate.php
     */
    public function isPrivate(): bool
    {
    }

    /**
     * isProtected.
     * Checks if class constant is protected.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclassconstant.isprotected.php
     */
    public function isProtected(): bool
    {
    }

    /**
     * isPublic.
     * Checks if class constant is public.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionclassconstant.ispublic.php
     */
    public function isPublic(): bool
    {
    }
}
