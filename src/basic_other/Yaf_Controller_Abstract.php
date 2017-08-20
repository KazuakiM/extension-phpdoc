<?php

/**
 * Yaf_Controller_Abstract.
 * Yaf_Controller_Abstract is the heart of Yaf's system. MVC stands for Model-View-Controller and is a design pattern targeted at separating application logic from display logic.
 * Every custom controller shall inherit Yaf_Controller_Abstract.
 * You will find that you can not define __construct function for your custom controller, thus, Yaf_Controller_Abstract provides a magic method: Yaf_Controller_Abstract::init().
 * If you have defined a init() method in your custom controller, it will be called as long as the controller was instantiated.
 * Action may have arguments, when a request coming, if there are the same name variable in the request parameters(see Yaf_Request_Abstract::getParam()) after routed, Yaf will pass them to the action method (see Yaf_Action_Abstract::execute()).
 *
 * @property $actions
 * @property $_module
 * @property $_name
 * @property $_request
 * @property $_response
 * @property $_invoke_args
 * @property $_view
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-controller-abstract.php
 */
abstract class Yaf_Controller_Abstract
{
    public $actions;
    protected $_module;
    protected $_name;
    protected $_request;
    protected $_response;
    protected $_invoke_args;
    protected $_view;

    /**
     * __construct.
     * Yaf_Controller_Abstract constructor.
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.construct.php
     */
    final private function __construct()
    {
    }

    /**
     * __clone.
     * Yaf_Controller_Abstract can not be cloned.
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.clone.php
     */
    final private function __clone()
    {
    }

    /**
     * forward.
     * foward to another action.
     *
     * @param string $action
     * @param array  $paramters (optional)
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.forward.php
     */
    public function forward(string $action, array $paramters): void
    {
    }

    /**
     * getInvokeArg.
     * The getInvokeArg purpose.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.getinvokearg.php
     */
    public function getInvokeArg(string $name): void
    {
    }

    /**
     * getInvokeArgs.
     * The getInvokeArgs purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.getinvokeargs.php
     */
    public function getInvokeArgs(): void
    {
    }

    /**
     * getModuleName.
     * Get module name.
     *
     * @return string
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.getmodulename.php
     */
    public function getModuleName(): string
    {
    }

    /**
     * getRequest.
     * Retrieve current request object.
     *
     * @return Yaf_Request_Abstract
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.getrequest.php
     */
    public function getRequest(): Yaf_Request_Abstract
    {
    }

    /**
     * getResponse.
     * Retrieve current response object.
     *
     * @return Yaf_Response_Abstract
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.getresponse.php
     */
    public function getResponse(): Yaf_Response_Abstract
    {
    }

    /**
     * getView.
     * Retrieve the view engine.
     *
     * @return Yaf_View_Interface
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.getview.php
     */
    public function getView(): Yaf_View_Interface
    {
    }

    /**
     * getViewpath.
     * The getViewpath purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.getviewpath.php
     */
    public function getViewpath(): void
    {
    }

    /**
     * init.
     * Controller initializer.
     *
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.init.php
     */
    public function init(): void
    {
    }

    /**
     * initView.
     * The initView purpose.
     *
     * @param array $options (optional)
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.initview.php
     */
    public function initView(array $options): void
    {
    }

    /**
     * redirect.
     * Redirect to a URL.
     *
     * @param string $url
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.redirect.php
     */
    public function redirect(string $url): bool
    {
    }

    /**
     * setViewpath.
     * The setViewpath purpose.
     *
     * @param string $view_directory
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.setviewpath.php
     */
    public function setViewpath(string $view_directory): void
    {
    }

    /**
     * display.
     * The display purpose.
     *
     * @param string $tpl
     * @param array  $parameters (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.display.php
     */
    protected function display(string $tpl, array $parameters): bool
    {
    }

    /**
     * render.
     * Render view template.
     *
     * @param string $tpl
     * @param array  $parameters (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/yaf-controller-abstract.render.php
     */
    protected function render(string $tpl, array $parameters): string
    {
    }
}
