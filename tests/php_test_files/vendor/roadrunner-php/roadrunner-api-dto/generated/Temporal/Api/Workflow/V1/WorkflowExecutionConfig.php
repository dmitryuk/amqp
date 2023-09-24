<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/workflow/v1/message.proto

namespace Temporal\Api\Workflow\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflow.v1.WorkflowExecutionConfig</code>
 */
class WorkflowExecutionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 1;</code>
     */
    protected $task_queue = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     */
    protected $workflow_execution_timeout = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 3 [(.gogoproto.stdduration) = true];</code>
     */
    protected $workflow_run_timeout = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Duration default_workflow_task_timeout = 4 [(.gogoproto.stdduration) = true];</code>
     */
    protected $default_workflow_task_timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Taskqueue\V1\TaskQueue $task_queue
     *     @type \Google\Protobuf\Duration $workflow_execution_timeout
     *     @type \Google\Protobuf\Duration $workflow_run_timeout
     *     @type \Google\Protobuf\Duration $default_workflow_task_timeout
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflow\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 1;</code>
     * @return \Temporal\Api\Taskqueue\V1\TaskQueue|null
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    public function hasTaskQueue()
    {
        return isset($this->task_queue);
    }

    public function clearTaskQueue()
    {
        unset($this->task_queue);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 1;</code>
     * @param \Temporal\Api\Taskqueue\V1\TaskQueue $var
     * @return $this
     */
    public function setTaskQueue($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\TaskQueue::class);
        $this->task_queue = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWorkflowExecutionTimeout()
    {
        return $this->workflow_execution_timeout;
    }

    public function hasWorkflowExecutionTimeout()
    {
        return isset($this->workflow_execution_timeout);
    }

    public function clearWorkflowExecutionTimeout()
    {
        unset($this->workflow_execution_timeout);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 2 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWorkflowExecutionTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->workflow_execution_timeout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 3 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWorkflowRunTimeout()
    {
        return $this->workflow_run_timeout;
    }

    public function hasWorkflowRunTimeout()
    {
        return isset($this->workflow_run_timeout);
    }

    public function clearWorkflowRunTimeout()
    {
        unset($this->workflow_run_timeout);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 3 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWorkflowRunTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->workflow_run_timeout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration default_workflow_task_timeout = 4 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDefaultWorkflowTaskTimeout()
    {
        return $this->default_workflow_task_timeout;
    }

    public function hasDefaultWorkflowTaskTimeout()
    {
        return isset($this->default_workflow_task_timeout);
    }

    public function clearDefaultWorkflowTaskTimeout()
    {
        unset($this->default_workflow_task_timeout);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Duration default_workflow_task_timeout = 4 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDefaultWorkflowTaskTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->default_workflow_task_timeout = $var;

        return $this;
    }

}

