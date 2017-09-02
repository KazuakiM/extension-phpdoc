<?php

/**
 * Yaf_Request_Http.
 * Any request from client is initialized as a Yaf_Request_Http. you can get the rquest infomations like, uri query and post parameters via methods of this class.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-request-http.php
 */
class Yaf_Request_Http extends Yaf_Request_Abstract
{
    /**
     * __construct.
     * Constructor of Yaf_Request_Http.
     *
     * @param string $request_uri (optional)
     * @param string $base_uri    (optional)
     *
     * @see http://php.net/manual/en/yaf-request-http.construct.php
     */
    public function __construct(string $request_uri, string $base_uri)
    {
    }

    /**
     * __clone.
     * The __clone purpose.
     *
     * @see http://php.net/manual/en/yaf-request-http.clone.php
     */
    private function __clone()
    {
    }

    /**
     * get.
     * Retrieve variable from client.
     *
     * @param string $name
     * @param string $default (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/yaf-request-http.get.php
     */
    public function get(string $name, string $default): mixed
    {
    }

    /**
     * getCookie.
     * Retrieve Cookie variable.
     *
     * @param string $name
     * @param string $default (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/yaf-request-http.getcookie.php
     */
    public function getCookie(string $name, string $default): mixed
    {
    }

    /**
     * getFiles.
     * The getFiles purpose.
     *
     * @see http://php.net/manual/en/yaf-request-http.getfiles.php
     */
    public function getFiles(): void
    {
    }

    /**
     * getPost.
     * Retrieve POST variable.
     *
     * @param string $name
     * @param string $default (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/yaf-request-http.getpost.php
     */
    public function getPost(string $name, string $default): mixed
    {
    }

    /**
     * getQuery.
     * Fetch a query parameter.
     *
     * @param string $name
     * @param string $default (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/yaf-request-http.getquery.php
     */
    public function getQuery(string $name, string $default): mixed
    {
    }

    /**
     * getRequest.
     * The getRequest purpose.
     *
     * @see http://php.net/manual/en/yaf-request-http.getrequest.php
     */
    public function getRequest(): void
    {
    }

    /**
     * isXmlHttpRequest.
     * Whether a Ajax Request.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-request-http.isxmlhttprequest.php
     */
    public function isXmlHttpRequest(): bool
    {
    }

    /* Inherited methods */
    //public function Yaf_Request_Abstract::getActionName(): void
    //public function Yaf_Request_Abstract::getBaseUri(): void
    //public function Yaf_Request_Abstract::getControllerName(): void
    //public function Yaf_Request_Abstract::getEnv(string $name, string $default): void
    //public function Yaf_Request_Abstract::getException(): void
    //public function Yaf_Request_Abstract::getLanguage(): void
    //public function Yaf_Request_Abstract::getMethod(): void
    //public function Yaf_Request_Abstract::getModuleName(): void
    //public function Yaf_Request_Abstract::getParam(string $name, string $default): void
    //public function Yaf_Request_Abstract::getParams(): void
    //public function Yaf_Request_Abstract::getRequestUri(): void
    //public function Yaf_Request_Abstract::getServer(string $name, string $default): void
    //public function Yaf_Request_Abstract::isCli(): void
    //public function Yaf_Request_Abstract::isDispatched(): void
    //public function Yaf_Request_Abstract::isGet(): void
    //public function Yaf_Request_Abstract::isHead(): void
    //public function Yaf_Request_Abstract::isOptions(): void
    //public function Yaf_Request_Abstract::isPost(): void
    //public function Yaf_Request_Abstract::isPut(): void
    //public function Yaf_Request_Abstract::isRouted(): void
    //public function Yaf_Request_Abstract::isXmlHttpRequest(): void
    //public function Yaf_Request_Abstract::setActionName(string $action): void
    //public function Yaf_Request_Abstract::setBaseUri(string $uir): bool
    //public function Yaf_Request_Abstract::setControllerName(string $controller): void
    //public function Yaf_Request_Abstract::setDispatched(): void
    //public function Yaf_Request_Abstract::setModuleName(string $module): void
    //public function Yaf_Request_Abstract::setParam(string $name, string $value): void
    //public function Yaf_Request_Abstract::setRequestUri(string $uir): void
    //public function Yaf_Request_Abstract::setRouted(string $flag): void
}
