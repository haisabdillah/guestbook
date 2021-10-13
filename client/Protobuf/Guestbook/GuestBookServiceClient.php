<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Protobuf\Guestbook;

/**
 */
class GuestBookServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Protobuf\Guestbook\PBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function List(\Protobuf\Guestbook\PBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/protobuf.guestbook.GuestBookService/List',
        $argument,
        ['\Protobuf\Guestbook\GuestBookList', 'decode'],
        $metadata, $options);
    }

}
