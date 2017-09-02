<?php

/**
 * SolrIllegalArgumentException.
 * This object is thrown when an illegal or invalid argument is passed to a method.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrillegalargumentexception.php
 */
class SolrIllegalArgumentException extends SolrException
{
    /* Inherited methods */
    //protected  $message;
    //protected  $code;
    //protected  $file;
    //protected  $line;
    //protected  $sourceline;
    //protected  $sourcefile;
    //protected  $zif_name;

    /**
     * getInternalInfo.
     * Returns internal information where the Exception was thrown.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrillegalargumentexception.getinternalinfo.php
     */
    public function getInternalInfo(): array
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
    //public function SolrException::getInternalInfo(): array
}
