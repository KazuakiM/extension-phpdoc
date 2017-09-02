<?php

/**
 * ReflectionMethod.
 * The ReflectionMethod class reports information about a method.
 *
 * @property $name
 * @property $class
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflectionmethod.php
 */
class ReflectionMethod extends ReflectionFunctionAbstract implements Reflector
{
    const IS_STATIC = 1;
    const IS_PUBLIC = 256;
    const IS_PROTECTED = 512;
    const IS_PRIVATE = 1024;
    const IS_ABSTRACT = 2;
    const IS_FINAL = 4;

    public $name;
    public $class;

    /**
     * __construct.
     * Constructs a ReflectionMethod.
     *
     * @param mixed  $class
     * @param string $name
     *
     * @throws ReflectionException
     *
     * @see http://php.net/manual/en/reflectionmethod.construct.php
     */
    public function __construct(mixed $class, string $name)
    {
    }

    /**
     * __toString.
     * Returns the string representation of the Reflection method object.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionmethod.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * export.
     * Export a reflection method.
     *
     * @param string $class
     * @param string $name
     * @param bool   $return = false
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionmethod.export.php
     */
    public static function export(string $class, string $name, bool $return = false): string
    {
    }

    /**
     * getClosure.
     * Returns a dynamically created closure for the method.
     *
     * @param object $object
     *
     * @return Closure
     *
     * @see http://php.net/manual/en/reflectionmethod.getclosure.php
     */
    public function getClosure(object $object): Closure
    {
    }

    /**
     * getDeclaringClass.
     * Gets declaring class for the reflected method.
     *
     * @return ReflectionClass
     *
     * @see http://php.net/manual/en/reflectionmethod.getdeclaringclass.php
     */
    public function getDeclaringClass(): ReflectionClass
    {
    }

    /**
     * getModifiers.
     * Gets the method modifiers.
     *
     * @return int
     *
     * @see http://php.net/manual/en/reflectionmethod.getmodifiers.php
     */
    public function getModifiers(): int
    {
    }

    /**
     * getPrototype.
     * Gets the method prototype (if there is one).
     *
     * @throws ReflectionException
     *
     * @return ReflectionMethod
     *
     * @see http://php.net/manual/en/reflectionmethod.getprototype.php
     */
    public function getPrototype(): ReflectionMethod
    {
    }

    /**
     * invoke.
     * Invoke.
     *
     * @param object $object
     * @param mixed  $parameter (optional)
     * @param mixed  $...       (optional)
     *
     * @throws ReflectionException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/reflectionmethod.invoke.php
     */
    public function invoke(object $object, mixed $parameter, mixed $etc): mixed
    {
    }

    /**
     * invokeArgs.
     * Invoke args.
     *
     * @param object $object
     * @param array  $args
     *
     * @throws ReflectionException
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/reflectionmethod.invokeargs.php
     */
    public function invokeArgs(object $object, array $args): mixed
    {
    }

    /**
     * isAbstract.
     * Checks if method is abstract.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionmethod.isabstract.php
     */
    public function isAbstract(): bool
    {
    }

    /**
     * isConstructor.
     * Checks if method is a constructor.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionmethod.isconstructor.php
     */
    public function isConstructor(): bool
    {
    }

    /**
     * isDestructor.
     * Checks if method is a destructor.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionmethod.isdestructor.php
     */
    public function isDestructor(): bool
    {
    }

    /**
     * isFinal.
     * Checks if method is final.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionmethod.isfinal.php
     */
    public function isFinal(): bool
    {
    }

    /**
     * isPrivate.
     * Checks if method is private.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionmethod.isprivate.php
     */
    public function isPrivate(): bool
    {
    }

    /**
     * isProtected.
     * Checks if method is protected.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionmethod.isprotected.php
     */
    public function isProtected(): bool
    {
    }

    /**
     * isPublic.
     * Checks if method is public.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionmethod.ispublic.php
     */
    public function isPublic(): bool
    {
    }

    /**
     * isStatic.
     * Checks if method is static.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionmethod.isstatic.php
     */
    public function isStatic(): bool
    {
    }

    /**
     * setAccessible.
     * Set method accessibility.
     *
     * @param bool $accessible
     *
     * @see http://php.net/manual/en/reflectionmethod.setaccessible.php
     */
    public function setAccessible(bool $accessible): void
    {
    }

    /* Inherited methods */
    //final private function ReflectionFunctionAbstract::__clone(): void
    //public function ReflectionFunctionAbstract::getClosureScopeClass(): ReflectionClass
    //public function ReflectionFunctionAbstract::getClosureThis(): object
    //public function ReflectionFunctionAbstract::getDocComment(): string
    //public function ReflectionFunctionAbstract::getEndLine(): int
    //public function ReflectionFunctionAbstract::getExtension(): ReflectionExtension
    //public function ReflectionFunctionAbstract::getExtensionName(): string
    //public function ReflectionFunctionAbstract::getFileName(): string
    //public function ReflectionFunctionAbstract::getName(): string
    //public function ReflectionFunctionAbstract::getNamespaceName(): string
    //public function ReflectionFunctionAbstract::getNumberOfParameters(): int
    //public function ReflectionFunctionAbstract::getNumberOfRequiredParameters(): int
    //public function ReflectionFunctionAbstract::getParameters(): array
    //public function ReflectionFunctionAbstract::getReturnType(): ReflectionType
    //public function ReflectionFunctionAbstract::getShortName(): string
    //public function ReflectionFunctionAbstract::getStartLine(): int
    //public function ReflectionFunctionAbstract::getStaticVariables(): array
    //public function ReflectionFunctionAbstract::hasReturnType(): bool
    //public function ReflectionFunctionAbstract::inNamespace(): bool
    //public function ReflectionFunctionAbstract::isClosure(): bool
    //public function ReflectionFunctionAbstract::isDeprecated(): bool
    //public function ReflectionFunctionAbstract::isGenerator(): bool
    //public function ReflectionFunctionAbstract::isInternal(): bool
    //public function ReflectionFunctionAbstract::isUserDefined(): bool
    //public function ReflectionFunctionAbstract::isVariadic(): bool
    //public function ReflectionFunctionAbstract::returnsReference(): bool
    //abstract public function ReflectionFunctionAbstract::__toString(): void
}
