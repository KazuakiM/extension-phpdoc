<?php

/**
 * Yaf_Route_Static.
 * Defaultly, Yaf_Router only have a Yaf_Route_Static as its default route.
 * And Yaf_Route_Static is designed to handle the 80% requirement.
 * please *NOTE* that it is unecessary to instance a Yaf_Route_Static, also unecesary to add it into Yaf_Router's routes stack, since there is always be one in Yaf_Router's routes stack, and always be called at the last time.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-route-static.php
 */
class Yaf_Route_Static implements Yaf_Router
{
    /**
     * assemble.
     * Assemble a url.
     *
     * @param array $info
     * @param array $query (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/yaf-route-static.assemble.php
     */
    public function assemble(array $info, array $query): string
    {
    }

    /**
     * match.
     * The match purpose.
     *
     * @param string $uri
     *
     * @see http://php.net/manual/en/yaf-route-static.match.php
     */
    public function match(string $uri): void
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
     * @see http://php.net/manual/en/yaf-route-static.route.php
     */
    public function route(Yaf_Request_Abstract $request): bool
    {
    }
}
