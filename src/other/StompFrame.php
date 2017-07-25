<?php

/**
 * StompFrame.
 *
 * Represents a message which was sent or received from a Stomp compliant Message Broker.
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.stompframe.php
 */
class StompFrame
{
    public $command;
    public $headers;
    public $body;

    /**
     * __construct.
     *
     * Constructor
     *
     * @param string $command (optional)
     * @param array  $headers (optional)
     * @param string $body    (optional)
     *
     * @see http://php.net/manual/en/stompframe.construct.php
     */
    public function __construct(string $command, array $headers, string $body)
    {
    }
}
