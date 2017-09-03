<?php

/**
 * SoapFault.
 * Represents a SOAP fault.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.soapfault.php
 */
class SoapFault extends Exception
{
    /* Inherited methods */
    //protected  $message;
    //protected  $code;
    //protected  $file;
    //protected  $line;

    /**
     * __construct.
     * SoapFault constructor.
     *
     * @param string $faultcode
     * @param string $faultstring
     * @param string $faultactor  (optional)
     * @param string $detail      (optional)
     * @param string $faultname   (optional)
     * @param string $headerfault (optional)
     *
     * @see http://php.net/manual/en/soapfault.construct.php
     */
    public function __construct(string $faultcode, string $faultstring, string $faultactor, string $detail, string $faultname, string $headerfault)
    {
    }

    /**
     * __toString.
     * Obtain a string representation of a SoapFault.
     *
     * @return string
     *
     * @see http://php.net/manual/en/soapfault.tostring.php
     */
    public function __toString(): string
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
