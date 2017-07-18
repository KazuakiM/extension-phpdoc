<?php

/**
 * EventSslContext.
 *
 * Represents SSL_CTX structure. Provides methods and properties to configure the SSL context.
 *
 * @property string $local_cert
 * @property string $local_pk
 *
 * @see http://php.net/manual/en/class.eventsslcontext.php
 */
final class EventSslContext
{
    const SSLv2_CLIENT_METHOD = 1;
    const SSLv3_CLIENT_METHOD = 2;
    const SSLv23_CLIENT_METHOD = 3;
    const TLS_CLIENT_METHOD = 4;
    const SSLv2_SERVER_METHOD = 5;
    const SSLv3_SERVER_METHOD = 6;
    const SSLv23_SERVER_METHOD = 7;
    const TLS_SERVER_METHOD = 8;
    const OPT_LOCAL_CERT = 1;
    const OPT_LOCAL_PK = 2;
    const OPT_PASSPHRASE = 3;
    const OPT_CA_FILE = 4;
    const OPT_CA_PATH = 5;
    const OPT_ALLOW_SELF_SIGNED = 6;
    const OPT_VERIFY_PEER = 7;
    const OPT_VERIFY_DEPTH = 8;
    const OPT_CIPHERS = 9;

    public $local_cert;
    public $local_pk;

    /**
     * __construct.
     *
     * Constructs an OpenSSL context for use with Event classes
     *
     * @param string $method
     * @param string $options
     *
     * @see http://php.net/manual/en/eventsslcontext.construct.php
     */
    public function __construct(string $method, string $options)
    {
    }
}
