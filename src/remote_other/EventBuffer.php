<?php

/**
 * EventBuffer.
 * EventBuffer represents Libevent's "evbuffer", an utility functionality for buffered I/O.
 * Event buffers are meant to be generally useful for doing the "buffer" part of buffered network I/O.
 *
 * @property int $length
 * @property int $contiguous_space
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.eventbuffer.php
 */
class EventBuffer
{
    const EOL_ANY = 0;
    const EOL_CRLF = 1;
    const EOL_CRLF_STRICT = 2;
    const EOL_LF = 3;
    const PTR_SET = 0;
    const PTR_ADD = 1;

    public $length;
    public $contiguous_space;

    /**
     * __construct.
     * Constructs EventBuffer object.
     *
     * @see http://php.net/manual/en/eventbuffer.construct.php
     */
    public function __construct()
    {
    }

    /**
     * add.
     * Append data to the end of an event buffer.
     *
     * @param string $data
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbuffer.add.php
     */
    public function add(string $data): bool
    {
    }

    /**
     * addBuffer.
     * Move all data from a buffer provided to the current instance of EventBuffer.
     *
     * @param EventBuffer $buf
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbuffer.addbuffer.php
     */
    public function addBuffer(EventBuffer $buf): bool
    {
    }

    /**
     * appendFrom.
     * Moves the specified number of bytes from a source buffer to the end of the current buffer.
     *
     * @param EventBuffer $buf
     * @param int         $len
     *
     * @return int
     *
     * @see http://php.net/manual/en/eventbuffer.appendfrom.php
     */
    public function appendFrom(EventBuffer $buf, int $len): int
    {
    }

    /**
     * copyout.
     * Copies out specified number of bytes from the front of the buffer.
     *
     * @param string &$data
     * @param int    $max_bytes
     *
     * @return int
     *
     * @see http://php.net/manual/en/eventbuffer.copyout.php
     */
    public function copyout(string &$data, int $max_bytes): int
    {
    }

    /**
     * drain.
     * Removes specified number of bytes from the front of the buffer without copying it anywhere.
     *
     * @param int $len
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbuffer.drain.php
     */
    public function drain(int $len): bool
    {
    }

    /**
     * enableLocking.
     *
     * @see http://php.net/manual/en/eventbuffer.enablelocking.php
     */
    public function enableLocking(): void
    {
    }

    /**
     * expand.
     * Reserves space in buffer.
     *
     * @param int $len
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbuffer.expand.php
     */
    public function expand(int $len): bool
    {
    }

    /**
     * freeze.
     * Prevent calls that modify an event buffer from succeeding.
     *
     * @param bool $at_front
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbuffer.freeze.php
     */
    public function freeze(bool $at_front): bool
    {
    }

    /**
     * lock.
     * Acquires a lock on buffer.
     *
     * @see http://php.net/manual/en/eventbuffer.lock.php
     */
    public function lock(): void
    {
    }

    /**
     * prepend.
     * Prepend data to the front of the buffer.
     *
     * @param string $data
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbuffer.prepend.php
     */
    public function prepend(string $data): bool
    {
    }

    /**
     * prependBuffer.
     * Moves all data from source buffer to the front of current buffer.
     *
     * @param EventBuffer $buf
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbuffer.prependbuffer.php
     */
    public function prependBuffer(EventBuffer $buf): bool
    {
    }

    /**
     * pullup.
     * Linearizes data within buffer and returns it's contents as a string.
     *
     * @param int $size
     *
     * @return string
     *
     * @see http://php.net/manual/en/eventbuffer.pullup.php
     */
    public function pullup(int $size): string
    {
    }

    /**
     * read.
     * Read data from an evbuffer and drain the bytes read.
     *
     * @param int $max_bytes
     *
     * @return string
     *
     * @see int $max_bytes
     */
    public function read(int $max_bytes): string
    {
    }

    /**
     * readFrom.
     * Read data from a file onto the end of the buffer.
     *
     * @param mixed $fd
     * @param int   $howmuch
     *
     * @return int
     *
     * @see http://php.net/manual/en/eventbuffer.readfrom.php
     */
    public function readFrom(mixed $fd, int $howmuch): int
    {
    }

    /**
     * readLine.
     * Extracts a line from the front of the buffer.
     *
     * @param int $eol_style
     *
     * @return string
     *
     * @see http://php.net/manual/en/eventbuffer.readline.php
     */
    public function readLine(int $eol_style): string
    {
    }

    /**
     * search.
     * Scans the buffer for an occurrence of a string.
     *
     * @param string $what
     * @param int    $start = 1
     * @param int    $end   = 1
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/eventbuffer.search.php
     */
    public function search(string $what, int $start = 1, int $end = 1): mixed
    {
    }

    /**
     * searchEol.
     * Scans the buffer for an occurrence of an end of line.
     *
     * @param int $start     = 1
     * @param int $eol_style = EOL_ANY
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/eventbuffer.searcheol.php
     */
    public function searchEol(int $start = 1, int $eol_style = EOL_ANY): mixed
    {
    }

    /**
     * substr.
     * Substracts a portion of the buffer data.
     *
     * @param int $start
     * @param int $length (optional)
     *
     * @return string
     *
     * @see http://php.net/manual/en/eventbuffer.substr.php
     */
    public function substr(int $start, int $length): string
    {
    }

    /**
     * unfreeze.
     * Re-enable calls that modify an event buffer.
     *
     * @param bool $at_front
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbuffer.unfreeze.php
     */
    public function unfreeze(bool $at_front): bool
    {
    }

    /**
     * unlock.
     * Releases lock acquired by EventBuffer::lock.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbuffer.unlock.php
     */
    public function unlock(): bool
    {
    }

    /**
     * write.
     * Write contents of the buffer to a file or socket.
     *
     * @param mixed $fd
     * @param int   $howmuch (optional)
     *
     * @return int
     *
     * @see http://php.net/manual/en/eventbuffer.write.php
     */
    public function write(mixed $fd, int $howmuch): int
    {
    }
}
