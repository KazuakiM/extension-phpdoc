<?php

/**
 * Collectable.
 * Represents a garbage-collectable object.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.collectable.php
 */
interface Collectable
{
    /**
     * isGarbage.
     * Determine whether an object has been marked as garbage.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/collectable.isgarbage.php
     */
    public function isGarbage(): bool;

    /**
     * setGarbage.
     * Mark an object as garbage.
     *
     * @see http://php.net/manual/en/collectable.setgarbage.php
     */
    public function setGarbage(): void;
}
