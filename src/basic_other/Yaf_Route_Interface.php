<?php

/**
 * Yaf_Route_Interface.
 * Yaf_Route_Interface used for developer defined their custom route.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-route-interface.php
 */
interface Yaf_Route_Interface
{
    /**
     * assemble.
     * assemble a request.
     *
     * @param array $info
     * @param array $query (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/yaf-route-interface.assemble.php
     */
    public function assemble(array $info, array $query): string;

    /**
     * route.
     * route a request.
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-route-interface.route.php
     */
    public function route(Yaf_Request_Abstract $request): bool;
}
