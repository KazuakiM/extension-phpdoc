<?php

/**
 * Yaf_Route_Regex.
 * Yaf_Route_Regex is the most flexible route among the Yaf built-in routes.
 *
 * @property $_route
 * @property $_default
 * @property $_maps
 * @property $_verify
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-route-regex.php
 */
class Yaf_Route_Regex extends Yaf_Route_Interface implements Yaf_Route_Interface
{
    protected $_route;
    protected $_default;
    protected $_maps;
    protected $_verify;

    /**
     * __construct.
     * Yaf_Route_Regex constructor.
     *
     * @param string $match
     * @param array  $route
     * @param array  $map     (optional)
     * @param array  $verify  (optional)
     * @param string $reverse (optional)
     *
     * @see http://php.net/manual/en/yaf-route-regex.construct.php
     */
    public function __construct(string $match, array $route, array $map, array $verify, string $reverse)
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
     * @see http://php.net/manual/en/yaf-route-regex.assemble.php
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
     * @see http://php.net/manual/en/yaf-route-regex.route.php
     */
    public function route(Yaf_Request_Abstract $request): bool
    {
    }

    /* Inherited methods */
    //abstract public function Yaf_Route_Interface::assemble(array $info, array $query): string
    //abstract public function Yaf_Route_Interface::route(Yaf_Request_Abstract $request): bool
}
