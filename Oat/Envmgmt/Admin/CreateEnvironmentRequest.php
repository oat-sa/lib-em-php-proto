<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: admin/environment_service.proto

namespace Oat\Envmgmt\Admin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>oat.envmgmt.admin.CreateEnvironmentRequest</code>
 */
class CreateEnvironmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Environment environment = 1 [json_name = "environment"];</code>
     */
    protected $environment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Oat\Envmgmt\Common\Environment $environment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Admin\EnvironmentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Environment environment = 1 [json_name = "environment"];</code>
     * @return \Oat\Envmgmt\Common\Environment|null
     */
    public function getEnvironment()
    {
        return isset($this->environment) ? $this->environment : null;
    }

    public function hasEnvironment()
    {
        return isset($this->environment);
    }

    public function clearEnvironment()
    {
        unset($this->environment);
    }

    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Environment environment = 1 [json_name = "environment"];</code>
     * @param \Oat\Envmgmt\Common\Environment $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkMessage($var, \Oat\Envmgmt\Common\Environment::class);
        $this->environment = $var;

        return $this;
    }

}

