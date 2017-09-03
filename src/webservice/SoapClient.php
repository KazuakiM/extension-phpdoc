<?php

/**
 * SoapClient.
 * The SoapClient class provides a client for » SOAP 1.1, » SOAP 1.2 servers. It can be used in WSDL or non-WSDL mode.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.soapclient.php
 */
class SoapClient
{
    /**
     * __construct.
     * SoapClient constructor.
     *
     * @param mixed $wsdl
     * @param array $options (optional)
     *
     * @throws E_ERROR
     * @throws SoapFault
     *
     * @see http://php.net/manual/en/soapclient.soapclient.php
     */
    public function __construct(mixed $wsdl, array $options)
    {
    }

    /**
     * __call.
     * Calls a SOAP function (deprecated).
     *
     * @param string $function_name
     * @param string $arguments
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/soapclient.call.php
     */
    public function __call(string $function_name, string $arguments): mixed
    {
    }

    /**
     * __doRequest.
     * Performs a SOAP request.
     *
     * @param string $request
     * @param string $location
     * @param string $action
     * @param int    $version
     * @param int    $one_way  = 0
     *
     * @return string
     *
     * @see http://php.net/manual/en/soapclient.dorequest.php
     */
    public function __doRequest(string $request, string $location, string $action, int $version, int $one_way = 0): string
    {
    }

    /**
     * __getFunctions.
     * Returns list of available SOAP functions.
     *
     * @return array
     *
     * @see http://php.net/manual/en/soapclient.getfunctions.php
     */
    public function __getFunctions(): array
    {
    }

    /**
     * __getLastRequest.
     * Returns last SOAP request.
     *
     * @return string
     *
     * @see http://php.net/manual/en/soapclient.getlastrequest.php
     */
    public function __getLastRequest(): string
    {
    }

    /**
     * __getLastRequestHeaders.
     * Returns the SOAP headers from the last request.
     *
     * @return string
     *
     * @see http://php.net/manual/en/soapclient.getlastrequestheaders.php
     */
    public function __getLastRequestHeaders(): string
    {
    }

    /**
     * __getLastResponse.
     * Returns last SOAP response.
     *
     * @return string
     *
     * @see http://php.net/manual/en/soapclient.getlastresponse.php
     */
    public function __getLastResponse(): string
    {
    }

    /**
     * __getLastResponseHeaders.
     * Returns the SOAP headers from the last response.
     *
     * @return string
     *
     * @see http://php.net/manual/en/soapclient.getlastresponseheaders.php
     */
    public function __getLastResponseHeaders(): string
    {
    }

    /**
     * __getTypes.
     * Returns a list of SOAP types.
     *
     * @return array
     *
     * @see http://php.net/manual/en/soapclient.gettypes.php
     */
    public function __getTypes(): array
    {
    }

    /**
     * __setCookie.
     * The __setCookie purpose.
     *
     * @param string $name
     * @param string $value (optional)
     *
     * @see http://php.net/manual/en/soapclient.setcookie.php
     */
    public function __setCookie(string $name, string $value): void
    {
    }

    /**
     * __setLocation.
     * Sets the location of the Web service to use.
     *
     * @param string $new_location (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/soapclient.setlocation.php
     */
    public function __setLocation(string $new_location): string
    {
    }

    /**
     * __setSoapHeaders.
     * Sets SOAP headers for subsequent calls.
     *
     * @param mixed $soapheaders (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/soapclient.setsoapheaders.php
     */
    public function __setSoapHeaders(mixed $soapheaders): bool
    {
    }

    /**
     * __soapCall.
     * Calls a SOAP function.
     *
     * @param string $function_name
     * @param array  $arguments
     * @param array  $options         (optional)
     * @param mixed  $input_headers   (optional)
     * @param array  &$output_headers (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/soapclient.soapcall.php
     */
    public function __soapCall(string $function_name, array $arguments, array $options, mixed $input_headers, array &$output_headers): mixed
    {
    }
}
