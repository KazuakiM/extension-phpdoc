<?php

/**
 * Yaf_Plugin_Abstract.
 * Plugins allow for easy extensibility and customization of the framework.
 * Plugins are classes. The actual class definition will vary based on the component -- you may need to implement this interface, but the fact remains that the plugin is itself a class.
 * A plugin could be loaded into Yaf by using Yaf_Dispatcher::registerPlugin(), after registerd, All the methods which the plugin implemented according to this interface, will be called at the proper time.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-plugin-abstract.php
 */
class Yaf_Plugin_Abstract
{
    /**
     * dispatchLoopShutdown.
     * The dispatchLoopShutdown purpose.
     *
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     *
     * @see http://php.net/manual/en/yaf-plugin-abstract.dispatchloopshutdown.php
     */
    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response): void
    {
    }

    /**
     * dispatchLoopStartup.
     * The dispatchLoopStartup purpose.
     *
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     *
     * @see http://php.net/manual/en/yaf-plugin-abstract.dispatchloopstartup.php
     */
    public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response): void
    {
    }

    /**
     * postDispatch.
     * The postDispatch purpose.
     *
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     *
     * @see http://php.net/manual/en/yaf-plugin-abstract.postdispatch.php
     */
    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response): void
    {
    }

    /**
     * preDispatch.
     * The preDispatch purpose.
     *
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     *
     * @see http://php.net/manual/en/yaf-plugin-abstract.predispatch.php
     */
    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response): void
    {
    }

    /**
     * preResponse.
     * The preResponse purpose.
     *
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     *
     * @see http://php.net/manual/en/yaf-plugin-abstract.preresponse.php
     */
    public function preResponse(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response): void
    {
    }

    /**
     * routerShutdown.
     * The routerShutdown purpose.
     *
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     *
     * @see http://php.net/manual/en/yaf-plugin-abstract.routershutdown.php
     */
    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response): void
    {
    }

    /**
     * routerStartup.
     * RouterStartup hook.
     *
     * @param Yaf_Request_Abstract  $request
     * @param Yaf_Response_Abstract $response
     *
     * @see http://php.net/manual/en/yaf-plugin-abstract.routerstartup.php
     */
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response): void
    {
    }
}
