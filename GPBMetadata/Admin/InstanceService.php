<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: admin/instance_service.proto

namespace GPBMetadata\Admin;

class InstanceService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common\Instance::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
admin/instance_service.protooat.envmgmt.admingoogle/protobuf/empty.protogoogle/api/annotations.proto"Q
CreateInstanceRequest8
instance (2.oat.envmgmt.common.InstanceRinstance"$
GetInstanceRequest
id (	Rid"a
UpdateInstanceRequest
id (	Rid8
instance (2.oat.envmgmt.common.InstanceRinstance"\'
DeleteInstanceRequest
id (	Rid2�
InstanceServicej
ListInstances.google.protobuf.Empty&.oat.envmgmt.common.InstanceCollection"���/api/v1/instancesw
CreateInstance(.oat.envmgmt.admin.CreateInstanceRequest.google.protobuf.Empty"#���"/api/v1/instances:instancer
GetInstance%.oat.envmgmt.admin.GetInstanceRequest.oat.envmgmt.common.Instance"���/api/v1/instances/{id}|
UpdateInstance(.oat.envmgmt.admin.UpdateInstanceRequest.google.protobuf.Empty"(���"/api/v1/instances/{id}:instancer
DeleteInstance(.oat.envmgmt.admin.DeleteInstanceRequest.google.protobuf.Empty"���*/api/v1/instances/{id}BEZCgithub.com/oat-sa/environment-management/libs/lib-em-go-proto/adminbproto3'
        , true);

        static::$is_initialized = true;
    }
}

