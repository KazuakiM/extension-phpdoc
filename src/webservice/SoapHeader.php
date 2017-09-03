<?php

/**
 * SoapHeader.
 * Represents a SOAP header.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.soapheader.php
 */
class SoapHeader
{
    /**
     * __construct.
     * SoapHeader constructor.
     *
     * @param string $namespace
     * @param string $name
     * @param mixed  $data           (optional)
     * @param bool   $mustunderstand (optional)
     * @param string $actor          (optional)
     *
     * @see http://php.net/manual/en/soapheader.construct.php
     */
    public function __construct(string $namespace, string $name, mixed $data, bool $mustunderstand, string $actor)
    {
    }
}
