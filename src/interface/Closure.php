<?php

/**
 * Closure.
 *
 * Class used to represent anonymous functions.
 * Anonymous functions, implemented in PHP 5.3, yield objects of this type. This fact used to be considered an implementation detail, but it can now be relied upon. Starting with PHP 5.4, this class has methods that allow further control of the anonymous function after it has been created.
 * Besides the methods listed here, this class also has an __invoke method. This is for consistency with other classes that implement calling magic, as this method is not used for calling the function.
 *
 * @see http://php.net/manual/en/class.closure.php
 */
class Closure
{
    /**
     * __construct.
     *
     * Constructor that disallows instantiation
     *
     * @see http://php.net/manual/en/closure.construct.php
     */
    private function __construct()
    {
    }

    /**
     * bind.
     *
     * Duplicates a closure with a specific bound object and class scope
     *
     * @param Closure $closure
     * @param object  $newthis
     * @param mixed   $newscope = "static"
     *
     * @return Closure
     *
     * @see http://php.net/manual/en/closure.bind.php
     */
    public static function bind(Closure $closure, object $newthis, mixed $newscope = 'static'): Closure
    {
    }

    /**
     * bindTo.
     *
     * Duplicates the closure with a new bound object and class scope
     *
     * @param object $newthis
     * @param mixed  $newscope = "static"
     *
     * @return Closure
     *
     * @see http://php.net/manual/en/closure.bindto.php
     */
    public function bindTo(object $newthis, mixed $newscope = 'static'): Closure
    {
    }

    /**
     * call.
     *
     * Binds and calls the closure
     *
     * @param object $newthis
     * @param mixed  $...
     *
     * @see http://php.net/manual/en/closure.call.php
     */
    public function call(object $newthis)
    {
    }

    /**
     * fromCallable.
     *
     * Converts a callable into a closure.
     *
     * @param callable $callable
     *
     * @return Closure
     *
     * @see http://php.net/manual/en/closure.fromcallable.php
     */
    public static function fromCallable(callable $callable): Closure
    {
    }
}
