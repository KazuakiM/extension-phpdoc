<?php

/**
 * Yaf_View_Simple.
 * Yaf_View_Simple is the built-in template engine in Yaf, it is a simple but fast template engine, and only support PHP script template.
 *
 * @property $_tpl_vars
 * @property $_tpl_dir
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-view-simple.php
 */
class Yaf_View_Simple implements Yaf_View_Interface
{
    protected $_tpl_vars;
    protected $_tpl_dir;

    /**
     * __construct.
     * Constructor of Yaf_View_Simple.
     *
     * @param string $template_dir
     * @param array  $options      (optional)
     *
     * @see http://php.net/manual/en/yaf-view-simple.construct.php
     */
    final public function __construct(string $template_dir, array $options)
    {
    }

    /**
     * __get.
     * Retrieve assigned variable.
     *
     * @param string $name (optional)
     *
     * @see http://php.net/manual/en/yaf-view-simple.get.php
     */
    public function __get(string $name): void
    {
    }

    /**
     * __isset.
     * The __isset purpose.
     *
     * @param string $name
     *
     * @see http://php.net/manual/en/yaf-view-simple.isset.php
     */
    public function __isset(string $name): void
    {
    }

    /**
     * __set.
     * Set value to engine.
     *
     * @param string $name
     * @param mixed  $value
     *
     * @see http://php.net/manual/en/yaf-view-simple.set.php
     */
    public function __set(string $name, mixed $value): void
    {
    }

    /**
     * assign.
     * Assign values.
     *
     * @param string $name
     * @param mixed  $value (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-view-simple.assign.php
     */
    public function assign(string $name, mixed $value): bool
    {
    }

    /**
     * assignRef.
     * The assignRef purpose.
     *
     * @param string $name
     * @param mixed  &$value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-view-simple.assignref.php
     */
    public function assignRef(string $name, mixed &$value): bool
    {
    }

    /**
     * clear.
     * Clear Assigned values.
     *
     * @param string $name (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-view-simple.clear.php
     */
    public function clear(string $name): bool
    {
    }

    /**
     * display.
     * Render and display.
     *
     * @param string $tpl
     * @param array  $tpl_vars (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-view-simple.display.php
     */
    public function display(string $tpl, array $tpl_vars): bool
    {
    }

    /**
     * eval.
     * Render template.
     *
     * @param string $tpl_content
     * @param array  $tpl_vars    (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/yaf-view-simple.eval.php
     */
    public function eval(string $tpl_content, array $tpl_vars): string
    {
    }

    /**
     * getScriptPath.
     * Get templates directory.
     *
     * @return string
     *
     * @see http://php.net/manual/en/yaf-view-simple.getscriptpath.php
     */
    public function getScriptPath(): string
    {
    }

    /**
     * render.
     * Render template.
     *
     * @param string $tpl
     * @param array  $tpl_vars (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/yaf-view-simple.render.php
     */
    public function render(string $tpl, array $tpl_vars): string
    {
    }

    /**
     * setScriptPath.
     * Set tempaltes directory.
     *
     * @param string $template_dir
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-view-simple.setscriptpath.php
     */
    public function setScriptPath(string $template_dir): bool
    {
    }
}
