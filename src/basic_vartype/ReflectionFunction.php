<?php

/**
 * ReflectionFunction.
 * The ReflectionFunction class reports information about a function.
 *
 * @property $name
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflectionfunction.php
 */
class ReflectionFunction extends ReflectionFunctionAbstract implements Reflector
{
    const IS_DEPRECATED = 262144;

    public $name;

    /**
     * __construct.
     * Constructs a ReflectionFunction object.
     *
     * @param mixed $name
     *
     * @throws ReflectionException
     *
     * @see http://php.net/manual/en/reflectionfunction.construct.php
     */
    public function __construct(mixed $name)
    {
    }

    /**
     * __toString.
     * To string.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionfunction.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * export.
     * Exports function.
     *
     * @param string $name
     * @param string $return (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionfunction.export.php
     */
    public static function export(string $name, string $return): string
    {
    }

    /**
     * getClosure.
     * Returns a dynamically created closure for the function.
     *
     * @return Closure
     *
     * @see http://php.net/manual/en/reflectionfunction.getclosure.php
     */
    public function getClosure(): Closure
    {
    }

    /**
     * invoke.
     * Invokes function.
     *
     * @param mixed $parameter (optional)
     * @param mixed $...       (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/reflectionfunction.invoke.php
     */
    public function invoke(mixed $parameter, mixed $etc): mixed
    {
    }

    /**
     * invokeArgs.
     * Invokes function args.
     *
     * @param array $args
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/reflectionfunction.invokeargs.php
     */
    public function invokeArgs(array $args): mixed
    {
    }

    /**
     * isDisabled.
     * Checks if function is disabled.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionfunction.isdisabled.php
     */
    public function isDisabled(): bool
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
