<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: admin/instance_service.proto

namespace Oat\Envmgmt\Admin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>oat.envmgmt.admin.CreateInstanceRequest</code>
 */
class CreateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Instance instance = 1 [json_name = "instance"];</code>
     */
    protected $instance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Oat\Envmgmt\Common\Instance $instance
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Admin\InstanceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Instance instance = 1 [json_name = "instance"];</code>
     * @return \Oat\Envmgmt\Common\Instance|null
     */
    public function getInstance()
    {
        return isset($this->instance) ? $this->instance : null;
    }

    public function hasInstance()
    {
        return isset($this->instance);
    }

    public function clearInstance()
    {
        unset($this->instance);
    }

    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Instance instance = 1 [json_name = "instance"];</code>
     * @param \Oat\Envmgmt\Common\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Oat\Envmgmt\Common\Instance::class);
        $this->instance = $var;

        return $this;
    }

}

