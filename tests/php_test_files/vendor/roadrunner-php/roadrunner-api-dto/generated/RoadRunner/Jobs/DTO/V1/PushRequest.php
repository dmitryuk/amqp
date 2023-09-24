<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: jobs/v1/jobs.proto

namespace RoadRunner\Jobs\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * single job request (jobs.Push RPC endpoint) -> Push(j *jobsProto.PushRequest, _ *jobsProto.Empty)
 * response `message Empty`
 *
 * Generated from protobuf message <code>jobs.v1.PushRequest</code>
 */
class PushRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.jobs.v1.Job job = 1;</code>
     */
    protected $job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \RoadRunner\Jobs\DTO\V1\Job $job
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Jobs\DTO\V1\GPBMetadata\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.jobs.v1.Job job = 1;</code>
     * @return \RoadRunner\Jobs\DTO\V1\Job|null
     */
    public function getJob()
    {
        return $this->job;
    }

    public function hasJob()
    {
        return isset($this->job);
    }

    public function clearJob()
    {
        unset($this->job);
    }

    /**
     * Generated from protobuf field <code>.jobs.v1.Job job = 1;</code>
     * @param \RoadRunner\Jobs\DTO\V1\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \RoadRunner\Jobs\DTO\V1\Job::class);
        $this->job = $var;

        return $this;
    }

}

