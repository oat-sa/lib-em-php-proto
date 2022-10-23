<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sidecar/oauth2_client_service.proto

namespace Oat\Envmgmt\Sidecar;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>oat.envmgmt.sidecar.ValidateClientSecretRequest</code>
 */
class ValidateClientSecretRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Oauth2ClientSecret oauth2ClientSecret = 1 [json_name = "oauth2ClientSecret"];</code>
     */
    protected $oauth2ClientSecret = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Oat\Envmgmt\Common\Oauth2ClientSecret $oauth2ClientSecret
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sidecar\Oauth2ClientService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Oauth2ClientSecret oauth2ClientSecret = 1 [json_name = "oauth2ClientSecret"];</code>
     * @return \Oat\Envmgmt\Common\Oauth2ClientSecret|null
     */
    public function getOauth2ClientSecret()
    {
        return isset($this->oauth2ClientSecret) ? $this->oauth2ClientSecret : null;
    }

    public function hasOauth2ClientSecret()
    {
        return isset($this->oauth2ClientSecret);
    }

    public function clearOauth2ClientSecret()
    {
        unset($this->oauth2ClientSecret);
    }

    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.Oauth2ClientSecret oauth2ClientSecret = 1 [json_name = "oauth2ClientSecret"];</code>
     * @param \Oat\Envmgmt\Common\Oauth2ClientSecret $var
     * @return $this
     */
    public function setOauth2ClientSecret($var)
    {
        GPBUtil::checkMessage($var, \Oat\Envmgmt\Common\Oauth2ClientSecret::class);
        $this->oauth2ClientSecret = $var;

        return $this;
    }

}
