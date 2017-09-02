<?php

/**
 * Yaf_Route_Simple.
 * Yaf_Route_Simple will match the query string, and find the route info.
 * all you need to do is tell Yaf_Route_Simple what key in the $_GET is module, what key is controller, and what key is action.
 * Yaf_Route_Simple::route() will always return TRUE, so it is important put Yaf_Route_Simple in the front of the Route stack, otherwise all the other routes will not be called.
 *
 * @property $controller
 * @property $module
 * @property $action
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-route-simple.php
 */
class Yaf_Route_Simple implements Yaf_Route_Interface
{
    protected $controller;
    protected $module;
    protected $action;

    /**
     * __construct.
     * Yaf_Route_Simple constructor.
     *
     * @param string $module_name
     * @param string $controller_name
     * @param string $action_name
     *
     * @see http://php.net/manual/en/yaf-route-simple.construct.php
     */
    public function __construct(string $module_name, string $controller_name, string $action_name)
    {
    }

    /**
     * assemble.
     * Assemble a url.
     *
     * @param array $info
     * @param array $query (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/yaf-route-simple.assemble.php
     */
    public function assemble(array $info, array $query): string
    {
    }

    /**
     * route.
     * Route a request.
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-route-simple.route.php
     */
    public function route(Yaf_Request_Abstract $request): bool
    {
    }
}
