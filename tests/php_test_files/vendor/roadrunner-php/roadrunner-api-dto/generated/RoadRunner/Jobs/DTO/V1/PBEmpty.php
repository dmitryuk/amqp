<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: jobs/v1/jobs.proto

namespace RoadRunner\Jobs\DTO\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * some endpoints receives nothing
 * all endpoints returns nothing, except error
 *
 * Generated from protobuf message <code>jobs.v1.Empty</code>
 */
class PBEmpty extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \RoadRunner\Jobs\DTO\V1\GPBMetadata\Jobs::initOnce();
        parent::__construct($data);
    }

}

