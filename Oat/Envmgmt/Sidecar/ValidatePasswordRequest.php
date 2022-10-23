<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sidecar/oauth2_client_service.proto

namespace Oat\Envmgmt\Sidecar;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>oat.envmgmt.sidecar.ValidatePasswordRequest</code>
 */
class ValidatePasswordRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string password = 1 [json_name = "password"];</code>
     */
    protected $password = '';
    /**
     * Generated from protobuf field <code>string clientId = 2 [json_name = "clientId"];</code>
     */
    protected $clientId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $password
     *     @type string $clientId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sidecar\Oauth2ClientService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string password = 1 [json_name = "password"];</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 1 [json_name = "password"];</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientId = 2 [json_name = "clientId"];</code>
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Generated from protobuf field <code>string clientId = 2 [json_name = "clientId"];</code>
     * @param string $var
     * @return $this
     */
    public function setClientId($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientId = $var;

        return $this;
    }

}
