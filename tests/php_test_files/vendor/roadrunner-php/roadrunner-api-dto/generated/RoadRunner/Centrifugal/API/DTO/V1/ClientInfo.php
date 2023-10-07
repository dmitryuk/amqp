<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.ClientInfo</code>
 */
class ClientInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string user = 1;</code>
     */
    protected $user = '';
    /**
     * Generated from protobuf field <code>string client = 2;</code>
     */
    protected $client = '';
    /**
     * Generated from protobuf field <code>bytes conn_info = 3;</code>
     */
    protected $conn_info = '';
    /**
     * Generated from protobuf field <code>bytes chan_info = 4;</code>
     */
    protected $chan_info = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $user
     *     @type string $client
     *     @type string $conn_info
     *     @type string $chan_info
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string user = 1;</code>
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>string user = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string client = 2;</code>
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Generated from protobuf field <code>string client = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClient($var)
    {
        GPBUtil::checkString($var, True);
        $this->client = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes conn_info = 3;</code>
     * @return string
     */
    public function getConnInfo()
    {
        return $this->conn_info;
    }

    /**
     * Generated from protobuf field <code>bytes conn_info = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setConnInfo($var)
    {
        GPBUtil::checkString($var, False);
        $this->conn_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes chan_info = 4;</code>
     * @return string
     */
    public function getChanInfo()
    {
        return $this->chan_info;
    }

    /**
     * Generated from protobuf field <code>bytes chan_info = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setChanInfo($var)
    {
        GPBUtil::checkString($var, False);
        $this->chan_info = $var;

        return $this;
    }

}

