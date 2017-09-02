<?php

/**
 * ReflectionFunctionAbstract.
 * A parent class to ReflectionFunction, read its description for details.
 *
 * @property $name
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflectionfunctionabstract.php
 */
class ReflectionFunctionAbstract implements Reflector
{
    public $name;

    /**
     * __clone.
     * Clones function.
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.clone.php
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
     * @see http://php.net/manual/en/reflectionfunctionabstract.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * getClosureScopeClass.
     * Returns the scope associated to the closure.
     *
     * @return ReflectionClass
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getclosurescopeclass.php
     */
    public function getClosureScopeClass(): ReflectionClass
    {
    }

    /**
     * getClosureThis.
     * Returns this pointer bound to closure.
     *
     * @return object
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getclosurethis.php
     */
    public function getClosureThis(): object
    {
    }

    /**
     * getDocComment.
     * Gets doc comment.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
     */
    public function getDocComment(): string
    {
    }

    /**
     * getEndLine.
     * Gets end line number.
     *
     * @return int
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getendline.php
     */
    public function getEndLine(): int
    {
    }

    /**
     * getExtension.
     * Gets extension info.
     *
     * @return ReflectionExtension
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getextension.php
     */
    public function getExtension(): ReflectionExtension
    {
    }

    /**
     * getExtensionName.
     * Gets extension name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getextensionname.php
     */
    public function getExtensionName(): string
    {
    }

    /**
     * getFileName.
     * Gets file name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getfilename.php
     */
    public function getFileName(): string
    {
    }

    /**
     * getName.
     * Gets function name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getname.php
     */
    public function getName(): string
    {
    }

    /**
     * getNamespaceName.
     * Gets namespace name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
     */
    public function getNamespaceName(): string
    {
    }

    /**
     * getNumberOfParameters.
     * Gets number of parameters.
     *
     * @return int
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
     */
    public function getNumberOfParameters(): int
    {
    }

    /**
     * getNumberOfRequiredParameters.
     * Gets number of required parameters.
     *
     * @return int
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
     */
    public function getNumberOfRequiredParameters(): int
    {
    }

    /**
     * getParameters.
     * Gets parameters.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getparameters.php
     */
    public function getParameters(): array
    {
    }

    /**
     * getReturnType.
     * Gets the specified return type of a function.
     *
     * @return ReflectionType
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getreturntype.php
     */
    public function getReturnType(): ReflectionType
    {
    }

    /**
     * getShortName.
     * Gets function short name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getshortname.php
     */
    public function getShortName(): string
    {
    }

    /**
     * getStartLine.
     * Gets starting line number.
     *
     * @return int
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getstartline.php
     */
    public function getStartLine(): int
    {
    }

    /**
     * getStaticVariables.
     * Gets static variables.
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
     */
    public function getStaticVariables(): array
    {
    }

    /**
     * hasReturnType.
     * Checks if the function has a specified return type.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.hasreturntype.php
     */
    public function hasReturnType(): bool
    {
    }

    /**
     * inNamespace.
     * Checks if function in namespace.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.innamespace.php
     */
    public function inNamespace(): bool
    {
    }

    /**
     * isClosure.
     * Checks if closure.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.isclosure.php
     */
    public function isClosure(): bool
    {
    }

    /**
     * isDeprecated.
     * Checks if deprecated.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
     */
    public function isDeprecated(): bool
    {
    }

    /**
     * isGenerator.
     * Returns whether this function is a generator.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.isgenerator.php
     */
    public function isGenerator(): bool
    {
    }

    /**
     * isInternal.
     * Checks if is internal.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.isinternal.php
     */
    public function isInternal(): bool
    {
    }

    /**
     * isUserDefined.
     * Checks if user defined.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
     */
    public function isUserDefined(): bool
    {
    }

    /**
     * isVariadic.
     * Checks if the function is variadic.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.isvariadic.php
     */
    public function isVariadic(): bool
    {
    }

    /**
     * returnsReference.
     * Checks if returns reference.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/reflectionfunctionabstract.returnsreference.php
     */
    public function returnsReference(): bool
    {
    }
}
