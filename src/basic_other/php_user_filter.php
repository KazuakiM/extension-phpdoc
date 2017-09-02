<?php

/**
 * php_user_filter.
 * Children of this class are passed to stream_filter_register().
 *
 * @property $filtername
 * @property $params
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.php-user-filter.php
 */
class php_user_filter
{
    public $filtername;
    public $params;

    /**
     * filter.
     * Called when applying the filter.
     *
     * @param resource $in
     * @param resource $out
     * @param int      &$consumed
     * @param bool     $closing
     *
     * @return int
     *
     * @see http://php.net/manual/en/php-user-filter.filter.php
     */
    public function filter(resource $in, resource $out, int &$consumed, bool $closing): int
    {
    }

    /**
     * onClose.
     * Called when closing the filter.
     *
     * @see http://php.net/manual/en/php-user-filter.onclose.php
     */
    public function onClose(): void
    {
    }

    /**
     * onCreate.
     * Called when creating the filter.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/php-user-filter.oncreate.php
     */
    public function onCreate(): bool
    {
    }
}
