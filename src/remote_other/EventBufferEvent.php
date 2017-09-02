<?php

/**
 * EventBufferEvent.
 * Represents Libevent's buffer event.
 * Usually an application wants to perform some amount of data buffering in addition to just responding to events. When we want to write data, for example, the usual pattern looks like:
 * Decide that we want to write some data to a connection; put that data in a buffer.
 * Wait for the connection to become writable
 * Write as much of the data as we can
 * Remember how much we wrote, and if we still have more data to write, wait for the connection to become writable again.
 * This buffered I/O pattern is common enough that Libevent provides a generic mechanism for it. A "buffer event" consists of an underlying transport (like a socket), a read buffer, and a write buffer. Instead of regular events, which give callbacks when the underlying transport is ready to be read or written, a buffer event invokes its user-supplied callbacks when it has read or written enough data.
 *
 * @property int $fd
 * @property int $priority
 * @property EventBuffer $input
 * @property EventBuffer $output
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.eventbufferevent.php
 */
final class EventBufferEvent
{
    const READING = 1;
    const WRITING = 2;
    const EOF = 16;
    const ERROR = 32;
    const TIMEOUT = 64;
    const CONNECTED = 128;
    const OPT_CLOSE_ON_FREE = 1;
    const OPT_THREADSAFE = 2;
    const OPT_DEFER_CALLBACKS = 4;
    const OPT_UNLOCK_CALLBACKS = 8;
    const SSL_OPEN = 0;
    const SSL_CONNECTING = 1;
    const SSL_ACCEPTING = 2;

    public $fd;
    public $priority;
    public $input;
    public $output;

    /**
     * __construct.
     * Constructs EventBufferEvent object.
     *
     * @param EventBase $base
     * @param mixed     $socket  = null
     * @param int       $options = 0
     * @param callable  $readcb  = null
     * @param callable  $writecb = null
     * @param callable  $eventcb = null
     *
     * @see http://php.net/manual/en/eventbufferevent.construct.php
     */
    public function __construct(EventBase $base, mixed $socket = null, int $options = 0, callable $readcb = null, callable $writecb = null, callable $eventcb = null)
    {
    }

    /**
     * close.
     * Closes file descriptor associated with the current buffer event.
     *
     * @see http://php.net/manual/en/eventbufferevent.close.php
     */
    public function close(): void
    {
    }

    /**
     * connect.
     * Connect buffer event's file descriptor to given address or UNIX socket.
     *
     * @param string $addr
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbufferevent.connect.php
     */
    public function connect(string $addr): bool
    {
    }

    /**
     * connectHost.
     * Connects to a hostname with optionally asyncronous DNS.
     *
     * @param EventDnsBase $dns_base
     * @param string       $hostname
     * @param int          $port
     * @param int          $family   = AF_UNSPEC
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbufferevent.connecthost.php
     */
    public function connectHost(EventDnsBase $dns_base, string $hostname, int $port, int $family = AF_UNSPEC): bool
    {
    }

    /**
     * createPair.
     * Creates two buffer events connected to each other.
     *
     * @param EventBase $base
     * @param int       $options = 0
     *
     * @return array
     *
     * @see http://php.net/manual/en/eventbufferevent.createpair.php
     */
    public static function createPair(EventBase $base, int $options = 0): array
    {
    }

    /**
     * disable.
     * Disable events read, write, or both on a buffer event.
     *
     * @param int $events
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbufferevent.disable.php
     */
    public function disable(int $events): bool
    {
    }

    /**
     * enable.
     * Enable events read, write, or both on a buffer event.
     *
     * @param int $events
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbufferevent.enable.php
     */
    public function enable(int $events): bool
    {
    }

    /**
     * free.
     * Free a buffer event.
     *
     * @see http://php.net/manual/en/eventbufferevent.free.php
     */
    public function free(): void
    {
    }

    /**
     * getDnsErrorString.
     * Returns string describing the last failed DNS lookup attempt.
     *
     * @return string
     *
     * @see http://php.net/manual/en/eventbufferevent.getdnserrorstring.php
     */
    public function getDnsErrorString(): string
    {
    }

    /**
     * getEnabled.
     * Returns bitmask of events currently enabled on the buffer event.
     *
     * @return int
     *
     * @see http://php.net/manual/en/eventbufferevent.getenabled.php
     */
    public function getEnabled(): int
    {
    }

    /**
     * getInput.
     * Returns underlying input buffer associated with current buffer event.
     *
     * @return EventBuffer
     *
     * @see http://php.net/manual/en/eventbufferevent.getinput.php
     */
    public function getInput(): EventBuffer
    {
    }

    /**
     * getOutput.
     * Returns underlying output buffer associated with current buffer event.
     *
     * @return EventBuffer
     *
     * @see http://php.net/manual/en/eventbufferevent.getoutput.php
     */
    public function getOutput(): EventBuffer
    {
    }

    /**
     * read.
     * Read buffer's data.
     *
     * @param int $size
     *
     * @return string
     *
     * @see http://php.net/manual/en/eventbufferevent.read.php
     */
    public function read(int $size): string
    {
    }

    /**
     * readBuffer.
     * Drains the entire contents of the input buffer and places them into buf.
     *
     * @param EventBuffer $buf
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbufferevent.readbuffer.php
     */
    public function readBuffer(EventBuffer $buf): bool
    {
    }

    /**
     * setCallbacks.
     * Assigns read, write and event(status) callbacks.
     *
     * @param callable $readcb
     * @param callable $writecb
     * @param callable $eventcb
     * @param string   $arg     (optional)
     *
     * @see http://php.net/manual/en/eventbufferevent.setcallbacks.php
     */
    public function setCallbacks(callable $readcb, callable $writecb, callable $eventcb, string $arg): void
    {
    }

    /**
     * setPriority.
     * Assign a priority to a bufferevent.
     *
     * @param int $priority
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbufferevent.setpriority.php
     */
    public function setPriority(int $priority): bool
    {
    }

    /**
     * setTimeouts.
     * Set the read and write timeout for a buffer event.
     *
     * @param float $timeout_read
     * @param float $timeout_write
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbufferevent.settimeouts.php
     */
    public function setTimeouts(float $timeout_read, float $timeout_write): bool
    {
    }

    /**
     * setWatermark.
     * Adjusts read and/or write watermarks.
     *
     * @param int $events
     * @param int $lowmark
     * @param int $highmark
     *
     * @see http://php.net/manual/en/eventbufferevent.setwatermark.php
     */
    public function setWatermark(int $events, int $lowmark, int $highmark): void
    {
    }

    /**
     * sslError.
     * Returns most recent OpenSSL error reported on the buffer event.
     *
     * @return string
     *
     * @see http://php.net/manual/en/eventbufferevent.sslerror.php
     */
    public function sslError(): string
    {
    }

    /**
     * sslFilter.
     * Create a new SSL buffer event to send its data over another buffer event.
     *
     * @param EventBase        $base
     * @param EventBufferEvent $underlying
     * @param EventSslContext  $ctx
     * @param int              $state
     * @param int              $options    = 0
     *
     * @return EventBufferEvent
     *
     * @see http://php.net/manual/en/eventbufferevent.sslfilter.php
     */
    public static function sslFilter(EventBase $base, EventBufferEvent $underlying, EventSslContext $ctx, int $state, int $options = 0): EventBufferEvent
    {
    }

    /**
     * sslGetCipherInfo.
     * Returns a textual description of the cipher.
     *
     * @return string
     *
     * @see http://php.net/manual/en/eventbufferevent.sslgetcipherinfo.php
     */
    public function sslGetCipherInfo(): string
    {
    }

    /**
     * sslGetCipherName.
     * Returns the current cipher name of the SSL connection.
     *
     * @return string
     *
     * @see http://php.net/manual/en/eventbufferevent.sslgetciphername.php
     */
    public function sslGetCipherName(): string
    {
    }

    /**
     * sslGetCipherVersion.
     * Returns version of cipher used by current SSL connection.
     *
     * @return string
     *
     * @see http://php.net/manual/en/eventbufferevent.sslgetcipherversion.php
     */
    public function sslGetCipherVersion(): string
    {
    }

    /**
     * sslGetProtocol.
     * Returns the name of the protocol used for current SSL.
     *
     * @return string
     *
     * @see http://php.net/manual/en/eventbufferevent.sslgetprotocol.php
     */
    public function sslGetProtocol(): string
    {
    }

    /**
     * sslRenegotiate.
     * Tells a bufferevent to begin SSL renegotiation.
     *
     * @see http://php.net/manual/en/eventbufferevent.sslrenegotiate.php
     */
    public function sslRenegotiate(): void
    {
    }

    /**
     * sslSocket.
     * Creates a new SSL buffer event to send its data over an SSL on a socket.
     *
     * @param EventBase       $base
     * @param mixed           $socket
     * @param EventSslContext $ctx
     * @param int             $state
     * @param int             $options (optional)
     *
     * @return EventBufferEvent
     *
     * @see http://php.net/manual/en/eventbufferevent.sslsocket.php
     */
    public static function sslSocket(EventBase $base, mixed $socket, EventSslContext $ctx, int $state, int $options): EventBufferEvent
    {
    }

    /**
     * write.
     * Adds data to a buffer event's output buffer.
     *
     * @param string $data
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbufferevent.write.php
     */
    public function write(string $data): bool
    {
    }

    /**
     * writeBuffer.
     * Adds contents of the entire buffer to a buffer event's output buffer.
     *
     * @param EventBuffer $buf
     *
     * @return bool
     *
     * @see http://php.net/manual/en/eventbufferevent.writebuffer.php
     */
    public function writeBuffer(EventBuffer $buf): bool
    {
    }
}
