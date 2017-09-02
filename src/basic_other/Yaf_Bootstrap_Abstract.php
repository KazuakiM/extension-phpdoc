<?php

/**
 * Yaf_Bootstrap_Abstract.
 * Bootstrap is a mechanism used to do some intial config before a Application run.
 * User may define their own Bootstrap class by inheriting Yaf_Bootstrap_Abstract
 * Any method declared in Bootstrap class with leading "_init", will be called by Yaf_Application::bootstrap() one by one according to their defined order.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-bootstrap-abstract.php
 */
abstract class Yaf_Bootstrap_Abstract
{
}
