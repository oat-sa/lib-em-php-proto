<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/lti_tool.proto

namespace Oat\Envmgmt\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>oat.envmgmt.common.LtiTool</code>
 */
class LtiTool extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1 [json_name = "id"];</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name"];</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string audience = 3 [json_name = "audience"];</code>
     */
    protected $audience = '';
    /**
     * Generated from protobuf field <code>string oidc_initiation_url = 4 [json_name = "oidcInitiationUrl"];</code>
     */
    protected $oidc_initiation_url = '';
    /**
     * Generated from protobuf field <code>string launch_url = 5 [json_name = "launchUrl"];</code>
     */
    protected $launch_url = '';
    /**
     * Generated from protobuf field <code>string deep_linking_url = 6 [json_name = "deepLinkingUrl"];</code>
     */
    protected $deep_linking_url = '';
    /**
     * Generated from protobuf field <code>string owner_id = 7 [json_name = "ownerId"];</code>
     */
    protected $owner_id = null;
    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.OwnerType owner_type = 8 [json_name = "ownerType"];</code>
     */
    protected $owner_type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $name
     *     @type string $audience
     *     @type string $oidc_initiation_url
     *     @type string $launch_url
     *     @type string $deep_linking_url
     *     @type string $owner_id
     *     @type int $owner_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common\LtiTool::initOnce();
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
     * Generated from protobuf field <code>string name = 2 [json_name = "name"];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2 [json_name = "name"];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string audience = 3 [json_name = "audience"];</code>
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Generated from protobuf field <code>string audience = 3 [json_name = "audience"];</code>
     * @param string $var
     * @return $this
     */
    public function setAudience($var)
    {
        GPBUtil::checkString($var, True);
        $this->audience = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string oidc_initiation_url = 4 [json_name = "oidcInitiationUrl"];</code>
     * @return string
     */
    public function getOidcInitiationUrl()
    {
        return $this->oidc_initiation_url;
    }

    /**
     * Generated from protobuf field <code>string oidc_initiation_url = 4 [json_name = "oidcInitiationUrl"];</code>
     * @param string $var
     * @return $this
     */
    public function setOidcInitiationUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->oidc_initiation_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string launch_url = 5 [json_name = "launchUrl"];</code>
     * @return string
     */
    public function getLaunchUrl()
    {
        return $this->launch_url;
    }

    /**
     * Generated from protobuf field <code>string launch_url = 5 [json_name = "launchUrl"];</code>
     * @param string $var
     * @return $this
     */
    public function setLaunchUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->launch_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string deep_linking_url = 6 [json_name = "deepLinkingUrl"];</code>
     * @return string
     */
    public function getDeepLinkingUrl()
    {
        return $this->deep_linking_url;
    }

    /**
     * Generated from protobuf field <code>string deep_linking_url = 6 [json_name = "deepLinkingUrl"];</code>
     * @param string $var
     * @return $this
     */
    public function setDeepLinkingUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->deep_linking_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string owner_id = 7 [json_name = "ownerId"];</code>
     * @return string
     */
    public function getOwnerId()
    {
        return isset($this->owner_id) ? $this->owner_id : '';
    }

    public function hasOwnerId()
    {
        return isset($this->owner_id);
    }

    public function clearOwnerId()
    {
        unset($this->owner_id);
    }

    /**
     * Generated from protobuf field <code>string owner_id = 7 [json_name = "ownerId"];</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.OwnerType owner_type = 8 [json_name = "ownerType"];</code>
     * @return int
     */
    public function getOwnerType()
    {
        return isset($this->owner_type) ? $this->owner_type : 0;
    }

    public function hasOwnerType()
    {
        return isset($this->owner_type);
    }

    public function clearOwnerType()
    {
        unset($this->owner_type);
    }

    /**
     * Generated from protobuf field <code>.oat.envmgmt.common.OwnerType owner_type = 8 [json_name = "ownerType"];</code>
     * @param int $var
     * @return $this
     */
    public function setOwnerType($var)
    {
        GPBUtil::checkEnum($var, \Oat\Envmgmt\Common\OwnerType::class);
        $this->owner_type = $var;

        return $this;
    }

}

