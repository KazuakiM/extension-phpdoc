<?php

/**
 * Yaf_Response_Abstract.
 *
 * @property $_header
 * @property $_body
 * @property $_sendheader
 *
 * @author Kazuaki MABUCHI
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.yaf-response-abstract.php
 */
class Yaf_Response_Abstract
{
    const DEFAULT_BODY = 'content';

    protected $_header;
    protected $_body;
    protected $_sendheader;

    /**
     * __construct.
     * The __construct purpose.
     *
     * @see http://php.net/manual/en/yaf-response-abstract.construct.php
     */
    public function __construct()
    {
    }

    /**
     * __destruct.
     * The __destruct purpose.
     *
     * @see http://php.net/manual/en/yaf-response-abstract.destruct.php
     */
    public function __destruct()
    {
    }

    /**
     * __clone.
     * The __clone purpose.
     *
     * @see http://php.net/manual/en/yaf-response-abstract.clone.php
     */
    private function __clone()
    {
    }

    /**
     * __toString.
     * The __toString purpose.
     *
     * @return string
     *
     * @see http://php.net/manual/en/yaf-response-abstract.tostring.php
     */
    public function __toString(): string
    {
    }

    /**
     * appendBody.
     * append to body.
     *
     * @param string $content
     * @param string $key     (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-response-abstract.appendbody.php
     */
    public function appendBody(string $content, string $key): bool
    {
    }

    /**
     * clearBody.
     * The clearBody purpose.
     *
     * @param string $key (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-response-abstract.clearbody.php
     */
    public function clearBody(string $key): bool
    {
    }

    /**
     * clearHeaders.
     * The clearHeaders purpose.
     *
     * @see http://php.net/manual/en/yaf-response-abstract.clearheaders.php
     */
    public function clearHeaders(): void
    {
    }

    /**
     * getBody.
     * Retrieve a exists content.
     *
     * @param string $key (optional)
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/yaf-response-abstract.getbody.php
     */
    public function getBody(string $key): mixed
    {
    }

    /**
     * getHeader.
     * The getHeader purpose.
     *
     * @see http://php.net/manual/en/yaf-response-abstract.getheader.php
     */
    public function getHeader(): void
    {
    }

    /**
     * prependBody.
     * The prependBody purpose.
     *
     * @param string $content
     * @param string $key     (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-response-abstract.prependbody.php
     */
    public function prependBody(string $content, string $key): bool
    {
    }

    /**
     * response.
     * send response.
     *
     * @see http://php.net/manual/en/yaf-response-abstract.response.php
     */
    public function response(): void
    {
    }

    /**
     * setBody.
     * Set content to response.
     *
     * @param string $content
     * @param string $key     (optional)
     *
     * @return bool
     *
     * @see http://php.net/manual/en/yaf-response-abstract.setbody.php
     */
    public function setBody(string $content, string $key): bool
    {
    }

    /**
     * setHeader.
     * The setHeader purpose.
     *
     * @see http://php.net/manual/en/yaf-response-abstract.setheader.php
     */
    public function setHeader(): void
    {
    }

    /**
     * setRedirect.
     * The setRedirect purpose.
     *
     * @see http://php.net/manual/en/yaf-response-abstract.setredirect.php
     */
    public function setRedirect(): void
    {
    }

    /**
     * setAllHeaders.
     * The setAllHeaders purpose.
     *
     * @see http://php.net/manual/en/yaf-response-abstract.setallheaders.php
     */
    protected function setAllHeaders(): void
    {
    }
}
