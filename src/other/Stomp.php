<?php

/**
 * Stomp.
 *
 * Represents a connection between PHP and a Stomp compliant Message Broker.
 *
 * @see http://php.net/manual/en/class.stomp.php
 */
class Stomp
{
    /**
     * __construct.
     *
     * Opens a connection
     *
     * @param string $broker   = ini_get('stomp.default_broker_uri')
     * @param string $username (optional)
     * @param string $password (optional)
     * @param array  $headers  (optional)
     *
     * @see http://php.net/manual/en/stomp.construct.php
     */
    public function __construct(string $broker, string $username, string $password, array $headers)
    {
    }

    /**
     * __destruct.
     *
     * Closes stomp connection
     *
     * @return bool
     *
     * @see http://php.net/manual/en/stomp.destruct.php
     */
    public function __destruct(): bool
    {
    }

    /**
     * abort.
     *
     * Rolls back a transaction in progress
     *
     * @param string $transaction_id
     * @param array  $headers        (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/stomp.abort.php
     */
    public function abort(string $transaction_id, array $headers): bool
    {
    }

    /**
     * ack.
     *
     * Acknowledges consumption of a message
     *
     * @param mixed $msg
     * @param array $headers (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/stomp.ack.php
     */
    public function ack(mixed $msg, array $headers): bool
    {
    }

    /**
     * begin.
     *
     * Starts a transaction
     *
     * @param string $transaction_id
     * @param array  $headers        (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/stomp.begin.php
     */
    public function begin(string $transaction_id, array $headers): bool
    {
    }

    /**
     * commit.
     *
     * Commits a transaction in progress
     *
     * @param string $transaction_id
     * @param array  $headers        (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/stomp.commit.php
     */
    public function commit(string $transaction_id, array $headers): bool
    {
    }

    /**
     * error.
     *
     * Gets the last stomp error
     *
     * @return string
     *
     * @see http://php.net/manual/en/stomp.error.php
     */
    public function error(): string
    {
    }

    /**
     * getReadTimeout.
     *
     * Gets read timeout
     *
     * @return array
     *
     * @see http://php.net/manual/en/stomp.getreadtimeout.php
     */
    public function getReadTimeout(): array
    {
    }

    /**
     * getSessionId.
     *
     * Gets the current stomp session ID
     *
     * @return string
     *
     * @see http://php.net/manual/en/stomp.getsessionid.php
     */
    public function getSessionId(): string
    {
    }

    /**
     * hasFrame.
     *
     * Indicates whether or not there is a frame ready to read
     *
     * @return bool
     *
     * @see http://php.net/manual/en/stomp.hasframe.php
     */
    public function hasFrame(): bool
    {
    }

    /**
     * readFrame.
     *
     * Reads the next frame
     *
     * @param string $class_name = 'stompFrame'
     *
     * @return stompframe
     *
     * @see http://php.net/manual/en/stomp.readframe.php
     */
    public function readFrame(string $class_name = 'stompFrame'): stompframe
    {
    }

    /**
     * send.
     *
     * Sends a message
     *
     * @param string $destination
     * @param mixed  $msg
     * @param array  $headers     (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/stomp.send.php
     */
    public function send(string $destination, mixed $msg, array $headers): bool
    {
    }

    /**
     * setReadTimeout.
     *
     * Sets read timeout
     *
     * @param int $seconds
     * @param int $microseconds (optional)
     *
     * @see http://php.net/manual/en/stomp.setreadtimeout.php
     */
    public function setReadTimeout(int $seconds, int $microseconds): void
    {
    }

    /**
     * subscribe.
     *
     * Registers to listen to a given destination
     *
     * @param string $destination
     * @param array  $headers     (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/stomp.subscribe.php
     */
    public function subscribe(string $destination, array $headers): bool
    {
    }

    /**
     * unsubscribe.
     *
     * Removes an existing subscription
     *
     * @param string $destination
     * @param array  $headers     (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/stomp.unsubscribe.php
     */
    public function unsubscribe(string $destination, array $headers): bool
    {
    }
}
