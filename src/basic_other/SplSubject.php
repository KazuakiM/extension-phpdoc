<?php

/**
 * SplSubject.
 * The SplSubject interface is used alongside SplObserver to implement the Observer Design Pattern.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.splsubject.php
 */
interface SplSubject
{
    /**
     * attach.
     * Attach an SplObserver.
     *
     * @param SplObserver $observer
     *
     * @see http://php.net/manual/en/splsubject.attach.php
     */
    public function attach(SplObserver $observer): void;

    /**
     * detach.
     * Detach an observer.
     *
     * @param SplObserver $observer
     *
     * @see http://php.net/manual/en/splsubject.detach.php
     */
    public function detach(SplObserver $observer): void;

    /**
     * notify.
     * Notify an observer.
     *
     *
     * @see http://php.net/manual/en/splsubject.notify.php
     */
    public function notify(): void;
}
