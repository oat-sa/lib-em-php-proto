<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Oat\Envmgmt\Admin;

/**
 */
class AccountServiceClient extends \Grpc\BaseStub {

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
    public function ListAccounts(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.AccountService/ListAccounts',
        $argument,
        ['\Oat\Envmgmt\Common\AccountCollection', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\CreateAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAccount(\Oat\Envmgmt\Admin\CreateAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.AccountService/CreateAccount',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\GetAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAccount(\Oat\Envmgmt\Admin\GetAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.AccountService/GetAccount',
        $argument,
        ['\Oat\Envmgmt\Common\Account', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\UpdateAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateAccount(\Oat\Envmgmt\Admin\UpdateAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.AccountService/UpdateAccount',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Oat\Envmgmt\Admin\DeleteAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAccount(\Oat\Envmgmt\Admin\DeleteAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/oat.envmgmt.admin.AccountService/DeleteAccount',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
