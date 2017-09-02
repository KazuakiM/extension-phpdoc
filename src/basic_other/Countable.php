<?php

/**
 * Countable.
 * Classes implementing Countable can be used with the count() function.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.countable.php
 */
interface Countable
{
    /**
     * count.
     * Count elements of an object.
     *
     * @return int
     *
     * @see http://php.net/manual/en/countable.count.php
     */
    public function count(): int;
}
