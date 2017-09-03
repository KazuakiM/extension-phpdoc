<?php

/**
 * OAuthProvider.
 * Manages an OAuth provider class.
 * See also an external in-depth tutorial titled » Writing an OAuth Provider Service, which takes a hands-on approach to providing this service. There are also » OAuth provider examples within the OAuth extensions sources.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.oauthprovider.php
 */
class OAuthProvider
{
    /**
     * __construct.
     * Constructs a new OAuthProvider object.
     *
     * @param array $params_array (optional)
     *
     * @see http://php.net/manual/en/oauthprovider.construct.php
     */
    public function __construct(array $params_array)
    {
    }

    /**
     * addRequiredParameter.
     * Add required parameters.
     *
     * @param string $req_params
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauthprovider.addrequiredparameter.php
     */
    final public function addRequiredParameter(string $req_params): bool
    {
    }

    /**
     * callconsumerHandler.
     * Calls the consumerNonceHandler callback.
     *
     * @throws E_ERROR
     *
     * @see http://php.net/manual/en/oauthprovider.callconsumerhandler.php
     */
    public function callconsumerHandler(): void
    {
    }

    /**
     * callTimestampNonceHandler.
     * Calls the timestampNonceHandler callback.
     *
     * @throws E_ERROR
     *
     * @see http://php.net/manual/en/oauthprovider.calltimestampnoncehandler.php
     */
    public function callTimestampNonceHandler(): void
    {
    }

    /**
     * calltokenHandler.
     * Calls the tokenNonceHandler callback.
     *
     * @throws E_ERROR
     *
     * @see http://php.net/manual/en/oauthprovider.calltokenhandler.php
     */
    public function calltokenHandler(): void
    {
    }

    /**
     * checkOAuthRequest.
     * Check an oauth request.
     *
     * @param string $uri    (optional)
     * @param string $method (optional)
     *
     * @throws E_ERROR
     *
     * @see http://php.net/manual/en/oauthprovider.checkoauthrequest.php
     */
    public function checkOAuthRequest(string $uri, string $method): void
    {
    }

    /**
     * consumerHandler.
     * Set the consumerHandler handler callback.
     *
     * @param callable $callback_function
     *
     * @see http://php.net/manual/en/oauthprovider.consumerhandler.php
     */
    public function consumerHandler(callable $callback_function): void
    {
    }

    /**
     * generateToken.
     * Generate a random token.
     *
     * @param int  $size
     * @param bool $strong = false
     *
     * @throws E_WARNING
     *
     * @return string
     *
     * @see http://php.net/manual/en/oauthprovider.generatetoken.php
     */
    final public static function generateToken(int $size, bool $strong = false): string
    {
    }

    /**
     * is2LeggedEndpoint.
     * is2LeggedEndpoint.
     *
     * @param mixed $params_array
     *
     * @see http://php.net/manual/en/oauthprovider.is2leggedendpoint.php
     */
    public function is2LeggedEndpoint(mixed $params_array): void
    {
    }

    /**
     * isRequestTokenEndpoint.
     * Sets isRequestTokenEndpoint.
     *
     * @param bool $will_issue_request_token
     *
     * @see http://php.net/manual/en/oauthprovider.isrequesttokenendpoint.php
     */
    public function isRequestTokenEndpoint(bool $will_issue_request_token): void
    {
    }

    /**
     * removeRequiredParameter.
     * Remove a required parameter.
     *
     * @param string $req_params
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauthprovider.removerequiredparameter.php
     */
    final public function removeRequiredParameter(string $req_params): bool
    {
    }

    /**
     * reportProblem.
     * Report a problem.
     *
     * @param string $oauthexception
     * @param bool   $send_headers   = true
     *
     * @return string
     *
     * @see http://php.net/manual/en/oauthprovider.reportproblem.php
     */
    final public static function reportProblem(string $oauthexception, bool $send_headers = true): string
    {
    }

    /**
     * setParam.
     * Set a parameter.
     *
     * @param string $param_key
     * @param mixed  $param_val (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauthprovider.setparam.php
     */
    final public function setParam(string $param_key, mixed $param_val): bool
    {
    }

    /**
     * setRequestTokenPath.
     * Set request token path.
     *
     * @param string $path
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauthprovider.setrequesttokenpath.php
     */
    final public function setRequestTokenPath(string $path): bool
    {
    }

    /**
     * timestampNonceHandler.
     * Set the timestampNonceHandler handler callback.
     *
     * @param callable $callback_function
     *
     * @see http://php.net/manual/en/oauthprovider.timestampnoncehandler.php
     */
    public function timestampNonceHandler(callable $callback_function): void
    {
    }

    /**
     * tokenHandler.
     * Set the tokenHandler handler callback.
     *
     * @param callable $callback_function
     *
     * @see http://php.net/manual/en/oauthprovider.tokenhandler.php
     */
    public function tokenHandler(callable $callback_function): void
    {
    }
}
