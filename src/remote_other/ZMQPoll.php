<?php

/**
 * ZMQPoll.
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.zmqpoll.php
 */
class ZMQPoll
{
    /**
     * add.
     * Add item to the poll set.
     *
     * @param mixed $entry
     * @param int   $type
     *
     * @return string
     *
     * @see http://php.net/manual/en/zmqpoll.add.php
     */
    public function add(mixed $entry, int $type): string
    {
    }

    /**
     * clear.
     * Clear the poll set.
     *
     * @return ZMQPoll
     *
     * @see http://php.net/manual/en/zmqpoll.clear.php
     */
    public function clear(): ZMQPoll
    {
    }

    /**
     * count.
     * Count items in the poll set.
     *
     * @return int
     *
     * @see http://php.net/manual/en/zmqpoll.count.php
     */
    public function count(): int
    {
    }

    /**
     * getLastErrors.
     * Get poll errors.
     *
     * @return array
     *
     * @see http://php.net/manual/en/zmqpoll.getlasterrors.php
     */
    public function getLastErrors(): array
    {
    }

    /**
     * poll.
     * Poll the items.
     *
     * @param array &$readable
     * @param array &$writable
     * @param int   $timeout   = 1
     *
     * @return int
     *
     * @see http://php.net/manual/en/zmqpoll.poll.php
     */
    public function poll(array &$readable, array &$writable, int $timeout = 1): int
    {
    }

    /**
     * remove.
     * Remove item from poll set.
     *
     * @param mixed $item
     *
     * @return bool
     *
     * @see http://php.net/manual/en/zmqpoll.remove.php
     */
    public function remove(mixed $item): bool
    {
    }
}
