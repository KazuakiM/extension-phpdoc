<?php

/**
 * Yaf_View_Interface.
 * Yaf provides a ability for developers to use coustom view engine instead of build-in engine which is Yaf_View_Simple. There is a example to explain how to do this, please see Yaf_Dispatcher::setView().
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-view-interface.php
 */
interface Yaf_View_Interface
{
    /**
     * assign.
     * Assign value to View engine.
     *
     * @param string $name
     * @param string $value (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-view-interface.assign.php
     */
    public function assign(string $name, string $value): bool;

    /**
     * display.
     * Render and output a template.
     *
     * @param string $tpl
     * @param array  $tpl_vars (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-view-interface.display.php
     */
    public function display(string $tpl, array $tpl_vars): bool;

    /**
     * getScriptPath.
     * The getScriptPath purpose.
     *
     *
     * @see http://php.net/manual/en/yaf-view-interface.getscriptpath.php
     */
    public function getScriptPath(): void;

    /**
     * render.
     * Render a template.
     *
     * @param string $tpl
     * @param array  $tpl_vars (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/yaf-view-interface.render.php
     */
    public function render(string $tpl, array $tpl_vars): string;

    /**
     * setScriptPath.
     * The setScriptPath purpose.
     *
     * @param string $template_dir
     *
     * @see http://php.net/manual/en/yaf-view-interface.setscriptpath.php
     */
    public function setScriptPath(string $template_dir): void;
}
