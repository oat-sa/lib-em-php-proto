<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Oat\Envmgmt\Admin;

/**
 */
class TenantServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Oat\Envmgmt\Admin\ListTenantsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListTenants(\Oat\Envmgmt\Admin\ListTenantsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.TenantService/ListTenants',
        $argument,
        ['\Oat\Envmgmt\Common\TenantCollection', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\CreateTenantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateTenant(\Oat\Envmgmt\Admin\CreateTenantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.TenantService/CreateTenant',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\GetTenantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTenant(\Oat\Envmgmt\Admin\GetTenantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.TenantService/GetTenant',
        $argument,
        ['\Oat\Envmgmt\Common\Tenant', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\UpdateTenantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateTenant(\Oat\Envmgmt\Admin\UpdateTenantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.TenantService/UpdateTenant',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\DeleteTenantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteTenant(\Oat\Envmgmt\Admin\DeleteTenantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.TenantService/DeleteTenant',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
