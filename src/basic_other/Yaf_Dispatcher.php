<?php

/**
 * Yaf_Dispatcher.
 * Yaf_Dispatcher purpose is to initialize the request environment, route the incoming request, and then dispatch any discovered actions; it aggregates any responses and returns them when the process is complete.
 * Yaf_Dispatcher also implements the Singleton pattern, meaning only a single instance of it may be available at any given time. This allows it to also act as a registry on which the other objects in the dispatch process may draw.
 *
 * @property $_router
 * @property $_view
 * @property $_request
 * @property $_plugins
 * @property static $_instance
 * @property $_auto_render
 * @property $_return_response
 * @property $_instantly_flush
 * @property $_default_module
 * @property $_default_controller
 * @property $_default_action
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-dispatcher.php
 */
final class Yaf_Dispatcher
{
    private $_router;
    private $_view;
    private $_request;
    private $_plugins;
    private $_instance;
    private $_auto_render;
    private $_return_response;
    private $_instantly_flush;
    private $_default_module;
    private $_default_controller;
    private $_default_action;

    /**
     * __construct.
     * Yaf_Dispatcher constructor.
     *
     * @see http://php.net/manual/en/yaf-dispatcher.construct.php
     */
    public function __construct()
    {
    }

    /**
     * __clone.
     * Yaf_Dispatcher can not be cloned.
     *
     * @see http://php.net/manual/en/yaf-dispatcher.clone.php
     */
    private function __clone()
    {
    }

    /**
     * __sleep.
     * Yaf_Dispatcher can not be serialized.
     *
     * @see http://php.net/manual/en/yaf-dispatcher.sleep.php
     */
    private function __sleep(): void
    {
    }

    /**
     * __wakeup.
     * Yaf_Dispatcher can not be unserialized.
     *
     * @see http://php.net/manual/en/yaf-dispatcher.wakeup.php
     */
    private function __wakeup(): void
    {
    }

    /**
     * autoRender.
     * Switch on/off autorendering.
     *
     * @param bool $flag (optional)
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.autorender.php
     */
    public function autoRender(bool $flag): Yaf_Dispatcher
    {
    }

    /**
     * catchException.
     * Switch on/off exception catching.
     *
     * @param bool $flag (optional)
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.catchexception.php
     */
    public function catchException(bool $flag): Yaf_Dispatcher
    {
    }

    /**
     * disableView.
     * Disable view rendering.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-dispatcher.disableview.php
     */
    public function disableView(): bool
    {
    }

    /**
     * dispatch.
     * Dispatch a request.
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return Yaf_Response_Abstract
     *
     * @see http://php.net/manual/en/yaf-dispatcher.dispatch.php
     */
    public function dispatch(Yaf_Request_Abstract $request): Yaf_Response_Abstract
    {
    }

    /**
     * enableView.
     * enable view rendering.
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.enableview.php
     */
    public function enableView(): Yaf_Dispatcher
    {
    }

    /**
     * flushInstantly.
     * Switch on/off the instant flushing.
     *
     * @param bool $flag (optional)
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.flushinstantly.php
     */
    public function flushInstantly(bool $flag): Yaf_Dispatcher
    {
    }

    /**
     * getApplication.
     * Retrive the application.
     *
     * @return Yaf_Application
     *
     * @see http://php.net/manual/en/yaf-dispatcher.getapplication.php
     */
    public function getApplication(): Yaf_Application
    {
    }

    /**
     * getInstance.
     * Retrive the dispatcher instance.
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.getinstance.php
     */
    public static function getInstance(): Yaf_Dispatcher
    {
    }

    /**
     * getRequest.
     * Retrive the request instance.
     *
     * @return Yaf_Request_Abstract
     *
     * @see http://php.net/manual/en/yaf-dispatcher.getrequest.php
     */
    public function getRequest(): Yaf_Request_Abstract
    {
    }

    /**
     * getRouter.
     * Retrive router instance.
     *
     * @return Yaf_Router
     *
     * @see http://php.net/manual/en/yaf-dispatcher.getrouter.php
     */
    public function getRouter(): Yaf_Router
    {
    }

    /**
     * initView.
     * Initialize view and return it.
     *
     * @param string $templates_dir
     * @param array  $options       (optional)
     *
     * @return Yaf_View_Interface
     *
     * @see http://php.net/manual/en/yaf-dispatcher.initview.php
     */
    public function initView(string $templates_dir, array $options): Yaf_View_Interface
    {
    }

    /**
     * registerPlugin.
     * Register a plugin.
     *
     * @param Yaf_Plugin_Abstract $plugin
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.registerplugin.php
     */
    public function registerPlugin(Yaf_Plugin_Abstract $plugin): Yaf_Dispatcher
    {
    }

    /**
     * returnResponse.
     * The returnResponse purpose.
     *
     * @param bool $flag
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.returnresponse.php
     */
    public function returnResponse(bool $flag): Yaf_Dispatcher
    {
    }

    /**
     * setDefaultAction.
     * Change default action name.
     *
     * @param string $action
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.setdefaultaction.php
     */
    public function setDefaultAction(string $action): Yaf_Dispatcher
    {
    }

    /**
     * setDefaultController.
     * Change default controller name.
     *
     * @param string $controller
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.setdefaultcontroller.php
     */
    public function setDefaultController(string $controller): Yaf_Dispatcher
    {
    }

    /**
     * setDefaultModule.
     * Change default module name.
     *
     * @param string $module
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.setdefaultmodule.php
     */
    public function setDefaultModule(string $module): Yaf_Dispatcher
    {
    }

    /**
     * setErrorHandler.
     * Set error handler.
     *
     * @param call $callback
     * @param int  $error_types
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.seterrorhandler.php
     */
    public function setErrorHandler(call $callback, int $error_types): Yaf_Dispatcher
    {
    }

    /**
     * setRequest.
     * The setRequest purpose.
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.setrequest.php
     */
    public function setRequest(Yaf_Request_Abstract $request): Yaf_Dispatcher
    {
    }

    /**
     * setView.
     * Set a custom view engine.
     *
     * @param Yaf_View_Interface $view
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.setview.php
     */
    public function setView(Yaf_View_Interface $view): Yaf_Dispatcher
    {
    }

    /**
     * throwException.
     * Switch on/off exception throwing.
     *
     * @param bool $flag (optional)
     *
     * @return Yaf_Dispatcher
     *
     * @see http://php.net/manual/en/yaf-dispatcher.throwexception.php
     */
    public function throwException(bool $flag): Yaf_Dispatcher
    {
    }
}
