<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Oat\Envmgmt\Admin;

/**
 */
class InstanceServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListInstances(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.InstanceService/ListInstances',
        $argument,
        ['\Oat\Envmgmt\Common\InstanceCollection', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\CreateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateInstance(\Oat\Envmgmt\Admin\CreateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.InstanceService/CreateInstance',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\GetInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInstance(\Oat\Envmgmt\Admin\GetInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.InstanceService/GetInstance',
        $argument,
        ['\Oat\Envmgmt\Common\Instance', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\UpdateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateInstance(\Oat\Envmgmt\Admin\UpdateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.InstanceService/UpdateInstance',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\DeleteInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteInstance(\Oat\Envmgmt\Admin\DeleteInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.InstanceService/DeleteInstance',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
