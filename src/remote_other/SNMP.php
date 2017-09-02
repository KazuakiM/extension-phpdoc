<?php

/**
 * SNMP.
 * Represents SNMP session.
 *
 * @property int $max_oids
 * @property int $valueretrieval
 * @property bool $quick_print
 * @property bool $enum_print
 * @property int $oid_output_format
 * @property bool $oid_increasing_check
 * @property int $exceptions_enabled
 * @property array $info
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.snmp.php
 */
class SNMP
{
    const ERRNO_NOERROR = 0;
    const ERRNO_GENERIC = 2;
    const ERRNO_TIMEOUT = 4;
    const ERRNO_ERROR_IN_REPLY = 8;
    const ERRNO_OID_NOT_INCREASING = 16;
    const ERRNO_OID_PARSING_ERROR = 32;
    const ERRNO_MULTIPLE_SET_QUERIES = 64;
    const ERRNO_ANY = 126;
    const VERSION_1 = 0;
    const VERSION_2C = 1;
    const VERSION_2c = 1;
    const VERSION_3 = 3;

    public $max_oids;
    public $valueretrieval;
    public $quick_print;
    public $enum_print;
    public $oid_output_format;
    public $oid_increasing_check;
    public $exceptions_enabled;
    public $info;

    /**
     * __construct.
     * Creates SNMP instance representing session to remote SNMP agent.
     *
     * @param int    $version
     * @param string $hostname
     * @param string $community
     * @param int    $timeout   = 1000000
     * @param int    $retries   = 5
     *
     * @see http://php.net/manual/en/snmp.construct.php
     */
    public function __construct(int $version, string $hostname, string $community, int $timeout = 1000000, int $retries = 5)
    {
    }

    /**
     * close.
     * Close SNMP session.
     *
     * @return bool
     *
     * @see http://php.net/manual/en/snmp.close.php
     */
    public function close(): bool
    {
    }

    /**
     * get.
     * Fetch an SNMP object.
     *
     * @param mixed $object_id
     * @param bool  $preserve_keys = false
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/snmp.get.php
     */
    public function get(mixed $object_id, bool $preserve_keys = false): mixed
    {
    }

    /**
     * getErrno.
     * Get last error code.
     *
     * @return int
     *
     * @see http://php.net/manual/en/snmp.geterrno.php
     */
    public function getErrno(): int
    {
    }

    /**
     * getError.
     * Get last error message.
     *
     * @return string
     *
     * @see http://php.net/manual/en/snmp.geterror.php
     */
    public function getError(): string
    {
    }

    /**
     * getnext.
     * Fetch an SNMP object which follows the given object id.
     *
     * @param mixed $object_id
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/snmp.getnext.php
     */
    public function getnext(mixed $object_id): mixed
    {
    }

    /**
     * set.
     * Set the value of an SNMP object.
     *
     * @param mixed $object_id
     * @param mixed $type
     * @param mixed $value
     *
     * @return bool
     *
     * @see http://php.net/manual/en/snmp.set.php
     */
    public function set(mixed $object_id, mixed $type, mixed $value): bool
    {
    }

    /**
     * setSecurity.
     * Configures security-related SNMPv3 session parameters.
     *
     * @param string $sec_level
     * @param string $auth_protocol   (optional)
     * @param string $auth_passphrase (optional)
     * @param string $priv_protocol   (optional)
     * @param string $priv_passphrase (optional)
     * @param string $contextName     (optional)
     * @param string $contextEngineID (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/snmp.setsecurity.php
     */
    public function setSecurity(string $sec_level, string $auth_protocol, string $auth_passphrase, string $priv_protocol, string $priv_passphrase, string $contextName, string $contextEngineID): bool
    {
    }

    /**
     * walk.
     * Fetch SNMP object subtree.
     *
     * @param string $object_id
     * @param bool   $suffix_as_key   = false
     * @param int    $max_repetitions (optional)
     * @param int    $non_repeaters   (optional)
     *
     * @return array
     *
     * @see http://php.net/manual/en/snmp.walk.php
     */
    public function walk(string $object_id, bool $suffix_as_key, int $max_repetitions, int $non_repeaters): array
    {
    }
}
