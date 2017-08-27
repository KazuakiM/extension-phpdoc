<?php

/**
 * SolrException.
 * This is the base class for all exception thrown by the Solr extension classes.
 *
 * @property int $sourceline
 * @property string $sourcefile
 * @property string $zif_name
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.solrexception.php
 */
class SolrException extends Exception
{
    protected $sourceline;
    protected $sourcefile;
    protected $zif_name;

    /* Inherited methods */
    //protected  $message;
    //protected  $code;
    //protected  $file;
    //protected  $line;

    /**
     * getInternalInfo.
     * Returns internal information where the Exception was thrown.
     *
     * @return array
     *
     * @see http://php.net/manual/en/solrexception.getinternalinfo.php
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
}
