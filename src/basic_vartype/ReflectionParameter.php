<?php

/**
 * ReflectionParameter.
 * The ReflectionParameter class retrieves information about function's or method's parameters.
 * To introspect function parameters, first create an instance of the ReflectionFunction or ReflectionMethod classes and then use their ReflectionFunctionAbstract::getParameters() method to retrieve an array of parameters.
 *
 * @property $name
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflectionparameter.php
 */
class ReflectionParameter implements Reflector
{
    public $name;

    /**
     * __construct.
     * Construct.
     *
     * @param string $function
     * @param string $parameter
     *
     * @see http://php.net/manual/en/reflectionparameter.construct.php
     */
    public function __construct(string $function, string $parameter)
    {
    }

    /**
     * __clone.
     * Clone.
     *
     * @see http://php.net/manual/en/reflectionparameter.clone.php
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
     * @see http://php.net/manual/en/reflectionparameter.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * allowsNull.
     * Checks if null is allowed.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionparameter.allowsnull.php
     */
    public function allowsNull(): bool
    {
    }

    /**
     * canBePassedByValue.
     * Returns whether this parameter can be passed by value.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionparameter.canbepassedbyvalue.php
     */
    public function canBePassedByValue(): bool
    {
    }

    /**
     * export.
     * Exports.
     *
     * @param string $function
     * @param string $parameter
     * @param bool   $return    (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionparameter.export.php
     */
    public static function export(string $function, string $parameter, bool $return): string
    {
    }

    /**
     * getClass.
     * Get the type hinted class.
     *
     * @return ReflectionClass
     *
     * @see http://php.net/manual/en/reflectionparameter.getclass.php
     */
    public function getClass(): ReflectionClass
    {
    }

    /**
     * getDeclaringClass.
     * Gets declaring class.
     *
     * @return ReflectionClass
     *
     * @see http://php.net/manual/en/reflectionparameter.getdeclaringclass.php
     */
    public function getDeclaringClass(): ReflectionClass
    {
    }

    /**
     * getDeclaringFunction.
     * Gets declaring function.
     *
     * @return ReflectionFunctionAbstract
     *
     * @see http://php.net/manual/en/reflectionparameter.getdeclaringfunction.php
     */
    public function getDeclaringFunction(): ReflectionFunctionAbstract
    {
    }

    /**
     * getDefaultValue.
     * Gets default parameter value.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/reflectionparameter.getdefaultvalue.php
     */
    public function getDefaultValue(): mixed
    {
    }

    /**
     * getDefaultValueConstantName.
     * Returns the default value's constant name if default value is constant or null.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionparameter.getdefaultvalueconstantname.php
     */
    public function getDefaultValueConstantName(): string
    {
    }

    /**
     * getName.
     * Gets parameter name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionparameter.getname.php
     */
    public function getName(): string
    {
    }

    /**
     * getPosition.
     * Gets parameter position.
     *
     * @return int
     *
     * @see http://php.net/manual/en/reflectionparameter.getposition.php
     */
    public function getPosition(): int
    {
    }

    /**
     * getType.
     * Gets a parameter's type.
     *
     * @return ReflectionType
     *
     * @see http://php.net/manual/en/reflectionparameter.gettype.php
     */
    public function getType(): ReflectionType
    {
    }

    /**
     * hasType.
     * Checks if parameter has a type.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionparameter.hastype.php
     */
    public function hasType(): bool
    {
    }

    /**
     * isArray.
     * Checks if parameter expects an array.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionparameter.isarray.php
     */
    public function isArray(): bool
    {
    }

    /**
     * isCallable.
     * Returns whether parameter MUST be callable.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionparameter.iscallable.php
     */
    public function isCallable(): bool
    {
    }

    /**
     * isDefaultValueAvailable.
     * Checks if a default value is available.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionparameter.isdefaultvalueavailable.php
     */
    public function isDefaultValueAvailable(): bool
    {
    }

    /**
     * isDefaultValueConstant.
     * Returns whether the default value of this parameter is constant.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionparameter.isdefaultvalueconstant.php
     */
    public function isDefaultValueConstant(): bool
    {
    }

    /**
     * isOptional.
     * Checks if optional.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionparameter.isoptional.php
     */
    public function isOptional(): bool
    {
    }

    /**
     * isPassedByReference.
     * Checks if passed by reference.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionparameter.ispassedbyreference.php
     */
    public function isPassedByReference(): bool
    {
    }

    /**
     * isVariadic.
     * Checks if the parameter is variadic.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionparameter.isvariadic.php
     */
    public function isVariadic(): bool
    {
    }
}
