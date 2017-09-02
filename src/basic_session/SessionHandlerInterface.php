<?php

/**
 * SessionHandlerInterface.
 * SessionHandlerInterface is an interface which defines a prototype for creating a custom session handler. In order to pass a custom session handler to session_set_save_handler() using its OOP invocation, the class must implement this interface.
 * Please note the callback methods of this class are designed to be called internally by PHP and are not meant to be called from user-space code.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.sessionhandlerinterface.php
 */
interface SessionHandlerInterface
{
    /**
     * close.
     *
     * @see http://php.net/manual/en/sessionhandlerinterface.close.php
     */
    public function close();

    /**
     * destroy.
     *
     * @param string $session_id
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sessionhandlerinterface.destroy.php
     */
    public function destroy(string $session_id): bool;

    /**
     * gc.
     *
     * @param int $maxlifetime
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sessionhandlerinterface.gc.php
     */
    public function gc(int $maxlifetime): bool;

    /**
     * open.
     *
     * @param string $save_path
     * @param string $session_name
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sessionhandlerinterface.open.php
     */
    public function open(string $save_path, string $session_name): bool;

    /**
     * read.
     *
     * @param string $session_id
     *
     * @return string
     *
     * @see http://php.net/manual/en/sessionhandlerinterface.read.php
     */
    public function read(string $session_id): string;

    /**
     * write.
     *
     * @param string $session_id
     * @param string $session_data
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sessionhandlerinterface.write.php
     */
    public function write(string $session_id, string $session_data): bool;
}
