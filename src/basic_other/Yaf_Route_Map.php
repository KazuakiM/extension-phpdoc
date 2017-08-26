<?php

/**
 * Yaf_Route_Map.
 * Yaf_Route_Map is a built-in route, it simply convert a URI endpoint (that part of the URI which comes after the base URI: see Yaf_Request_Abstract::setBaseUri()) to a controller name or action name(depends on the paramter passed to Yaf_Route_Map::__construct()) in following rule: A => controller A. A/B/C => controller A_B_C. A/B/C/D/E => controller A_B_C_D_E.
 * If the second parameter of Yaf_Route_Map::__construct() is specificed, then only the part before delimeter of URI will used to routing, the part after it is used to routing request parameters (see the example section of Yaf_Route_Map::__construct()).
 *
 * @property $_ctl_router
 * @property $_delimeter
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-route-map.php
 */
class Yaf_Route_Map implements Yaf_Route_Interface
{
    protected $_ctl_router;
    protected $_delimeter;

    /**
     * __construct.
     * The __construct purpose.
     *
     * @param string $controller_prefer = false
     * @param string $delimiter         = ''
     *
     * @see http://php.net/manual/en/yaf-route-map.construct.php
     */
    public function __construct($controller_prefer = false, string $delimiter = '')
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
     * @see http://php.net/manual/en/yaf-route-map.assemble.php
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
     * @see http://php.net/manual/en/yaf-route-map.route.php
     */
    public function route(Yaf_Request_Abstract $request): bool
    {
    }
}
