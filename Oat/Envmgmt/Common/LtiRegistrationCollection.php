<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/lti_registration.proto

namespace Oat\Envmgmt\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>oat.envmgmt.common.LtiRegistrationCollection</code>
 */
class LtiRegistrationCollection extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .oat.envmgmt.common.LtiRegistration data = 1 [json_name = "data"];</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Oat\Envmgmt\Common\LtiRegistration[]|\Google\Protobuf\Internal\RepeatedField $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common\LtiRegistration::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .oat.envmgmt.common.LtiRegistration data = 1 [json_name = "data"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>repeated .oat.envmgmt.common.LtiRegistration data = 1 [json_name = "data"];</code>
     * @param \Oat\Envmgmt\Common\LtiRegistration[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Oat\Envmgmt\Common\LtiRegistration::class);
        $this->data = $arr;

        return $this;
    }

}

