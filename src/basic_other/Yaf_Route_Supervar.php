<?php

/**
 * Yaf_Route_Supervar.
 *
 * @property $_var_name
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-route-supervar.php
 */
class Yaf_Route_Supervar implements Yaf_Route_Interface
{
    protected $_var_name;

    /**
     * __construct.
     * The __construct purpose.
     *
     * @param string $supervar_name
     *
     * @see http://php.net/manual/en/yaf-route-supervar.construct.php
     */
    public function __construct(string $supervar_name)
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
     * @see http://php.net/manual/en/yaf-route-supervar.assemble.php
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
     * @see http://php.net/manual/en/yaf-route-supervar.route.php
     */
    public function route(Yaf_Request_Abstract $request): bool
    {
    }
}
