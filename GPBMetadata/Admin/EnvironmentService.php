<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: admin/environment_service.proto

namespace GPBMetadata\Admin;

class EnvironmentService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common\Environment::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
ق	
admin/environment_service.protooat.envmgmt.admingoogle/protobuf/empty.protogoogle/api/annotations.proto"]
CreateEnvironmentRequestA
environment (2.oat.envmgmt.common.EnvironmentRenvironment"\'
GetEnvironmentRequest
id (	Rid"4
"ListEnvironmentFeatureFlagsRequest
id (	Rid"/
ListEnvironmentConfigsRequest
id (	Rid"m
UpdateEnvironmentRequest
id (	RidA
environment (2.oat.envmgmt.common.EnvironmentRenvironment"*
DeleteEnvironmentRequest
id (	Rid2
EnvironmentServices
ListEnvironments.google.protobuf.Empty).oat.envmgmt.common.EnvironmentCollection"سل/api/v1/environments
CreateEnvironment+.oat.envmgmt.admin.CreateEnvironmentRequest.google.protobuf.Empty")سل#"/api/v1/environments:environment~
GetEnvironment(.oat.envmgmt.admin.GetEnvironmentRequest.oat.envmgmt.common.Environment"!سل/api/v1/environments/{id}
UpdateEnvironment+.oat.envmgmt.admin.UpdateEnvironmentRequest.google.protobuf.Empty".سل(/api/v1/environments/{id}:environment{
DeleteEnvironment+.oat.envmgmt.admin.DeleteEnvironmentRequest.google.protobuf.Empty"!سل*/api/v1/environments/{id}BEZCgithub.com/oat-sa/environment-management/libs/lib-em-go-proto/adminbproto3'
        , true);

        static::$is_initialized = true;
    }
}

