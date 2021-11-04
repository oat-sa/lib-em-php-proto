<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Oat\Envmgmt\Sidecar;

/**
 */
class FeatureFlagServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Oat\Envmgmt\Sidecar\ListFeatureFlagsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListFeatureFlags(\Oat\Envmgmt\Sidecar\ListFeatureFlagsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.sidecar.FeatureFlagService/ListFeatureFlags',
        $argument,
        ['\Oat\Envmgmt\Common\FeatureFlagCollection', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Sidecar\GetFeatureFlagRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFeatureFlag(\Oat\Envmgmt\Sidecar\GetFeatureFlagRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.sidecar.FeatureFlagService/GetFeatureFlag',
        $argument,
        ['\Oat\Envmgmt\Common\FeatureFlag', 'decode'],
        $metadata, $options);
    }

}
