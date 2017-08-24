<?php

/**
 * Yaf_Request_Simple.
 * Yaf_Request_Simple is particularlly used for test puporse. ie. simulate some espacial request under CLI mode.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-request-simple.php
 */
class Yaf_Request_Simple extends Yaf_Request_Abstract
{
    const SCHEME_HTTP = http;
    const SCHEME_HTTPS = https;

    /**
     * __construct.
     * Constructor of Yaf_Request_Simple.
     *
     * @param string $method     (optional)
     * @param string $module     (optional)
     * @param string $controller (optional)
     * @param string $action     (optional)
     * @param array  $params     (optional)
     *
     * @see http://php.net/manual/en/yaf-request-simple.construct.php
     */
    public function __construct(string $method, string $module, string $controller, string $action, array $params)
    {
    }

    /**
     * __clone.
     * The __clone purpose.
     *
     * @see http://php.net/manual/en/yaf-request-simple.clone.php
     */
    private function __clone()
    {
    }

    /**
     * get.
     * The get purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-request-simple.get.php
     */
    public function get(): void
    {
    }

    /**
     * getCookie.
     * The getCookie purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-request-simple.getcookie.php
     */
    public function getCookie(): void
    {
    }

    /**
     * getFiles.
     * The getFiles purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-request-simple.getfiles.php
     */
    public function getFiles(): void
    {
    }

    /**
     * getPost.
     * The getPost purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-request-simple.getpost.php
     */
    public function getPost(): void
    {
    }

    /**
     * getQuery.
     * The getQuery purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-request-simple.getquery.php
     */
    public function getQuery(): void
    {
    }

    /**
     * getRequest.
     * The getRequest purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-request-simple.getrequest.php
     */
    public function getRequest(): void
    {
    }

    /**
     * isXmlHttpRequest.
     * The isXmlHttpRequest purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-request-simple.isxmlhttprequest.php
     */
    public function isXmlHttpRequest(): void
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
