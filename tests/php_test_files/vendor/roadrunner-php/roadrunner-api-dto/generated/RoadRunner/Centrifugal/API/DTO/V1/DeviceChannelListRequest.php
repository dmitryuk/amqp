<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>centrifugal.centrifugo.api.DeviceChannelListRequest</code>
 */
class DeviceChannelListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string device_ids = 1;</code>
     */
    private $device_ids;
    /**
     * Generated from protobuf field <code>repeated string device_providers = 2;</code>
     */
    private $device_providers;
    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.DeviceProviderTokens device_provider_tokens = 3;</code>
     */
    private $device_provider_tokens;
    /**
     * Generated from protobuf field <code>repeated string device_platforms = 4;</code>
     */
    private $device_platforms;
    /**
     * Generated from protobuf field <code>repeated string device_users = 5;</code>
     */
    private $device_users;
    /**
     * Generated from protobuf field <code>repeated string channels = 6;</code>
     */
    private $channels;
    /**
     * Generated from protobuf field <code>string since = 8;</code>
     */
    protected $since = '';
    /**
     * Generated from protobuf field <code>int32 limit = 9;</code>
     */
    protected $limit = 0;
    /**
     * Generated from protobuf field <code>bool include_device = 10;</code>
     */
    protected $include_device = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $device_ids
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $device_providers
     *     @type array<\RoadRunner\Centrifugal\API\DTO\V1\DeviceProviderTokens>|\Google\Protobuf\Internal\RepeatedField $device_provider_tokens
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $device_platforms
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $device_users
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $channels
     *     @type string $since
     *     @type int $limit
     *     @type bool $include_device
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Centrifugal\API\DTO\V1\GPBMetadata\Api::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string device_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeviceIds()
    {
        return $this->device_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string device_ids = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeviceIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->device_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string device_providers = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeviceProviders()
    {
        return $this->device_providers;
    }

    /**
     * Generated from protobuf field <code>repeated string device_providers = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeviceProviders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->device_providers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.DeviceProviderTokens device_provider_tokens = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeviceProviderTokens()
    {
        return $this->device_provider_tokens;
    }

    /**
     * Generated from protobuf field <code>repeated .centrifugal.centrifugo.api.DeviceProviderTokens device_provider_tokens = 3;</code>
     * @param array<\RoadRunner\Centrifugal\API\DTO\V1\DeviceProviderTokens>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeviceProviderTokens($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \RoadRunner\Centrifugal\API\DTO\V1\DeviceProviderTokens::class);
        $this->device_provider_tokens = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string device_platforms = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDevicePlatforms()
    {
        return $this->device_platforms;
    }

    /**
     * Generated from protobuf field <code>repeated string device_platforms = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDevicePlatforms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->device_platforms = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string device_users = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDeviceUsers()
    {
        return $this->device_users;
    }

    /**
     * Generated from protobuf field <code>repeated string device_users = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDeviceUsers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->device_users = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string channels = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * Generated from protobuf field <code>repeated string channels = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->channels = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string since = 8;</code>
     * @return string
     */
    public function getSince()
    {
        return $this->since;
    }

    /**
     * Generated from protobuf field <code>string since = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSince($var)
    {
        GPBUtil::checkString($var, True);
        $this->since = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 limit = 9;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Generated from protobuf field <code>int32 limit = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool include_device = 10;</code>
     * @return bool
     */
    public function getIncludeDevice()
    {
        return $this->include_device;
    }

    /**
     * Generated from protobuf field <code>bool include_device = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeDevice($var)
    {
        GPBUtil::checkBool($var);
        $this->include_device = $var;

        return $this;
    }

}

