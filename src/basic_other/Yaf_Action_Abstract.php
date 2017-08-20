<?php

/**
 * Yaf_Action_Abstract.
 * A action can be defined in a separate file in Yaf(see Yaf_Controller_Abstract). that is a action method can also be a Yaf_Action_Abstract class.
 * Since there should be a entry point which can be called by Yaf (as of PHP 5.3, there is a new magic method __invoke, but Yaf is not only works with PHP 5.3+, Yaf choose another magic method execute), you must implement the abstract method Yaf_Action_Abstract::execute() in your custom action class.
 *
 * @property $_controller
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-action-abstract.php
 */
class Yaf_Action_Abstract extends Yaf_Controller_Abstract
{
    protected $_controller;

    /**
     * execute.
     * Action entry point.
     *
     * @param mixed $arg (optional)
     * @param mixed $... (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/yaf-action-abstract.execute.php
     */
    public function execute(mixed $arg, mixed $etc): mixed
    {
    }

    /**
     * getController.
     * Retrieve controller object.
     *
     * @return Yaf_Controller_Abstract
     *
     * @see http://php.net/manual/en/yaf-action-abstract.getcontroller.php
     */
    public function getController(): Yaf_Controller_Abstract
    {
    }

    /* Inherited methods */
    //final private function Yaf_Controller_Abstract::__clone(): void
    //final private function Yaf_Controller_Abstract::__construct(): void
    //protected function Yaf_Controller_Abstract::display(string $tpl, array $parameters): bool
    //public function Yaf_Controller_Abstract::forward(string $action, array $paramters): void
    //public function Yaf_Controller_Abstract::getInvokeArg(string $name): void
    //public function Yaf_Controller_Abstract::getInvokeArgs(): void
    //public function Yaf_Controller_Abstract::getModuleName(): string
    //public function Yaf_Controller_Abstract::getRequest(): Yaf_Request_Abstract
    //public function Yaf_Controller_Abstract::getResponse(): Yaf_Response_Abstract
    //public function Yaf_Controller_Abstract::getView(): Yaf_View_Interface
    //public function Yaf_Controller_Abstract::getViewpath(): void
    //public function Yaf_Controller_Abstract::init(): void
    //public function Yaf_Controller_Abstract::initView(array $options): void
    //public function Yaf_Controller_Abstract::redirect(string $url): bool
    //protected function Yaf_Controller_Abstract::render(string $tpl, array $parameters): string
}
