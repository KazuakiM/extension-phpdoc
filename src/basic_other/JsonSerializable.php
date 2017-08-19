<?php

/**
 * JsonSerializable.
 * Objects implementing JsonSerializable can customize their JSON representation when encoded with json_encode().
 *
 * @copyright [Copyright](http://php.net/manual/cc.license.php) by the PHP Documentation Group is licensed under [CC by 3.0 or later](http://creativecommons.org/licenses/by/3.0/).
 *
 * @see http://php.net/manual/en/class.jsonserializable.php
 */
interface JsonSerializable
{
    /**
     * jsonSerialize.
     * Specify data which should be serialized to JSON.
     *
     * @return mixed
     *
     * @see http://php.net/manual/en/jsonserializable.jsonserialize.php
     */
    public function jsonSerialize(): mixed;
}
