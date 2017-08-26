<?php

/**
 * Yaf_Router.
 * Yaf_Router is the standard framework router. Routing is the process of taking a URI endpoint (that part of the URI which comes after the base URI: see Yaf_Request_Abstract::setBaseUri()) and decomposing it into parameters to determine which module, controller, and action of that controller should receive the request. This values of the module, controller, action and other parameters are packaged into a Yaf_Request_Abstract object which is then processed by Yaf_Dispatcher. Routing occurs only once: when the request is initially received and before the first controller is dispatched. Yaf_Router is designed to allow for mod_rewrite-like functionality using pure PHP structures. It is very loosely based on Ruby on Rails routing and does not require any prior knowledge of webserver URL rewriting. It is designed to work with a single Apache mod_rewrite rule (one of):.
 *
 * @property $_routes
 * @property $_current
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-router.php
 */
class Yaf_Router
{
    protected $_routes;
    protected $_current;

    /**
     * __construct.
     * Yaf_Router constructor.
     *
     * @see http://php.net/manual/en/yaf-router.construct.php
     */
    public function __construct()
    {
    }

    /**
     * addConfig.
     * Add config-defined routes into Router.
     *
     * @param Yaf_Config_Abstract $config
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-router.addconfig.php
     */
    public function addConfig(Yaf_Config_Abstract $config): bool
    {
    }

    /**
     * addRoute.
     * Add new Route into Router.
     *
     * @param string             $name
     * @param Yaf_Route_Abstract $route
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-router.addroute.php
     */
    public function addRoute(string $name, Yaf_Route_Abstract $route): bool
    {
    }

    /**
     * getCurrentRoute.
     * Get the effective route name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/yaf-router.getcurrentroute.php
     */
    public function getCurrentRoute(): string
    {
    }

    /**
     * getRoute.
     * Retrieve a route by name.
     *
     * @param string $name
     *
     * @return Yaf_Route_Interface
     *
     * @see http://php.net/manual/en/yaf-router.getroute.php
     */
    public function getRoute(string $name): Yaf_Route_Interface
    {
    }

    /**
     * getRoutes.
     * Retrieve registered routes.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/yaf-router.getroutes.php
     */
    public function getRoutes(): mixed
    {
    }

    /**
     * route.
     * The route purpose.
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-router.route.php
     */
    public function route(Yaf_Request_Abstract $request): bool
    {
    }
}
