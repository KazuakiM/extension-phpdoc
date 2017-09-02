<?php

/**
 * ReflectionProperty.
 * The ReflectionProperty class reports information about classes properties.
 *
 * @property $name
 * @property $class
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflectionproperty.php
 */
class ReflectionProperty implements Reflector
{
    const IS_STATIC = 1;
    const IS_PUBLIC = 256;
    const IS_PROTECTED = 512;
    const IS_PRIVATE = 1024;

    public $name;
    public $class;

    /**
     * __construct.
     * Construct a ReflectionProperty object.
     *
     * @param mixed  $class
     * @param string $name
     *
     * @throws Exception
     *
     * @see http://php.net/manual/en/reflectionproperty.construct.php
     */
    public function __construct(mixed $class, string $name)
    {
    }

    /**
     * __clone.
     * Clone.
     *
     * @see http://php.net/manual/en/reflectionproperty.clone.php
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
     * @see http://php.net/manual/en/reflectionproperty.tostring.php
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
     * @see http://php.net/manual/en/reflectionproperty.export.php
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
     * @see http://php.net/manual/en/reflectionproperty.getdeclaringclass.php
     */
    public function getDeclaringClass(): ReflectionClass
    {
    }

    /**
     * getDocComment.
     * Gets the property doc comment.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionproperty.getdoccomment.php
     */
    public function getDocComment(): string
    {
    }

    /**
     * getModifiers.
     * Gets the property modifiers.
     *
     * @return int
     *
     * @see http://php.net/manual/en/reflectionproperty.getmodifiers.php
     */
    public function getModifiers(): int
    {
    }

    /**
     * getName.
     * Gets property name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionproperty.getname.php
     */
    public function getName(): string
    {
    }

    /**
     * getValue.
     * Gets value.
     *
     * @param object $object (optional)
     *
     * @throws ReflectionException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/reflectionproperty.getvalue.php
     */
    public function getValue(object $object): mixed
    {
    }

    /**
     * isDefault.
     * Checks if property is a default property.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionproperty.isdefault.php
     */
    public function isDefault(): bool
    {
    }

    /**
     * isPrivate.
     * Checks if property is private.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionproperty.isprivate.php
     */
    public function isPrivate(): bool
    {
    }

    /**
     * isProtected.
     * Checks if property is protected.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionproperty.isprotected.php
     */
    public function isProtected(): bool
    {
    }

    /**
     * isPublic.
     * Checks if property is public.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionproperty.ispublic.php
     */
    public function isPublic(): bool
    {
    }

    /**
     * isStatic.
     * Checks if property is static.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionproperty.isstatic.php
     */
    public function isStatic(): bool
    {
    }

    /**
     * setAccessible.
     * Set property accessibility.
     *
     * @param bool $accessible
     *
     * @see http://php.net/manual/en/reflectionproperty.setaccessible.php
     */
    public function setAccessible(bool $accessible): void
    {
    }

    /**
     * setValue.
     * Set property value.
     *
     * @param object $object
     * @param mixed  $value
     *
     * @throws ReflectionException
     *
     * @see http://php.net/manual/en/reflectionproperty.setvalue.php
     */
    public function setValue(object $object, mixed $value): void
    {
    }
}
