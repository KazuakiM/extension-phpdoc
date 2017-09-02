<?php

/**
 * V8JsException.
 *
 * @property $JsFileName
 * @property $JsLineNumber
 * @property $JsSourceLine
 * @property $JsTrace
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.v8jsexception.php
 */
class V8JsException extends Exception
{
    protected $JsFileName;
    protected $JsLineNumber;
    protected $JsSourceLine;
    protected $JsTrace;

    /* Inherited methods */
    //protected  $message;
    //protected  $code;
    //protected  $file;
    //protected  $line;

    /**
     * getJsFileName.
     * The getJsFileName purpose.
     *
     * @return string
     *
     * @see http://php.net/manual/en/v8jsexception.getjsfilename.php
     */
    final public function getJsFileName(): string
    {
    }

    /**
     * getJsLineNumber.
     * The getJsLineNumber purpose.
     *
     * @return int
     *
     * @see http://php.net/manual/en/v8jsexception.getjslinenumber.php
     */
    final public function getJsLineNumber(): int
    {
    }

    /**
     * getJsSourceLine.
     * The getJsSourceLine purpose.
     *
     * @return string
     *
     * @see http://php.net/manual/en/v8jsexception.getjssourceline.php
     */
    final public function getJsSourceLine(): string
    {
    }

    /**
     * getJsTrace.
     * The getJsTrace purpose.
     *
     * @return string
     *
     * @see http://php.net/manual/en/v8jsexception.getjstrace.php
     */
    final public function getJsTrace(): string
    {
    }

    /* Inherited methods */
    //final public function Exception::getMessage(): string
    //final public function Exception::getPrevious(): Throwable
    //final public function Exception::getCode(): mixed
    //final public function Exception::getFile(): string
    //final public function Exception::getLine(): int
    //final public function Exception::getTrace(): array
    //final public function Exception::getTraceAsString(): string
    //public function Exception::__toString(): string
    //final private function Exception::__clone(): void
}
