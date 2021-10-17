<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Protobuf\Greet;

/**
 * The greeting service definition.
 */
class GreeterClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Sends a greeting
     * @param \Protobuf\Greet\HelloRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SayHello(\Protobuf\Greet\HelloRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.greet.Greeter/SayHello',
        $argument,
        ['\Protobuf\Greet\HelloReply', 'decode'],
        $metadata, $options);
    }

}
