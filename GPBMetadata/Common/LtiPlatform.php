<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/lti_platform.proto

namespace GPBMetadata\Common;

class LtiPlatform
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common\OwnerType::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
common/lti_platform.protooat.envmgmt.common"�
LtiPlatform
id (	Rid
name (	Rname
audience (	Raudience6
oidc_authentication_url (	RoidcAuthenticationUrl5
oauth2_access_token_url (	Roauth2AccessTokenUrl
owner_id (	H RownerId�A

owner_type (2.oat.envmgmt.common.OwnerTypeHR	ownerType�B
	_owner_idB
_owner_type"L
LtiPlatformCollection3
data (2.oat.envmgmt.common.LtiPlatformRdataBFZDgithub.com/oat-sa/environment-management/libs/lib-em-go-proto/commonbproto3'
        , true);

        static::$is_initialized = true;
    }
}

