<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/tenant.proto

namespace Oat\Envmgmt\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>oat.envmgmt.common.TenantMeta</code>
 */
class TenantMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string account_id = 2 [json_name = "accountId"];</code>
     */
    protected $account_id = '';
    /**
     * Generated from protobuf field <code>string instance_id = 3 [json_name = "instanceId"];</code>
     */
    protected $instance_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $account_id
     *     @type string $instance_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common\Tenant::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string account_id = 2 [json_name = "accountId"];</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Generated from protobuf field <code>string account_id = 2 [json_name = "accountId"];</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string instance_id = 3 [json_name = "instanceId"];</code>
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * Generated from protobuf field <code>string instance_id = 3 [json_name = "instanceId"];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;

        return $this;
    }

}

