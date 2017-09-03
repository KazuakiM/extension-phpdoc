<?php

/**
 * OAuthException.
 * This exception is thrown when exceptional errors occur while using the OAuth extension and contains useful debugging information.
 *
 * @property $lastResponse
 * @property $debugInfo
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.oauthexception.php
 */
class OAuthException extends Exception
{
    public $lastResponse;
    public $debugInfo;

    /* Inherited methods */
    //protected  $message;
    //protected  $code;
    //protected  $file;
    //protected  $line;

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
