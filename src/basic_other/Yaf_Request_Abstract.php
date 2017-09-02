<?php

/**
 * Yaf_Request_Abstract.
 *
 * @property $module
 * @property $controller
 * @property $action
 * @property $method
 * @property $params
 * @property $language
 * @property $_exception
 * @property $_base_uri
 * @property $uri
 * @property $dispatched
 * @property $routed
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-request-abstract.php
 */
class Yaf_Request_Abstract
{
    const SCHEME_HTTP = http;
    const SCHEME_HTTPS = https;

    public $module;
    public $controller;
    public $action;
    public $method;
    protected $params;
    protected $language;
    protected $_exception;
    protected $_base_uri;
    protected $uri;
    protected $dispatched;
    protected $routed;

    /**
     * getActionName.
     * The getActionName purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.getactionname.php
     */
    public function getActionName(): void
    {
    }

    /**
     * getBaseUri.
     * The getBaseUri purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.getbaseuri.php
     */
    public function getBaseUri(): void
    {
    }

    /**
     * getControllerName.
     * The getControllerName purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.getcontrollername.php
     */
    public function getControllerName(): void
    {
    }

    /**
     * getEnv.
     * Retrieve ENV varialbe.
     *
     * @param string $name
     * @param string $default (optional)
     *
     * @see http://php.net/manual/en/yaf-request-abstract.getenv.php
     */
    public function getEnv(string $name, string $default): void
    {
    }

    /**
     * getException.
     * The getException purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.getexception.php
     */
    public function getException(): void
    {
    }

    /**
     * getLanguage.
     * The getLanguage purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.getlanguage.php
     */
    public function getLanguage(): void
    {
    }

    /**
     * getMethod.
     * The getMethod purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.getmethod.php
     */
    public function getMethod(): void
    {
    }

    /**
     * getModuleName.
     * The getModuleName purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.getmodulename.php
     */
    public function getModuleName(): void
    {
    }

    /**
     * getParam.
     * The getParam purpose.
     *
     * @param string $name
     * @param string $default (optional)
     *
     * @see http://php.net/manual/en/yaf-request-abstract.getparam.php
     */
    public function getParam(string $name, string $default): void
    {
    }

    /**
     * getParams.
     * The getParams purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.getparams.php
     */
    public function getParams(): void
    {
    }

    /**
     * getRequestUri.
     * The getRequestUri purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.getrequesturi.php
     */
    public function getRequestUri(): void
    {
    }

    /**
     * getServer.
     * Retrieve SERVER variable.
     *
     * @param string $name
     * @param string $default (optional)
     *
     * @see http://php.net/manual/en/yaf-request-abstract.getserver.php
     */
    public function getServer(string $name, string $default): void
    {
    }

    /**
     * isCli.
     * The isCli purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.iscli.php
     */
    public function isCli(): void
    {
    }

    /**
     * isDispatched.
     * The isDispatched purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.isdispatched.php
     */
    public function isDispatched(): void
    {
    }

    /**
     * isGet.
     * The isGet purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.isget.php
     */
    public function isGet(): void
    {
    }

    /**
     * isHead.
     * The isHead purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.ishead.php
     */
    public function isHead(): void
    {
    }

    /**
     * isOptions.
     * The isOptions purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.isoptions.php
     */
    public function isOptions(): void
    {
    }

    /**
     * isPost.
     * The isPost purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.ispost.php
     */
    public function isPost(): void
    {
    }

    /**
     * isPut.
     * The isPut purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.isput.php
     */
    public function isPut(): void
    {
    }

    /**
     * isRouted.
     * The isRouted purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.isrouted.php
     */
    public function isRouted(): void
    {
    }

    /**
     * isXmlHttpRequest.
     * The isXmlHttpRequest purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.isxmlhttprequest.php
     */
    public function isXmlHttpRequest(): void
    {
    }

    /**
     * setActionName.
     * The setActionName purpose.
     *
     * @param string $action
     *
     * @see http://php.net/manual/en/yaf-request-abstract.setactionname.php
     */
    public function setActionName(string $action): void
    {
    }

    /**
     * setBaseUri.
     * set base URI.
     *
     * @param string $uir
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-request-abstract.setbaseuri.php
     */
    public function setBaseUri(string $uir): bool
    {
    }

    /**
     * setControllerName.
     * The setControllerName purpose.
     *
     * @param string $controller
     *
     * @see http://php.net/manual/en/yaf-request-abstract.setcontrollername.php
     */
    public function setControllerName(string $controller): void
    {
    }

    /**
     * setDispatched.
     * The setDispatched purpose.
     *
     * @see http://php.net/manual/en/yaf-request-abstract.setdispatched.php
     */
    public function setDispatched(): void
    {
    }

    /**
     * setModuleName.
     * The setModuleName purpose.
     *
     * @param string $module
     *
     * @see http://php.net/manual/en/yaf-request-abstract.setmodulename.php
     */
    public function setModuleName(string $module): void
    {
    }

    /**
     * setParam.
     * The setParam purpose.
     *
     * @param string $name
     * @param string $value (optional)
     *
     * @see http://php.net/manual/en/yaf-request-abstract.setparam.php
     */
    public function setParam(string $name, string $value): void
    {
    }

    /**
     * setRequestUri.
     * The setRequestUri purpose.
     *
     * @param string $uir
     *
     * @see http://php.net/manual/en/yaf-request-abstract.setrequesturi.php
     */
    public function setRequestUri(string $uir): void
    {
    }

    /**
     * setRouted.
     * The setRouted purpose.
     *
     * @param string $flag (optional)
     *
     * @see http://php.net/manual/en/yaf-request-abstract.setrouted.php
     */
    public function setRouted(string $flag): void
    {
    }
}
