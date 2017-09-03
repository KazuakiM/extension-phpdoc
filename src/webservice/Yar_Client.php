<?php

/**
 * Yar_Client.
 *
 *
 * @property $_protocol
 * @property $_uri
 * @property $_options
 * @property $_running
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yar-client.php
 */
class Yar_Client
{
    protected $_protocol;
    protected $_uri;
    protected $_options;
    protected $_running;

    /**
     * __construct.
     * Create a client.
     *
     * @param string $url
     *
     * @see http://php.net/manual/en/yar-client.construct.php
     */
    final public function __construct(string $url)
    {
    }

    /**
     * __call.
     * Call service.
     *
     * @param string $method
     * @param array  $parameters
     *
     * @see http://php.net/manual/en/yar-client.call.php
     */
    public function __call(string $method, array $parameters): void
    {
    }

    /**
     * setOpt.
     * Set calling contexts.
     *
     * @param number $name
     * @param mixed  $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yar-client.setopt.php
     */
    public function setOpt(number $name, mixed $value): bool
    {
    }
}
