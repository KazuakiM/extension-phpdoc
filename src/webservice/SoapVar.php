<?php

/**
 * SoapVar.
 * A class representing a variable or object for use with SOAP services.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.soapvar.php
 */
class SoapVar
{
    /**
     * __construct.
     * SoapVar constructor.
     *
     * @param mixed  $data
     * @param string $encoding
     * @param string $type_name      (optional)
     * @param string $type_namespace (optional)
     * @param string $node_name      (optional)
     * @param string $node_namespace (optional)
     *
     * @see http://php.net/manual/en/soapvar.construct.php
     */
    public function __construct(mixed $data, string $encoding, string $type_name, string $type_namespace, string $node_name, string $node_namespace)
    {
    }
}
