<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Oat\Envmgmt\Sidecar;

/**
 */
class Oauth2ClientServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Oat\Envmgmt\Sidecar\GetClientRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetClient(\Oat\Envmgmt\Sidecar\GetClientRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.sidecar.Oauth2ClientService/GetClient',
        $argument,
        ['\Oat\Envmgmt\Common\Oauth2Client', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Sidecar\GetClientUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetClientUser(\Oat\Envmgmt\Sidecar\GetClientUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.sidecar.Oauth2ClientService/GetClientUser',
        $argument,
        ['\Oat\Envmgmt\Common\Oauth2User', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Sidecar\ValidateUserPasswordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ValidateUserPassword(\Oat\Envmgmt\Sidecar\ValidateUserPasswordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.sidecar.Oauth2ClientService/ValidateUserPassword',
        $argument,
        ['\Oat\Envmgmt\Common\ValidationResult', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Sidecar\ValidateClientSecretRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ValidateClientSecret(\Oat\Envmgmt\Sidecar\ValidateClientSecretRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.sidecar.Oauth2ClientService/ValidateClientSecret',
        $argument,
        ['\Oat\Envmgmt\Common\ValidationResult', 'decode'],
        $metadata, $options);
    }

}
