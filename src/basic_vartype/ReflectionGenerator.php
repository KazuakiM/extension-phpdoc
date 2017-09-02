<?php

/**
 * ReflectionGenerator.
 * The ReflectionGenerator class reports information about a generator.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.reflectiongenerator.php
 */
class ReflectionGenerator
{
    /**
     * __construct.
     * Constructs a ReflectionGenerator object.
     *
     * @param Generator $generator
     *
     * @see http://php.net/manual/en/reflectiongenerator.construct.php
     */
    public function __construct(Generator $generator)
    {
    }

    /**
     * getExecutingFile.
     * Gets the file name of the currently executing generator.
     *
     * @return string
     *
     * @see http://php.net/manual/en/reflectiongenerator.getexecutingfile.php
     */
    public function getExecutingFile(): string
    {
    }

    /**
     * getExecutingGenerator.
     * Gets the executing Generator object.
     *
     * @return Generator
     *
     * @see http://php.net/manual/en/reflectiongenerator.getexecutinggenerator.php
     */
    public function getExecutingGenerator(): Generator
    {
    }

    /**
     * getExecutingLine.
     * Gets the currently executing line of the generator.
     *
     * @return int
     *
     * @see http://php.net/manual/en/reflectiongenerator.getexecutingline.php
     */
    public function getExecutingLine(): int
    {
    }

    /**
     * getFunction.
     * Gets the function name of the generator.
     *
     * @return ReflectionFunctionAbstract
     *
     * @see http://php.net/manual/en/reflectiongenerator.getfunction.php
     */
    public function getFunction(): ReflectionFunctionAbstract
    {
    }

    /**
     * getThis.
     * Gets the $this value of the generator.
     *
     * @return object
     *
     * @see http://php.net/manual/en/reflectiongenerator.getthis.php
     */
    public function getThis(): object
    {
    }

    /**
     * getTrace.
     * Gets the trace of the executing generator.
     *
     * @param int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT
     *
     * @return array
     *
     * @see http://php.net/manual/en/reflectiongenerator.gettrace.php
     */
    public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT): array
    {
    }
}
