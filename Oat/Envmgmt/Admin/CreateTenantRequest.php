<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: admin/tenant_service.proto

namespace Oat\Envmgmt\Admin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>oat.envmgmt.admin.CreateTenantRequest</code>
 */
class CreateTenantRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Tenant tenant = 1 [json_name = "tenant"];</code>
     */
    protected $tenant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Oat\Envmgmt\Common\Tenant $tenant
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Admin\TenantService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Tenant tenant = 1 [json_name = "tenant"];</code>
     * @return \Oat\Envmgmt\Common\Tenant|null
     */
    public function getTenant()
    {
        return isset($this->tenant) ? $this->tenant : null;
    }

    public function hasTenant()
    {
        return isset($this->tenant);
    }

    public function clearTenant()
    {
        unset($this->tenant);
    }

    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Tenant tenant = 1 [json_name = "tenant"];</code>
     * @param \Oat\Envmgmt\Common\Tenant $var
     * @return $this
     */
    public function setTenant($var)
    {
        GPBUtil::checkMessage($var, \Oat\Envmgmt\Common\Tenant::class);
        $this->tenant = $var;

        return $this;
    }

}

