<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sidecar/lti_service.proto

namespace GPBMetadata\Sidecar;

class LtiService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common\LtiRegistration::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
sidecar/lti_service.protooat.envmgmt.sidecargoogle/api/annotations.proto"�
ListRegistrationsRequest 
	client_id (	H RclientId�,
platform_issuer (	HRplatformIssuer�$
tool_issuer (	HR
toolIssuer�B

_client_idB
_platform_issuerB
_tool_issuer"A
GetRegistrationRequest\'
registration_id (	RregistrationId2�

LtiService�
GetRegistration+.oat.envmgmt.sidecar.GetRegistrationRequest#.oat.envmgmt.common.LtiRegistration"3���-+/api/v1/lti-registrations/{registration_id}�
ListRegistrations-.oat.envmgmt.sidecar.ListRegistrationsRequest-.oat.envmgmt.common.LtiRegistrationCollection"!���/api/v1/lti-registrationsBGZEgithub.com/oat-sa/environment-management/libs/lib-em-go-proto/sidecarbproto3'
        , true);

        static::$is_initialized = true;
    }
}

