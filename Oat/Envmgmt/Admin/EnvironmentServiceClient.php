<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Oat\Envmgmt\Admin;

/**
 */
class EnvironmentServiceClient extends \Grpc\BaseStub {

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
    public function ListEnvironments(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.EnvironmentService/ListEnvironments',
        $argument,
        ['\Oat\Envmgmt\Common\EnvironmentCollection', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\CreateEnvironmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateEnvironment(\Oat\Envmgmt\Admin\CreateEnvironmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.EnvironmentService/CreateEnvironment',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\GetEnvironmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetEnvironment(\Oat\Envmgmt\Admin\GetEnvironmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.EnvironmentService/GetEnvironment',
        $argument,
        ['\Oat\Envmgmt\Common\Environment', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\UpdateEnvironmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateEnvironment(\Oat\Envmgmt\Admin\UpdateEnvironmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.EnvironmentService/UpdateEnvironment',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\DeleteEnvironmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteEnvironment(\Oat\Envmgmt\Admin\DeleteEnvironmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.EnvironmentService/DeleteEnvironment',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
