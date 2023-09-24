<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/filter/v1/message.proto

namespace Temporal\Api\Filter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.filter.v1.StartTimeFilter</code>
 */
class StartTimeFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_time = 1 [(.gogoproto.stdtime) = true];</code>
     */
    protected $earliest_time = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_time = 2 [(.gogoproto.stdtime) = true];</code>
     */
    protected $latest_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $earliest_time
     *     @type \Google\Protobuf\Timestamp $latest_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Filter\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_time = 1 [(.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEarliestTime()
    {
        return $this->earliest_time;
    }

    public function hasEarliestTime()
    {
        return isset($this->earliest_time);
    }

    public function clearEarliestTime()
    {
        unset($this->earliest_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_time = 1 [(.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEarliestTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->earliest_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_time = 2 [(.gogoproto.stdtime) = true];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLatestTime()
    {
        return $this->latest_time;
    }

    public function hasLatestTime()
    {
        return isset($this->latest_time);
    }

    public function clearLatestTime()
    {
        unset($this->latest_time);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_time = 2 [(.gogoproto.stdtime) = true];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLatestTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->latest_time = $var;

        return $this;
    }

}

