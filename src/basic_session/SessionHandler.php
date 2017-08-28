<?php

/**
 * SessionHandler.
 * SessionHandler is a special class that can be used to expose the current internal PHP session save handler by inheritance. There are seven methods which wrap the seven internal session save handler callbacks (open, close, read, write, destroy, gc and create_sid). By default, this class will wrap whatever internal save handler is set as defined by the session.save_handler configuration directive which is usually files by default. Other internal session save handlers are provided by PHP extensions such as SQLite (as sqlite), Memcache (as memcache), and Memcached (as memcached).
 * When a plain instance of SessionHandler is set as the save handler using session_set_save_handler() it will wrap the current save handlers. A class extending from SessionHandler allows you to override the methods or intercept or filter them by calls the parent class methods which ultimately wrap the internal PHP session handlers.
 * This allows you, for example, to intercept the read and write methods to encrypt/decrypt the session data and then pass the result to and from the parent class. Alternatively one might chose to entirely override a method like the garbage collection callback gc.
 * Because the SessionHandler wraps the current internal save handler methods, the above example of encryption can be applied to any internal save handler without having to know the internals of the handlers.
 * To use this class, first set the save handler you wish to expose using session.save_handler and then pass an instance of SessionHandler or one extending it to session_set_save_handler().
 * Please note the callback methods of this class are designed to be called internally by PHP and are not meant to be called from user-space code. The return values are equally processed internally by PHP. For more information on the session workflow, please refer session_set_save_handler().
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.sessionhandler.php
 */
class SessionHandler implements SessionHandlerInterface
{
    /**
     * close.
     * Close the session.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sessionhandler.close.php
     */
    public function close(): bool
    {
    }

    /**
     * create_sid.
     * Return a new session ID.
     *
     * @return string
     *
     * @see http://php.net/manual/en/sessionhandler.create-sid.php
     */
    public function create_sid(): string
    {
    }

    /**
     * destroy.
     * Destroy a session.
     *
     * @param string $session_id
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sessionhandler.destroy.php
     */
    public function destroy(string $session_id): bool
    {
    }

    /**
     * gc.
     * Cleanup old sessions.
     *
     * @param int $maxlifetime
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sessionhandler.gc.php
     */
    public function gc(int $maxlifetime): bool
    {
    }

    /**
     * open.
     * Initialize session.
     *
     * @param string $save_path
     * @param string $session_name
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sessionhandler.open.php
     */
    public function open(string $save_path, string $session_name): bool
    {
    }

    /**
     * read.
     * Read session data.
     *
     * @param string $session_id
     *
     * @return string
     *
     * @see http://php.net/manual/en/sessionhandler.read.php
     */
    public function read(string $session_id): string
    {
    }

    /**
     * write.
     * Write session data.
     *
     * @param string $session_id
     * @param string $session_data
     *
     * @return bool
     *
     * @see http://php.net/manual/en/sessionhandler.write.php
     */
    public function write(string $session_id, string $session_data): bool
    {
    }
}
