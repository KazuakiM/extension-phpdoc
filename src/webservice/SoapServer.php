<?php

/**
 * SoapServer.
 * The SoapServer class provides a server for the » SOAP 1.1 and » SOAP 1.2 protocols. It can be used with or without a WSDL service description.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.soapserver.php
 */
class SoapServer
{
    /**
     * __construct.
     * SoapServer constructor.
     *
     * @param mixed $wsdl
     * @param array $options (optional)
     *
     * @see http://php.net/manual/en/soapserver.construct.php
     */
    public function __construct(mixed $wsdl, array $options)
    {
    }

    /**
     * addFunction.
     * Adds one or more functions to handle SOAP requests.
     *
     * @param mixed $functions
     *
     * @see http://php.net/manual/en/soapserver.addfunction.php
     */
    public function addFunction(mixed $functions): void
    {
    }

    /**
     * addSoapHeader.
     * Add a SOAP header to the response.
     *
     * @param SoapHeader $object
     *
     * @see http://php.net/manual/en/soapserver.addsoapheader.php
     */
    public function addSoapHeader(SoapHeader $object): void
    {
    }

    /**
     * fault.
     * Issue SoapServer fault indicating an error.
     *
     * @param string $code
     * @param string $string
     * @param string $actor   (optional)
     * @param string $details (optional)
     * @param string $name    (optional)
     *
     * @see http://php.net/manual/en/soapserver.fault.php
     */
    public function fault(string $code, string $string, string $actor, string $details, string $name): void
    {
    }

    /**
     * getFunctions.
     * Returns list of defined functions.
     *
     * @return array
     *
     * @see http://php.net/manual/en/soapserver.getfunctions.php
     */
    public function getFunctions(): array
    {
    }

    /**
     * handle.
     * Handles a SOAP request.
     *
     * @param string $soap_request (optional)
     *
     * @see http://php.net/manual/en/soapserver.handle.php
     */
    public function handle(string $soap_request): void
    {
    }

    /**
     * setClass.
     * Sets the class which handles SOAP requests.
     *
     * @param string $class_name
     * @param mixed  $args       (optional)
     * @param mixed  $...        (optional)
     *
     * @see http://php.net/manual/en/soapserver.setclass.php
     */
    public function setClass(string $class_name, mixed $args, mixed $etc): void
    {
    }

    /**
     * setObject.
     * Sets the object which will be used to handle SOAP requests.
     *
     * @param object $object
     *
     * @see http://php.net/manual/en/soapserver.setobject.php
     */
    public function setObject(object $object): void
    {
    }

    /**
     * setPersistence.
     * Sets SoapServer persistence mode.
     *
     * @param int $mode
     *
     * @see http://php.net/manual/en/soapserver.setpersistence.php
     */
    public function setPersistence(int $mode): void
    {
    }

    /**
     * SoapServer.
     * SoapServer constructor.
     *
     * @param mixed $wsdl
     * @param array $options (optional)
     *
     * @see http://php.net/manual/en/soapserver.soapserver.php
     */
    public function SoapServer(mixed $wsdl, array $options): void
    {
    }
}
