<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Oat\Envmgmt\Sidecar;

/**
 */
class LtiServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Oat\Envmgmt\Sidecar\GetRegistrationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRegistration(\Oat\Envmgmt\Sidecar\GetRegistrationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.sidecar.LtiService/GetRegistration',
        $argument,
        ['\Oat\Envmgmt\Common\LtiRegistration', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Sidecar\ListRegistrationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListRegistrations(\Oat\Envmgmt\Sidecar\ListRegistrationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.sidecar.LtiService/ListRegistrations',
        $argument,
        ['\Oat\Envmgmt\Common\LtiRegistrationCollection', 'decode'],
        $metadata, $options);
    }

}
