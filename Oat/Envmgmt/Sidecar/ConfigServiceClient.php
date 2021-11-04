<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Oat\Envmgmt\Sidecar;

/**
 */
class ConfigServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Oat\Envmgmt\Sidecar\ListConfigsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListConfigs(\Oat\Envmgmt\Sidecar\ListConfigsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.sidecar.ConfigService/ListConfigs',
        $argument,
        ['\Oat\Envmgmt\Common\ConfigurationCollection', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Sidecar\GetConfigRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetConfig(\Oat\Envmgmt\Sidecar\GetConfigRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.sidecar.ConfigService/GetConfig',
        $argument,
        ['\Oat\Envmgmt\Common\Configuration', 'decode'],
        $metadata, $options);
    }

}
