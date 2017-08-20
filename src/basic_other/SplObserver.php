<?php

/**
 * SplObserver.
 * The SplObserver interface is used alongside SplSubject to implement the Observer Design Pattern.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.splobserver.php
 */
interface SplObserver
{
    /**
     * update.
     * Receive update from subject.
     *
     * @param SplSubject $subject
     *
     * @see http://php.net/manual/en/splobserver.update.php
     */
    public function update(SplSubject $subject): void;
}
