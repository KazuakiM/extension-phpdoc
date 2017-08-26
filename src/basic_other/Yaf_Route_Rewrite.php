<?php

/**
 * Yaf_Route_Rewrite.
 * For usage, please see the example section of Yaf_Route_Rewrite::__construct().
 *
 * @property $_route
 * @property $_default
 * @property $_verify
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-route-rewrite.php
 */
class Yaf_Route_Rewrite extends Yaf_Route_Interface implements Yaf_Route_Interface
{
    protected $_route;
    protected $_default;
    protected $_verify;

    /**
     * __construct.
     * Yaf_Route_Rewrite constructor.
     *
     * @param string $match
     * @param array  $route
     * @param array  $verify (optional)
     *
     * @see http://php.net/manual/en/yaf-route-rewrite.construct.php
     */
    public function __construct(string $match, array $route, array $verify)
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
     * @see http://php.net/manual/en/yaf-route-rewrite.assemble.php
     */
    public function assemble(array $info, array $query): string
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
     * @see http://php.net/manual/en/yaf-route-rewrite.route.php
     */
    public function route(Yaf_Request_Abstract $request): bool
    {
    }

    /* Inherited methods */
    //abstract public function Yaf_Route_Interface::assemble(array $info, array $query): string
    //abstract public function Yaf_Route_Interface::route(Yaf_Request_Abstract $request): bool
}
