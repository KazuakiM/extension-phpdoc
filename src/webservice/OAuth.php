<?php

/**
 * OAuth.
 * The OAuth extension provides a simple interface to interact with data providers using the OAuth HTTP specification to protect private resources.
 *
 * @property $debug
 * @property $sslChecks
 * @property $debugInfo
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.oauth.php
 */
class OAuth
{
    public $debug;
    public $sslChecks;
    public $debugInfo;

    /**
     * __construct.
     * Create a new OAuth object.
     *
     * @param string $consumer_key
     * @param string $consumer_secret
     * @param string $signature_method = OAUTH_SIG_METHOD_HMACSHA1
     * @param int    $auth_type        = 0
     *
     * @see http://php.net/manual/en/oauth.construct.php
     */
    public function __construct(string $consumer_key, string $consumer_secret, string $signature_method = OAUTH_SIG_METHOD_HMACSHA1, int $auth_type = 0)
    {
    }

    /**
     * __destruct.
     * The destructor.
     *
     * @see http://php.net/manual/en/oauth.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * disableDebug.
     * Turn off verbose debugging.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauth.disabledebug.php
     */
    public function disableDebug(): bool
    {
    }

    /**
     * disableRedirects.
     * Turn off redirects.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauth.disableredirects.php
     */
    public function disableRedirects(): bool
    {
    }

    /**
     * disableSSLChecks.
     * Turn off SSL checks.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauth.disablesslchecks.php
     */
    public function disableSSLChecks(): bool
    {
    }

    /**
     * enableDebug.
     * Turn on verbose debugging.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauth.enabledebug.php
     */
    public function enableDebug(): bool
    {
    }

    /**
     * enableRedirects.
     * Turn on redirects.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauth.enableredirects.php
     */
    public function enableRedirects(): bool
    {
    }

    /**
     * enableSSLChecks.
     * Turn on SSL checks.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauth.enablesslchecks.php
     */
    public function enableSSLChecks(): bool
    {
    }

    /**
     * fetch.
     * Fetch an OAuth protected resource.
     *
     * @param string $protected_resource_url
     * @param array  $extra_parameters       (optional)
     * @param string $http_method            (optional)
     * @param array  $http_headers           (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/oauth.fetch.php
     */
    public function fetch(string $protected_resource_url, array $extra_parameters, string $http_method, array $http_headers): mixed
    {
    }

    /**
     * generateSignature.
     * Generate a signature.
     *
     * @param string $http_method
     * @param string $url
     * @param mixed  $extra_parameters (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/oauth.generatesignature.php
     */
    public function generateSignature(string $http_method, string $url, mixed $extra_parameters): string
    {
    }

    /**
     * getAccessToken.
     * Fetch an access token.
     *
     * @param string $access_token_url
     * @param string $auth_session_handle (optional)
     * @param string $verifier_token      (optional)
     * @param string $http_method         (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/oauth.getaccesstoken.php
     */
    public function getAccessToken(string $access_token_url, string $auth_session_handle, string $verifier_token, string $http_method): array
    {
    }

    /**
     * getCAPath.
     * Gets CA information.
     *
     * @return array
     *
     * @see http://php.net/manual/en/oauth.getcapath.php
     */
    public function getCAPath(): array
    {
    }

    /**
     * getLastResponse.
     * Get the last response.
     *
     * @return string
     *
     * @see http://php.net/manual/en/oauth.getlastresponse.php
     */
    public function getLastResponse(): string
    {
    }

    /**
     * getLastResponseHeaders.
     * Get headers for last response.
     *
     * @return string
     *
     * @see http://php.net/manual/en/oauth.getlastresponseheaders.php
     */
    public function getLastResponseHeaders(): string
    {
    }

    /**
     * getLastResponseInfo.
     * Get HTTP information about the last response.
     *
     * @return array
     *
     * @see http://php.net/manual/en/oauth.getlastresponseinfo.php
     */
    public function getLastResponseInfo(): array
    {
    }

    /**
     * getRequestHeader.
     * Generate OAuth header string signature.
     *
     * @param string $http_method
     * @param string $url
     * @param mixed  $extra_parameters (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/oauth.getrequestheader.php
     */
    public function getRequestHeader(string $http_method, string $url, mixed $extra_parameters): string
    {
    }

    /**
     * getRequestToken.
     * Fetch a request token.
     *
     * @param string $request_token_url
     * @param string $callback_url      (optional)
     * @param string $http_method       (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/oauth.getrequesttoken.php
     */
    public function getRequestToken(string $request_token_url, string $callback_url, string $http_method): array
    {
    }

    /**
     * setAuthType.
     * Set authorization type.
     *
     * @param int $auth_type
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauth.setauthtype.php
     */
    public function setAuthType(int $auth_type): bool
    {
    }

    /**
     * setCAPath.
     * Set CA path and info.
     *
     * @param string $ca_path (optional)
     * @param string $ca_info (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/oauth.setcapath.php
     */
    public function setCAPath(string $ca_path, string $ca_info): mixed
    {
    }

    /**
     * setNonce.
     * Set the nonce for subsequent requests.
     *
     * @param string $nonce
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/oauth.setnonce.php
     */
    public function setNonce(string $nonce): mixed
    {
    }

    /**
     * setRequestEngine.
     * The setRequestEngine purpose.
     *
     * @param int $reqengine
     *
     * @throws OAuthException
     *
     * @see http://php.net/manual/en/oauth.setrequestengine.php
     */
    public function setRequestEngine(int $reqengine): void
    {
    }

    /**
     * setRSACertificate.
     * Set the RSA certificate.
     *
     * @param string $cert
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/oauth.setrsacertificate.php
     */
    public function setRSACertificate(string $cert): mixed
    {
    }

    /**
     * setSSLChecks.
     * Tweak specific SSL checks for requests.
     *
     * @param int $sslcheck
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauth.setsslchecks.php
     */
    public function setSSLChecks(int $sslcheck): bool
    {
    }

    /**
     * setTimestamp.
     * Set the timestamp.
     *
     * @param string $timestamp
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/oauth.settimestamp.php
     */
    public function setTimestamp(string $timestamp): mixed
    {
    }

    /**
     * setToken.
     * Sets the token and secret.
     *
     * @param string $token
     * @param string $token_secret
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauth.settoken.php
     */
    public function setToken(string $token, string $token_secret): bool
    {
    }

    /**
     * setVersion.
     * Set the OAuth version.
     *
     * @param string $version
     *
     * @return bool
     *
     * @see http://php.net/manual/en/oauth.setversion.php
     */
    public function setVersion(string $version): bool
    {
    }
}
