<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: admin/account_service.proto

namespace Oat\Envmgmt\Admin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>oat.envmgmt.admin.CreateAccountRequest</code>
 */
class CreateAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Account account = 1 [json_name = "account"];</code>
     */
    protected $account = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Oat\Envmgmt\Common\Account $account
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Admin\AccountService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Account account = 1 [json_name = "account"];</code>
     * @return \Oat\Envmgmt\Common\Account|null
     */
    public function getAccount()
    {
        return isset($this->account) ? $this->account : null;
    }

    public function hasAccount()
    {
        return isset($this->account);
    }

    public function clearAccount()
    {
        unset($this->account);
    }

    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Account account = 1 [json_name = "account"];</code>
     * @param \Oat\Envmgmt\Common\Account $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkMessage($var, \Oat\Envmgmt\Common\Account::class);
        $this->account = $var;

        return $this;
    }

}

